<?php
$servername = "localhost";
$username = "Aayushman";
$password = "Aayushman1234$";
$dbName = "golden_food";
$db = new mysqli($servername, $username, $password, $dbName);

if ($db->connect_error) {
    echo "<script>if(window.confirm('Server not found!')){window.location='admin.html'}else{window.location='admin.html'}</script>";
}

if (isset($_POST['submit'])) {
    $mon1 = $_POST['mon1'];
    $m1 = $_POST['m1'];
    $tue1 = $_POST['tue1'];
    $t1 = $_POST['t1'];
    $wed1 = $_POST['wed1'];
    $w1 = $_POST['w1'];
    $thu1 = $_POST['thu1'];
    $th1 = $_POST['th1'];
    $fri1 = $_POST['fri1'];
    $f1 = $_POST['f1'];

    // Prepare the statement
    $stmt = $db->prepare("INSERT INTO week1(mon,m_prize,tue,t_prize,wed,w_prize,thu,th_prize,fri,f_prize) VALUES(?,?,?,?,?,?,?,?,?,?)");

    // Bind the parameters to the statement
    $stmt->bind_param("sisisisisi", $mon1, $m1, $tue1, $t1, $wed1, $w1, $thu1, $th1,$fri1, $f1);

   // Execute the statement
   if ($stmt->execute()) {
        echo "<script>";
        echo "if(window.confirm('Submitted successfully!')){";
        echo "window.location='admin.html'";
        echo "}else{";
        echo "window.location='food1.html'";
        echo "}</script>";
    }
}
