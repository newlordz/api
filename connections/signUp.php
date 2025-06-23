<?php
session_start();
#check if details submitted
if (isset($_POST['name'])&&
    isset($_POST['password'])&&
    isset($_POST['email'])&&
    isset($_POST['gender'])&&
    isset($_POST['contact'])){
        
        include '../db.php';

        #get data from POST request into variables

        $name= $_POST['name'];
        $password = $_POST['password'];
        $email= $_POST['email'];
        $gender = $_POST['gender'];
        $contact= $_POST['contact'];
        #making URL data format
        $data = 'name='.$name.'password='.$password;
        #Simple form validation

        if(empty($name)){
            #error message
            $em = " Name is required";
            #redirect to 'signup.php'
            header("Location: ../signUp.php?error=$em");
            exit;
        }
        elseif(empty($email)){
            #error message
            $em = " user email is required";

            #redirect to 'signup.php'
            header("Location: ../signUp.php?error=$em");
            exit;
        }
        elseif(empty($password)){
            #error message
            $em = " password is required";

            #redirect to 'signup.php'
            header("Location: ../signUp.php?error=$em");
            exit;
        }else{
              
        #Processing Profile picture

        If (isset($_FILES['profilePicture'])){
            #get data and store them im var
            $img_name = $_FILES['profilePicture']['name'];
            $tmp_name = $_FILES['profilePicture']['tmp_name'];
            $error = $_FILES['profilePicture']['error'];

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
                    $new_img_name= $name. '.'. $img_ex_lc;

                    #creating upload path on root directory
                    $img_upload_path = 'uploads/profilePictures/'.$new_img_name;

                    #move uploaded image into uploaded folder 
                    move_uploaded_file($tmp_name, $img_upload_path);
                }else{
                    $em= "You can't upload  files of this type";
                    header("Location: ../signUp.php?error=$em&$data");
                    exit;
                }
            }else{
                $em= "unknown error occurred!";
                header("Location: ../signUp.php?error=$em&$data");
                exit;
            }
        }
              #Id generation
              $sql= 'SELECT * FROM users
              WHERE name!=""';
                $stmt= $conn->prepare($sql);
                $stmt->execute();
               $id= $stmt->rowCount() +1;

        # if the user uploads profile picture,
         if(isset($new_img_name)){  
            #Insert data into database
            $sql= "INSERT INTO users( name, password, email, profilePicture, gender,contact)
                VALUES(?,?,?,?,?,?)";
            $stmt= $conn ->prepare($sql);
            $stmt->execute([$name, $password, $email, $img_upload_path, $gender, $contact]);
        }else{
              #Insert data into database
              $sql= "INSERT INTO users( name, password, email, gender,contact)
              VALUES(?,?,?,?,?)";
          $stmt= $conn ->prepare($sql);
          $stmt->execute([$name, $password, $email, $gender, $contact]);
        }
        $sql= 'SELECT * FROM users 
                        WHERE name=? && password=?';
                    $stmt= $conn->prepare($sql);
                    $stmt->execute([$name, $password]);
                    $agent= $stmt->fetch();
                    $_SESSION['name']=$agent['name'];
                    $_SESSION['password']=$agent['password'];
                    $_SESSION['id']=$agent['id'];
                    $_SESSION['profilePicture']=$agent['profilePicture'];
                    $_SESSION['occupation']=$agent['occupation'];
                    $_SESSION['email']=$agent['email'];
                    $_SESSION['contact']=$agent['contact'];
                    $_SESSION['gender']=$agent['gender'];
                    $_SESSION['profilePicture']=$agent['profilePicture'];
                        
        $sm = "Account created successfully";
        #redirect to 'index.php' and passing success message
        if($_POST['loc'] =='admin'){
            header("Location: ../admin");
            exit;
        }
        header("Location: ../shop.php");
        exit;
    }
}else{
        header("Location: ../accountManager/signUp.php");
        exit;
    }
?>