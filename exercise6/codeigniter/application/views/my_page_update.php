<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Update Page</title>
<link rel = "stylesheet" type = "text/css"
       href = "<?php echo base_url(); ?>css/mypageupdateeStyle.css">

       <title>Visitors Database</title>

	<style>
      body {
        background-image: url(images/destiny.jpg);
      }
  </style>
</head>

<body>
<center>
<div id="crud">
 <label>UPDATE INFORMATION</label>
  <form method="post" >
  <table align="center">
    <tr>
      <td>
      <input type="text" name="first_name" placeholder="First Name" value="<?php echo $fetched_row['first_name']; ?>" required />
      </td>
    </tr>
    <tr>
      <td>
      <input type="text" name="last_name" placeholder="Last Name" value="<?php echo $fetched_row['last_name']; ?>" required />
      </td>
    </tr>
    <tr>
      <td>
      <input type="text" name="user_city" placeholder="City" value="<?php echo $fetched_row['user_city']; ?>" required />
      </td>
    </tr>
	  <tr>
      <td>
      <input type="text" name="email_address" placeholder="Email Address" value="<?php echo $fetched_row['email_address']; ?>" required />
      </td>
    </tr>
	  <tr>
      <td>
      <input type="number" name="contact_number" placeholder="Contact Number" value="<?php echo $fetched_row['contact_number']; ?>" />
      </td>
    </tr>
	  <tr>
      <td>
      <input type="url" name="url_website" placeholder="Website" value="<?php echo $fetched_row['url_website']; ?>" />
      </td>
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

</body>
</html>
