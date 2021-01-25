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
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Learning PHP</title>
</head>

<body>
    <div class="container">
        <section class="header bg-color">
        <div class="row">
        <div class="col-md-12 text-center">

        <?php 
        echo "Date is ".date("d/m/Y")."  "; 
        date_default_timezone_set("Asia/Dhaka");
        echo "Time Is ".date("h:i:sa"); 
        ?>
        </div>
        </div>
            <div class="row">
                <div class="col-md-4">
                    <p class="text-center ptext">মৃত্যু না হওয়া পর্যন্ত মানুষের শিক্ষা সমাপ্ত হয় না।</p>
                </div>
                <div class="col-md-4">
                    <h2 class="h2 text-center text-h">Learning PHP</h2>
                </div>
                <div class="col-md-4">
                    <p class="text-center ptext">শিক্ষার শেকড়ের স্বাদ তেঁতো হলেও এর ফল মিষ্টি</p>
                </div>
            </div>
        </section>
        <section class="main-body bg-dark text-white">
            <table>
            <p>* Reqerd Filed </p>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
                    <tr>
                        <td>Name : </td>
                        <td><input name="name" type="text"><span style="font-size: 30px;">*</span><?php echo $errname; ?></td>
                    </tr>
                    <tr>
                        <td>Email : </td>
                        <td><input name="email" type="email"><span style="font-size: 30px;">*</span><?php echo $erremail; ?></td>
                    </tr>
                    <tr>
                        <td>Website : </td>
                        <td><input name="website" type="text"><span style="font-size: 30px;">*</span><?php echo $errweb; ?></td>
                    </tr>
                    <tr>
                        <td>Comment : </td>
                        <td><textarea name="comment" name="" id="" cols="18" rows="5"></textarea></td>
                    </tr>
                    <tr>
                        <td>Gender : </td>
                        <td>
                            <input type="radio" name="gender" value="male" id=""> Male
                            <input type="radio" name="gender" value="female" id=""> Female
                            <span style="font-size: 30px;">*</span> <?php echo $errgender; ?>
                        </td> 
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input name="submit" type="submit" value="Submit">
                        </td>
                    </tr>

                </form>
            </table>
        </section>
        <section class="footer bg-color">
            <h2 class="h2 text-center text-h">Md Abu Raihan</h2>
            <blockquote class="text-center">
                <p>A person who never made a mistake never tried anything new.
                    -Albert Einstein</p>
            </blockquote>
        </section>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>