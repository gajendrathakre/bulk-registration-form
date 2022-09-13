<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "bulkdata";

$conn = mysqli_connect($servername, $username, $password, $databasename);

if($conn){
    ?>
    <script>
        alert ('Database Connection was Sucessful');
    </script>
    <?php
}else{
    ?>
    <script>
        alert ('Database Connection Error!!!');
    </script>
    <?php
}

?>