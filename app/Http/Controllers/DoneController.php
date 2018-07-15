<?php

namespace App\Http\Controllers;

use App\Done;
use Illuminate\Http\Request;

class DoneController extends Controller
{
    public function store(Request $request)
    {
        Done::create($request->all());

        $this->sendSlackNotification($request);
    }

    public function sendSlackNotification(Request $request)
    {
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
        $response = $client->post('https://hooks.slack.com/services/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', [
            'body' => json_encode($message),
            'headers' => [
                'Content-Type' => 'application/json',
                ]
                ]);

        $responseBody = $response->getBody()->getContents();
        $statusCode = $response->getStatusCode();

        return response($responseBody, $statusCode);
    }
}
        