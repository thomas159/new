@extends('layouts.ReviewsTwoColumn')
 
@section('content')
@if(isset($reviews)) 
@foreach ($reviews as $review)
<div class="reviews-wrap">
<div class="reviews-left"><img src="images/reviews/{{ $review->img }}"></div>
<div class="reviews-right">
<div class="reviews-top-wrap">
<div class="reviews-header"> {{ $review->header }}</div>
<a href="{{ URL::route('reviews.category', [$review->category]) }}"><div class="reviews-category">{{ $review->category }}</div>
</div>

<div class="reviews-date"><i class="fa fa-calendar"></i>&nbsp;{{ $review->date }}</div>

<div class="reviews-content">{{ Str::limit($review->content, 200) }}</div>
<a href="{{ URL::route('reviews.id', [$review->rev_id]) }}"><div class="reviews-readmore">Read More</div></a>
</div>
</div>
@endforeach
@elseif(isset($ids)) 
	@foreach ($ids as $id)
	<div class="reviews-wrap">
<div class="reviews-left"><img src="../../images/reviews/{{ $id->img }}"></div>
<div class="reviews-right">
<div class="reviews-header"> {{ $id->header }}</div>
<div class="reviews-date"><i class="fa fa-calendar"></i>&nbsp;{{ $id->date }}</div>
<div class="reviews-content">{{ Str::limit($id->content, 200) }}</div>

</div>
</div>
@endforeach



@elseif(isset($categorys)) 
	@foreach ($categorys as $category)
	<div class="reviews-wrap">
<div class="reviews-left"><img src="../../images/reviews/{{ $category->img }}"></div>
<div class="reviews-right">
<div class="reviews-top-wrap">
<div class="reviews-header"> {{ $category->header }}</div>
<a href="{{ URL::route('reviews.category', [$category->category]) }}"><div class="reviews-category">{{ $category->category }}</div>
</div>
<div class="reviews-date"><i class="fa fa-calendar"></i>&nbsp;{{ $category->date }}</div>
<div class="reviews-content">{{ Str::limit($category->content, 200) }}</div>
<a href="{{ URL::route('reviews.id', [$category->rev_id]) }}"><div class="reviews-readmore">Read More</div></a>
</div>
</div>
	@endforeach
	@endif

@if(isset($reviews)) 
 <?php echo $reviews->links(); ?>
 @elseif(isset($ids))
   @include('partials.gallerypartial') 
@endif



@stop