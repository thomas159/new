<?php 
class BlogController extends BaseController {

public function ShowAll() {
   
}


  $blogs = Post::with('text')->orderBy('created_at', 'desc')->get();

        $this->layout->content = View::make('home')->with('posts', $posts);


}













public function ShowById($id) {
    $ids = Blog::where('id', $id)
                 ->get();
    return View::make('pages.blog')
               ->with('ids', $ids);
}
public function ShowByMonth($month) {
    $months = Blog::where('month', $month)->orderBy('id')->paginate(3);
  
    return View::make('pages.blog')
               ->with('months', $months);
               

}
}