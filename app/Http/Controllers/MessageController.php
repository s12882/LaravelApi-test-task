<?php

namespace App\Http\Controllers;

use App\Mail\NewMessageNotification;
use App\Models\Message;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\SendRequest;

class MessageController
{
    /**
     * @param SendRequest $request
     * @return JsonResponse
     */
    public function send(SendRequest $request)
    {
        $message = new Message([
                'text' => $request->get('message'),
                'ip' => $request->ip()
            ]
        );

        if ($message->save()) {
            Mail::to(config('mail.to.address'))
                ->send(new NewMessageNotification($message));

            return response()->json([
                'success' => true, 'text' => $message->text
            ], 201);
        }

        return response()->json(['success' => false], 200);
    }
}
