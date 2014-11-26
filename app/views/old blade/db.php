<?php $results = DB::select('select * from blog ', array(1));

if(DB::connection()->getDatabaseName())
{
   echo "conncted sucessfully to database ".DB::connection()->getDatabaseName();
   }
?>