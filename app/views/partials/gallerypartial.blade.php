<div class="gallery-partial-wrap">
@foreach ($gallerys as $gallery)
<div class="gallery-partial-img"><img src="../../images/gallery/{{ $gallery->img }}" width="150" height="100"></div>
<div>{{ $gallery->txt }}</div>
@endforeach
</div>
