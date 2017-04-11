<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

 <script>
	 
	  

</script>

<?php
require_once 'config.php';
 
 if(!isset($_SESSION['uid']) || !isset($_SESSION['uname'])  ){header('location:index.php');}

?>  
 
<body>

<div class="container">
  
 
  <div class="alert alert-danger" style="display: none;">  </div>
  <div class="alert alert-warning" style="display: none;">  </div>
  <div class="alert alert-success" style="display: none;"> </div>



  <form class="form-horizontal" method="post" enctype="multipart/form-data" id="regitration_form"  action="main.php"  name="regitration_form">


<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="category.php">Category</a></li>
      <li><a href="product.php">Product</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>
</nav>


  </form>


</div>

</body>
</html>
