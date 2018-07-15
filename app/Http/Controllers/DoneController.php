<?php

namespace App\Http\Controllers;

use App\Done;
use Illuminate\Http\Request;

class DoneController extends Controller
{
    public function store(Request $request)
    {
        Done::create([
            'team_id' => $request->team_id,
            'team_domain' => $request->team_domain,
            'channel_id' => $request->channel_id,
            'channel_name' => $request->channel_name,
            'user_id' => $request->user_id,
            'user_name' => $request->user_name,
            'command' => $request->command,
            'text' => $request->text,
            'response_url' => $request->response_url,
            'trigger_id' => $request->trigger_id
        ]);

        $this->sendSlackNotification($request);
    }

    public function sendSlackNotification(Request $request)
    {
        $webhook = 'https://hooks.slack.com/services/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';
        $message = (object) [
            'text' => "✅ <@$request->user_id> completed:",
            'attachments' => [
                0 => (object) [
                    'color' => 'good',
                    'text' => $request->text,
                ],
            ],
        ];

        $client = new \GuzzleHttp\Client();
        $response = $client->post($webhook, [
            'body' => json_encode($message),
            'headers' => [
                'Content-Type' => 'application/json',
                ]
            ]);

        $responseBody = $response->getBody()->getContents();
        $statusCode = $response->getStatusCode();

        return response('', $statusCode);
    }
}
        