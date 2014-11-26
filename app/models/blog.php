<?php
 
class Blog extends Eloquent 
{
    // does nothing more than 
    // specify the table in the database
    protected $table = 'blogs';
   

    public function map()
    {
        return $this->belongsTo('map');
    }
?>