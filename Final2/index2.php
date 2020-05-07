<?php include_once('layouts/header.php'); ?>

<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="/final2/home.php">Home</a>
<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="/final2/add_diary.php">Create Diary</a>

<div class="table-responsive" style="height: 400px">
  <table class="table table-striped table-bordered table-hover">
    <thead class="thead-dark ">

      <tr class="text-center">
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">LastName</th>
        <th scope="col">ID Number</th>
        <th scope="col">Date of Birth</th>
        <th scope="col">City</th>
        <th scope="col">neighborhood</th>
        <th scope="col">Phone Number</th>
        <th scope="col">ACTION</th>

      </tr>
    </thead>
    <tbody>
      <?php

      try {
        include_once('db_connection.php');
        $sql = "SELECT * FROM diary";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            $rowTemplate = "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['lastname']}</td>
                <td>{$row['number_id']}</td>
                <td>{$row['date_birth']}</td>
                <td>{$row['city_residence']}</td>
                <td>{$row['district']}</td>
                <td>{$row['number_mobile']}</td>
                
                <td>
                  <a href='edit_diary.php?id={$row['id']}' class='badge badge-primary'>Edit </a>
                  <a href='delete_diary.php?id={$row['id']}' class='badge badge-danger' onClick=\"javascript: return confirm('Please confirm deletion');\">Delete </a> 

               
                  </td>
              </tr>";
            echo $rowTemplate;
          }
        }
      } catch (Exception $ex) {
        echo "Error";
      }
      ?>
    </tbody>
  </table>
</div>
<?php include_once('layouts/footer.php'); ?>