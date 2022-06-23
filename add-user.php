<!DOCTYPE html>

<head>
    <title>
        Add User
    </title>
    <meta charset="utf-8">

</head>
<style>
    body{
        background-image: url("library1.jpg");
        opacity:0.8;
        box-shadow: 5px 20px 50px #000

    }
    .add-book-title{
        font-weight: bold;
        font-size:40px;
        margin-top:50px;
        color:white;
    }
    label{
	color: #fff;
	/* font-size: 2.3em; */
	/* justify-content: center; */
	display: flex;
	/* margin: 60px; */
	font-weight: bold;
	cursor: pointer;
	transition: .5s ease-in-out;
}

input{
	width: 60%;
	height: 20px;
	background: #e0dede;
	justify-content: center;
	display: flex;
	margin: 20px auto;
	padding: 10px;
	border: none;
	outline: none;
	border-radius: 5px;
}
button{
	width: 60%;
	height: 40px;
	margin: 10px auto;
	justify-content: center;
	display: block;
	color: #fff;
	background: #573b8a;
	font-size: 1em;
	font-weight: bold;
	margin-top: 20px;
	outline: none;
	border: none;
	border-radius: 5px;
	transition: .2s ease-in;
	cursor: pointer;
}
button:hover{
	background: #6d44b8;
}
    .add-books-form{
        opacity: 5;
        box-shadow: 5px 20px 50px #000
        width: 350px;
	height: 500px;
	/* background: red; */
    background: grey;
	overflow: scroll;
	/* background: url("https://doc-08-2c-docs.googleusercontent.com/docs/securesc/68c90smiglihng9534mvqmq1946dmis5/fo0picsp1nhiucmc0l25s29respgpr4j/1631524275000/03522360960922298374/03522360960922298374/1Sx0jhdpEpnNIydS4rnN4kHSJtU1EyWka?e=view&authuser=0&nonce=gcrocepgbb17m&user=03522360960922298374&hash=tfhgbs86ka6divo3llbvp93mg4csvb38") no-repeat center/ cover; */
	border-radius: 10px;
	box-shadow: 5px 20px 50px #000;
        text-align:center;
        /* padding-top:40px; */
        /* background-color:beige; */
        border-radius:10px; 
        /* padding-left:500px; */
        width: 300px;
        border: 15px ;
       padding: 50px;
       margin-left: 470px;
    margin-top:20px;
    }
    </style>
<body>

<form class = "add-books-form" action="add-books.php"
          method = "post"
          autocomplete="off">
    <span class ="add-book-title"> ADD USER </span> <br> <br>
<label> USER ID </label>  <br>       
<input type="text" name="id" /> <br> <br>  
<label> First Name </label>   <br>  
<input type="text" name="fname" /> <br> <br>  
<label> Last Name </label>    <br>     
<input type="text" name="lname" /> <br> <br>  
  
<label> Father's Name</label> <br>        
<input type="text" name="fathername"/> <br> <br>  
<label> Phone Number </label>     <br>    
<input type="text" name="number" /> <br> <br>  
<label> Address </label>     <br>    
<input type="text" name="address" /> <br> <br> 


<button type="Submit">Submit</button>


<br>  

  
</form>

<?php

      

 

    if($_SERVER['REQUEST_METHOD'] == 'POST')
{
       $id = $_POST['id'];
       $fname = $_POST['fname'];
       $lname = $_POST['lname'];
       $fathername = $_POST['fathername'];
       $number = $_POST['number'];
       $address = $_POST['address'];
       
       
}

$SERVERNAME="localhost";
$USERNAME="root";
$PASSWORD="";
$DATABASE = "library";

$con=mysqli_connect($SERVERNAME , $USERNAME ,$PASSWORD , $DATABASE);

if(!$con)
    die( "connection not establised ---->". mysqli_connect_error());

else 
echo " connection establised";

$sql ="INSERT INTO `user` (  `id`, `fname`, `lname`, `fathername`, `number`, `address`) VALUES ( '$id', '$fname', '$lname', '$fathername', '$number', '$address')";

$result = mysqli_query($con , $sql);

if($result)
echo " the record has been recorded successfully";

else 
echo " the record has not been recorded successfully";

 
?>

</body>