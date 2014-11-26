<?php
class HomeController extends BaseController {
 
  protected $layout = 'layouts.default';
 



    public function ShowAll() {
   
{

        // hard-coding autologin of User #2,
        // so we don't have to implement Auth for the scope of this demo

        // get recent posts, and eager load texts
        $posts = Post::with('map')->orderBy('created_at', 'desc')->get();

        $this->layout->content = View::make('pages.home')->with('posts', $posts);
    }

}
}

