<?php

$error=''; 

include "koneksi.php";
if(isset($_POST['submit']))
{               
    $id   = $_POST['id'];
    $username   = $_POST['username'];
    $password   = $_POST['password'];
    $level      = $_POST['level'];
                    
    $query = mysqli_query($connection, "SELECT * FROM user WHERE username='$username' AND password='$password'");
    if(mysqli_num_rows($query) == 0)
    {
        $error = "Username or Password is invalid";
    }
    else
    {
        $row = mysqli_fetch_assoc($query);
        $_SESSION['username']=$row['username'];
        $_SESSION['level'] = $row['level'];
        
        if($row['level'] == "admin" && $level=="1")
        {
            
            header("Location: home.php");
        }
        else if($row['level'] =="psikolog" && $level=="2")
        {
            header("Location: halpsikolog.php");
        }
        else if($row['level'] == "pengguna" && $level=="3")
        {
            
            header("Location: halpengguna.php");
        }
        else
        {
            $error = "Failed Login";
        }
    }
}
            
?>