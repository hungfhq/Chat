<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Laravel Chat</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <style>
    .list-group {
      overflow-y: scroll;
      height: 100px;
    }
  </style>
</head>
<body>
  <div class="container" id="app">
    <div class="row">
      <div class=" col-4">
        <li class="list-group-item active">Chat room</li>
        <ul class="list-group" v-chat-scroll>
          <messages v-for="value in chat.message" :key="value.index" color='success'>
            @{{value}}
          </messages>
        </ul>
        <input type="text" class="form-control" placeholder="type..."
        v-model='message' @keyup.enter='send'>
      </div>
    </div>
  </div>
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>