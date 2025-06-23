
<style>
  .showDetails{
    display: none;
    width: 70%;
    position: fixed;
    z-index: 10000;
    height: 500px;
    overflow-y: scroll;
  }
  .cover{
    display: none;
    z-index: 1000;
    position: fixed;
    opacity: 0.9;
    background-color:black;
    width:100%;
    height: 100%;
    top:0;
    left:0;
  }

  td{
    margin: 5px;
  }
  .card::-webkit-scrollbar-button{
    width: 2px;
  }
</style>

      <!-- End Navbar -->
      <div class="content showDetails">
        <div class="container-fluid">
        <div class="col-md-60 mx-auto">
            <div class="card">
              <div class="card-header card-header-primary">
                <h5 class="title" id="title"></h5>
              </div>
              <div class="card-body">
                <img src="../imgIcom.png" id="receipt" height="200px"  width="50%"alt="">
                <table id="table">
                <thead>
                  <tr>                
                    <td>Image</td>
                    <td>Product</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>SubTotal</td>
                  </tr> 
                </thead><br>
              </table>
              </div>
              <div class="card-footer">
                <button type="submit" id="btn_save" onclick="hideDetails()" name="btn_save" class="btn btn-fill btn-primary">done</button>
              </div>
            </div>
          </div>
         
          
        </div>
      </div>
      <div class="cover">
       
      </div>
      <script>
        </script>
        <script src="details.js"></script>
      <?php
?>