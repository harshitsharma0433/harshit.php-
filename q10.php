<?php
function truncate_title ($title){
    if (strlen($title)<=50){
        retun $title;
    }else {
        retun substr ($title,0,47)..."...";
    }
}
// example usage 
$title= "this is a very article title that needs to be truncated";
$truncated_title truncate_title($title);
echo "original title: $title";
echo <br>
echo "truncate title: $truncated_title";
?>