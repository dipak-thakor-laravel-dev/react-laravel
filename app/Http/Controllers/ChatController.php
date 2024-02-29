<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\MessageSent;
use App\Models\Message;

class ChatController extends Controller
{
    public function store(Request $request)
    {
        $message = Message::create([
            'user_id' => auth()->user()->id,
            'message' => $request->input('message'),
        ]);

        event(new MessageSent($message));

        return response()->json($message);
    }
}
