<html>
<H1>Phone Directory</H1><br/>
<form action='./info1.php' method="post">
Name:<input type="text" name="name"><br/>
Phone No: <input type="text" name="phone"><br/>
<input type="submit" value="Search">
</form>
<?php
$dbc=mysql_connect('localhost','root','raje');
mysql_select_db('info.info',$dbc);
$dbn=$_POST['name'];
$dbp=$_POST['phone'];
mysql_query("insert into info.info values('$dbn','$dbp');");
echo "Name of the person:$dbn<br/> Enter Phone Number : $dbp <br/>";
?>
<html/>


