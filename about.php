<!DOCTYPE html>
<html>

<head>
<title>Secret Files</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
<meta name="description" content="Biggest top secret going to be revealed soon">
<link rel="icon" type="image/png" href="images/icon.png">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
<style>
body, html {height: 100%}
body,h1,h2,h3,h4,h5,h6 {font-family: "Amatic SC", sans-serif}
.menu {display: none}
.bgimg {
    background-repeat: no-repeat;
    background-size: cover;
    background: url("images/title.jpg") center 30% no-repeat;
    min-height: 120%;
}
.container{position:relative}
.grayscale{-webkit-filter:grayscale(50%);filter:grayscale(50%)}
.middle{position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%)}
.center{display:inline-block;width:auto;text-align:center;}
.button{border:none;display:inline-block;outline:0;padding:6px 16px;vertical-align:middle;overflow:hidden;text-decoration:none;color:#fff;background-color:#000;text-align:center;cursor:pointer;white-space:nowrap;color:#000;background-color:#f1f1f1;padding:8px 16px;}
.button:hover{color:#000;background-color:#ccc;}
.greyscale{-webkit-filter:grayscale(75%);filter:grayscale(75%);}
.input{display:block;padding:8px 16px;border:none;outline:none;width:100%;border-bottom:1px solid #808080;padding-top:16px;padding-bottom:16px;border:1px solid #ccc;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 10px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
	text-align:center;
    border: 1px solid #888;
    width: 80%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 16px;
    background-color: red;
    color: white;
}

.modal-body {padding: 2px 16px;font-size:30px;padding-bottom:20px}

.design{
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: red;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

#snackbar1,#snackbar2,#snackbar3 {
    visibility: hidden;
    min-width: 250px;
    margin-left: -125px;
    background-color: red;
    color: #fff;
    text-align: center;
    border-radius: 2px;
    padding: 16px;
    position: fixed;
    z-index: 1;
    left: 50%;
    bottom: 30px;
    font-size: 20px;
}

#snackbar1.show,#snackbar2.show,#snackbar3.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
    from {bottom: 0; opacity: 0;} 
    to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
    from {bottom: 30px; opacity: 1;} 
    to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
    from {bottom: 30px; opacity: 1;}
    to {bottom: 0; opacity: 0;}
}
</style>
</head>

<body style="margin:0">
 
<header class="bgimg container grayscale">
  <div style="position:absolute;left:0;bottom:0;padding:8px 16px;">
    <span style="font-size:24px;background-color:#000;color:#fff;display:inline-block;padding-left:8px;padding-right:8px;text-align:center;">An Anonymous Group</span>
  </div>
  <div class="middle center">
    <span style="font-size:100px;color:red;"><b>AlienGame Inc.</b></span>
    <p><a id="myBtn" href="#myBtn" class="button" style="font-size:36px;">Subscribe</a></p>
  </div>
</header>

<div id="snackbar1">You have been subscribed...</div>
<div id="snackbar2">Message sent</div>
<div id="snackbar3">Oops, you have already subscribed</div>

<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h1>Subscribe Now</h1>
    </div>
    <div class="modal-body">
      <p style="text-align:center;"><b>Fill your details below</b></p>
	  <form id="sub" style="text-align:center;" action="<?php $_PHP_SELF ?>" method="POST">
    <label for="fname">First Name</label><br>
    <input style="width:250px" type="text" class="design" placeholder="Your name.." required name="firstname"><br>
    <label for="lname">Last Name</label><br>
    <input style="width:250px" type="text" class="design" placeholder="Your last name" required name="lastname"><br>
	<label for="country">Gender</label><br>
    <select class="design" name="gender">
      <option value="male">Male</option>
      <option value="female">Female</option>
      <option value="others">Others</option>
    </select><br>
	<label for="lname">Email ID</label><br>
    <input style="width:250px" type="text" class="design" placeholder="Your Email" required name="email"><br>
	<label for="lname">Phone Number</label><br>
    <input style="width:250px" type="text" class="design" placeholder="Optional" name="phoneno"><br>
    </form>
	<input type="submit" value="Submit" form="sub">
	</div>
  </div>
</div>

<div style="padding:0.01em 16px;padding-top:64px;padding-bottom:64px;color:#fff;background-color:#f44336;font-size:24px;" class="greyscale">
  <div style="max-width:980px;margin:auto;">
    <h1 style="margin-bottom:64px;display:inline-block;width:auto;text-align:center;font-size:64px;">About</h1>
    <p style="font-size:30px">AlienGame Inc. is company that design and develops software applications and Internet of Things products. It is run by an anonymous group which include students, workers, unemployees,... </p>
    <p style="font-size:30px"><strong>So Beware</strong>, it can be the person next to you but trust us we won't let you down.<img src="images/ano.jpg" style="width:150px;border-radius:50%;float:right;" alt="Chef"></p>
    <p style="color:red;font-size:35px">Founder of AlienGame Inc.</p>
  </div>
</div>

<div style="max-width:980px;margin:auto;text-align:center">
    <div style="text-align:left;"><h1 style="margin-bottom:64px;display:inline-block;width:auto;font-size:64px;">Contact</h1></div>
    <p style="font-size:30px">For any more details contact us on E-mail: aliengame.inc@gmail.com  or</p>
    <p style="font-size:36px;">Just send us a message</p>
    <form action="<?php $_PHP_SELF ?>" method="POST">
      <p><input class="input" type="text" placeholder="Name" required name="name"></p>
	  <p><input class="input" type="email" placeholder="Email" required name="email"></p>
      <p><input class="input" type="text" placeholder="Subject" required name="subject"></p>
      <p><input style="height:80px"class="input" type="text" placeholder="Message" required name="message"></p>
      <p><button class="button" style="background-color:black;color:white;display:block;width:100%;" type="submit">SEND MESSAGE</button></p>
    </form>
</div>

<footer style="padding:8px 16px;background-color:black;">
  <p style="text-align:center;font-size:30px;color:white;">AlienGame Inc.</p>
</footer>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

function myFunction() {
    var x = document.getElementById("snackbar")
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
</script>

<?php
 $dbhost = 'localhost';
 $dbuser = 'id985539_aliengamer';
 $dbpass = 'heilhitler';
 $conn = mysqli_connect($dbhost, $dbuser, $dbpass, "id985539_space");

if(isset($_POST['firstname']) AND isset($_POST['email']))
{
 if(! get_magic_quotes_gpc() )
 {
   $firstname = addslashes ($_POST['firstname']);
   $lastname = addslashes ($_POST['lastname']);
   $gender = addslashes ($_POST['gender']);
   $email = addslashes ($_POST['email']);
   $phoneno = addslashes ($_POST['phoneno']);
 }
 else
 {
   $firstname = $_POST['firstname'];
   $lastname = $_POST['lastname'];
   $gender = $_POST['gender'];
   $email = $_POST['email'];
   $phoneno = $_POST['phoneno'];
 }

 $query=mysqli_query($conn,"select * from subsc where email like '{$email}' || phoneno like '{$phoneno}' ");
 if (mysqli_num_rows($query) > 0){
   echo '<script type="text/javascript">
       function myFunction() {
         var x = document.getElementById("snackbar3")
         x.className = "show";
         setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
       }
       myFunction();
       </script>' ;
    exit(0);
 }

 $sql = "INSERT INTO subsc ".
        "(first_name,last_name,gender,email,phoneno) ".
        "VALUES ".
        "('$firstname','$lastname','$gender','$email','$phoneno')";
 $retval = mysqli_query( $conn, $sql);
 if($retval == true)
{ 
  $subject = "Welcome to AlienGame";
  $txt = "Hey there,\n\nThis email is to inform that you have been successfully subscribed to our network.\nWe will keep you updated with all upcoming activities. So please stay connected with us.\n\nSincerely,\nAlienGame Inc.";
  $headers = "from: AlienGame Inc. <aliengame.inc@gmail.com>" . "\r\n" .
  "CC: aliengame.inc@gmail.com";
  mail($email,$subject,$txt,$headers);

  include ('sms-api.php'); 
  $smsGateway = new SmsGateway('jovialjohngeorge248@gmail.com','heilhitler');
  $deviceID = 48124;
  $message = "Welcome to AlienGame Inc.\nThis message is to inform that you have been subscribed to our network.\nWe will keep you updated with all our upcoming activities. So stay tunned with us.\n\nSincerely,\nAlienGame Inc.";
  $result = $smsGateway->sendMessageToNumber($phoneno,$message,$deviceID);

  echo '<script type="text/javascript">
       function myFunction() {
         var x = document.getElementById("snackbar1")
         x.className = "show";
         setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
       }
       myFunction();
       </script>' ;
}
 mysqli_close($conn);
 exit;
}
else
{
 //do nothing
}

if(isset($_POST['name']) AND isset($_POST['email']))
{
 if(! get_magic_quotes_gpc() )
 {
   $name = addslashes ($_POST['name']);
   $email = addslashes ($_POST['email']);
   $subject = addslashes ($_POST['subject']);
   $message = addslashes ($_POST['message']);
 }
 else
 {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $subject = $_POST['subject'];
   $message = $_POST['message'];
 }
 $sql1 = "INSERT INTO msg ".
        "(name,email,subject,message) ".
        "VALUES ".
        "('$name','$email','$subject','$message')";
 $retval1 = mysqli_query( $conn, $sql1);
 if($retval1 == true)
{ 
 echo '<script type="text/javascript">
       function myFunction() {
         var x = document.getElementById("snackbar2")
         x.className = "show";
         setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
       }
       myFunction();
       </script>' ;
}
 mysqli_close($conn);
 exit;
}
else
{
 //do nothing
}
?>

</body>

</html>