<?php
if (isset($_GET['id'])) {
    include_once('db_connection.php');
    $id = $_GET['id'];
    $diaryname = $_POST['diaryname'];
    $diarylastname = $_POST['diarylastname'];
    $diarynumber_id = $_POST['diarynumber_id'];
    $diarydate_birth = $_POST['diarydate_birth'];
    $diarycity_residence = $_POST['diarycity_residence'];
    $diarydistrict = $_POST['diarydistrict'];
    $diarynumber_mobile = $_POST['diarynumber_mobile'];

    $sql = "UPDATE diary SET name='{$diaryname}', lastname='{$diarylastname}', number_id='{$diarynumber_id}', date_birth='{$diarydate_birth}', city_residence='{$diarycity_residence}', district='{$diarydistrict}', number_mobile='{$diarynumber_mobile}' WHERE id = {$id}";
    $resul = $conn->query($sql);
    header("location: index.php");
}

?>
