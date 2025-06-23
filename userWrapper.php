<style>
    /* *********************************userwrapper*********************************************** */

.userwrapper{
  position: absolute;
  right: 10px;
  top: 10px;
  display: flex;
}
.userwrapper small{
  font-size: 12px;
}
.userwrapper a{
  text-decoration: none;
}
.profilePic{
  width: 40px;
  height: 40px;
  border-radius: 50%;
}
</style>

<div class='userwrapper'>
        <?php 
                if(isset($_SESSION['name'])){ ?>
                    <div>
                        <?=$_SESSION['name']?><br> <small><a href="dashboard/">Dashboard</a></small>
                    </div>
                    <div><img src="admin/assets/img/new_logo.png" class="profilePic" alt=""></div>
                    <?php
                }else{ ?>
                    <li><a href="connections/signin.html">Register/Login</a></li>
                
                <?php
                }
                ?>
        </div>