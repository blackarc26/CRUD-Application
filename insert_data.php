
<?php include('dbcon.php');?>
<?php

if(isset($_POST['add_students']))
{

  $fname=$_POST['fname'];
  $cname=$_POST['cname'];
  $gname=$_POST['gname'];

 if($fname == ""|| empty($fname)) // validations used for eliminating empty values
    {
     header('location:index.php?message= fill [Name] to proceed!');
    }
else
    {
      $query = "INSERT INTO test2(`Name`, `Class`, `Grade`) values('$fname', '$cname', '$gname')";

      // $query ="insert into `test2`(`Name`,`Class`,`Grade`) values(`$fname`,`$cname`,`$gname`)";
    $result= mysqli_query($connection,$query);

if(!$result)
      {
    die("Query Failed".mysqli_error());
      }
else
       {
    header('location:index.php?insert_msg= Successfully added your data');
       }
    }
}
?>