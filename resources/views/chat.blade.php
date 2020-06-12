@extends('layouts.app')

@section('content')
  <div class="container" id="app">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-8 offset-sm-1 offset-4">
        <li class="list-group-item active">Chat room</li>
        <span class="badge badge-pill badge-primary">@{{typing}}</span>
        <ul class="list-group" id="listGroup" v-chat-scroll>
          <messages 
          v-for="value, index in chat.message" 
          :key=value.index 
          :color=chat.color[index]
          :time=chat.time[index]
          :user=chat.user[index]>
            @{{value}}
          </messages>
        </ul>
        <input type="text" class="form-control" placeholder="type..."
        v-model='message' @keyup.enter='send'>
      </div>
    </div>
  </div>
@endsection