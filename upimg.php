<?php
$db = new mysqli("localhost", "Aayushman", "Aayushman1234$", "golden_food");

if ($db->connect_error) {
  echo "<script>if(window.confirm('Server not found!')){window.location='admin.html'}else{window.location='admin.html'}</script>";
}

if (isset($_POST['submit'])) {  
  $img=$_FILES['image']['name'];
  $tmpimg=$_FILES['image']['tmp_name'];
  $folder='sql/';

  move_uploaded_file($tmpimg, $folder.$img);

  $sql=$db->prepare("INSERT INTO znuni(image) VALUES(?)");
  $sql->bind_param("s", $img);

  if ($sql->execute()) {
    echo "<script>if(window.confirm('Document submitted successfully!')){";
    echo "window.location='admin.html'";
    echo "}else{";
    echo "window.location='admin.html'";
    echo "}</script>";
  } else {
    die("Error");
  }
}
?>
<!--if ($sql->execute()) {
      echo "<script>if(window.confirm('Document submitted successfully!')){";
      echo "window.location='admin.html'";
      echo "}else{";
      echo "//window.location='admin.html'";
      echo "}</script>";
    } else {
      die("Error");
    }-->