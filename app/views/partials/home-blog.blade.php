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