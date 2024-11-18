<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="../assets/css/side_nav.css"> -->
</head>
<body>
    
  
<div class="tab">
<button class="tablinks" onclick="openTab(event, 'Tab1')" id="defaultOpen">my information</button>
    <button class="tablinks" onclick="openTab(event, 'Tab2')" >View Announcement</button>
    <button class="tablinks" onclick="openTab(event, 'Tab3')">View Payment</button>
    <button class="tablinks" onclick="openTab(event, 'Tab4')">Houses and Apartments</button>
    <button class="tablinks" ><a href="../index.php">Log Out</a></button>
</div>


    <div id="Tab1" class="tabcontent">
        <p>
            <?php
            include "my_info.php";
            ?>
            </p>
      </div>
      
      <div id="Tab2" class="tabcontent">
        <p>
        <?php
            include "tenant_announce.php";
            ?>

        </p>
      </div>
      
      <div id="Tab3" class="tabcontent">
        <p>
            <?php
        include "my_info_payment.php";
?>
        </p>
      </div>

      <div id="Tab4" class="tabcontent">
        <p>
            <?php
        include "selecthouse.php";
?>
        </p>
      </div>

      <div id="Tab5" class="tabcontent">
        <p>
            <?php
        include "logout.php";
?>
        </p>
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


