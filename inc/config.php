<?php 
   
   $conn = mysqli_connect("http://35.199.2.20", 'root', '@ftermathDB6947', "aftermath");
   if(! $conn )
   {
     die('Could not connect: ' . mysql_error());
   }

?>