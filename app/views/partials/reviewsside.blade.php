<!-- sidebar nav -->
<nav id="sidebar-nav">
<div class="reviews-menu-wrap">
	<div class="reviews-menu-header"><i class="fa fa-calendar"></i>&nbsp;Menu</div>
	<a href="{{ URL::action('reviews.category', array('Restaurants') ) }}">
	<div class="reviews-menu-cat-wrap">
	<div class="reviews-menu-cat-icon"><i class="fa fa-chevron-right"></i></div>
	<div class="reviews-menu-cat-menu">Restaurants</div>
	</div></a>

	<a href="{{ URL::action('reviews.category', array('Bars') ) }}">
	<div class="reviews-menu-cat-wrap">
	<div class="reviews-menu-cat-icon"><i class="fa fa-chevron-right"></i></div>
	<div class="reviews-menu-cat-menu">Bars</div>
	</div></a>

	<a href="{{ URL::action('reviews.category', array('Clubs') ) }}">
	<div class="reviews-menu-cat-wrap">
	<div class="reviews-menu-cat-icon"><i class="fa fa-chevron-right"></i></div>
	<div class="reviews-menu-cat-menu">Clubs</div>
	</div></a>
</div>

<div class="reviews-latest-header">Latest Reviews</div>
@foreach($reviews as $review)
<div class="reviews-latest-wrap">
<div class="reviews-latest-left"><img src="../../images/reviews/{{ $review->img }}" width="60" height="60"></div>
<div class="reviews-latest-right">
<div class="reviews-latest-lat-header"> {{ $review->header }} </div>
<div class="reviews-latest-date"><i class="fa fa-calendar"></i>&nbsp;{{ $review->date }}</div>
<div class="reviews-latest-content">{{ Str::limit($review->content, 50) }}</div>
<a href="{{ URL::route('reviews.id', [$review->rev_id]) }}"><div class="reviews-latest-readmore">Read More</div></a>
</div>
</div>
@endforeach


</nav>