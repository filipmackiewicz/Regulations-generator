<?php
    session_start(); 

    require_once('connect.php');

    $conn = connect();
    

    if (isset($_POST['login']) && isset($_POST['password'])) {

        function validate($data){
           $data = trim($data);
           $data = stripslashes($data);
           $data = htmlspecialchars($data);
           return $data;
        }
    
        $login = validate($_POST['login']);
        $password = validate($_POST['password']);
    
        if (empty($login)) {
            header("Location: ../../index.php?error=Wprowadź login!");
            exit();
        }else if(empty($password)){
            header("Location: ../../index.php?error=Wprowadź hasło!");
            exit();
        }else{
            $hash = hash("sha256",$password);
            $sql = "SELECT * FROM users WHERE login='$login' AND password='$hash'";
    
            $result = mysqli_query($conn, $sql);
    
            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);
                if ($row['login'] === $login && $row['password'] === $hash) {
                    $_SESSION['login'] = $row['login'];
                    header("Location: ../../login/");
                    // header("Location: /login/");
                    exit();
    
                }else{
    
                    header("Location: ../../index.php?error=Błędny login lub hasło!");
    
                    exit();
    
                }
    
            }else{
    
                header("Location: ../../index.php?error=Błędny login lub hasło!");
    
                exit();
    
            }
    
        }
    
    }else{
    
        header("Location: ../../index.php");
    
        exit();
    
    }



    mysqli_close($conn);
?>