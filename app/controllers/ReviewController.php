<?php 
class ReviewController extends BaseController {

public function ShowAll() {
    $reviews = Review::orderBy('rev_id')->paginate(2);

    return View::make('pages.reviews')
               ->with('reviews', $reviews);
}        
public function ShowById($rev_id) {
    $ids = Review::where('rev_id', $rev_id)
                 ->get();
    return View::make('pages.reviews')
               ->with('ids', $ids);
}
public function ShowByCategory($category) {
    $categorys = Review::where('category', $category)->orderBy('rev_id')->paginate(3);
  
    return View::make('pages.reviews')
               ->with('categorys', $categorys);
               
}
}