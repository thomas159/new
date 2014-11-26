<?php

 class Post extends Eloquent {
 

    protected $table = 'posts';

  
    public function map()
    {
        return $this->belongsTo('Map');
    }
 
}
?>