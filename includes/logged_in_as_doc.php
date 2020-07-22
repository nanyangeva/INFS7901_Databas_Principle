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

  <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="https://yifei.uqcloud.net/MDPS/index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Doctor</li>
  </ol>
  </nav>


<div class="col-12 col-md-3 col-xl-2 bd-sidebar">
          <form class="bd-search d-flex align-items-center">
  <span class="algolia-autocomplete" style="position: relative; display: inline-block; direction: ltr;"><input type="search" class="form-control ds-input" id="search-input" placeholder="Search..." autocomplete="off" spellcheck="false" role="combobox" aria-autocomplete="list" aria-expanded="false" aria-owns="algolia-autocomplete-listbox-0" dir="auto" style="position: relative; vertical-align: top;"><pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: normal; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre><span class="ds-dropdown-menu" role="listbox" id="algolia-autocomplete-listbox-0" style="position: absolute; top: 100%; z-index: 100; display: none; left: 0px; right: auto;"><div class="ds-dataset-1"></div></span></span>
  <button class="btn btn-link bd-search-docs-toggle d-md-none p-0 ml-3" type="button" data-toggle="collapse" data-target="#bd-docs-nav" aria-controls="bd-docs-nav" aria-expanded="false" aria-label="Toggle docs navigation"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30" height="30" focusable="false"><title>Menu</title><path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4 7h22M4 15h22M4 23h22"></path></svg>
</button>
</form>
<nav class="collapse bd-links" id="bd-docs-nav"><div class="bd-toc-item">
<div class="bd-toc-item active">
      <a class="bd-toc-link" href="https://yifei.uqcloud.net/MDPS/includes/logged_in_as_doc.php">
        Doctor
      </a>

      <ul class="nav bd-sidenav"><li>
            <a href="https://yifei.uqcloud.net/MDPS/includes/doc_query/queries.php">
              Query
            </a></li><li>
    </div>
    </nav>
</div>




<div class="container-fluid col-12 col-md-9 col-xl-8 py-md-3 bd-content" style="background-color:lightblue">
  <form action="doc_query/queries.php" method="post" style="margin:100px">
    <input type="submit" class="btn btn-warning btn-lg btn-block" value="Do Queries" style="text-align:center;margin:10px" />
  </form>
  
  <form action="doc_insert/insert1.php" method="post" style="margin:100px">
    <input type="submit" class="btn btn-warning btn-lg btn-block" value="Add Diagnosis Result for New Patient" style="text-align:center;margin:10px" />
  </form>
  <form action="doc_insert/insert2.php" method="post" style="margin:100px">
    <input type="submit" class="btn btn-warning btn-lg btn-block" value="Add Diagnosis Result for Existing Patient" style="text-align:center;margin:10px" />
  </form>
  <form action="doc_update/update1.php" method="post" style="margin:100px">
    <input type="submit" class="btn btn-warning btn-lg btn-block" value="Update Diagnosis Result for Existing Patient" style="text-align:center;margin:10px" />
  </form>
  <form action="doc_delete/delete1.php" method="post" style="margin:100px">
    <input type="submit" class="btn btn-warning btn-lg btn-block" value="Delete Diagnosis Result for Existing Patient" style="text-align:center;margin:10px" />
  </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
