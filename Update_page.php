<?php include('header.php');?>
<?php include('dbcon.php');?>
<?php

if(isset($_GET['id']))
{
    $ID=$_GET['id'];
    
    
        $query="SELECT * from `test2` where `ID`='$ID'";
        $result = mysqli_query($connection,$query);
        if(!$result)
       {
        die("query failed".mysqli_error());
       } 
       else{
      
       $row =mysqli_fetch_assoc($result);
     
                   }
                
}
?>
<?php
if(isset($_POST['Update_students']))
{
    if(isset($_GET['id_new']))
    {
        $idnew=$_GET['id_new'];
    }
   
    $fname=$_POST['fname'];
    $cname=$_POST['cname'];
    $gname=$_POST['gname']; 

    $query ="update `test2` set `Name`='$fname',`Class`='$cname',`Grade`='$gname' where `ID`='$idnew'"  ;
    $result = mysqli_query($connection,$query);
    if(!$result)
   {
    die("query failed".mysqli_error());
   } 
   else
   {
    header('location:index.php?update_msg=You have successfully updated the data ');
   }
}





?>

<form action="update_page.php?id_new-<?php echo $ID;?>" method ="post">
<div class="form-group">
             
            <div class="form-group">
             <label for="fname"> Name </label>
             <input type="text" name="fname" class="form-control" value="<?php echo $row['Name']?>">
            
            </div>
            <div class="form-group">
             <label for="cname"> Class </label>
             <input type="text" name="cname" class="form-control" value="<?php echo $row['Class']?>">
            
            </div>
            <div class="form-group">
             <label for="gname"> Grade </label>
             <input type="text" name="gname" class="form-control" value="<?php echo $row['Grade']?>">
            
            </div>
            <input type="Submit" class="btn btn-success" name="Update_students" value="UPDATE">
            
            </form>










<?php include('footer.php');?>