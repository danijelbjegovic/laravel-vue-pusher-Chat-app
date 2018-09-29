<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Title of the document</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .list-group{
            overflow-y:scroll;
            height: 200px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row" id="app">
            <div class="offset-4 col-4">
                <li class="list-group-item active">Chat room</li>
                <ul class="list-group">
                    <message
                    v-for="value in chat.message"
                    :key=value.index
                    >
                    @{{ value }}
                    </message>
                </ul>
                <input type="text" class="form-control" placeholder="Type your message" v-model="message" @keyup.enter="send">

            </div>

        </div>
    </div>



    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>