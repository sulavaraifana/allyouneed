<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <title>Document</title>
</head>
<style>
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
    width: 100%;
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
    background: #EAA6A6;
    margin: 10px;
    display: block;
    text-align: center;
    color: #fff;
    transition: all 1s linear;
    text-decoration: none;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
    border-radius: 3px;
    border-bottom: 3px solid #EAA6A6;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
  }

  a.button:hover {
    background: salmon;
    border-bottom: 3px solid salmon;
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
</style>

<body>
<div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="mt-3 mb-3">
            <a href="tambahproduk.php" class="btn btn-outline-secondary">tambah data</a>
        </div>
      </div>
    </div>
  </div>
  <div id="wrap">
	<div id="columns" class="columns_4">
  <?php
      include 'koneksi.php';
      $i = 1;
      $sql = $koneksi->query("SELECT * FROM `produk`");
      while ($row = $sql->fetch_assoc()) {
      ?>
  <figure>
  <img src="uploads/<?= $row['image'] ?>" alt="" >
	<figcaption><?php echo $row['nama'] ?></figcaption>
    <span class="price"><?php echo $row['harga'] ?></span>
    <a class="button" href="#">Buy Now</a>
	</figure>
  <?php } ?>

</div>


</body>

</html>