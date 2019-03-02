<?php
    
    $msg="";
    $fontColor="#D09683";
    if(isset($_POST[ 'submit'])){
        $verif="Odeslano";//potvrzeni, ze byl formular odeslan
        // dostat data z formulare
        $name=$_POST['name'];
        $lastName=htmlspecialchars($_POST['lastName']);
        $phone=htmlspecialchars($_POST['phone']);
        $email=htmlspecialchars($_POST['email']);
        $message=htmlspecialchars($_POST['message']);
        //zkontrolovat vyplneni vsech poli formulare
        if(!empty($email)&& !empty($lastName) && !empty($phone) && !empty($email) && !empty($message)){
            //$msg="Odeslano";
            if(filter_var($email,FILTER_VALIDATE_EMAIL)===false){
                //Failed
                $msg="Zadejte validni  email !!!";
                
            }else {
                //Passed
                
                
                //$name='';
                //$lastName='';
                //$phone='';
                //$email='';
                //$message='';
                $toEmail= "siskajan@hotmail.com";
                $subject= "Contaktni formular".$name."".$lastName;
                $body="<h2>Kontaktni formular</h2>
                       <h4>Jmeno</h4><p>".$name.''.$lastName."</p>
                       <h4>Email</h4><p>".$email."</p>
                       <h4>Zprava</h4>".$message."</p";
                
                $headers= "MIME-Version: 1.0" ."\r\n";
                $headers .= "Content-Type:text/html;charset=UTF-8"."\r\n";
                $headers .= "From: " .$name."".$lastName. "<".$email.">"."\r\n";
                if(mail($toEmail, $subject, $body, $headers)){
                    $msg="Uspesne Odeslano !";
                    
                    //$name='';
                    //$lastName='';
                    //$phone='';
                    //$email='';
                    //$message='';
                }else{
                    $msg="Nepodarilo se Odeslat !";
                    $fontColor="red";
                }
            }
        }else{
            $msg="Vyplnete vsechna pole!!!";
            
        }
    }else{
        $name="";
        $lastName="";
        $phone="";
        $email="";
        $message="";
    }
?>
<!DOCTYPE html>
<html>
    <head>
      <meta charset="UTF-8">
      <title>Kontakt</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="http://code.jquery.com/jquery-3.3.1.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Quicksand" rel="stylesheet">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
      <script src="http://code.jquery.com/jquery-3.3.1.js"></script>
    </head>
    <body >
        <div id="kontakt_content" class="content">
            <img id="logo" src="img/LOGO_SWB 2.svg">
            <div class="header_wrapper">
                <nav>
                    <ul class="myDiv">
                        <li id="prvni" ><a  href="index.php">Uvod</a></li>
                        <li id="druhy" class="active"><a   href="kontakt.php">Kontakt</a></li>
                        <li id="treti"><a   href="portfolio.php">Portfolio</a></li>
                        <li id="ctvrty"><a   href="historie.php">Vic o mne</a></li>
                    </ul>
                </nav>
                <div class="banner"></div>
            </div>
            
            <nav class="nav_mobile">
                <ul class="myDiv">
                    <li id="prvni2" ><a  href="index.php">Uvod</a></li>
                    <li id="druhy2" class="active2"><a   href="kontakt.php">Kontakt</a></li>
                    <li id="treti2"><a   href="portfolio.php">Portfolio</a></li>
                    <li id="ctvrty2"><a   href="historie.php">Vic o mne</a></li>
                </ul>
            </nav>
            <div class="banner2"></div>
            <h1>Kontakt</h1>
            <div class="cube">
                <div class="item1"></div>
                <div class="item2"></div>
                <div class="item3"></div>
                <div class="item4"></div>
            </div>
            <?php if($msg!=''){
                echo"<div ><h2 style=' color:$fontColor;'>$msg</h2></div>";
            }
            ?>
            <div class="submit_form">
                <form  method="post"  action="<?php  echo $_SERVER['PHP_SELF']; ?>">
                    <h3>Jmeno</h3>
                    <input type="text" name="name" value="<?php echo $name;?>">
                    <br>
                    <h3>Prijmeni</h3>
                    <input type="text" name="lastName" value="<?php echo $lastName;?>">
                    <br>
                    <h3>Telefon</h3>
                    <input type="text" name="phone" value="<?php echo $phone;?>"placeholder="+420123456789">
                    <br>
                    <h3>Email</h3>
                    <input type="text" name="email" value="<?php echo $email;?>">
                    <br>
                    <h3>Zprava</h3>
                    <textarea name="message"><?php echo $message;?></textarea>
                    <br>
                    <br>
                    <input id="submit" type="submit" name="submit" value="Odeslat">
            </div>
            
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d641.339484351662!2d17.463762529226713!3d49.985898398713374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47122853e7bddc57%3A0x8e10cffe106daa74!2zS3LDoXRrw6EsIDc5MiAwMSBCcnVudMOhbA!5e0!3m2!1sen!2scz!4v1550670690436" width=100% height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
         
            <img id="globe" src="img/globe.svg">
            <img id="calling" src="img/calling.svg">
            
        </div>
        <footer>
            <div class="cont_detailes_footer">
                <div class="left">
                    <h3>Adresa</h3>
                    <p>Kratka 4</p>
                    <p>Bruntal</p>
                    <p>792 01</p>
                </div>
                <div class="right">
                    <h3>Kontakt</h3>
                    <p>Jan Siska</p>
                    <p>siskajan@email.com</p>
                    <p>+420 776 052 602</p>
                    
                </div>
            </div>
        </footer>
        <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-angle-double-up"></i></button>
        <script>
            // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
          if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
            document.getElementById("myBtn").style.display = "block";
          } else {
            document.getElementById("myBtn").style.display = "none";
          }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0; // For Safari
          document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }
        </script>
    </body>
</html>
