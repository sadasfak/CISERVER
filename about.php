<!DOCTYPE html>
<html>
<head>
<title>My Portfolio</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {

  margin: 0;
}

.header {
  padding: 30px;
  text-align: center;
  background: grey;
  color: black;
}

.header h1 {
  font-size: 40px;
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}

.navbar a.right {
  float: right;
}

.navbar a:hover {
  background-color: #ddd;
  color: black;
}

main{
height: 400px;
width: auto;
border-style: none;
background-image: url("pic.jpg");
background-position: cover;

}

.border{

    border-style: groove;
    border-width: 1px;
    border-color: skyblue;
    height: 300px;
    width: 400px;
    float: center;
    color:whitesmoke;

}

</style>
</head>
<body>

<div class="header">
  <h1>My Portfolio</h1>
</div>

<div class="navbar">
  <a href="index.html">Home</a>
  <a href="about.html">About</a>
  <a href="contact.html">Contact</a>
</div>
<main>
  
  <?php
echo "Hello World!";
?>


<center> 
<div class="border">
    <br>
    <br>
<p>" Hello, Im Ian Ray Dongcas. </p>
<p> I live in Talisay Gingoog City, Im 22 years of age. </p>
<p> I like playing basketball and playing online game like COD and Wildrift. </p>
<p> I like designing website, I find it a very fun activity." </p>

</div>  
</center>
    

</main>


</body>
</html>
