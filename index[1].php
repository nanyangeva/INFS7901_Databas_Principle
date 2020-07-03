<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>INFS7901-Tables</title>
  </head>
<body style="background-color:E7BFAA;">


<div align="center">
<img class="mw-100" src="logo.png"style="width: 90%">
</div>



  <form>
    <input type="button" value="GO BACK " class="btn btn-warning" onclick="history.go(-1);return false;" />
    <input type="button" value="Home " class="btn btn-warning" onclick="window.location.href='https://yifei.uqcloud.net/MDPS/index.php'" />
  </form>

  <nav aria-label="breadcrumb" style="background-color:E7BFAA;">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Home</li>
  </ol>
</nav>



<div class="col-12 col-md-3 col-xl-2 bd-sidebar">
<div>
  <form>
    <input type="button" value="Show ER-Diagram" class="btn btn-outline-info btn-lg float-left mb-5 mt-5" onclick="window.location.href='er_diagram/er.php'" />
  </form>
  </div>
<div>
  <form>
    
    <input type="button" value=" Project    Proposal " class="btn btn-outline-info btn-lg float-left mt-5" onclick="window.location.href='summary/summary.php'" />
  </form>
  </div>
</div>


  <div class="container-fluid col-12 col-md-9 col-xl-8 py-md-3 bd-content" style="background-color:lightblue">
  <form action="includes/logged_in_as_doc.php" method="post" style="margin:200px">
    <input type="submit" class="btn btn-warning btn-lg btn-block" value="Log in as Doctor" style="text-align:center;margin:10px" />
  </form>

  
  <form action="includes/logged_in_as_pat.php" method="post" style="margin:200px">
    <input type="submit" class="btn btn-warning btn-lg btn-block" value="Log in as Patient" style="text-align:center;margin:10px" />
  </form>
  </div>



  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>




