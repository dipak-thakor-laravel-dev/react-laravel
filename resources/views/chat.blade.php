<!-- resources/views/chat.blade.php -->

<!DOCTYPE html>
<html>

<head>
    <title>Real-time Chat</title>
    <!-- Your stylesheets, JavaScript libraries, etc. -->
</head>

<body>
    <div id="app">
        <div class="chat-window">
            <!-- Chat messages display -->
            {{-- <ul>
                @foreach ($messages as $message)
                    <li>{{ $message->content }}</li>
                @endforeach
            </ul> --}}
        </div>

        <form method="POST" action="{{ route('send.message') }}">
            @csrf
            <input type="text" name="message" placeholder="Type your message...">
            <button type="submit">Send</button>
        </form>
    </div>

    <!-- Your Vue.js or WebSocket integration scripts -->
</body>

</html>
