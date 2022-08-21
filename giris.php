<!doctype html>
<html lang="tr">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>giriş</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
   
</head>

<body style=" background-color: rgb(211, 208, 203);">
   <div   class="top-bk">
    <nav>
        <ul class="nav nav-pills justify-content-center">
        <li class="nav-item">
                <a class="nav-link active" href="index.html">Hakkında</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="sehrim.html">Şehrim</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="mirasimiz.html">mirasimiz</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ilgialanlarim.html">İlgi Alanlarım</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="giris.html">Giriş Yap</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="iletisim.html">İletişim</a>
            </li>
        </ul>
    </nav>
  </div>

    <div id="icerik" class="container" align="center">
        <div align="center" class="row">
            <div class="col-1"></div>
            <div id="content-col" style="color: white; " class="bg-dark ">
                <?php
                if ($_POST['kullanici_adi'] == 'g211210588@sakarya.edu.tr' && $_POST['sifre'] == 'g211210588') {
                    echo "<p>Kullanıcı adınız ve şifreniz doğru.</p> <p>Hoşgeldiniz 'b201210391'</p><p>Anasayfaya yönlendiriliyorsunuz.</p>";
                    header("refresh:3;url=index.html");
                } else {
                    echo "<p>Giriş bilgileriniz yanlış.</p> ";
                    header("refresh:3;url=giris.html");
                }
                ?>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
</body>

</html>
