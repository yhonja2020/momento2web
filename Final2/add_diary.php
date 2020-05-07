<?php include_once('layouts/header.php'); ?>

<!-- <label for="exampleInputLastName"><h3>Registry</h3></label> -->

<!--  action="save_diary.php" method="post" -->
<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="/final2/home.php">Home</a>

<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="/final2/index.php">List Agenda</a>

<br>
<div class="row bg-dark text-white pt-2">

    <div class="col-sm-12 d-flex justify-content-center">
        <h2> <b>Schedule</b></h2>
    </div>

</div>

<form action="save_diary.php" method="post" onsubmit="return validar();" class="pl-3 pr-3 pb-3 shadow">


    <div class="row">
        <div class="form-group col-sm-12 col-md-6">
            <label for="diaryname">Name</label>
            <input type="text" name="diaryname" class="form-control" id="diaryname" placeholder="Enter name">

        </div>

        <div class="form-group col-sm-12 col-md-6">
            <label for="diarylastname">Last LasName</label>
            <input type="text" name="diarylastname" class="form-control" id="diarylastname" placeholder="Enter last name">
        </div>
    </div>



    <div class="row">
        <div class="form-group col-sm-12 col-md-6">
            <label for="diarynumber_id">Number_ID</label>
            <input type="text" name="diarynumber_id" class="form-control" id="diarynumber_id" placeholder="Enter Number_ID">

        </div>
        <div class="form-group col-sm-12 col-md-6">
            <label for="diarydate_birth">Date_Birth</label>
            <input type="date" name="diarydate_birth" class="form-control" id="diarydate_birth" placeholder="Enter date_birth">

        </div>
    </div>



    <div class="row">
        <div class="form-group col-sm-12 col-md-6">
            <label for="diarycity_residence">City_Residence</label>
            <input type="text" name="diarycity_residence" class="form-control" id="diarycity_residence" placeholder="Enter City Residence">

        </div>

        <div class="form-group col-sm-12 col-md-6">
            <label for="diarydistrict">Neighborhood</label>
            <input type="text" name="diarydistrict" class="form-control" id="diarydistrict" placeholder="Enter Neighborhood">
        </div>
    </div>

    <div class="row">
        <div class="form-group col-sm-12 col-md-6">
            <label for="diarynumber_mobile">Phone Number</label>
            <input type="text" name="diarynumber_mobile" class="form-control" id="diarynumber_mobile" placeholder="Enter Phone Number">
        </div>
    </div>



    <button type="submit" class="btn btn-dark">Submit</button>
    <a class="btn btn-info add-new" href="index.php" role="button">Cancelar</a>

</form>



<?php include_once('layouts/footer.php'); ?>