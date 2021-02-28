<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("tutorial", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$name = $_POST['username'];
$email = $_POST['password'];

if($username !=''||$password !=''){
//Insert Query of SQL
$query = mysql_query("insert into students(student_name, student_email, student_contact, student_address) values ('uername', '$password)");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysql_close($connection); // Closing Connection with Server
?>