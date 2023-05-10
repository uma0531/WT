<?php
// Define student data
$students = array(
  array('rollno' => '101', 'name' => 'John', 'address' => '123 Main St', 'college' => 'ABC College', 'course' => 'Computer Science'),
  array('rollno' => '102', 'name' => 'Jane', 'address' => '456 Elm St', 'college' => 'XYZ College', 'course' => 'Mathematics'),
  array('rollno' => '103', 'name' => 'Bob', 'address' => '789 Oak St', 'college' => 'DEF College', 'course' => 'Business Administration'),
  array('rollno' => '104', 'name' => 'Susan', 'address' => '567 Pine St', 'college' => 'GHI College', 'course' => 'Biology'),
  array('rollno' => '105', 'name' => 'David', 'address' => '234 Maple St', 'college' => 'JKL College', 'course' => 'Chemistry')
);

// Create XML file
$xml = new SimpleXMLElement('<students/>');
foreach ($students as $student) {
  $stu = $xml->addChild('student');
  $stu->addChild('rollno', $student['rollno']);
  $stu->addChild('name', $student['name']);
  $stu->addChild('address', $student['address']);
  $stu->addChild('college', $student['college']);
  $stu->addChild('course', $student['course']);
}
$xml->asXML('student.xml');

// Read course input from user
$course=$_POST['course'];
$xml=simplexml_load_file('student.xml');
echo "<table>";
echo "<tr><th>Roll No</th><th>Name</th><th>Address</th><th>College</th></tr>";
foreach ($xml->student as $student) {
  if ((string)$student->course == $course) {
    echo "<tr><td>".$student->rollno."</td><td>".$student->name."</td><td>".$student->address."</td><td>".$student->college."</td></tr>";
  }
}
echo "</table>";
?>
