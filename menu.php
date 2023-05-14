<?php
$db = new mysqli("localhost", "Aayushman", "Aayushman1234$", "golden_food");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Golden Food</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="style1.css" />
  <link rel="icon" href="Images/foodicon.png" type="image/x-icon" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Michroma&display=swap" rel="stylesheet" />
  <script src="main.js"></script>
</head>

<body>
  <section id="sec-nav">
    <nav class="header">
      <img class="logo" src="Images/food-header.png" width="30%" onclick="change1()" />
      <div class="mobile">
        <div id="menu">
          <img src="Images/drop-icon.png" id="dropdown" width="10%" />
          <ul id="drop-list">
            <li>
              <a target="_blank" href="https://www.steinerschule-basel.ch/mittagstisch-2/">INFO</a>
            </li>
            <li>
              <a target="_blank" href="https://www.steinerschule-basel.ch/">SCHULE</a>
            </li>
            <li onclick="window.location='location.html'">STANDORT</li>
          </ul>
        </div>
        <img src="Images/personal-icon.png" width="6%" id="per-icon" onclick="window.location='loginScreen.php'" />
      </div>
      <div class="follow">
        <a target="_blank" href="https://www.steinerschule-basel.ch/mittagstisch-2/">INFO</a>
        <a target="_blank" href="https://www.steinerschule-basel.ch/">SCHULE</a>
        <a href="location.html">STANDORT</a>
        <div class="login" onclick="change2()">
          PERSONAL <img src="Images/arrow.png" width="5%" />
        </div>
      </div>
    </nav>
  </section>
  <br />
  <center>
    <h1 class="m1" style="font-family: 'Michroma', sans-serif; margin-top: 2%; color: blue">
      Hier ist das Menu dieser Woche
    </h1>
    <div class="sp">
      <img src="Images/mo.png" />
      <span class="cn">
        <?php
        $sql = "SELECT * FROM week1 WHERE ID=(SELECT max(ID) FROM week1)";
        $result = mysqli_query($db, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
          $row = mysqli_fetch_assoc($result);
          echo $row['mon'];
        }else{
          echo "<g style='opacity:50%;'>Keine Angaben</g>";
        }
        ?>
      </span>
      <span class="cn">
        <?php
        $sql = "SELECT * FROM week1 WHERE ID=(SELECT max(ID) FROM week1)";
        $result = mysqli_query($db, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
          $row = mysqli_fetch_assoc($result);
          echo $row['m_prize'];
        }else{
          echo "<g style='opacity:50%;'>Keine Angaben</g>";
        }
        ?>
      </span>
    </div>
    <div class="sp">
      <img src="Images/di.png" />
      <span class="cn">
        <?php
        $sql = "SELECT * FROM week1 WHERE ID=(SELECT max(ID) FROM week1)";
        $result = mysqli_query($db, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
          $row = mysqli_fetch_assoc($result);
          echo $row['tue'];
        }else{
          echo "<g style='opacity:50%;'>Keine Angaben</g>";
        }
        ?>
      </span>
      <span class="cn">
        <?php
        $sql = "SELECT * FROM week1 WHERE ID=(SELECT max(ID) FROM week1)";
        $result = mysqli_query($db, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
          $row = mysqli_fetch_assoc($result);
          echo $row['t_prize'];
        }else{
          echo "<g style='opacity:50%;'>Keine Angaben</g>";
        }
        ?>
      </span>
    </div>
    <div class="sp">
      <img src="Images/mi.png" />
      <span class="cn">
        <?php
        $sql = "SELECT * FROM week1 WHERE ID=(SELECT max(ID) FROM week1)";
        $result = mysqli_query($db, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
          $row = mysqli_fetch_assoc($result);
          echo $row['wed'];
        }else{
          echo "<g style='opacity:50%;'>Keine Angaben</g>";
        }
        ?>
      </span>
      <span class="cn">
        <?php
        $sql = "SELECT * FROM week1 WHERE ID=(SELECT max(ID) FROM week1)";
        $result = mysqli_query($db, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
          $row = mysqli_fetch_assoc($result);
          echo $row['w_prize'];
        }else{
          echo "<g style='opacity:50%;'>Keine Angaben</g>";
        }
        ?>
      </span>
    </div>
    <div class="sp">
      <img src="Images/do.png" />
      <span class="cn">
        <?php
        $sql = "SELECT * FROM week1 WHERE ID=(SELECT max(ID) FROM week1)";
        $result = mysqli_query($db, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
          $row = mysqli_fetch_assoc($result);
          echo $row['thu'];
        }else{
          echo "<g style='opacity:50%;'>Keine Angaben</g>";
        }
        ?>
      </span>
      <span class="cn">
        <?php
        $sql = "SELECT * FROM week1 WHERE ID=(SELECT max(ID) FROM week1)";
        $result = mysqli_query($db, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
          $row = mysqli_fetch_assoc($result);
          echo $row['th_prize'];
        }else{
          echo "<g style='opacity:50%;'>Keine Angaben</g>";
        }
        ?>
      </span>
    </div>
    <div class="sp">
      <img src="Images/fr.png" />
      <span class="cn">
        <?php
        $sql = "SELECT * FROM week1 WHERE ID=(SELECT max(ID) FROM week1)";
        $result = mysqli_query($db, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
          $row = mysqli_fetch_assoc($result);
          echo $row['fri'];
        }else{
          echo "<g style='opacity:50%;'>Keine Angaben</g>";
        }
        ?>
      </span>
      <span class="cn">
        <?php
        $sql = "SELECT * FROM week1 WHERE ID=(SELECT max(ID) FROM week1)";
        $result = mysqli_query($db, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
          $row = mysqli_fetch_assoc($result);
          echo $row['f_prize'];
        }else{
          echo "<g style='opacity:50%;'>Keine Angaben</g>";
        }
        ?>
      </span>
    </div>
    <br />
    <h1 class="m1" style="font-family: 'Michroma', sans-serif; margin-top: 2%; color: red">
      Hier ist das Menu der nächsten Woche
    </h1>
    <div class="sp">
      <img src="Images/mo.png" />
      <span class="cn">
        <?php
        $sql = "SELECT * FROM week2 WHERE ID=(SELECT max(ID) FROM week1)";
        $result = mysqli_query($db, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
          $row = mysqli_fetch_assoc($result);
          echo $row['mon'];
        }else{
          echo "<g style='opacity:50%;'>Keine Angaben</g>";
        }
        ?>
      </span>
      <span class="cn">
        <?php
        $sql = "SELECT * FROM week2 WHERE ID=(SELECT max(ID) FROM week1)";
        $result = mysqli_query($db, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
          $row = mysqli_fetch_assoc($result);
          echo $row['m_prize'];
        }else{
          echo "<g style='opacity:50%;'>Keine Angaben</g>";
        }
        ?>
      </span>
    </div>
    <div class="sp">
      <img src="Images/di.png" />
      <span class="cn">
        <?php
        $sql = "SELECT * FROM week2 WHERE ID=(SELECT max(ID) FROM week1)";
        $result = mysqli_query($db, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
          $row = mysqli_fetch_assoc($result);
          echo $row['tue'];
        }else{
          echo "<g style='opacity:50%;'>Keine Angaben</g>";
        }
        ?>
      </span>
      <span class="cn">
        <?php
        $sql = "SELECT * FROM week2 WHERE ID=(SELECT max(ID) FROM week1)";
        $result = mysqli_query($db, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
          $row = mysqli_fetch_assoc($result);
          echo $row['t_prize'];
        }else{
          echo "<g style='opacity:50%;'>Keine Angaben</g>";
        }
        ?>
      </span>
    </div>
    <div class="sp">
      <img src="Images/mi.png" />
      <span class="cn">
        <?php
        $sql = "SELECT * FROM week2 WHERE ID=(SELECT max(ID) FROM week1)";
        $result = mysqli_query($db, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
          $row = mysqli_fetch_assoc($result);
          echo $row['wed'];
        }else{
          echo "<g style='opacity:50%;'>Keine Angaben</g>";
        }
        ?>
      </span>
      <span class="cn">
        <?php
        $sql = "SELECT * FROM week2 WHERE ID=(SELECT max(ID) FROM week1)";
        $result = mysqli_query($db, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
          $row = mysqli_fetch_assoc($result);
          echo $row['w_prize'];
        }else{
          echo "<g style='opacity:50%;'>Keine Angaben</g>";
        }
        ?>
      </span>
    </div>
    <div class="sp">
      <img src="Images/do.png" />
      <span class="cn">
        <?php
        $sql = "SELECT * FROM week2 WHERE ID=(SELECT max(ID) FROM week1)";
        $result = mysqli_query($db, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
          $row = mysqli_fetch_assoc($result);
          echo $row['thu'];
        }else{
          echo "<g style='opacity:50%;'>Keine Angaben</g>";
        }
        ?>
      </span>
      <span class="cn">
        <?php
        $sql = "SELECT * FROM week2 WHERE ID=(SELECT max(ID) FROM week1)";
        $result = mysqli_query($db, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
          $row = mysqli_fetch_assoc($result);
          echo $row['th_prize'];
        }else{
          echo "<g style='opacity:50%;'>Keine Angaben</g>";
        }
        ?>
      </span>
    </div>
    <div class="sp">
      <img src="Images/fr.png" />
      <span class="cn">
        <?php
        $sql = "SELECT * FROM week2 WHERE ID=(SELECT max(ID) FROM week1)";
        $result = mysqli_query($db, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
          $row = mysqli_fetch_assoc($result);
          echo $row['fri'];
        }else{
          echo "<g style='opacity:50%;'>Keine Angaben</g>";
        }
        ?>
      </span>
      <span class="cn">
        <!--Keine Angaben message pass!-->
        <?php
        $sql = "SELECT * FROM week2 WHERE ID=(SELECT max(ID) FROM week1)";
        $result = mysqli_query($db, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
          $row = mysqli_fetch_assoc($result);
          echo $row['f_prize'];
        }else{
          echo "<g style='opacity:50%;'>Keine Angaben</g>";
        }
        ?>
      </span>
    </div>
  </center>
  <!--<script src="menu.js"></script>-->
</body>

</html>