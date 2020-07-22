<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>INFS7901-Tables</title>
    <style>

select#form1 {
    width:auto;
}
select#form2 {
    width:auto;
}

</style>
  </head>
<body style="background-color:E7BFAA;">


<div align="center">
<img class="mw-100" src="logo.png"style="width: 90%">
</div>



  <form>
    <input type="button" value="GO BACK " class="btn btn-warning" onclick="history.go(-1);return false;" />
    <input type="button" value="Home " class="btn btn-warning" onclick="window.location.href='https://yifei.uqcloud.net/MDPS/index.php'" />
  </form>
  <?php 
        // SETUP PHP CONNECTION
        $servername = "localhost";
        $username = "root";
        $password = "d74dbdad52b2dfe8";
        $dbname = "project_hospital";
        
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        if ($conn->connect_error) {
            die("<h3>Connection failed: ".$conn->connect_error."</h3>");
        }
    ?>


  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="https://yifei.uqcloud.net/MDPS/index.php">Home</a></li>
    <li class="breadcrumb-item"><a href="https://yifei.uqcloud.net/MDPS/includes/logged_in_as_doc.php">Doctor</a></li>
    <li class="breadcrumb-item active" aria-current="page">Delete</li>
    </ol>
    </nav>

  <?php
  echo str_repeat('&nbsp;', 100);
  echo "<h5>MYSQL Delete1</h5>";

    ?>
  <h7 style="color:red;text-align:left;">Select the Patients ID and Doctor ID to Delete</h7>
      <form method="POST" style="text-align:left;margin-bottom:300px,margin-top:200px,margin-left:100px;margin-right:600px" >
    <div class="form-group">
      <label for="form1">Patient ID</label>
      <select class="custom-select" name="pat_id" id="form1">
        <?php
$query = "SELECT p.pat_id
from doctor as d, pat_doc_1 as pd1 ,patient_1 as p
where d.doc_id = pd1.doc_id and p.pat_id = pd1.pat_id 
order by p.pat_id
";

$result = mysqli_query($conn, $query);

            ?>
        <option selected="">Choose...</option>
        <?php 
          while ($row = mysqli_fetch_array($result)) {
          echo "<option value=".$row["pat_id"].">".$row["pat_id"]."</option>";
          }
           ?>

      </select>
    </div>
    <div class="form-group">
      <label for="form2">Doctor ID</label>
      <select class="custom-select" name="doc_id" id="form1">
        <?php
$query = "SELECT *
from doctor
";

$result = mysqli_query($conn, $query);

            ?>
        <option selected="">Choose...</option>
        <?php 
          while ($row = mysqli_fetch_array($result)) {
          echo "<option value=".$row["doc_id"].">".$row["doc_id"]."</option>";
          }
           ?>

      </select>
    </div>
     <input type="submit" name="insert1" class="btn btn-primary btn-lg" value="Delete Diagnostic Result" style="text-align:right;margin:10px" />
  </form>

<?php 


$doc_id=$_POST['doc_id'];
$pat_id=$_POST['pat_id'];




if(isset($_POST["insert1"]) && $_POST["insert1"] != "") {

              $sql  = "DELETE FROM pat_doc_1 Where doc_id = '$doc_id' AND pat_id = '$pat_id';";
              $sql .= "DELETE FROM pat_doc_2 Where doc_id = '$doc_id' AND pat_id = '$pat_id';";

              
              // Execute multi query
              if (mysqli_multi_query($conn,$sql))
              {
                do
                  {
                  // Store first result set
                  if ($result=mysqli_store_result($conn)) {
                    // Fetch one and one row
                    while ($row=mysqli_fetch_row($result))
                      {
                      printf("%s\n",$row[0]);
                      }
                    // Free result set
                    mysqli_free_result($result);
                    }
                  }
                while (mysqli_next_result($conn));
              }
                                      //let them know the person has been added. 
                                      echo mysqli_errno($conn);
                                      echo "<span style='color:Green;'> Diagnotic information for PatientID $pat_id has successfully Deleted ... </span>";
                                      echo str_repeat('&nbsp;', 300);
            }
?>

 <?php
  echo str_repeat('&nbsp;', 100);
  echo "<h5>MYSQL Query - Join Query :Show all diagnostic results </h5>";
  echo str_repeat('&nbsp;', 500);
    ?>

  <table class="table thead-light table-bordered">
    <thead>
      <tr>
        <th scope="col">Patient ID</th>
        <th scope="col">Patient Name</th>
        <th scope="col">Doctor ID</th>
        <th scope="col">Doctor Name</th>
        <th scope="col">Symptom</th>
        <th scope="col">Disease</th>
        <th scope="col">If Undertake Surgery</th>
        <th scope="col">Treatment</th>
        <th scope="col">Visit Date</th>
        <th scope="col">Diagnosis Date</th>
      </tr>
    </thead>

    <tbody id="queryTable1">
      <?php
        $pat_id=$_POST['pat_id'];


                    $query = "select p1.pat_id,p1.pat_name,p1.visit_date,pd1.date,p1.symptom,pd2.doc_id,d.doc_name,pd2.disease,pd2.if_surge,pd2.treatment
                    from patient_1 p1,pat_doc_1 pd1,pat_doc_2 pd2,doctor as d
                    where p1.pat_id=pd1.pat_id and p1.pat_id=pd2.pat_id and d.doc_id = pd1.doc_id and d.doc_id = pd2.doc_id";
                    $result = mysqli_query($conn, $query);
                    
                    while ($rows = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>".$rows["pat_id"]."</td>";
                        echo "<td>".$rows["pat_name"]."</td>";
                        echo "<td>".$rows["doc_id"]."</td>";
                        echo "<td>".$rows["doc_name"]."</td>";
                        echo "<td>".$rows["symptom"]."</td>";
                        echo "<td>".$rows["disease"]."</td>";
                        echo "<td>".$rows["if_surge"]."</td>";
                        echo "<td>".$rows["treatment"]."</td>";
                        echo "<td>".$rows["visit_date"]."</td>";
                        echo "<td>".$rows["date"]."</td>";
                        echo "</tr>";
            }
            ?>

    </tbody>
  </table>
  <?php
  echo str_repeat('&nbsp;', 100);
  echo "<h5>MYSQL Query - Simple Query :Show all doctor information </h5>";
  echo str_repeat('&nbsp;', 500);
    ?>

  <table class="table thead-light table-bordered">
    <thead>
      <tr>
        <th scope="col">Doctor ID</th>
        <th scope="col">Doctor Name</th>
        <th scope="col">AGE</th>
      </tr>
    </thead>

    <tbody id="queryTable4">
      <?php

$query = "SELECT *
from doctor
";
                    $result = mysqli_query($conn, $query);
                    
                    while ($rows = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>".$rows["doc_id"]."</td>";
                        echo "<td>".$rows["doc_name"]."</td>";
                        echo "<td>".$rows["age"]."</td>";
                        echo "</tr>";
            }
            ?>

    </tbody>
  </table>


  
  
  
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>