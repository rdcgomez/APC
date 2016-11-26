
<!DOCTYPE html>
<html>
<head lang="en">
    <link href="mypageStyle.css" type="text/css" rel="stylesheet">
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
                font-family: Algerian;
                color: white;
            }

            .Hobbies{
                background-color: black;
                position: relative;
                width: 100%;
                border: 5px solid black;
                padding: 10px;
                color: white;
                font-size: 200%;
            }
            h5 {
                color: white;
                font-size: 100%;
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
                text-align: center;
                font-size: 250%;
                color: white;
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

        <h1>About Me</h1>
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

<!--ADDING DATA-->
<?php
include_once 'mypagedb_config.php';
if(isset($_POST['btn-save']))
{
 // variables for input data
 $first_name 		   	= $_POST['first_name'];
 $last_name 			  = $_POST['last_name'];
 $user_city 			  = $_POST['user_city'];
 $email 			      = $_POST['email_address'];
 $contact_number 		= $_POST['contact_number'];
 $url_website 			= $_POST['url_website'];
 $gender 				    = $_POST['gender'];
 // variables for input data

 // sql query for inserting data into database
 $sql_query = "INSERT INTO users(first_name,last_name,user_city,email_address,contact_number,url_website,gender)
				VALUES('$first_name','$last_name','$user_city','$email','$contact_number','$url_website','$gender')";
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
  <div id="crud">
    <label>Hello There! Pls enter your information so i can store it inside my database before you leave. Thank You! ^_^</label>
    <form method="post">
    <table align="center">
    <tr>
	  <td align="center">
      <a href="mypagedatabase.php">Check Database</a></td>
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
    <td><input type="text" name="user_city" placeholder="City" required /></td>
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
