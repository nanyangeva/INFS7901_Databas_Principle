<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>INFS7901-Tables</title>
    <style>
input#form1 {
    width:auto;
}
input#form2 {
    width:auto;
}
select#form3 {
    width:auto;
}
input#form4 {
    width:auto;
}
select#form7 {
    width:auto;
}
select#form9 {
    width:auto;
}
input#form8 {
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
    <li class="breadcrumb-item"><a href="https://yifei.uqcloud.net/MDPS/includes/logged_in_as_pat.php">Patient</a></li>
    <li class="breadcrumb-item active" aria-current="page">Insert</li>
  </ol>
</nav>


  <?php  
  echo str_repeat('&nbsp;', 10);
  echo "<h5>MYSQL Insertion1</h5>";
  echo "<h5>Insert New Patient Information</h5>";

    ?>




  <form method="POST" style="text-align:left;margin-bottom:300px,margin-top:200px,margin-left:100px;margin-right:600px" >
    <div class="form-group">
      <label for="form1">Patient's Name</label>
      <input type="text" class="form-control" id="form1" name="pat_name" placeholder="First Name   Last Name">
    </div>
    <div class="form-group">
      <label for="form2">Age</label>
      <input type="text" class="form-control" id="form2" name="age" placeholder="Age">
    </div>
    <div class="form-group">
      <div>
      <label for="form3">Gender</label>
      </div>
      <div>
      <select class="custom-select" name="gender" id="form3">
        <option selected="">Choose...</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
      </select>
      </div>
    </div>
    <div class="form-group">
      <div>
      <label for="form9">Hospital Name</label>
      </div>
      <div>
      <select class="custom-select" name="hos_name" id="form9">
      </div>
      <?php
$query = "SELECT hos_name
from hospital
";

$result = mysqli_query($conn, $query);

            ?>
        <option selected="">Choose...</option>
        <?php 
          while ($row = mysqli_fetch_array($result)) {
          echo "<option value=".$row["hos_name"].">".$row["hos_name"]."</option>";
          }
           ?>
      </select>
    </div>
    <div class="form-group">
      <label for="form4">Home Address</label>
      <input type="text" class="form-control" id="form4" name="address" placeholder="111 Hollywood Ave">
    </div>
    <div class="form-group">
    <label for="table1">Visiting Date</label>
    <table border="0" cellspacing="0" id="table1">

    <tr><td  align=left  >   

    <input type="date" id="date" name="visit_date">

    </table>

</div>
    <div class="form-group">
      <label for="form6">Symptom</label>
      <input type="text" class="form-control" id="form6" name="symptom" placeholder="Symptom">
    </div>
    <div class="form-group">
      <div>
      <label for="form7">Inpatient or Outpatient</label>
      </div>
      <div>
      <select class="custom-select" name="T" id="form7">
        <option selected="">Choose...</option>
        <option value="1">Inpatient</option>
        <option value="0">Outpatient</option>
      </select>
      </div>
    </div>
    <div class="form-group">
      <label for="form8">How Many Days You Expect to Stay in Hospital</label>
      <input type="text" class="form-control" id="form8" name="dur_in_hos" placeholder="Only for Inpatient">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

<?php 


$pat_name=$_POST['pat_name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$symptom=$_POST['symptom'];
$hos_name=$_POST['hos_name'];
$T=$_POST['T'];
$dur_in_hos=$_POST['dur_in_hos'];


$todo=$_POST['todo'];

$visit_date=$_POST['visit_date'];




$sql  = "INSERT INTO patient_1(pat_id,pat_name,age,gender,address,visit_date,symptom) VALUES(NULL,'$pat_name','$age','$gender','$address','$visit_date','$symptom');";


if ($T > "0")
{
  $sql .= "INSERT INTO inpatient(pat_id,hos_name,dur_in_hos) VALUES(LAST_INSERT_ID(),(SELECT hos_name FROM hospital WHERE hos_name = 'Little Rabbit Hospital'),'$dur_in_hos')";
}else{
  $sql .= "INSERT INTO outpatient(pat_id,hos_name) VALUES(LAST_INSERT_ID(),(SELECT hos_name FROM hospital WHERE hos_name = 'Little Rabbit Hospital'))";
}


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
echo "The New Patient Information is Added!";
?>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>