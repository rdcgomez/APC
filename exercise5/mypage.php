
<!DOCTYPE html>
<html>
<head lang="en">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>CRUD Operations With PHP and MySql - By Cleartuts</title>
	
	
    <style>
        table {
            width: 100%;
        }

        th, td {
            padding: 20px;
            text-align: center;
            border-bottom: 1px solid #ddd;
            font-size: 150%;
            color: white;

        }
		
        th {
            background-color: red;
            color: white;
            font-style: italic;
        }
		
        h1 {
            text-align: center;
            font-size: 500%;

        }
		
        h1.serif {
            font-family: Algerian;
            color: white;
        }

        #Greetings {
            text-align: center;
            font-size: 200%;
            font-style: italic;
            color: white;
        }

        a:link, a:visited {
            background-color: red;
            color: white;
            padding: 12px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
        }
        a:hover, a:active {
            background-color: black;
        }

        #my-hobbies {
            text-align: left;
            font-size: 250%;
            color: white;


        }
        .Hobbies{
            background-color: black;
            position: relative;

            width: 100%;
            border: 5px solid white;
            padding: 10px;
            color: white;
			font-size: 200%;

        }

        body {
            background-image: url(images/destiny.jpg);
            background-size:     cover;
            background-repeat:   no-repeat;
            background-position: center;
			border-style: solid;
			border-top-width: none;
			
			border-left-width: 100px;
			border-right-width: 100px;
			border-top-color: white;
			border-bottom-color: white;
        }
        h5 {
            color: white;
            font-size: 100%;
        }
		.text-white {
			color: white;
		}
		.guest-information{
			color: white;
			font-size: 250%;
		}
		input[type=text-comment], select {
			width: 20%;
			padding: 50px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}	
	
		div {
			border-radius: 5px;
			background-color: #1F2837;
			padding: 10px;
			margin-top: -30px;
		}
		input[type=text], select {
			width: 20%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}
		input[type=number], select {
			width: 20%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}
		input[type=url], select {
			width: 20%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}
		input[type=email], select {
			width: 20%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}
		input[type=submit] {
			width: 100%;
			background-color: #64D004;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}
		input[type=submit]:hover {
			background-color: #45a049;
		}
		.output-information {
			border-radius: 5px;
			background-color: #1F2837;
			padding: 10px;
			margin-top: 10px;
			color: white;
		}
		.error {
			color: white;
		}
		#crud {
			border-radius: 5px;
			background-color: #1F2837;
			padding: 10px;
			margin-top: 10px;
			color: white;
		}
		button[type=submit] {
			width: 100%;
			background-color: #64D004;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}
		button[type=submit]:hover {
			background-color: #45a049;
		}
    </style>
</head>

<body>



<p id="Greetings">Welcome To My Page!</p>

<h1 class="serif">About Me</h1>

<table>
    <tr>
        <th>First Name</th>
        <th>Second Name</th>
        <th>Middle Name</th>
        <th>Last Name</th>
    </tr>
    <tr>
        <td>Renz</td>
        <td>Daryl</td>
        <td>Carullo</td>
        <td>Gomez</td>
    </tr>
</table>

<h2 id="my-hobbies">Hobbies</h2>

<div class="Hobbies">My hobbies are:
	<p id="Sports"></p>
	<img src="images/basketball.jpeg" width="50%" alt = "Steph Curry and Lebron James"> <br>
	<button type="button" onclick="document.getElementById('Sports').innerHTML = '1. Playing Basketball'">SHOW MY FIRST HOBBY!</button> <br>
	<button type="button" onclick="document.getElementById('Sports').style.color = 'red'">Add Color to the Text!</button>
	
	<p id="Instrument"></p>
	<img src="images/guitar.jpg" width="50%" alt ="Guitar"> <br>
	<button type="button" onclick="document.getElementById('Instrument').innerHTML = '2. Playing Musical Instruments'">SHOW MY SECOND HOBBY!</button><br>
	<button type="button" onclick="document.getElementById('Instrument').style.color = 'blue'">Add Color to the Text!</button>
	
	<p id="VideoGames"></p>
	<img src="images/videogames.jpg" width="50%" alt ="Consoles"> <br>
	<button type="button" onclick="document.getElementById('VideoGames').innerHTML = '3. Playing Video Games'">SHOW MY THIRD HOBBY!</button><br>
	<button type="button" onclick="document.getElementById('VideoGames').style.color = 'green'">Add Color to the Text!</button>
	
	<p id="Studying"></p>
	<img src="images/books.jpg" width="30%" alt ="Books"> <br>
	<button type="button" onclick="document.getElementById('Studying').innerHTML = '4. Studying'">SHOW MY FOURTH HOBBY!</button><br>
	<button type="button" onclick="document.getElementById('Studying').style.color = 'orange'">Add Color to the Text!</button>
	
	<p id="ReadingAnime"></p>
	<img src="images/sample.jpg" height="500px" alt = "Trafalgar Law with Chopper"> <br>
	<button type="button" onclick="document.getElementById('ReadingAnime').innerHTML = '5. Reading Manga'">SHOW MY FIFTH HOBBY!</button><br>
	<button type="button" onclick="document.getElementById('ReadingAnime').style.color = 'yellow'">Add Color to the Text!</button>
	
	<p id="Internet"></p>
	<img src="images/web.jpg" width="50%" alt ="World Wide Web"> <br>
	<button type="button" onclick="document.getElementById('Internet').innerHTML = '6. Surfing the net'">SHOW MY SIXTH HOBBY!</button><br>
    <button type="button" onclick="document.getElementById('Internet').style.color = 'pink'">Add Color to the Text!</button>
	
</div>
<br>
<br>

<?php
/*
// define variables and set to empty values

$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL"; 
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
*/
?>



<!--
<h2 class="guest-information">Enter guest information</h2>
<div>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <span class="text-white">Name:<span> <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  <span class="text-white">E-mail:<span> <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  <span class="text-white">Website:<span> <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  <span class="text-white">Comment:<span> 
  <textarea name="comment" rows="10" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  <span class="text-white">Gender:<span>
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="Female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="Male">Male
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
</div>
-->

<!--
<div class="output-information">
<?php 
/*
echo "<h2>Guest Information:</h2>";
echo $name;
echo "<br>";
//echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
*/
?>
</div>
-->




<!--ADDING DATA-->
<?php
include_once 'mypagedb_config.php';
if(isset($_POST['btn-save']))
{
 // variables for input data
 $first_name = $_POST['first_name'];
 $last_name = $_POST['last_name'];
 $city_name = $_POST['city_name'];
 $email = $_POST['email_address'];
 $url_website = $_POST['url_website']; 
 $contact_number = $_POST['contact_number'];
 $gender = $_POST['gender'];
 // variables for input data

 // sql query for inserting data into database
 $sql_query = "INSERT INTO users(first_name,last_name,user_city,email_address,contact_number,url_website,gender) 
				VALUES('$first_name','$last_name','$city_name','$email','$contact_number','$url_website','$gender')";	
 // sql query for inserting data into database
 
 // sql query execution function
 
 
 
 if(mysqli_query($con,$sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Inserted Successfully ');
  window.location.href='mypagedatabase.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while inserting your data');
  </script>
  <?php
 }
 // sql query execution function
}
?>
<center>

</div>
<div id="crud">
<label>Hello There! Pls enter your information so i can store it inside my database before you leave. Thank You! ^_^</label>
    <form method="post">
    <table align="center">
    <tr>
	
	<td align="center"><a href="mypagedatabase.php">Check Database</a></td>
    </tr>
    <tr>
    <td><input type="text" name="first_name" placeholder="First Name" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="last_name" placeholder="Last Name" required /></td>
    </tr>
	<tr>
    <td><input type="email" name="email_address" placeholder="Email Address" required /></td>
    </tr>
	<tr>
    <td><input type="number" name="contact_number" placeholder="Contact Number" /></td>
    </tr>
	<tr>
    <td><input type="text" name="city_name" placeholder="City" required /></td>
    </tr>
	<tr>
    <td><input type="url" name="url_website" placeholder="Website" /></td>
    </tr>
	
	<tr>
    <td>
		<input type="radio" name="gender" value="Female">Female
		<input type="radio" name="gender" value="Male">Male
	</td>
    </tr>
	

    <tr>
    <td><button type="submit" name="btn-save"><strong>Save</strong></button></td>
    </tr>
    </table>
    </form>
</div>

</center>


<h5>Here are some of my favorite websites.</h5>
<a href="http://9gag.com/" target="_blank">9GAG</a>
<a href="https://www.facebook.com/" target="_blank">Facebook</a>
<a href="https://www.youtube.com/" target="_blank">Youtube</a>

</body>
</html>