	@foreach($reviews as $review)

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