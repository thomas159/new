@extends('layouts.BlogTwoColumn')
 
@section('content')

@if(isset($blogs)) 
   @foreach ($blogs as $blog)
  	<div class="blog-outer-wrap">
      <div class="blog-left">
       <div class="blog-img"><img src="images/blog/{{ $blog->img}}" width="280" height="180"></div>
      </div>

     <div class="blog-right">
   	  <div class="blog-header">{{ $blog->header }}</div>
   		<div class="blog-text">{{ Str::limit($blog->content, 200) }}</div>
   	  <a href="{{ URL::route('blog.id', [$blog->id]) }}"><div class="blog-readmore">Read More</div></a>
   	  <div class="blog-readmore-bottom-border"></div>
     </div>
		</div>
	@endforeach
@elseif(isset($ids)) 
	@foreach ($ids as $id)
  		<div class="blog-outer-wrap">
		<div class="blog-img"><img src="../images/blog/{{ $id->img}}"> </div>
   		<div class="blog-header">{{ $id->header }}</div>
   		<div class="blog-text">{{ $id->content }}</div>
   		<div class="blog-readmore-bottom-border"></div>
		</div>
	@endforeach
@elseif(isset($months)) 
	@foreach ($months as $month)
		<div class="blog-outer-wrap">
		<div class="blog-img"><img src="../../images/blog/{{$month->img}}"> </div>
   		<div class="blog-header">{{$month->header}}</div>
   		<div class="blog-text">{{$month->content}}</div>
   	    <a href="{{ URL::route('month.id', [$month->id]) }}"><div class="blog-readmore">Read More</div></a>
   	    <div class="blog-readmore-bottom-border"></div>
		</div>
	@endforeach
@endif

@if(isset($blogs)) 
 <?php echo $blogs->links(); ?>
@elseif(isset($months)) 
 <?php echo $months->links(); ?>
@endif
@stop

