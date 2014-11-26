
 <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

{{ HTML::style('css/styles.css') }}
{{ HTML::style('css/home.css') }}
{{ HTML::style('css/links.css') }}
{{ HTML::style('css/blog.css') }}
{{ HTML::style('css/reviews.css') }}
{{ HTML::style('css/gallery.css') }}
{{ HTML::style('css/contact.css') }}


<script type="text/javascript" src="script/gallery.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
    <script type="text/javascript" src="script/jquery.stickyPanel.min.js"></script>

    <script type="text/javascript">
        $().ready(function () {
            var stickyPanelOptions = {
                topPadding: 0,
                afterDetachCSSClass: "BoxGlow_Grey2",
                savePanelSpace: true,
                onDetached: function (detachedPanel, spacerPanel) {
                    detachedPanel.html(detachedPanel.html() );
                    spacerPanel.css("background-color", "#1000ff");
                },
                onReAttached: function (detachedPanel) {
                    detachedPanel.html(detachedPanel.html());
                },
                parentSelector: null
            };

            // multiple panel example (you could also use the class ".stickypanel" to select both)
            $("#nav-wrap").stickyPanel(stickyPanelOptions);

            
        });
    </script>

<script type="text/javascript">
$(function(){
if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
  var ww = ( $(window).width() < window.screen.width ) ? $(window).width() : window.screen.width; //get proper width
  var mw = 480; // min width of site
  var ratio =  ww / mw; //calculate ratio
  if( ww < mw){ //smaller than minimum size
   $('#Viewport').attr('content', 'initial-scale=' + ratio + ', maximum-scale=' + ratio + ', minimum-scale=' + ratio + ', user-scalable=yes, width=' + ww);
  }else{ //regular size
   $('#Viewport').attr('content', 'initial-scale=1.0, maximum-scale=2, minimum-scale=1.0, user-scalable=yes, width=' + ww);
  }
}
});
</script>
   
  

<title>Super Cool Layouts</title>

