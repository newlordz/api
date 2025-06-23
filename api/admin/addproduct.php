  <?php
session_start();
include("../db.php");


if(isset($_POST['btn_save']))
{
$product_name=$_POST['product_name'];
$details=$_POST['details'];
$price=$_POST['price'];
$c_price=$_POST['price'];
$product_type=$_POST['product_type'];
$brand=$_POST['brand'];
$warehouse=$_POST['warehouse'];
$send=false;
//picture coding
$picture_name=$_FILES['picture']['name'];
$picture_type=$_FILES['picture']['type'];
$picture_tmp_name=$_FILES['picture']['tmp_name'];
$picture_size=$_FILES['picture']['size'];

$picture_name2=$_FILES['picture2']['name'];
$picture_type2=$_FILES['picture2']['type'];
$picture_tmp_name2=$_FILES['picture2']['tmp_name'];
$picture_size2=$_FILES['picture2']['size'];

$picture_name3=$_FILES['picture3']['name'];
$picture_type3=$_FILES['picture3']['type'];
$picture_tmp_name3=$_FILES['picture3']['tmp_name'];
$picture_size3=$_FILES['picture3']['size'];

if($picture_type=="image/jpeg" || $picture_type=="image/jpg" || $picture_type=="image/png" || $picture_type=="image/gif")
{
	if($picture_size<=50000000)
	
		$pic_name="products/_".time().$picture_name;
		move_uploaded_file($picture_tmp_name,'../'.$pic_name);
  }


if($picture_type2=="image/jpeg" || $picture_type2=="image/jpg" || $picture_type2=="image/png" || $picture_type2=="image/gif")
{
	if($picture_size2<=50000000)
	
		$pic_name2="products/_".time().$picture_name2;
		move_uploaded_file($picture_tmp_name2,'../'.$pic_name2);
  }

if($picture_type3=="image/jpeg" || $picture_type3=="image/jpg" || $picture_type3=="image/png" || $picture_type3=="image/gif")
{
	if($picture_size3<=50000000)
	
		$pic_name3="products/_".time().$picture_name3;
		move_uploaded_file($picture_tmp_name3,'../'.$pic_name3);
  }

if($send=true){
    $sql= 'INSERT INTO products(Productname,warehouse,details,price,c_price,cat,Photo1,Photo2,Photo3)
    values(?,?,?,?,?,?,?,?,?)';
    $stmt= $conn->prepare($sql);
    $stmt->execute([$product_name,$warehouse,$details,$price,$c_price,$product_type,$pic_name,$pic_name2,$pic_name3]);
    header("Location: ./?error=$em&$data");
  }
}

include "sidenav.php";
include "topheader.php";
?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <form action="" method="post" type="form" name="form" enctype="multipart/form-data">
          <div class="row">
          
                
         <div class="col-md-7">
            <div class="card">
              <div class="card-header card-header-primary">
                <h5 class="title">Add Product</h5>
              </div>
              <div class="card-body">
                
                  <div class="row">
                    
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Product Title</label>
                        <input type="text" id="product_name" required name="product_name" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="">
                        <label for="">Add Image</label>
                        <input type="file" name="picture" required class="btn btn-fill btn-success" id="picture" >
                        <input type="file" name="picture2" required class="btn btn-fill btn-success" id="picture" >
                        <input type="file" name="picture3" required class="btn btn-fill btn-success" id="picture" >
                      </div>
                    </div>
                     <div class="col-md-12">
                      <div class="form-group">
                        <label>Description</label>
                        <textarea rows="4" cols="80" id="details" required name="details" class="form-control"></textarea>
                      </div>
                    </div>
                  
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Pricing</label>
                        <input type="text" id="price" name="price" required class="form-control" >
                      </div>
                    </div>
                  </div>
                 
                  
                
              </div>
              
            </div>
          </div>
          <div class="col-md-5">
            <div class="card">
              <div class="card-header card-header-primary">
                <h5 class="title">Categories</h5>
              </div>
              <div class="card-body">
                
                  <div class="row">
                    
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Product Category</label>
                        <input type="text" id="product_type" name="product_type" required="[1-6]" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="">Product Brand</label>
                        <input type="number" id="brand" name="brand" required class="form-control">
                      </div>
                    </div>
                     
                  
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Warehouse</label>
                        <input type="text" id="warehouse" name="warehouse" required class="form-control" >
                      </div>
                    </div>
                  </div>
                
              </div>
              <div class="card-footer">
                  <button type="submit" id="btn_save" name="btn_save" required class="btn btn-fill btn-primary">Update Product</button>
              </div>
            </div>
          </div>
          
        </div>
         </form>
          
        </div>
      </div>
      <?php
include "footer.php";
?>