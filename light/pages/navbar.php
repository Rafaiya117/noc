<?php
include 'pages/header.php';
?>
<div class="topnav">
  <a class="active" href="./dashboard.php">Cites App</a>
  <a href="./list_of_nocs.php">List of NOCs</a>
  <a href="./add_new_nocs.php">Create NOC</a>
  <a href="./details.php">NOC detail-page</a>
  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>
 <?php
 include 'pages/footer.php';
 ?>