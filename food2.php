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
    $mon2 = $_POST['mon2'];
    $m2 = $_POST['m2'];
    $tue2 = $_POST['tue2'];
    $t2 = $_POST['t2'];
    $wed2 = $_POST['wed2'];
    $w2 = $_POST['w2'];
    $thu2 = $_POST['thu2'];
    $th2 = $_POST['th2'];
    $fri2 = $_POST['fri2'];
    $f2 = $_POST['f2'];


    $stmt = $db->prepare("INSERT INTO week2(mon,m_prize,tue,t_prize,wed,w_prize,thu,th_prize,fri,f_prize) VALUES(?,?,?,?,?,?,?,?,?,?)");

    $stmt->bind_param("sisisisisi", $mon2, $m2, $tue2, $t2, $wed2, $w2, $thu2, $th2, $fri2, $f2);

    if ($stmt->execute()) {
        echo "<script>";
        echo "if(window.confirm('Submitted successfully!')){";
        echo "window.location='admin.html'";
        echo "}else{";
        echo "window.location='food1.html'";
        echo "}</script>";
    } else {
        die("Something went wrong :-((");
    }
}
