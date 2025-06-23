
    <?php
session_start();
include("../db.php");

error_reporting(0);
if(isset($_GET['action']) && $_GET['action']!="" && $_GET['action']=='delete')
{
$order_id=$_GET['order_id'];

/*this is delet query*/
mysqli_query($con,"delete from purchases where id='$order_id'")or die("delete query is incorrect...");
} 

///pagination
$page=$_GET['page'];

if($page=="" || $page=="1")
{
$page1=0;	
}
else
{
$page1=($page*10)-10;	
}

include "sidenav.php";
include "topheader.php";
include "details.php";

?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <!-- your content here -->
          <div class="col-md-14">
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Orders  / Page <?php echo $page;?> </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive ps">
                  <table class="table table-hover tablesorter " id="">
                    <thead class=" text-primary">
                      <tr><th>Customer Name</th><th>Products</th><th>Contact | Email</th><th>Address</th><th>Total</th><th>Shipping</th><th>Time</th>
                    </tr></thead>
                    <tbody>
        <?php 

          $sql= 'SELECT * FROM purchases
          ORDER BY id DESC';
          $stmt= $conn->prepare($sql);
          $stmt->execute();

          #if username Exist
          $Orders="";
          if($stmt->rowCount()!=0){
          #fetching user info
          $Orders= $stmt->fetchAll();


          }
          foreach($Orders as $Order)
              {
                $name=$Order['name'];
                echo ("
                <tr onclick='showDetail($Order[items],`$Order[name]`,`$Order[paymentCheck]`)'>                
                  <td>$name</td>
                  <td>$Order[name]</td>
                  <td>$Order[email]<br>$Order[name]</td>
                  <td>$Order[name]<br>ZIP: $zip_code<br>$country</td>
                  <td>$Order[totalAmount]</td>
                  <td>$quantity</td>
                  <td>$Order[date]</td>
                  <td>
                  <a class=' btn btn-green' href='../connections/Wdelete.php?D_id=$Order[id]&action=delete'>Delevered</a>
                  </td>
                  <td>
                  <a class=' btn btn-danger' href='../connections/Wdelete.php?delOdId=$Order[id]&action=delete'>Delete</a>
                  </td>
                </tr>"
                );

              }
              ?>
                    </tbody>
                  </table>
                  
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      <?php
include "footer.php";
?>