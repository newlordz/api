
    <?php
session_start();
include("../db.php");
$user_id=$_REQUEST['user_id'];

$sql= 'SELECT * FROM warehouse
where id =?';
$stmt= $conn->prepare($sql);
$stmt->execute([$_REQUEST['user_id']]);

#if username Exist
$users="";
if($stmt->rowCount()!=0){
#fetching user info
$users= $stmt->fetch();


}

if(isset($_POST['btn_save'])) 
{ $Uid=$_SESSION['id'];
  $name= $_POST['name'];
  $password = $_POST['password'];
  $email= $_POST['email'];
$sql= "UPDATE warehouse set name=?, password=?, email=? WHERE id=$Uid ";
$stmt= $conn ->prepare($sql);
$stmt->execute([$name, $password, $email,]);
header( 'location: ./');
}
include "sidenav.php";
include "topheader.php";
?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
        <div class="col-md-5 mx-auto">
            <div class="card">
              <div class="card-header card-header-primary">
                <h5 class="title">Edit User</h5>
              </div>
              <form action="edituser.php" name="form" target='iframe' method="post" enctype="multipart/form-data">
              <div class="card-body">
                
                  <input type="hidden" name="user_id" id="user_id" value="<?php echo $users['id'];?>" />
                    <div class="col-md-12 ">
                      <div class="form-group">
                        <label>First name</label>
                        <input type="text" id="first_name" name="name"  class="form-control" value="<?php echo $users['name']; ?>" >
                      </div>
                    </div>
                    <div class="col-md-12 ">
                      <div class="form-group">
                        <label>Last name</label>
                        <input type="text" id="last_name" name="last_name" class="form-control" value="<?php echo $users['name']; ?>" >
                      </div>
                    </div>
                    <div class="col-md-12 ">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email"  id="email" name="email" class="form-control" value="<?php echo $users['email']; ?>">
                      </div>
                    </div>
                    <div class="col-md-12 ">
                      <div class="form-group">
                        <label >Password</label>
                        <input type="text" name="password" id="password" class="form-control" value="<?php echo $users['password']; ?>">
                      </div>
                    </div>
                  
                  
                  
                
              </div>
              <div class="card-footer">
                <button type="submit" id="btn_save" name="btn_save" class="btn btn-fill btn-primary">Update</button>
              </div>
              </form>    
            </div>
          </div>
         
          
        </div>
      </div>
      <?php
include "footer.php";
?>