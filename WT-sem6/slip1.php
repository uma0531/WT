<?php
session_start();

if(isset($_SESSION['page_views']))
 {
    $_SESSION['page_views']++;                     // If set, increment the counter
} 
else
 {
    $_SESSION['page_views'] = 1;                   // If not set, initialize it to 1
}


echo "You have visited this page " . $_SESSION['page_views'] . " times.";
?>