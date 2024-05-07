<?php include('dbcon.php');?>
<?php
if(isset($_GET['id']))
{
$ID=$_GET['id'];

$query ="DELETE FROM  `test2` where `ID` ='$ID'";
//$query ="Delete * from `test2` where `ID` ='$ID'";

$result = mysqli_query($connection, $query);

if(!$result)
{
    die("query failed".mysqli_error());

}
else
{
    header('location:index.php?delete_msg=You have deleted the record');
}


}


?>