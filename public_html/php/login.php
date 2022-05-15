<?php 
    session_start();
    include_once "config.php";
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    if(!empty($email) && !empty($password)){
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
        if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
            $user_pass = md5($password);
            $enc_pass = $row['password'];
            if($user_pass === $enc_pass){
                $status = "Active now";
                $sql2 = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE unique_id = {$row['unique_id']}");
                if($sql2){
                    $_SESSION['unique_id'] = $row['unique_id'];
                    header("location: ../users.php");
                }else{
                    echo "Qualcosa è andato storto. Perfavore riprova!";
                    header("location: ../login.php");
                    exit;
                }
            }else{
                echo "credenziali errate!";
            }
        }else{
            echo "$email - questa email non esiste!";
        }
    }else{
        echo "Devi riempire tutti i campi!";
    }
?>