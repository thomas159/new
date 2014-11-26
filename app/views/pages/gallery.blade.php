@extends('layouts.default')
@section('content')
<div class="gallery-wrap">
<div class="gallery-center-wrap">
@foreach ($gallerys as $gallery)
<div class="gallery-img"><img src="images/gallery/{{ $gallery->img }}" width="160" height="120"></div>

 @endforeach
</div></div>


@stop