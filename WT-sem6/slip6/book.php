<?php
$books = simplexml_load_file('book.xml');
foreach ($books->book as $book)
 {
  // Display the attributes of the book element
  echo 'Book ID: ' . $book['id'] . '<br>';
  echo 'Category: ' . $book['category'] . '<br>';

  // Display the elements of the book element
  echo 'Title: ' . $book->title . '<br>';
  echo 'Author: ' . $book->author . '<br>';
  echo 'Price: ' . $book->price . '<br>';
  echo 'Year: ' . $book->year . '<br><br>';
}
?>


