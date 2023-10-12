<!DOCTYPE html>
<!-- https://www.w3schools.com/css/tryit.asp?filename=trycss_website_layout_blog -->
<html lang="fi">
<head>
<link rel="stylesheet" href="styles/layout.css">
<meta charset="UTF-8">
</head>
<body>

<div class="topnav">
  <?php include 'menu.php';?>  
</div>

<?php include 'header.php';?>  

<div class="row">
  <div class="hae_leftcolumn">
    <div class="card">
      <h2>Kaikki tapahtumat</h2>
        <?php require 'tulevat_tapahtumat_SQL.php';?>
    </div>

  </div>
</div>

<div class="footer">
  <?php include 'footer.php';?>  
</div>

</body>
</html>
