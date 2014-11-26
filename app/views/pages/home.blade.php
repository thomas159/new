@extends('layouts.HomeTwoColumn')

@section('content')



<!-- content -->

<	
        @foreach ($posts as $post)
         
         {{$post->$title}}

        @endforeach

@stop


