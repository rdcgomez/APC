
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
			margin-top: 50px;
			color: white;
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
?>

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

<div class="output-information">
<?php 
echo "<h2>Guest Information:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
</div>

<!--ADDING DATA-->
<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{
 // variables for input data
 $first_name = $_POST['first_name'];
 $last_name = $_POST['last_name'];
 $city_name = $_POST['city_name'];
 // variables for input data

 // sql query for inserting data into database
 $sql_query = "INSERT INTO users(first_name,last_name,user_city) VALUES('$first_name','$last_name','$city_name')";
 // sql query for inserting data into database
 
 // sql query execution function
 if(mysql_query($sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Inserted Successfully ');
  window.location.href='index.php';
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
<label>Hello There! Pls enter the information below so that i would know who visited my page! ^_^</label>
    <form method="post">
    <table align="center">
    <tr>
   <!--<td align="center"><a href="index.php">Check the people who visited my page!</a></td>-->
    </tr>
    <tr>
    <td><input type="text" name="first_name" placeholder="First Name" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="last_name" placeholder="Last Name" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="city_name" placeholder="City" required /></td>
    </tr>
    <tr>
    <td><button type="submit" name="btn-save"><strong>SAVE</strong></button></td>
    </tr>
    </table>
    </form>
</div>

</center>

<!--DATABASE / VISITOR TABLE-->
<?php
include_once 'dbconfig.php';

// delete condition
if(isset($_GET['delete_id']))
{
 $sql_query="DELETE FROM users WHERE user_id=".$_GET['delete_id'];
 mysql_query($sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
// delete condition
?>

<script type="text/javascript">
function edt_id(id)
{
 if(confirm('Sure to edit ?'))
 {
  window.location.href='edit_data.php?edit_id='+id;
 }
}
function delete_id(id)
{
 if(confirm('Sure to Delete ?'))
 {
  window.location.href='index.php?delete_id='+id;
 }
}
</script>
</head>
<body>
<center>

</div>

<div id="crud">

    <table align="center">
    <tr>
    <!--<th colspan="5"><a href="add_data.php">add data here.</a></th>-->
    </tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>City Name</th>
    <th colspan="2">Operations</th>
    </tr>
    <?php
 $sql_query="SELECT * FROM users";
 $result_set=mysqli_query($con,$sql_query);
 while($row=mysqli_fetch_row($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
  <td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')"><img src="b_edit.png" align="EDIT" /></a></td>
        <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><img src="b_drop.png" align="DELETE" /></a></td>
        </tr>
        <?php
 }
 ?>
    </table>
    
</div>

</center>





<!-- UPDATE FORM-->
<?php
include_once 'dbconfig.php';
if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM users WHERE user_id=".$_GET['edit_id'];
 $result_set=mysql_query($sql_query);
 $fetched_row=mysql_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
 // variables for input data
 $first_name = $_POST['first_name'];
 $last_name = $_POST['last_name'];
 $city_name = $_POST['city_name'];
 // variables for input data

 // sql query for update data into database
 $sql_query = "UPDATE users SET first_name='$first_name',last_name='$last_name',user_city='$city_name' WHERE user_id=".$_GET['edit_id'];
 // sql query for update data into database
 
 // sql query execution function
 if(mysql_query($sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Updated Successfully');
  window.location.href='index.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while updating data');
  </script>
  <?php
 }
 // sql query execution function
}
if(isset($_POST['btn-cancel']))
{
 header("Location: index.php");
}
?>
<center>

<div id="crud">
 <label>CRUD Operations With PHP and MySql - By Cleartuts</label>
    <form method="post">
    <table align="center">
    <tr>
    <td><input type="text" name="first_name" placeholder="First Name" value="<?php echo $fetched_row['first_name']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="last_name" placeholder="Last Name" value="<?php echo $fetched_row['last_name']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="city_name" placeholder="City" value="<?php echo $fetched_row['user_city']; ?>" required /></td>
    </tr>
    <tr>
    <td>
    <button type="submit" name="btn-update"><strong>UPDATE</strong></button>
    <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
    </td>
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