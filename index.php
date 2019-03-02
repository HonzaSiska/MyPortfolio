

<html>
    <head>
      <meta charset="UTF-8">
      <title>Uvod</title>
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

        <div class="content">
            <img id="logo" src="img/LOGO_SWB 2.svg">
            <div class="header_wrapper">
                <nav>
                    <ul class="myDiv">
                        <li id="prvni" class="active"><a  href="index.php">Uvod</a></li>
                        <li id="druhy"><a   href="kontakt.php">Kontakt</a></li>
                        <li id="treti"><a   href="portfolio.php">Portfolio</a></li>
                        <li id="ctvrty"><a   href="historie.php">Vic o mne</a></li>
                    </ul>
                </nav>
                <div class="banner"></div>
            </div>
            
            <nav class="nav_mobile">
                <ul class="myDiv">
                    <li id="prvni2" class="active2"><a  href="index.php">Uvod</a></li>
                    <li id="druhy2"><a   href="kontakt.php">Kontakt</a></li>
                    <li id="treti2"><a   href="portfolio.php">Portfolio</a></li>
                    <li id="ctvrty2"><a   href="historie.php">Vic o mne</a></li>
                </ul>
            </nav>
            <div class="banner2"></div>
            
            <video id="banner_mob" width=100% loop muted autoplay><source  src="img/me_typing.mp4" type="video/mp4"></video>
          
            <div id='main_heading'><h1 >Webové Aplikace Jan Šiška</h1></div>
            <div class="cube">
                <div class="item1"></div>
                <div class="item2"></div>
                <div class="item3"></div>
                <div class="item4"></div>
            </div>

            <div class="main_paragraph">
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
            </div>
            <div class="main_grid">
                <div class="item5"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, </p></div>
                <div class="item6"><img src="img/my_profile.jpg"><div class="bar"><h2>Jan Šiška</h2></div></div>
                <div class="item7"><div id="triangle"></div><h3>Animace</h3><img src="img/platform_animated.gif"><h2 id="cinema_top">Cinemagraphs</h2><h2  class="arrow"><i class="fas fa-arrow-circle-down"></i></h2></div>
                <div class="item8"><h3>Responsivni webovy design</h3><p>je pojem, se kterým roku 2010 přišel americký programátor Ethan Marcotte ve stejnojmenném článku na blogu A LIST Apart. Jedná se o způsob stylování HTML dokumentu, které zaručí, že zobrazení stránky bude optimalizováno pro všechny druhy nejrůznějších zařízení (mobily, notebooky, netbooky, tablety atd.). Historii takového designu lze nalézt již od roku 2001. Především díky vlastnosti Media Queries, která je (od přelomu let 2008 a 2009) zahrnuta ve specifikaci CSS3, lze rozpoznat vlastnosti zařízení, na kterém je stránka prohlížena a přizpůsobit tak samotnou stránku a její obsah.</p></div>
                <div class="item9"><h2 id="cinema_bottom">Cinemagraphs</h2><h2 class="arrow"><i class="fas fa-arrow-circle-down"></i><p>Cinemagraf nebo kinemagraf (anglicky cinemagraph) je fotografie, na které probíhá menší a opakovaný pohyb. Cinemagrafy, které jsou obvykle publikovány ve formátu animovaného souboru GIF, může vyvolávat iluzi, že se divák kouká na video.akové snímky jsou obyčejně vytvořeny ze série fotografií nebo videozáznamu a pomocí softwaru na úpravu se zkomponují do plynulé smyčky sekvenčních snímků, často za použití formátu animovaného souboru GIF. Pohyb v rámci jednoho předmětu je nastaven tak, aby začínal a končil ve stejné poloze a je pak vnímán jako opakování nebo pokračování pohybu. Pohybují se jen některé subjekty, ostatní prvky v obrazu jsou statické.</p></div>
                <div class="item10"><video width=100% loop muted autoplay><source src="img/me_typing.mp4" type="video/mp4"></video></div>

            </div>
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
        <?php
        // put your code here
        ?>
    </body>
</html>
