<?php 
    $errname = $erremail = $errweb = $errcomment = $errgender = "";
    $name = $email = $website = $comment = $gender = "";

    if($_SERVER["REQUEST_METHOD"] == "POST" ){

        if(empty($_POST["name"])){
            $errname = "Name is requid";
        }else{
            $name        = validate($_POST["name"]) ;
        }

        if(empty($_POST["email"])){
            $erremail = "E-mail is requid";
        }elseif(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
            $erremail = "Invalite E-mail Format";
        }else{
            $email       = validate($_POST["email"]) ;
        }

        if(empty($_POST["website"])){
            $errweb = "Website is requid";
        }elseif(!filter_var($_POST["website"], FILTER_VALIDATE_URL)){
            $errweb = "https:// Requid";
        }else{
            $website     = validate($_POST["website"]) ;
        }

        if(empty($_POST["gender"])){
            $errgender = "Website is requid";
        }else{
            $gender      = validate($_POST["gender"]) ;
        }

       $comment     = validate($_POST["comment"]) ;
      
    }

    function validate($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

?>
    <?php include 'header.php'; ?>
    <?php include 'form.php'; ?>
    <?php include 'footer.php'; ?>
