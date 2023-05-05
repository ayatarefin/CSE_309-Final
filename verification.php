<?php
    include "connection.php";
    $error_msg = '';
    if (isset($_POST['submit'])) {
        $username = $_POST['userId'];
        session_start();
        $_SESSION["developerid"]=$username;
        $password = $_POST['password'];
        $sql = "SELECT * FROM user WHERE userID='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result)> 0) {
            while($row=mysqli_fetch_assoc($result)){
                if($row["Role"]=="Manager"){
                    header('Location:Project Manager/projectManager.php');
                }
                elseif($row["Role"]=="Developer"){
                    header('Location:Employee/employee.php');
                }
                elseif
                ($row["Role"]=="Analyst"){
                    header('Location:Employee/employee.php');
                }
                elseif
                ($row["Role"]=="Designer"){
                    header('Location:Employee/employee.php');
                }
                elseif
                ($row["Role"]=="Client"){
                    header('Location:client/client.php');
                }
            }
        }
        else {
            $error_msg = 'Invalid user information. Please try again.';
        }
        mysqli_close($conn);
    }
?>