@extends('layouts.app')
@section('content')
    
<ul>
<form method="post",action="/posts">
@foreach ($posts as $post)
    <li><a href="{{'posts.show',$post->id}}">{{$post->title}}</a></li>
</form>

@endforeach



</ul>









@endsection