<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CRUD Operations With PHP and MySql - By Cleartuts</title>
	<style>
		#crud {
  			border-radius: 5px;
  			background-color: #1F2837;
  			padding: 10px;
  			margin-top: 50px;
  			color: white;
		}

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

		body {
        background-image: url(images/destiny.jpg);
        background-size:     cover;
        background-repeat:   no-repeat;
			  border-style: solid;
			  border-top-width: none;
			  border-left-width: 100px;
			  border-right-width: 100px;
			  border-top-color: white;
			  border-bottom-color: white;
    }

		a:link, a:visited {
        background-color: red;
        color: white;
        padding: 12px 25px;
        text-align: center;
        display: inline-block;
    }

    a:hover, a:active {
        background-color: black;
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
        <a href="controllers/mypage">Homepage</a>
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
