<form action="./get.php" method="post">
Enter Phone number:<input type="text" name="phone"><br/>
<input type='hidden' name='next' value='getnumber' />
<input type="submit" value="submit">
</form>
<?php
$dbc=mysql_connect('localhost','root','raje');
@mysql_select_db('info',$dbc);
if ( $_POST['next'] == "getnumber" )
{
$test=$_POST['phone'];
$contact = mysql_query("select * from info where phone like '%$test%';");
while($contact2 = mysql_fetch_array($contact))
{
echo "Name of the person:"; echo $contact2['name'];
//echo "contact :"; echo $contact2['phone'];
}
}
?>



