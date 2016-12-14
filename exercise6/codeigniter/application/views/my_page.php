<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head lang="en">

  <link rel = "stylesheet" type = "text/css"
           href = "<?php echo base_url(); ?>css/mypageStyle.css">


   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


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
	<img src="<?php echo base_url(); ?>images/basketball.jpeg"  width="50%" alt = "Steph Curry and Lebron James" > <br>
	<button type="button" onclick="document.getElementById('Sports').innerHTML = '1. Playing Basketball'">SHOW MY FIRST HOBBY!</button> <br>
	<button type="button" onclick="document.getElementById('Sports').style.color = 'red'">Add Color to the Text!</button>

	<p id="Instrument"></p>
	<img src="<?php echo base_url(); ?>images/guitar.jpg" width="50%" alt ="Guitar"> <br>
	<button type="button" onclick="document.getElementById('Instrument').innerHTML = '2. Playing Musical Instruments'">SHOW MY SECOND HOBBY!</button><br>
	<button type="button" onclick="document.getElementById('Instrument').style.color = 'blue'">Add Color to the Text!</button>

	<p id="VideoGames"></p>
	<img src="<?php echo base_url(); ?>images/videogames.jpg" width="50%" alt ="Consoles"> <br>
	<button type="button" onclick="document.getElementById('VideoGames').innerHTML = '3. Playing Video Games'">SHOW MY THIRD HOBBY!</button><br>
	<button type="button" onclick="document.getElementById('VideoGames').style.color = 'green'">Add Color to the Text!</button>

	<p id="Studying"></p>
	<img src="<?php echo base_url(); ?>images/books.jpg" width="30%" alt ="Books"> <br>
	<button type="button" onclick="document.getElementById('Studying').innerHTML = '4. Studying'">SHOW MY FOURTH HOBBY!</button><br>
	<button type="button" onclick="document.getElementById('Studying').style.color = 'orange'">Add Color to the Text!</button>

	<p id="ReadingAnime"></p>
	<img src="<?php echo base_url(); ?>images/sample.jpg" height="500px" alt = "Trafalgar Law with Chopper"> <br>
	<button type="button" onclick="document.getElementById('ReadingAnime').innerHTML = '5. Reading Manga'">SHOW MY FIFTH HOBBY!</button><br>
	<button type="button" onclick="document.getElementById('ReadingAnime').style.color = 'yellow'">Add Color to the Text!</button>

	<p id="Internet"></p>
	<img src="<?php echo base_url(); ?>images/web.jpg" width="50%" alt ="World Wide Web"> <br>
	<button type="button" onclick="document.getElementById('Internet').innerHTML = '6. Surfing the net'">SHOW MY SIXTH HOBBY!</button><br>
  <button type="button" onclick="document.getElementById('Internet').style.color = 'pink'">Add Color to the Text!</button>

</div>
	<br>
	<br>
<center>
  <div id="crud">
    <label>Hello There! Pls enter your information so i can store it inside my database before you leave. Thank You! ^_^</label>
    <form method="post">
    <table align="center">
    <tr>
	  <td align="center">
      <a href="controllers/mypagecheckdatabase">Check Database</a></td>
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
