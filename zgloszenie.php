<?php
    if($conn = mysqli_connect('localhost', "root", "", "wedkarstwo"));
    
    $lowisko = $_POST['lowisko'];
    $d = strtotime($_POST['data']);
    $sedzia = $_POST['sedzia'];
    
    $data = date("Y-m-d", $d);
    

    $query = "INSERT INTO zawody_wedkarskie VALUES(NULL, 0,'$lowisko', '$data', '$sedzia');";
    mysqli_query($conn, $query);
    mysqli_close($conn);
    header("Location: zawody.html");
    
?>