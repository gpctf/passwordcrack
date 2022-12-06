<?php
if(isset($_POST['password'])&&is_string($_POST['password'])) {
    $password = $_POST['password'];
}
else {
    echo "No password provided";
    exit();
}
if(hash("sha256",$password)!="0e84837923611824342735254601414455016861658967528729588256413411") {
    echo "Recived " . hash("sha256", $password). "\n";
    echo "Wrong password";
    exit();
}
echo "Here is your flag: \n";
echo getenv("FLAG");
?>