<!-- sidebar nav -->
<nav id="sidebar-nav">


	<div class="blog-latest-wrap">
	<div class="blog-latest-header"><i class="fa fa-calendar"></i>&nbsp;Latest Posts</div>


<div class="blog-latest-content">

@foreach($blogs as $blog)
{{ $blog->header }}
@endforeach

</div>			
	</div>
	<div class="blog-archive-wrap">
	<div class="blog-archive-header"><i class="fa fa-calendar"></i>&nbsp;Archive</div>			
	<a href="{{ URL::action('blog.month', array('December') ) }}"><div class="blog-archive-months"><i class="fa fa-chevron-right"></i>&nbsp;December</div></a>
	<a href="{{ URL::action('blog.month', array('November') ) }}"><div class="blog-archive-months"><i class="fa fa-chevron-right"></i>&nbsp;November</div></a>	
	<a href="{{ URL::action('blog.month', array('October') ) }}"><div class="blog-archive-months"><i class="fa fa-chevron-right"></i>&nbsp;October</div></a>	
	</div>
</nav>