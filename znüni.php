<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="style1.css">
  <link rel="icon" href="Images/foodicon.png" type="image/x-icon" />
  <script src="main.js"></script>
  <title>Golden Food</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Michroma&display=swap" rel="stylesheet" />
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
        <img src="Images/personal-icon.png" width="6%" id="per-icon" onclick="window.location='change2()'" />
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
  <center>
    <h1 id="k1" style="font-family: 'Michroma', sans-serif; margin-top: 5%">
      Wir bieten stets das Beste und Gesündeste an.
    </h1>
    <!--Do this later-->
    <div id="contain">
      <img src="Images/zn.PNG">
    </div>
  </center>
  <br>
  <br>
  <!--<script src="znüni.js"></script>-->
</body>

</html>