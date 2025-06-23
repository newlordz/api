<?php 
if (isset($_POST['name'])&&
    isset($_POST['email'])&&
    isset($_POST['paymentMethod'])){

        include '../db.php';

        #get data from POST request into variables

        $name= $_POST['name'];
        $email= $_POST['email'];
        $paymentMethod= $_POST['paymentMethod'];
        $totalAmount= $_POST['totalAmount'];
        $items= $_POST['items'];
        $Photo="";

        If (isset($_FILES['paymentCheck'])){
            #get data and store them im var
            $img_name = $_FILES['paymentCheck']['name'];
            $tmp_name = $_FILES['paymentCheck']['tmp_name'];
            $error = $_FILES['paymentCheck']['error'];

            #If there is no error in uploading, 

            if ($error===0){
                #get image extension stored in a var

                $img_ex= pathinfo( $img_name, PATHINFO_EXTENSION);
                #convert the img extension into lowercase and store it in a var
                $img_ex_lc = strtolower( $img_ex);

                /*creating array 
                that stores allowed to upload image extension.*/

                $allowed_exs= array("jpg","jpeg","png");

                #Check if the imagbe extension is present in the array
                
                If ( in_array( $img_ex_lc, $allowed_exs)){

                    #renaming the image with name
                    $new_img_name= $paymentMethod.'.'.$img_ex_lc;

                    #creating upload path on root directory
                    $img_upload_path = "uploads/".$new_img_name;
                    $Photo=$img_upload_path;
                    #move uploaded image into uploaded folder 
                    move_uploaded_file($tmp_name, "../pay/".$img_upload_path);
                }else{
                    $em= "You can't upload  files of this type";
                    header("Location: #?error=$em&$data");
                    exit;
                }
            }else{
                $em= "unknown error occurred!";
                header("Location: #?error=$em&$data");
                exit;
            }
            $sql= 'INSERT INTO purchases(name, email, paymentMethod, paymentCheck, totalAmount, items)
            values(?,?,?,?,?,?)';
            $stmt= $conn->prepare($sql);
            $stmt->execute([$name,$email,$paymentMethod,$img_upload_path,$totalAmount,$items]);
            header("Location: ../pay/index.html?error=&$em&$data");
        }else{
            header("Location: ../buy.php?error=HELLOooo&$em");
        }

          #Insertion
    }else{
        header("Location: ../buy.php?error=HELLOooo&$em");
    }

?>
