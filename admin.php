<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');
body{
  margin:0px;
  padding: 0px;
  font-family: 'Open Sans', sans-serif;
}
/* Barre de navigation */
nav{
  display:flex;
  flex-wrap:wrap;
  justify-content: space-between;
  padding: 2px;
  background-color: #B93160;
  /* position: sticky; */
  top: 0;
}
nav h1{
  font-family: 'Papyrus';
  font-size: 18px;
  color: #FFE2E2;
  margin-left: 30px;
  /* -webkit-text-stroke-width: 1px;
  -webkit-text-stroke-color: #444; */
}
nav .onglets{
  display: flex;
  flex-wrap:wrap;
}
nav .onglets p{
  font-size: 20px;
  margin-right: 20px;
  cursor:pointer;
  color: pink;
  font-family: 'manjari';
}
nav .onglets input{
  margin: 8px 20px;
  padding: 15px;
  border-radius: 30px;
  border:none;
  background-color: #f2f2f2;
  outline:none;
}
/* Fin de la barre de navigation */

/* Header */
header{
  display: flex;
  flex-direction: column;
  justify-content:center;
  align-items:center;
}
header h1{
  font-size: 30px;
  max-width: 550px;
  text-align:center;
  color: #B93160;
}
header button{
  padding: 15px 20px;
  font-size: 20px;
  border:none;
  border-radius: 5px;
  outline:none;
  cursor:pointer;
}
/* Fin du header */

* {
    box-sizing: border-box;
    -moz-box-sizing: border-box;
  }

  body {
    background: #FFECEC;
    font-family: Calluna, Arial, sans-serif;
    min-height: 1000px;
  }

  #wrap {
    width: 90%;
    max-width: 1100px;
    margin: 50px auto;
  }

  .columns_2 figure {
    width: 49%;
    margin-right: 1%;
  }

  .columns_2 figure:nth-child(2) {
    margin-right: 0;
  }

  .columns_3 figure {
    width: 32%;
    margin-right: 1%;
  }

  .columns_3 figure:nth-child(3) {
    margin-right: 0;
  }

  .columns_4 figure {
    width: 24%;
    margin-right: 1%;
  }

  .columns_4 figure:nth-child(4) {
    margin-right: 0;
  }

  .columns_5 figure {
    width: 19%;
    margin-right: 1%;
  }

  .columns_5 figure:nth-child(5) {
    margin-right: 0;
  }

  #columns figure:hover {
    -webkit-transform: scale(1.1);
    -moz-transform: scale(1.1);
    transform: scale(1.1);

  }

  #columns:hover figure:not(:hover) {
    opacity: 0.4;
  }

  div#columns figure {
    display: inline-block;
    background: #FEFEFE;
    border: 2px solid #FAFAFA;
    box-shadow: 0 1px 2px rgba(34, 25, 25, 0.4);
    margin: 0 0px 15px;
    -webkit-column-break-inside: avoid;
    -moz-column-break-inside: avoid;
    padding: 15px;
    padding-bottom: 5px;
    background: -webkit-linear-gradient(45deg, #FFF, #F9F9F9);
    opacity: 1;
    -webkit-transition: all .3s ease;
    -moz-transition: all .3s ease;
    -o-transition: all .3s ease;
    transition: all .3s ease;
  }

  div#columns figure img {
    
    border-bottom: 1px solid #ccc;
    padding-bottom: 15px;
    margin-bottom: 5px;
  }

  div#columns figure figcaption {
    font-size: .9rem;
    color: #444;
    line-height: 1.5;
    height: 60px;
    font-weight: 600;
    text-overflow: ellipsis;
  }

  a.button {
    padding: 10px;
    background: #D75281;
    margin: 10px;
    display: block;
    text-align: center;
    color: #fff;
    transition: all 1s linear;
    text-decoration: none;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
    border-radius: 3px;
    border-bottom: 3px solid #B93160;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
  }

  a.button:hover {
    background: #B93160;
    border-bottom: 3px solid #99DDCC;
    color: #f1f2f3;
  }

  @media screen and (max-width: 960px) {
    #columns figure {
      width: 24%;
    }
  }

  @media screen and (max-width: 767px) {
    #columns figure {
      width: 32%;
    }
  }

  @media screen and (max-width: 600px) {
    #columns figure {
      width: 49%;
    }
  }

  @media screen and (max-width: 500px) {
    #columns figure {
      width: 100%;
    }
  }

/* Video de présentation */
.main .video{
  margin-top: 80px;
  width: 90%;
}
.main .video iframe{
  border:none;
  border-radius: 10px;
  width: 100%;
  height: 400px;
}
/* Fin de la vidéo de présentation */
/* Fin de la section principale */

/* Pied de page */
footer {
  margin-top: 100px;
  background-color: #000;
  padding: 30px;
  color: #fff;
  display: flex;
  flex-wrap:wrap;
  justify-content: space-between;
}
footer .social-media{
  display: flex;
}
footer .social-media p{
  margin-right: 15px;
  border: 1px solid #fff;
  border-radius: 100%;
  padding: 5px;
  text-align:center;
  width: 20px;
  cursor:pointer;
}
/* Fin du pied de page */

@media screen and (max-width: 640px){
  nav .onglets .link, nav h1{
    display:none;
  }
  .cards .card img{
    width: 300px;
  }
}
.dropdown {
  
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}


.dropdown-content {
  display: none;
  position: fixed;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Créer un site e-commerce</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>

</head>
<body>
<?php
    IF(isset($_GET['pesan'])){
        $pesan = $_GET['pesan'];
        if($pesan == 'input'){
            echo'<script>
            alert("produk berhasil Di Input");</script>';
        }elseif($pesan == 'update'){
            echo'<script>
            alert("produk Di Update");</script>';
        }elseif($pesan == 'delete'){
            echo'<script>
            alert("produk Berhasil Di Delete");</script>';
        }
    }
    ?>

  <!-- Barre de navigation -->
  <nav>
    <h1>AllYouNeed</h1>
    <div class="onglets">
      <p class="link">Home</p>
      <p class="link">Catagories</p>
      <p class="link">#</p>
      <p class="link">#</p>
     <a href="tambahproduk.php"><p class="link">Add Product</p></a> 
      <form>
        <input type="search" placeholder="Search">
      </form>

     
    <p><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
  <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
</svg></p>

  </nav>
  <!-- Fin de la barre de navigation -->
  
  <!-- Header -->
   <header>
     <h1>Selamat Datang di AllYouNeed, we have everything YOU NEED</h1>
   </header>
  <!-- Fin du header -->
  
  <!-- Section principale -->
  <section class="main">
    
    <!-- Toutes les cartes -->
    
  
  <div id="wrap">
	<div id="columns" class="columns_4">
  <?php
         include "koneksi.php";
         $query_mysqli = mysqli_query($koneksi, "SELECT*FROM produk");
         $nomor = 1;
         while ($data = mysqli_fetch_assoc($query_mysqli)) {
      ?>
  <figure>
  <img src="images/<?= $data['image'] ?>" alt="" width="250px" >
	<figcaption><?php echo $data['nama'] ?></figcaption>
    <span class="price">Rp.<?php echo number_format($data['harga'],2) ?></span>
    <a class="button" href="update.php?id=<?= $data['id'] ?>">Update</a>
    <a class="button" href="delete.php?id=<?= $data['id'] ?>">Delete</a>
	</figure>
  <?php } ?>

</div>

    <!-- Fin de toutes les cartes -->
    
    <!-- Video de presentation -->
    <div class="video">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/YXjF6vcYUpE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></width=></iframe>
    </div>
    <!-- Fin de la video de presentation -->
  </section>
  <!-- Fin de la section principale -->
  
  <!-- Pied de page -->
  <footer>
    <p>&copy; Contactez-nous au 06 98 87 82 00</p>
    <div class="social-media">
      <p><i class="fab fa-facebook-f"></i></p>
      <p><i class="fab fa-twitter"></i></p>
      <p><i class="fab fa-instagram"></i></p>
      <p><i class="fab fa-linkedin-in"></i></p>
    </div>
  </footer>
  <!-- Fin du pied de page -->
</body>
</html>
</body>
</html>