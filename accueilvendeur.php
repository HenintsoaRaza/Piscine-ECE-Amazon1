<!DOCTYPE html>
<html>
<head>
<title>Amazon ECE</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet"
 href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="css/all.min.css">
 <link rel="stylesheet" type="text/css" href="CssAmazon.css">
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<script type="text/javascript">
 $(document).ready(function(){
 $('.header').height($(window).height());
 });
</script>
<header class="page-header header container-fluid" style="background-image: url('<?php echo $_SESSION['image']; ?>');" heigth="100%" width="100%">

</head>
<body>
	<form action="acven.php" method="post">

<nav class="navbar navbar-expand-md">
	
 <a class="navbar-brand">
  <img src="newlogo.png" alt="logo">
</a>

 
 <div class="collapse navbar-collapse" id="main-navigation">
 <ul class="navbar-nav">

  <input type="submit" class="btn btn-secondary btn-block" value="<?php echo $_SESSION['pseudo']; ?>"" name="Dec">  

</nav>


 <header class="page-header header container-fluid">	
 	<div class="overlay"></div>
 </header>
</body>
</html>