<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link rel = "stylesheet" type = "text/css"
				 href = "<?php echo base_url(); ?>css/mypagecheckdatabaseStyle.css">
<title>Visitors Database</title>
	<style>
		body {
		    background-image: url(images/destiny.jpg);
		}
	</style>
<script type="text/javascript">
    function edt_id(id)
    {
     if(confirm('Sure to edit ?'))
       {
        window.location.href='mypageupdate.php?edit_id='+id;
       }
    }
    function delete_id(id)
    {
     if(confirm('Sure to Delete ?'))
       {
        window.location.href='mypagedatabase.php?delete_id='+id;
       }
    }
</script>
</head>

<body>

<center>
<div id="crud">
<label>VISITOR'S DATABASE</label>
    <table align="center">
    <tr>
  		<th colspan="10">
        <a href="mypage">Homepage</a>
      </th>
    </tr>

    <th>First Name</th>
    <th>Last Name</th>
    <th>City Name</th>
  	<th>Email Address</th>
  	<th>Contact Number</th>
  	<th>Website</th>
  	<th>Gender</th>
    <th colspan="3">Operations</th>

<?php
	 $sql_query="SELECT * FROM users";
	 $result_set=mysqli_query($con,$sql_query);
	 while($row=mysqli_fetch_row($result_set));
	{
?>
    <tr>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
    		<td><?php echo $row[4]; ?></td>
    		<td><?php echo $row[5]; ?></td>
    		<td><?php echo $row[6]; ?></td>
    		<td><?php echo $row[7]; ?></td>
		    <td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')"><img src="b_edit.png" align="EDIT" /></a></td>
        <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><img src="b_drop.png" align="DELETE" /></a></td>
    </tr>
<?php
	}
?>
    </table>
</div>
</center>

</body>
</html>
