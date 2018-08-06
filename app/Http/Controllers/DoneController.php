<?php

namespace App\Http\Controllers;

use App\Done;
use App\Project;
use App\SlackMessage;
use App\SlackMessageAttachment;
use Illuminate\Http\Request;

class DoneController extends Controller
{
    private function decodeSlackEncoding($string)
    {
        $decodedUsers = preg_replace('/<(@)[A-Z0-9]+\|([a-z]+)>/', '$1$2', $string);
        $decodedChannels = preg_replace('/<(#)[A-Z0-9]+\|([a-z]+)>/', '$1$2', $decodedUsers);
        $decodedUrls = preg_replace('/<((https?:\/\/)?([\w\-])+\.{1}([a-zA-Z]{2,63})([\/\w-]*)*\/?\??([^#\n\r]*)?#?([^\n\r]*))>/', '<a href="$1">$1</a>', $decodedChannels);

        $output = $decodedUrls;
        return $output;
    }

    private function prepareForDatabase(Request $request, $project)
    {
        $text = $this->decodeSlackEncoding($request->text);
        $text = $this->replaceChannelNamesWithProjectLinks($text);

        return $data = [
            'team_id' => $request->team_id,
            'team_domain' => $request->team_domain,
            'channel_id' => $request->channel_id,
            'channel_name' => $request->channel_name,
            'user_id' => $request->user_id,
            'user_name' => $request->user_name,
            'command' => $request->command,
            'text' => $text,
            'response_url' => $request->response_url,
            'trigger_id' => $request->trigger_id,
            'project_id' => $project->id
        ];
    }

    private function store(Request $request, $project)
    {
        $data = $this->prepareForDatabase($request, $project);
        return Done::create($data);
    }

    private function findProject($string)
    {
        preg_match('/#([a-z0-9-]+)/', $string, $matches);

        if (count($matches)) {
            $match = $matches[1];
            if ($project = Project::where('slug', $match)->first()) {
                return $project;
            }
        }

        return null;
    }

    private function replaceChannelNamesWithProjectLinks($string)
    {
        $project = $this->findProject($string);
        if (isset($project)) {
            $url = route('redirect.projects.single', ['slug' => $project->slug]);
            $output = preg_replace('/(#[a-z0-9-]+)/', "<a href=\"$url\">$1</a>" , $string);

            return $output;
        }

        return $string;
    }

    private function prepareMessage(Request $request, $project)
    {
        $message = new SlackMessage;
        
        $message->text = "✅ <@$request->user_id> completed";
        isset($project->slug) ? $message->text .= " in #{$project->slug}:" : $message->text .= ':';

        $message->attachments = [
            0 => new SlackMessageAttachment
        ];

        $attachment = $message->attachments[0];

        $attachment->color = 'good';
        $attachment->text = $request->text;

        return $message;
    }

    private function sendSlackNotification($message,
        $webhook = 'https://hooks.slack.com/services/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')
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->post($webhook, [
            'body' => json_encode($message),
            'headers' => [
                'Content-Type' => 'application/json',
                ]
            ]);

        $responseBody = $response->getBody()->getContents();
        $statusCode = $response->getStatusCode();

        return response('Sending Slack notification...', $statusCode);
    }

    public function handle(Request $request)
    {
        $this->store($request);

        return $this->sendSlackNotification($request);
    }

    public function handleTest(Request $request)
    {
        $project = $this->findProject($request->text);
        if (!isset($project)) {
            $project = new Project;
        }
        $message = $this->prepareMessage($request, $project);

        $this->store($request, $project);
        
        return $this->sendSlackNotification($message,
        'https://hooks.slack.com/services/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');
    }

    public function test()
    {
        $string = $this->decodeSlackEncoding('<@U7QT1TXBK|dave>, <#C7QT1TXBK|corkfoundation>, <https://sourceacademy.co?query=string&key=value>');
        return $this->replaceChannelNamesWithProjectLinks($string);
    }
}
        