<?php
// Load the "Movie.xml" file using the DOMDocument parser
$doc = new DOMDocument();
$doc->load('Movie.xml');

// Get all the "MovieInfo" elements in the file
$movies = $doc->getElementsByTagName('MovieInfo');

// Loop through each "MovieInfo" element and print the MovieTitle and ActorName
foreach ($movies as $movie) 
{
  // Get the MovieTitle element and print its text content
  $title = $movie->getElementsByTagName('MovieTitle')->item(0)->nodeValue;
  echo 'MovieTitle: ' . $title . '<br>';

  // Get the ActorName element and print its text content
  $actor = $movie->getElementsByTagName('ActorName')->item(0)->nodeValue;
  echo 'ActorName: ' . $actor . '<br><br>';
}
?>
