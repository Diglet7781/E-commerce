<?php
if(isset($_POST['submit'])){
    $file=$_FILES['file'];

    $fileName= $_FILES['file']['name'];
    $fileTmpName=$_FILES['file']['tmp_name'];
    $fileSize=$_FILES['file']['size'];
    $fileError=$_FILES['file']['error'];
    $fileType=$_FILES['file']['type'];
  

    $fileExt=explode('.',$fileName);

    $fileActualExt=strtolower(end($fileExt));

    $allowed=array('jpg','jpeg','png','pdf');

    if(in_array($fileActualExt,$allowed)){
        if($fileError===0){
            if($fileSize<50000000){
                $fileNameNew=uniqid('',true).".".$fileActualExt;
                $fileDestination="./upload/".$fileNameNew;
                move_uploaded_file($_FILES['file']['tmp_name'],$fileDestination);
                print_r($fileDestination);

            }else{
                echo "you file is too big!";
            }

        }else{
            echo "there was an error uploading your file";
        }

    }else{
        echo "you cannot upload files of this type";
    }

}