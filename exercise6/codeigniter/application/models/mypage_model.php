<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mypage_model extends CI_Model {
    function get_images()
    {
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
    }
}