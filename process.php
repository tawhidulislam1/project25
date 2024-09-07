<?php



    if(isset($_POST['btn-send']))
    {
        $UserName = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        if(empty($UserName) || empty($email) || empty($subject) || empty($message)){
            header('location:index.php?erro');
        }
        else{
            $to ="designwithtawhid@gmail.com";

            if(mail($to , $subject, $message , $email , $name)){

                header('location:index.php?success');

            }

        }
       
    }
    else{
        header('location:index.php');
        
    }

?>