<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="../assets/css/side_nav.css"> -->
</head>
<body >

  <div class="tab">
  <button class="tablinks" onclick="openTab(event, 'Tab1')" >Add Tenant</button>
    <button class="tablinks" onclick="openTab(event, 'Tab2')" id="defaultOpen">See All Tenants</button>
    <button class="tablinks" onclick="openTab(event, 'Tab3')">Announcement</button>
    <button class="tablinks" onclick="openTab(event, 'Tab4')">Announcement Made</button>
    <button class="tablinks" onclick="openTab(event, 'Tab5')">See Request</button>
    <button class="tablinks" ><a href="../index.php">Log Out</a></button>
</div>


<div id="Tab1" class="tabcontent">
<?php
            include "add_tenants.php";
            ?>
</div>

<div id="Tab2" class="tabcontent">
<?php
            include "all_tenants.php";
            ?>
</div>

<div id="Tab3" class="tabcontent">
<?php
        include "admin_announce.php";
?>
</div>


<div id="Tab4" class="tabcontent">
<?php
        include "admin_view_announ.php";
?>
</div>

<div id="Tab5" class="tabcontent">
<?php
        include "admin_see_request.php";
?>
</div>




  <script src="../assets/js/side_push.js"></script>

  </body>
</html>

<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
  color: black;
}

tr:hover {background-color: coral;}
</style>


