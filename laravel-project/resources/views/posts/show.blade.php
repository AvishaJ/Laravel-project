@extends('layouts.app')
@section('content')
    
<form method="post",action="/posts">
    <h1><a href="{{route('post.edit'),$post->id}}"></a>{{$post->title}}</h1>
    {{ csrf_field() }}
</form>
@endsection


