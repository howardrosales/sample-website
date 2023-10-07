<?php
echo gethostbyname("http://localhost/website/index.php");

    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])){
        $conn = mysqli_connect("localhost", "root", "", "haal") or die("Connection Failed:".mysqli_connect_error());
        if(isset($_POST["student"])){
            $student = $_POST["student"];
            $datetime = date_default_timezone_set("Asia/Manila").date("Y-m-d H:i:s");

            $sql = "INSERT INTO `students` (`name`, `date_and_time`) VALUES ('$student', '$datetime')";
            
            $query = mysqli_query($conn, $sql);

            if($query){
                echo "Successfully";
                echo $datetime;
            } else{
                echo "Error occurred";
            }
        }
    }

?>