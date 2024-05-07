<?php include('header.php');?>
<?php include('dbcon.php');?>
<div class="box1"> 
<h2>All Students</h2> 
 <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Students</button>
</div>
<table class ="table table-hover table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Class</th>
            <th>Grade</th>
            <th> update</th>
            <th> delete</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $query="select * from `test2`";
        $result =mysqli_query($connection,$query);
        if(!$result)
       {
        die("query failed".mysqli_error());
       } 
       else{
       while($row= mysqli_fetch_assoc($result)){
        ?>
         <tr>
            <td><?php echo $row['ID']; ?></td>
            <td><?php echo $row['Name']; ?></td>
            <td><?php echo $row['Class']; ?></td>
            <td><?php echo $row['Grade']; ?></td>
            <td><a href="Update_page.php?id=<?php echo $row['ID'];?>"class="btn btn-success">Update</a></td>
            <td><a href="Delete_page.php?id=<?php echo $row['ID'];?>"class="btn btn-danger">Delete</a></td>
          </tr>
        <?php
       }
       }
        ?>
        
        
    </tbody>
 </table>
 <?php
if(isset($_GET['message']))//isset() is used to determine whether variable is set or not , it should have some value other than null
{
    echo "<h6>".$_GET['message']."</h6>";
}
?>
<?php
if(isset($_GET['insert_msg']))//isset() is used to determine whether variable is set or not , it should have some value other than null
{
    echo "<h6>".$_GET['insert_msg']."</h6>";
}
?>
<?php

if(isset($_GET['update_msg']))//isset() is used to determine whether variable is set or not , it should have some value other than null
{
    echo "<h6>".$_GET['update_msg']."</h6>";
}

?>
<?php

if(isset($_GET['delete_msg']))//isset() is used to determine whether variable is set or not , it should have some value other than null
{
    echo "<h6>".$_GET['delete_msg']."</h6>";
}

?>
 <!--modal-->
 <form action="insert_data.php" method="post"><!--post method uses http body to transfer data-->
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Students</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

            <div class="form-group">
             <label for="fname"> Name </label>
             <input type="text" name="fname" class="form-control">
            
            </div>
            <div class="form-group">
             <label for="cname"> Class </label>
             <input type="text" name="cname" class="form-control">
            
            </div>
            <div class="form-group">
             <label for="gname"> Grade </label>
             <input type="text" name="gname" class="form-control">
            
            </div>

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="Submit" class="btn btn-success" name="add_students" value="ADD">
      </div>
    </div>
  </div>
</div>
</form>
<?php include('footer.php');?>
 