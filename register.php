<?php
    include_once('connection.php');
    session_start();
    
    if( isset($_SESSION['username']))
    {
        header('Location:home.php');
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
           
            $query = "SELECT `user_id`,`email` FROM `users` WHERE `email`='$email' OR `user_id`='$user_id'";
            $result = mysqli_query($conn , $query);
            if(mysqli_num_rows($result) > 0)
            {
                $response = 'Email or userid already registered';
            }
            else
            {
                 
                $password = md5($password);

               
                $query = "INSERT INTO `users`(`user_id`,`name`, `email`, `password`) VALUES ('$user_id','$name','$email','$password')";

                if( mysqli_query($conn, $query) )
                {
                    

                    require_once('class.phpmailer.php');
                    
                    $mail= new PHPMAILER();
                     
                    $mail-> IsSMTP(); 

                    $mail->SMTPDebug = 1;

                    $mail->SMTPAuth = true;
                    
                    $mail->SMTPSecure = 'ssl';

                    

                    $mail->Host = "smtp.gmail.com";

                    $mail->Port = 465;

                    $mail->IsHTML(true);

                    $mail->Username = "mittalsagar163@gmail.com";

                    $mail->Password = "shivaniagrawal";

                    $mail->SetFrom("mittalsagar163@gmail.com");

                    $mail->Subject = "Hello".$name." Welcome to QUIZ World";

                    $mail->Body = " This time u ready";

                    $mail->AddAddress("mittalsagar163@gmail.com");

                    if(!$mail->Send()){

                        echo "Mail Error:" .$mail->ErrorInfo;
                    }
                    else{

                        $correct_response=" Register Succesfully!! and Message has been sent";
                    }

                     


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