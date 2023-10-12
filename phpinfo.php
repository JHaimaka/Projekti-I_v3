<!DOCTYPE html>
<html lang="fi">
<head>
<link rel="stylesheet" href="styles/layout.css">
<style>

</style>
</head>
<body>

<div class="topnav">
  <?php include_once 'menu.php';?>
</div>

<?php include_once 'header.php';?>

<div class="row">
  <div class="hae_leftcolumn">
    <div class="card">
      <h2>PHP Info palvelimelta</h2>
      <?php phpinfo();?>
    </div>
  </div>
</div>

<div class="footer">
  <?php include_once 'footer.php';?>
</div>

</body>
</html>
