<?php
if (isset($_GET['id'])) {
  include_once('db_connection.php');
  $id = $_GET['id'];
  $sql = "SELECT * FROM diary WHERE id = {$id}";
  $resul = $conn->query($sql);
  if ($resul->num_rows > 0) {
    $row = $resul->fetch_assoc();
  }
}

?>

<?php include_once('layouts/header.php'); ?>


<div class="row bg-dark text-white pt-2">

  <div class="col-sm-12 d-flex justify-content-center">
    <h2>Edit <b>Cita</b></h2>
  </div>

</div>


<form action="update_diary.php?id=<?php echo $row['id'] ?>" method="post" onsubmit="return validar();" class="pl-3 pr-3 pb-3 shadow">
  <div class="row">
    <div class="form-group col-sm-12 col-md-6">
      <label for="diaryname">Name</label>
      <input type="text" value="<?php echo $row['name'] ?>" name="diaryname" class="form-control" id="diaryname" placeholder="Enter Task Name">

    </div>
    <div class="form-group col-sm-12 col-md-6">
      <label for="diarylastname">LastName</label>
      <input type="text" value="<?php echo $row['lastname'] ?>" name="diarylastname" class="form-control" id="diarylastname" placeholder="Enter Task Date">
    </div>
  </div>

  <div class="row">
    <div class="form-group col-sm-12 col-md-6">
      <label for="diarynumber_id">Number_ID</label>
      <input type="text" value="<?php echo $row['number_id'] ?>" name="diarynumber_id" class="form-control" id="diarynumber_id" aria-describedby="emailHelp" placeholder="Enter Number_ID">

    </div>
    <div class="form-group col-sm-12 col-md-6">
      <label for="diarydate_birth">Date_Birth</label>
      <input type="date" value="<?php echo $row['date_birth'] ?>" name="diarydate_birth" class="form-control" id="diarydate_birth" placeholder="Enter Date_Birth">
    </div>
  </div>

  <div class="row">
    <div class="form-group col-sm-12 col-md-6">
      <label for="diarycity_residence">City_Residence</label>
      <input type="text" value="<?php echo $row['city_residence'] ?>" name="diarycity_residence" class="form-control" id="diarycity_residence" placeholder="City_Residence">

    </div>
    <div class="form-group col-sm-12 col-md-6">
      <label for="diarydistrict">Neighborhood</label>
      <input type="text" value="<?php echo $row['district'] ?>" name="diarydistrict" class="form-control" id="diarydistrict" placeholder="Enter Neighborhood">
    </div>
  </div>

  <div class="row">
    <div class="form-group col-sm-12 col-md-6">
      <label for="diarynumber_mobile">Phone Number</label>
      <input type="text" value="<?php echo $row['number_mobile'] ?>" name="diarynumber_mobile" class="form-control" id="diarynumber_mobile" placeholder="Enter Phone Number">

    </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a class="btn btn-primary" href="index.php" role="button">Cancelar</a>
</form>


<?php include_once('layouts/footer.php'); ?>