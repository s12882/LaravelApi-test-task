<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Message;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Notification;
use App\Http\Requests\SendRequest;
use MessageNotification;

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
            Notification::send(Admin::all(), new MessageNotification($request->get('message')));

            return response()->json(['success' => true, 'text' => $message->text], 201);
        }

        return response()->json(['success' => false], 200);
    }
}
