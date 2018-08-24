<?php
    include_once('connection.php');
    session_start();
    
    if( isset($_SESSION['username']))
    {
        header('Location:user_panel.php');
    }
    else if(isset($_SESSION['admin']))
    {
        header('Location:admin/admin_panel.php');
    }
    
    $response = '';
    if( $_SERVER['REQUEST_METHOD'] == 'POST' )
    {
        $user_id = $_POST['user_id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        //variable for storing response
        $response ='';
        $correct_response = '';

        
        if( empty($name) || empty($email) || empty($password)||empty($user_id))
        {
            $response = 'Fields cant be empty';
        }
        else
        {
           
            $query = "SELECT `email` FROM `users` WHERE `email`='$email'";
            $result = mysqli_query($conn , $query);
            if(mysqli_num_rows($result) > 0)
            {
                $response = 'Email already registered';
            }
            else
            {
                 
                $password = md5($password);

               
                $query = "INSERT INTO `users`(`user_id`,`name`, `email`, `password`) VALUES ('$user_id','$name','$email','$password')";

                if( mysqli_query($conn, $query) )
                {
                    $correct_response = 'Registration successfull...';
                    header("refresh:2;url=ems_login.php");
                    $_SESSION['user_id']=$user_id;
                }
                else
                {
                    $response = 'Something went wrong';
                }
            }
        }
    }
?>