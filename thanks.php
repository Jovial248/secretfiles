<!DOCTYPE html>
<html>

<head>
<title>Secret Files</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
<meta name="description" content="Biggest top secret going to be revealed soon">
<link rel="icon" type="image/png" href="images/icon.png">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
<style>
body,h1{font-family: "Amatic SC", sans-serif}
b{font-family: "Raleway", sans-serif}
body, html {height: 100%;margin:0;}
.bgimg {
    background-repeat: no-repeat;
    background-size: cover;
    background: url("images/peace.jpg") center 30% no-repeat;
    height: 100%;
    position: relative;
    width: auto;
}
.button{border:none;display:inline-block;outline:0;padding:6px 16px;vertical-align:middle;overflow:hidden;text-decoration:none;color:#fff;background-color:#000;text-align:center;cursor:pointer;white-space:nowrap;color:#000;background-color:#f1f1f1;padding:8px 16px;}
.button:hover{color:#000;background-color:#ccc;}
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

#snackbar1, #snackbar2, #snackbar3 {
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

#snackbar1.show, #snackbar2.show,#snackbar3.show {
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
</style>
</head>

<body>

<div style="color: blue;" class="bgimg">
  <div style="color: red;position:absolute;left:0;top:0;padding:12px 24px;font-size: 200%">
    <img src="images/icon.png" style="width:30px;height:30px;"> <b>Secret Files</b>
  </div>
  <div style="position:absolute;top:50%;left:55%;transform:translate(-55%,-50%);-ms-transform:translate(-55%,-50%)">
    <h1 class="animate-top" style="text-align:center;font-size:50px;">Thank you</h1>
    <hr style="border-color:black;margin:auto;width:80%">
    <b style="font-size:150%;text-align:center;">We will kindy take your suggestions to improve our website and fulfill your needs. So stay tunned to our updates.....</b>
    <p><a id="myBtn" href="#myBtn" class="button" style="font-size:36px;margin-left:36%;">Subscribe</a></p>  
  </div>
  <div style="position:absolute;left:0;bottom:0;padding:12px 10px;">
    <b>Powered by <a href="about.php" target="_blank" style="color:red;">AlienGamer Inc</a></b>
  </div>
</div>

<div id="snackbar1">Suggestion posted successfully...</div>
<div id="snackbar2">You have been subscribed...</div>
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
    <input type="text" class="design" placeholder="Your name.." required name="firstname"><br>
    <label for="lname">Last Name</label><br>
    <input type="text" class="design" placeholder="Your last name" required name="lastname"><br>
	<label for="country">Gender</label><br>
    <select class="design" name="gender">
      <option value="male">Male</option>
      <option value="female">Female</option>
      <option value="others">Others</option>
    </select><br>
	<label for="email">Email ID</label><br>
    <input type="text" class="design" placeholder="Your Email" required name="email"><br>
	<label for="phone">Phone Number</label><br>
    <input type="text" class="design" placeholder="Optional" name="phoneno"><br>
    </form>
	<input type="submit" value="Submit" form="sub">
	</div>
  </div>
</div>



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

</script>

<?php
 $dbhost = 'localhost';
 $dbuser = 'id985539_aliengamer';
 $dbpass = 'heilhitler';
 $conn = mysqli_connect($dbhost, $dbuser, $dbpass, "id985539_space");

if(isset($_POST['name']) AND isset($_POST['email']))
{
 if(! get_magic_quotes_gpc() )
 {
   $name = addslashes ($_POST['name']);
   $email = addslashes ($_POST['email']);
   $topic = addslashes ($_POST['topic']);
   $description = addslashes ($_POST['desc']);
 }
 else
 {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $topic = $_POST['topic'];
   $description = $_POST['desc'];
 }

 $sql = "INSERT INTO suggestions ".
        "(name,email,topic,description) ".
        "VALUES ".
        "('$name','$email','$topic','$description')";
 $retval = mysqli_query( $conn, $sql );
 if($retval == true)
{ 
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

 $sql1 = "INSERT INTO subsc ".
        "(first_name,last_name,gender,email,phoneno) ".
        "VALUES ".
        "('$firstname','$lastname','$gender','$email','$phoneno')";
 $retval1 = mysqli_query( $conn, $sql1 );
 if($retval1 == true)
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