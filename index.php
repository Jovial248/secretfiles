<!DOCTYPE html>

<html>

<head>
<title>Secret Files</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Biggest top secret going to be revealed soon">
<link rel="icon" type="image/png" href="images/icon.png">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
<style>
body,h1 {font-family: "Raleway", sans-serif}
body, html {height: 100%;margin:0;}
.font{font-family: "Amatic SC", sans-serif}
.bgimg {
    background: url('images/wall.jpg') center 30% no-repeat;
    position: relative;
	width: auto;
	height: 100%;
    background-size: cover;
}
.opacity{-webkit-animation:opac 0.8s;animation:opac 0.8s}
@-webkit-keyframes opac{from{opacity:0} to{opacity:1}}
@keyframes opac{from{opacity:0} to{opacity:1}}
.animate-top{position:relative;-webkit-animation:animatetop 0.4s;animation:animatetop 0.4s}
@-webkit-keyframes animatetop{from{top:-300px;opacity:0} to{top:0;opacity:1}}
@keyframes animatetop{from{top:-300px;opacity:0} to{top:0;opacity:1}}

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
.close1 {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close1:hover,
.close1:focus {
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

.but {
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 24px;
  padding: 10px;
  width: 180px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.but span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.but span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.but:hover span {
  padding-right: 25px;
}

.but:hover span:after {
  opacity: 1;
  right: 0;
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
</style>
</head>

<body onload="open_up()">

<div id="myIntro" class="modal font" >  
  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close1">&times;</span>
      <h1>Greetings</h1>
    </div>
    <div class="modal-body">
      <p style="text-align:center;"><b>
       Welcome to SecretFiles, here we open to you an other side
       of the world that we all are living which is full of 
       mysteries, sercrets and bhah bhah bhah.
       So don't wait anymore, just come and explore SecretFiles
       which is not a secret anymore.
      </b></p>
    <img src="images/intro.jpg" style="height: 100%; max-width: 100%;"><br>
	<button class="but" style="background-color: red;" onclick="close_modal();"><span>Explore</span></button>
	</div>
  </div>
</div>

<div style="color: blue;" class="bgimg opacity">
  <div style="color: red;position:absolute;left:0;top:0;padding:12px 24px;font-size: 200%">
    <img src="images/icon.png" style="width:30px;height:30px;"> <b>Secret Files</b>
  </div>
  <div style="position:absolute;top:70%;left:50%;transform:translate(-55%,-50%);-ms-transform:translate(-55%,-50%)">
    <h1 class="animate-top"style="color:black;font-size:400%;">COMING SOON</h1>
    <hr style="border-color:black;margin:auto;width:80%">
    <p style="font-size:150%;text-align:center">Count down starts....</p>
  </div>
  <div style="position:absolute;left:0;bottom:0;padding:5px 10px;font-size: 100%;">
    <b>Powered by <a href="about.php" target="_blank" style="color:red;">AlienGamer Inc</a></b>
  </div>
  <div style="position:absolute;right:0;top:0;padding:100px 10px;font-size: 100%;">
    <b>Give us <button id="myBtn" class="but" style="background-color:white;color:red;border: none;border-radius: 4px;font-size: 100%;"><span><b>Suggestions</b></span></button></b>
  </div>
</div>

<div id="myModal" class="modal font" >
  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close1 close2">&times;</span>
      <h1>Suggestions</h1>
    </div>
    <div class="modal-body">
      <p style="text-align:center;"><b>We are working on the documentation of many conspiracies and hidden top secrets on this site.<br>So give us some suggestions on those kinds of topics that you are interested or heard about anywhere....</b></p>
	  <form id="sub" style="text-align:center;width:100%;" action="thanks.php" method="POST">
    <label>Name</label><br>
    <input style="width:250px" type="text" class="design" placeholder="Your name.." required name="name"><br>
    <label>Email ID</label><br>
    <input style="width:250px" type="email" class="design" placeholder="Your Email" required name="email"><br>
	<label>Topic / Subjest</label><br>
    <input style="width:250px" type="text" class="design" placeholder="Topic you are interested" required name="topic"><br>
	<label>Description</label><br>
    <input style="height:80px;width:250px" type="text" class="design" name="desc" placeholder="Optional"><br>
    </form>
	<input type="submit" value="Submit" form="sub">
	</div>
  </div>
</div>

<script>
// Get the greeting modal
var mod1= document.getElementById('myIntro');

setTimeout(
function open_up(){
mod1.style.display = "block";
},3000);

function close_modal() {
    mod1.style.display = "none";
}

// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span1 = document.getElementsByClassName("close1")[0];
var span2 = document.getElementsByClassName("close2")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span1.onclick = function() {
    mod1.style.display = "none";
}

span2.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
    if (event.target == mod1) {
        mod1.style.display = "none";
    }
}
</script>
</body>

</html>
