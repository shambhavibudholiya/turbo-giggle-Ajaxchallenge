<?php
$connection = mysqli_connect("localhost","root","","form"); // Establishing Connection with Server..
//Fetching Values from URL
if(isset($_POST['submit'])){
$name2=$_POST['name1'];
$email2=$_POST['email1'];
$password2=$_POST['password1'];
$contact2=$_POST['contact1'];
//Insert query
$sql = "insert into form_element(name, email, password, contact) values ('$name2', '$email2', '$password2','$contact2')";
$result=mysqli_query($connection,$sql);
if ($result){
    echo "form submitted successfully.";
    }
else
echo "failed";
}
?>
<html>
<head>
<title>Submit Form Using AJAX and jQuery</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<link href="style1.css" rel="stylesheet">
<script src="script.js"></script>
   <!-- This link adds sweetalert to your page. -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>
<body>
<div id="mainform">
<h2>Submit Form Using AJAX and jQuery</h2> <!-- Required div Starts Here -->
<div id="form">
<h3>Fill Your Information !</h3>
<div>
<label>Name :</label>
<input id="name" type="text">
<label>Email :</label>
<input id="email" type="text" >
<label>Password :</label>
<input id="password" type="password" >                
<label>Contact No :</label>
<input id="contact" type="text">
<input id="submit" type="button" value="Submit">
</div>
</div>
</div>
</body>
</html>
