<?php
    if (!isset($_POST['diaryname'])){
        die("Error not comming data");
    }
    
        $diaryname = $_POST['diaryname'];        
        $diarylastname = $_POST['diarylastname'];
        $diarynumber_id = $_POST['diarynumber_id'];
        $diarydate_birth = $_POST['diarydate_birth'];
        $diarycity_residence = $_POST['diarycity_residence'];
        $diarydistrict = $_POST['diarydistrict'];
        $diarynumber_mobile = $_POST['diarynumber_mobile'];
        //print_r($_POST);
        
        try{
            include_once('db_connection.php');
            $sql = "INSERT INTO diary (name,lastname,number_id,date_birth,city_residence,district,number_mobile) values ('{$diaryname}','{$diarylastname}' ,'{$diarynumber_id}','{$diarydate_birth}','{$diarycity_residence}','{$diarydistrict}','{$diarynumber_mobile}')";
            $result = $conn->query($sql);
            header("location: index.php");

        }catch(Exception $ex){
            echo "DB connection error";
        }
?>
