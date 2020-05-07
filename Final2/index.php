<?php include_once('layouts/header.php'); ?>

<div class="row bg-dark text-white pt-2">

    <div class="col-sm-12 d-flex justify-content-center">
        <h2> <b>Your Schedule</b></h2>
    </div>

</div>


<div class="table-responsive" style="height: 500px">
<div style="background-color: #F0B27A;" >

    <div class="form-row text-center mb-4 pb-3 d-flex justify-content-center">

      <?php

      try {
        include_once('db_connection.php');
        $sql = "SELECT * FROM diary ORDER BY name";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {

            $rowCardTemplate = "
            <div class='row  m-2'>
            <div class='col-4'>
            <div class='card ' style='width: 18rem;'>
              <div class='card-body'>
                <h5 class='card-title'>{$row['name']} {$row['lastname']}</h5>
                <h6 class='card-subtitle mb-2 text-muted'>ID: {$row['number_id']} - Date:{$row['date_birth']}</h6>
                <p class='card-text'><b>City:</b> {$row['city_residence']} <br><b> Neighborhood:</b> {$row['district']} <br><b>Phone Number:</b> {$row['number_mobile']}</p>
                <div class='card-footer bg-transparent border-success'>

                <a href='edit_diary.php?id={$row['id']}' class='card-link'>Edit</a>
                <a href='delete_diary.php?id={$row['id']}' class='card-link text-danger'  onClick=\"javascript: return confirm('Please confirm deletion');\">Delete</a>
               </div>
              </div>
            </div>
           </div>
           </div>
       
        ";
            echo $rowCardTemplate;
          }
        }
      } catch (Exception $ex) {
        echo "Error";
      }
      ?>

    </div>

</div>
</div>

</div>
<?php include_once('layouts/footer.php'); ?>