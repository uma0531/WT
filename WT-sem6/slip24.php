<?php
// Create the root element and the document
$dom = new DomDocument("1.0");
$root = $dom->createElement("students");
$dom->appendChild($root);

// Add students to the document
$student1 = $dom->createElement("student");
$rollNo1 = $dom->createElement("roll_no", "101");
$name1 = $dom->createElement("name", "John");
$address1 = $dom->createElement("address", "123 Main St, New York");
$college1 = $dom->createElement("college", "New York University");
$course1 = $dom->createElement("course", "Computer Science");
$student1->appendChild($rollNo1);
$student1->appendChild($name1);
$student1->appendChild($address1);
$student1->appendChild($college1);
$student1->appendChild($course1);
$root->appendChild($student1);

$student2 = $dom->createElement("student");
$rollNo2 = $dom->createElement("roll_no", "102");
$name2 = $dom->createElement("name", "Jane");
$address2 = $dom->createElement("address", "456 Oak St, San Francisco");
$college2 = $dom->createElement("college", "University of California, San Francisco");
$course2 = $dom->createElement("course", "Biology");
$student2->appendChild($rollNo2);
$student2->appendChild($name2);
$student2->appendChild($address2);
$student2->appendChild($college2);
$student2->appendChild($course2);
$root->appendChild($student2);


// Print the matching students in tabular format
echo "<table>";
echo "<tr><th>Roll No</th><th>Name</th><th>Address</th><th>College</th><th>Course</th></tr>";
foreach ($matchingStudents as $student) {
    $rollNoNode = $student->getElementsByTagName("roll_no")->item(0);
    $nameNode = $student->getElementsByTagName("name")->item(0);
    $addressNode = $student->getElementsByTagName("address")->item(0);
    $collegeNode = $student->getElementsByTagName("college")->item(0);
    $courseNode = $student->getElementsByTagName("course")->item(0);
    $rollNo = $rollNoNode->nodeValue;
    $name = $nameNode->nodeValue;
    $address = $addressNode->nodeValue;
    $college = $collegeNode->nodeValue;
    $course = $courseNode->nodeValue;
    echo "<tr><td>$rollNo</td><td>$name</td><td>$address</td><td>$college</td><td>$course</td></tr>";
}
echo "</table>";
?>
