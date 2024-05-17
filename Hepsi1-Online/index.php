<?php 
session_start(); 
include "db_conn.php";
?>

<!DOCTYPE html>
<html lang="en">



<head>
    <!-- Metas -->
    <meta charset="utf-8">
    <title>HEPSİ 1</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Css -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/base.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/main.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/magnific-popup.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/fonts.css" rel="stylesheet" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600%7cPermanent+Marker" rel="stylesheet">
</head>

<body>
    <!-- Preloader -->
    <div class="loader">
        <!-- Preloader inner -->
        <div class="loader-inner">
            <svg width="120" height="220" viewbox="0 0 100 100" class="loading-spinner" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <circle class="spinner" cx="50" cy="50" r="21" fill="#141414" stroke-width="2" />
            </svg>
        </div>
        <!-- End preloader inner -->
    </div>
    <!-- End preloader-->
    <!--Wrapper-->
    <div class="wrapper">
        <!--Hero section-->
        <section class="hero ">
            <!--Main slider-->
            <div class="main-slider slider flexslider ">
                <ul class="slides">
                    <li>
                        <div class="background-img overlay zoom">
                            <img src="img/1.jpg" alt="">
                        </div>
                        <!--Container-->
                        <div class="container hero-content">
                            <!--Row-->
                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <!--Inner hero-->
                                    <div class="inner-hero">
                                        <h1 class="large text-white  mb-0"> GRUP HEPSİ </h1>
                                        <h4 class="uppercase h4"> Bir Zamanların Efsane Grubu</h4>
                                        <a class="btn btn-primary mt-4" href="https://tr.wikipedia.org/wiki/Hepsi">daha fazla</a>
                                    </div>
                                </div>
                                <!--End row-->
                            </div>
                            <!--End container-->
                        </div>
                        <!--End inner hero-->
                    </li>
                    <li>
                        <div class="background-img overlay zoom">
                            <img src="img/2.jpg" alt="">
                        </div>
                        <!--Container-->
                        <div class="container hero-content">
                            <!--Row-->
                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <!--Inner hero-->
                                    <div class="inner-hero">
                                        <h1 class="large text-white  mb-0"> YALAN </h1>
                                        <h4 class="uppercase h4"> En Beğenilen </h4>
                                        <a class="video-play-but mt-4 popup-youtube" href="mp4/Yalan.mp4"></a>
                                    </div>
                                </div>
                                <!--End row-->
                            </div>
                            <!--End container-->
                        </div>
                        <!--End inner hero-->
                    </li>
                </ul>
            </div>
            <!--End main slider-->
            <!--Header-->
            <header class="header stopping">
                <!--Container-->
                <div class="container ">
                    <!--Row-->
                    <div class="row">
                        <div class="col-lg-2">
                            <a class="scroll logo" href="#wrapper">
                                <img class="mb-0" src="img/logo.png" alt="">
                            </a>
                        </div>
                        <div class="col-lg-10 text-right">
                            <nav class="main-nav">
                                <div class="toggle-mobile-but">
                                    <a href="#" class="mobile-but">
                                        <div class="lines"></div>
                                    </a>
                                </div>
                                <ul class="main-menu list-inline">
                                    <li><a class="scroll list-inline-item" href="#wrapper">Anasayfa</a></li>
                                    <li><a class="scroll list-inline-item" href="#about">Hakkında</a></li>
                                    <li><a class="scroll list-inline-item" href="#discography">Diskografi</a></li>
                                    <li><a class="scroll list-inline-item" href="#band">Grup</a></li>
                                    <li><a class="scroll list-inline-item" href="#tour">Dizi</a></li>
                                    <li><a class="scroll list-inline-item" href="#gallery">Galeri</a></li>
                                    <li><a class="scroll list-inline-item" href="#yrm">Yorumlar</a></li> 
                                    <li><a class="scroll list-inline-item" href="#contact">İletişim</a></li>
                                    <?php
                                     
                                    if (isset($_SESSION['user_name'])){
                                        $uname = $_SESSION['user_name'];
                                        ?>
                                         <li><a class="scroll list-inline-item"><?php echo "Merhaba $uname"; ?></a></li> 
                                         <li><a class="scroll list-inline-item" href="logout.php">Çıkış</a></li></a></li>   
                                        <?php
                                    }else{
                                        ?>
                                        <li><a class="scroll list-inline-item" href="logins.php">Giriş</a></li>  
                                        <?php
                                    }
                                    
                                    ?>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!--End row-->
                </div>
                <!--End container-->
            </header>
            <!--End header-->
        </section>
        <!--End hero section-->
        <!--About section-->
        <section id="about" class="about main brd-bottom">
            <img class="pattern-center" src="img/right-pattern.png" alt="">
            <!--Container-->
            <div class="container ">
                <!--Row-->
                <div class="row vertical-align">
                    <div class="col-md-5    ">
                        <div class="block-content text-center">
                            <h1 class="uppercase mb-0">Türkiye'de R&B  <br>tarz müziği </h1>
                            <p class="mt-2 lead w-95">Grup Hepsi, üç (başlangıçta dört) kişilik bir Pop - R&B grubudur. Grubun üyeleri çocukluklarından beri birbirlerini tanımaktadırlar. Grubun menajerliğini grup üyelerinden Cemre'nin annesi Şebnem Özberk yürütmektedir. Grup üyeleri küçük yaştan çalışmalara başlamış ilk albümleriyle büyük beğeni kazanıp önemli isimlerle çalışmış ve düet yapmışlardır.</p>
                            <img class="sing mb-0" src="img/signature.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 offset-md-1   ">
                        <div class="block-content">
                            <ul class="block-images row">
                                <li><img src="img/3.jpg" alt="" width="1500px" height="1250px"> </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--End row-->
            </div>
            <!--End container-->
            <div class="gap-one-bottom-md"></div>
            <!--Container-->
            <div class="container ">
                <!--Row-->
                <div class="row vertical-align">
                    <div class="col-md-6   ">
                        <div class="block-content">
                            <ul class="block-images row">
                                <li ><img src="img/5.jpg" alt="" width="1500px"> </li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5 offset-md-1  ">
                        <div class="block-content text-center">
                            <h1 class="uppercase mb-0">Dizi Hakkında</h1>
                            <p class="mt-2 lead w-95">Aynı evde yaşayan Cemre, Eren, Gülçin ve Yasemin, okudukları gösteri sanatları akademisini bitirmeye çalışırken, başlarına gelen trajikomik bir olay yüzünden, altına girdikleri yüklü miktardaki borcu ödemek zorunda kalınca, kendilerini bir anda sahne dünyasının parıltılı ışıkları altında bulurlar. Ancak bu durum, okuldan atılma riskini de beraberinde getirir. Genç yaşlarında, bir yandan şöhret olmanın ağır yükünü taşımaya çalışırken, diğer yandan gerçeği Akademinin Müdürü Erol Hoca'dan saklamak için uğraşırlar. Mert, akademide okuyan Korkut'la birlikte kızların alt katında yaşamaktadır. Kızların söyleyeceği şarkıları yazan ve besteleyen Mert, aynı zamanda kızların konser bağlantılarını da yapar ve ilerleyen bölümlerde Gülçin ile bir birlikteliği olur.</p>
                            <a class="btn btn-primary with-ico" href="https://www.youtube.com/playlist?list=PLIovzIxZbA62DvY9AqfpYtYBsoslUqhG3"><i class="icon-ticket"></i>Bölümler</a>
                        </div>
                    </div>
                </div>
                <!--End row-->
            </div>
            <!--End container-->
            <!--Container-->
            <div class="container ">
                <!--Row-->
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-9 ">
                        <div class="block-content text-center gap-one-top-md">
                            <h4 class="uppercase"> Dinlemek için... </h4>
                            <ul class="block-social list-inline mt-4">
                                <li class="list-inline-item mr-0"><a href="https://music.apple.com/tr/artist/hepsi/268302522"><i class="socicon-apple"></i></a></li>
                                <li class="list-inline-item mr-0"><a href="https://www.amazon.com/music/player/artists/B0017UVIC6/hepsi"><i class="socicon-amazon"></i></a></li>
                                <li class="list-inline-item mr-0"><a href="https://soundcloud.com/ceren-y-ld-z-896814600/sets/hepsi-1"><i class="socicon-soundcloud"></i></a></li>
                                <li class="list-inline-item mr-0"><a href="https://open.spotify.com/intl-tr/artist/1kOoLMi8Z7nDeIa0bSfM3N"><i class="socicon-spotify"></i></a></li>
                                <li class="list-inline-item mr-0"><a href="https://www.youtube.com/channel/UCxLItlLgwAfJnGwoeQjQxlg"><i class="socicon-youtube"></i></a></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <!--End row-->
                </div>
                <!--End container-->
        </section>
        <!--End about section-->
        <!--Latest album section-->
        <section class="latest main brd-bottom">
            <!--Container-->
            <div class="container">
                <!--Row-->
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-9 ">
                        <div class="block-content text-center gap-one-bottom-md">
                            <div class="block-title ">
                                <div class="block-bars">
                                    <img src="img/sound-bars.png" alt="">
                                </div>
                                <h6 class="uppercase mb-1">İlk Albüm </h6>
                                <h1 class="uppercase mb-0">'BİR'</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End row-->
            </div>
            <!--End container-->
            <!--Container-->
            <div class="container">
                <!--Row-->
                <div class="row vertical-align">
                    <div class="col-lg-8  ">
                        <img class="mb-0" src="img/vinyl.png" alt="" width="1500px">
                    </div>
                    <div class="offset-lg-1  col-lg-3  ">
                        <div class="block-content ">
                            <div class="block-album-info">
                                <ul>
                                    
                                    <li>
                                        <h5 class=" uppercase list-inline-item h4">Yayın Tarihi : </h5>
                                        <span>Nisan 1/4/05</span>
                                    </li>
                                    <li>
                                        <h5 class=" uppercase list-inline-item h4">Tür : </h5>
                                        <span>Pop</span>
                                    </li>
                                    <li>
                                        <h5 class="uppercase list-inline-item ">Stil : </h5>
                                        <span>R&B</span>
                                    </li>
                                    <li>
                                    </li>
                                </ul>
                            </div>
                            <ul class="block-social list-inline mt-4">
                                <li class="list-inline-item mr-0"><a href="https://music.apple.com/tr/album/hepsi-bir/909087519"><i class="socicon-apple"></i></a></li>
                                <li class="list-inline-item mr-0"><a href="https://www.amazon.com/Hepsi-Bir/dp/B00MQK5F5C"><i class="socicon-amazon"></i></a></li>
                                <li class="list-inline-item mr-0"><a href="https://open.spotify.com/intl-tr/album/7xX7UbWl3ZyTbicdfpDNMI"><i class="socicon-spotify"></i></a></li>
                                <li class="list-inline-item mr-0"><a href="https://www.youtube.com/watch?v=koZkzK-xn4A"><i class="socicon-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--End row-->
            </div>
            <!--End container-->
            <!--Container-->
            <div class="container">
                <!--Row-->
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-9 col-md-12">
                        <div class="block-tracklist gap-one-top-md">
                            <audio preload class="album"></audio>
                            <ol class="playlist">
                                <li>
                                    <div class="as-link" data-src="mp3/01.mp3">
                                        <!--Row-->
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 ">
                                                <div class="block-track ml-5">
                                                    <h5 class="mb-0  uppercase">Yalan</h5>
                                                    <span class="opc-50">Bir </span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 text-md-right">
                                                 <a href="#" class="btn-s uppercase btn  with-ico  toggle-lyrics"><i class="icon-note"></i>Şarkı sözleri</a>
                                            </div>
                                            <div class="col-12 ">
                                                <div class="block-lyrics w-75 text-center mt-3">
                                                    <h3 class="mb-4 uppercase ">YALAN</h3>
                                                     <p> Hani bensiz bir hiçtin?<br>
                                                        "Nefes bile almak zor" derdin<br>
                                                         Ben senin her şeyindim<br>
                                                         Yalan, yalan
                                                    </p>
                                                    <p> Gözü görmez başkasını<br>
                                                        Senle ben elmanın iki yarısı<br>
                                                        Bir ömür boyu beraber<br>
                                                        Yalan, yalan<br>
                                                        Şimdi gördüm gerçek yüzünü
                                                    </p>
                                                    <p>Güne açan çiçekler gibiyiz<br>
                                                        Yalan, yalan<br>
                                                        Öyle saf ki sevgimiz<br>
                                                        Yalan<br>
                                                        Ayıramaz bizi hiç kimse<br>
                                                        Yalan, yalan<br>
                                                        Ölene dek beraberiz<br>
                                                        Yalan
                                                    </p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="as-link" data-src="mp3/02.mp3">
                                        <!--Row-->
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="block-track ml-5">
                                                    <h5 class="mb-0  uppercase ">Olmaz Oğlan</h5>
                                                    <span class="opc-50"> Bir</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 text-md-right">
                                                <a href="#" class="btn-s uppercase btn  with-ico  toggle-lyrics"><i class="icon-note"></i>Şarkı sözleri</a>
                                            </div>
                                            <div class="col-12 ">
                                                <div class="block-lyrics w-75 text-center mt-3">
                                                    <h3 class="mb-4 uppercase ">OLMAZ OĞLAN</h3>
                                                    <p> Amanın da amanın kim gelmiş<br>
                                                        Eski sevgilim gelmiş<br>
                                                        Sütü sıcak içmiş belli<br>
                                                        Gezmiş görmüş öğrenmiş 
                                                    </p>
                                                    <p> Tok evin aç kedisi<br>
                                                        Aferinin delisi<br>
                                                        Ben seni nazlatamam<br>
                                                        Bulunur yenileri<br>
                                                        Ağa takılır biri<br>
                                                        Ben seni fazlatamam
                                                    </p>
                                                    <p>İyi kötü hoşsun hala<br>
                                                        Buralarda harcanma<br>
                                                        İyi kötü hoşsun hala<br>
                                                        Buralarda paslanma
                                                    </p>
                                                    <p>
                                                        (x2)<br>
                                                        Hiç bana bakma olmaz oğlan<br>
                                                        Sen kendine ısmarlan (sen kendine ısmarlan)<br>
                                                        Hiç bana bakma olmaz oğlan<br>
                                                        Başkasına yuvarlan
                                                    </p>
                                                    <p> (x2)<br>
                                                        Hadi canım hadi ama dışarı<br>
                                                        Hayat işte cızz yapıyor adamı<br>
                                                        İyi kötü hoşsun hala<br>
                                                        Buralarda harcanma
                                                    </p>
                                                    <p> (x2)<br>
                                                        Sen beni sevdiğine inandırma<br>
                                                        Sen önce kendini inandır<br>
                                                        Ben sevilmeyen biri değilim ki<br>
                                                        Anlatıyorsun yıllardır
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="as-link" data-src="mp3/03.mp3">
                                        <!--Row-->
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="block-track ml-5">
                                                    <h5 class="mb-0  uppercase">Dört Peynirli Pizza</h5>
                                                    <span class="opc-50">Şaka(10+1)</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 text-md-right">
                                                 <a href="#" class="btn-s uppercase btn  with-ico  toggle-lyrics"><i class="icon-note"></i>Şarkı sözleri</a>
                                            </div>
                                            <div class="col-12 ">
                                                <div class="block-lyrics w-75 text-center mt-3">
                                                    <h3 class="mb-4 uppercase ">DÖRT PEYNİRLİ PİZZA</h3>
                                                    <p> Dört peynirli pizza<br>
                                                        Aç gel bunu kaçırma<br>
                                                        Herkes tadına hasta<br>
                                                        Dört peynirli pizza<br>
                                                        Yanında kola da yolla<br>
                                                        Aman kilonu kolla<br>
                                                        
                                                   </p>
                                                    <p> Ekstra mozeralla<br>
                                                        Tazesin lezzetlisin<br>
                                                        Daha ne istesin bu çılgınlar<br>
                                                        Sıcaksın bazen acısın<br>
                                                        Anlayan anlar panik olma
                                                    </p>
                                                    <p> Zekisin isteklisin<br>
                                                        Daha ne ister bu hayranlar<br>
                                                        Sosyalsin misyonun var<br>
                                                        Doğru yoldasın sakın durma<br>
                                                    </p>
                                                    <p> Afiyet olsun<br>
                                                        Aç dünyan doysun<br>
                                                        Suyun bol olsun<br>
                                                        İç iç iç iç<br>
                                                    </p>
                                                    <p>  Kaynanan sevsin<br>
                                                        Parmağını yersin<br>
                                                        Tatlı istersin<br>
                                                        Ye ye ye ye
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="as-link" data-src="mp3/04.mp3">
                                        <!--Row-->
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="block-track ml-5">
                                                    <h5 class="mb-0  uppercase">Aşk Sakızı</h5>
                                                    <span class="opc-50">Hepsi 2</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 text-md-right">
                                                 <a href="#" class="btn-s uppercase btn  with-ico  toggle-lyrics"><i class="icon-note"></i>Şarkı sözleri</a>
                                            </div>
                                            <div class="col-12 ">
                                                <div class="block-lyrics w-75 text-center mt-3">
                                                    <h3 class="mb-4 uppercase ">AŞK SAKIZI</h3>
                                                    <p> Seni sildim telefon defterimden<br>
                                                        Adının üstünü hep karaladım<br>
                                                        Yüzünü görmekten çok sıkıldım<br>
                                                        Nereye gitsem peşimdesin sen
                                                                             
                                                    </p>
                                                    <p> Üf, üf sıktın artık<br>
                                                        Sabrımı taşırdın artık<br>
                                                        Sakız gibi yapıştın da<br>
                                                        Tadını kaçırdın artık
                                                    </p>
                                                    <p>Üf yeter, üf -üf yeter<br>
                                                      Yoksa sen aşk sakızı mısın?<br>
                                                    </p>
                                                    <p>
                                                       Ayrıldık sana anlatamadım<br>
                                                        Kaçtım kaçtım, kurtulamadım<br>
                                                        Bir türlü silemedin aklından<br>
                                                        Bıktırdın düşemedin yakamdan<br>
                                                        Aşk sakızı mısın?<br>
                                                        Aşk sakızı mısın?
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="as-link" data-src="mp3/05.mp3">
                                        <!--Row-->
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="block-track ml-5">
                                                    <h5 class="mb-0 uppercase ">Kalpsizsin</h5>
                                                    <span class="opc-50">Hepsi 2 </span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 text-md-right">
                                                <a href="#" class="btn-s  uppercase btn  with-ico  toggle-lyrics"><i class="icon-note"></i>Şarkı sözleri</a>
                                                
                                            </div>
                                            <div class="col-12 ">
                                                <div class="block-lyrics w-75  text-center mt-3">
                                                    <h3 class="mb-4  uppercase ">Kalpsizsin</h3>
                                                    <p> Senin iyi bir kalbin olduğuna<br>
                                                        İnandım, bekledim sabırla<br>
                                                        Ama kabul, yanıldım<br>
                                                        Sen yalandın
                                                    </p>
                                                    <p> Ne kadar uğraştıysam olmadı<br>
                                                        Aşk sana bir türlü yakışmadı<br>
                                                        Kimsin, kimsin?<br>
                                                        Kalpsizsin, kalpsizsin<br>
                                                        Sözüne hiç (Hah ha) güvenilmez (Hah ha)<br>
                                                        Sana aşktan (Hah ha) bahsedilmez<br>
                                                        Kalpsizsin
                                                    </p>
                                                    <p>
                                                        Kimseyi görmezsin<br>
                                                        Yüzüne gülmezsin<br>
                                                        Kendine hayransın<br>
                                                        Bencilsin, sevemezsin<br>
                                                        Aynalara bir bak<br>
                                                        Senden güzel mi var?
                                                    </p>
                                                    <p> Sevmeyi bilmezsin<br>
                                                        Susar, dinlemezsin<br>
                                                        Kendine hayransın<br>
                                                        Bencilsin, sevemezsin<br>
                                                        Aynalara bir bak<br>
                                                        Senden güzel mi var?
                                                    </p>
                                                    <p>
                                                        Kalbin taş mı oldu yoksa?<br>
                                                        Senin için sevmek de zorsa<br>
                                                        Yalnız kal, akıllan artık<br>
                                                        Bak dünya dönüyor
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="as-link" data-src="mp3/06.mp3">
                                        <!--Row-->
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="block-track ml-5">
                                                    <h5 class="mb-0  uppercase">Yeter</h5>
                                                    <span class="opc-50">Geri Dönüşüm</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 text-md-right">
                                                
                                                 <a href="#" class="btn-s uppercase btn  with-ico  toggle-lyrics"><i class="icon-note"></i>Şarkı sözleri</a>
                                            </div>
                                            <div class="col-12 ">
                                                <div class="block-lyrics w-75 text-center mt-3">
                                                    <h3 class="mb-4 uppercase ">YETER</h3>
                                                    <p> Herkes hayrandı o gülüşüne<br>
                                                        Bende bir başka<br>
                                                        Kuşlar uçardı sıcak iklimlere<br>
                                                        Vurdum tek taşla
     
                                                    </p>
                                                    <p>    
                                                        Bu güzel masallarla<br>
                                                        Kimleri kandırdın sen<br>
                                                        Beni çocuk mu sandın?
                                                    </p>
                                                    <p> Yeter seni çok sevdim<br>
                                                        Yeter çok çalıştım<br>
                                                        Yeter artık kazanıp<br>
                                                        Kaybetmekten of sıkıldım
                                                        
                                                    </p>
                                                    <p>
                                                       
                                                        Yeter sana inandım<br>
                                                        Yeter çok yanıldım<br>
                                                        Yeter artık utanıp<br>
                                                        Yıkıl karşımdan sıkıldım
                                                    </p>
                                                    <p>   
                                                        Attın doksanda bana golünü<br>
                                                        Vazgeçtim sanma<br>
                                                        Dört dörtlük yaptın bana rolünü<br>
                                                        Farkettim ama
                                                    </p>
                                                    <p>   
                                                        Bu güzel masallarla<br>
                                                        Kimleri kandırdın sen<br>
                                                        Beni çocuk mu sandın?
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!--End row-->
            </div>
            <!--End container-->
        </section>
        <!--End latest album section-->
        <!--Discography section-->
        <section id="discography" class="discography main">
            <img class="pattern-center" src="img/center-pattern.png" alt="">
            <!--Container-->
            <div class="container">
                <!--Row-->
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-9 ">
                        <div class="block-content text-center gap-one-bottom-md">
                            <div class="block-title ">
                                <div class="block-bars">
                                    <img src="img/sound-bars.png" alt="">
                                </div>
                                <h6 class="uppercase mb-1">Diskografi </h6>
                                <h1 class="uppercase mb-0">Albümler </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End row-->
            </div>
            <!--End container-->
            <!--Container-->
            <div class="container">
                <!--Row-->
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="block-content">
                            <a href="https://www.google.com/search?q=Hepsi+Bir&stick=H4sIAAAAAAAAAONgFuLUz9U3SMoyqipT4gIxDYvj0y0rtcSzk630c0uLM5P1E4tKMotLrBJzkkpzixexcnqkFhRnKjhlFgEA7B6YGz4AAAA&sa=X&ved=2ahUKEwis6rz-8IT_AhURSPEDHfeZAVUQ9OUBegQIIRAD&biw=1628&bih=793&dpr=1.15" class="hover-effect">
                                <div class="block-album p-3">
                                    <img src="img/6.jpg" alt="">
                                    <h4 class="uppercase mb-0">Bir </h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="block-content ">
                            <a href="https://www.google.com/search?q=Hepsi+Hepsi+2&stick=H4sIAAAAAAAAAONgFuLUz9U3SMoyqipT4gIxjQoLkrMstcSzk630c0uLM5P1E4tKMotLrBJzkkpzixex8nqkFhRnKkBIIwBtgGz-QgAAAA&sa=X&ved=2ahUKEwis6rz-8IT_AhURSPEDHfeZAVUQ9OUBegQIIRAH&biw=1628&bih=793&dpr=1.15" class="hover-effect">
                                <div class="block-album p-3">
                                    <img src="img/7.jpg" alt="">
                                    <h4 class="uppercase mb-0">Hepsi 2 </h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="block-content">
                            <a href="https://www.google.com/search?q=Hepsi+%C5%9Eaka:+10%2B1&stick=H4sIAAAAAAAAAONgFuLUz9U3SMoyqipT4gIxjTPyLIostMSzk630c0uLM5P1E4tKMotLrBJzkkpzixexCnqkFhRnKhydl5idaKVgaKBtCACdRbXMRgAAAA&sa=X&ved=2ahUKEwis6rz-8IT_AhURSPEDHfeZAVUQ9OUBegQIIRAF&biw=1628&bih=793&dpr=1.15" class="hover-effect">
                                <div class="block-album p-3">
                                    <img src="img/8.jpg" alt="">
                                    <h4 class="uppercase mb-0">Şaka </h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="block-content  ">
                            <a href="https://www.google.com/search?q=Hepsi+Geri+D%C3%B6n%C3%BC%C5%9F%C3%BCm&stick=H4sIAAAAAAAAAONgFuLUz9U3SMoyqipT4gIxC5OzjLLMtcSzk630c0uLM5P1E4tKMotLrBJzkkpzixexinmkFhRnKrinFmUquBzelnd4z9H5h_fkAgD41UaKSwAAAA&sa=X&ved=2ahUKEwis6rz-8IT_AhURSPEDHfeZAVUQ9OUBegQIIRAJ&biw=1628&bih=793&dpr=1.15" class="hover-effect">
                                <div class="block-album p-3">
                                    <img src="img/9.jpg"   alt="">
                                    <h4 class="uppercase mb-0">Geri Dönüşüm </h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!--End row-->
            </div>
            <!--End container-->
           
        </section>
        <!--End discography section-->
        
        <!--Band members section-->
        <section id="band" class="band main brd-bottom">
            <!--Container-->
            <div class="container">
                <!--Row-->
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-9">
                        <div class="block-content text-center gap-one-bottom-md">
                            <div class="block-title ">
                                <div class="block-bars">
                                    <img src="img/sound-bars.png" alt="">
                                </div>
                                <h6 class="uppercase mb-1"> </h6>
                                <h1 class="uppercase mb-0">Grup Üyeleri</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End row-->
            </div>
            <!--End container-->
            <!--Container-->
            <div class="container">
                <!--Row-->
                <div class="row">
                    <div class="col-md-4 col-lg-4">
                        <div class="block-member text-center">
                            <img class="mb-4" src="img/11.jpg" alt="">
                            <div class="member-info">
                                <h4 class="uppercase mb-0 ">Eren Bakıcı</h4>           
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="block-member text-center">
                            <img class="mb-4" src="img/12.jpg" alt="">
                            <div class="member-info">
                                <h4 class="uppercase mb-0 ">Gülçin Ergül</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="block-member text-center">
                            <img class="mb-4" src="img/13.jpg" alt="">
                            <div class="member-info">
                                <h4 class="uppercase mb-0 ">Cemre Kemer</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="block-member text-center">
                            <img class="mb-4" src="img/19.jpg" alt="">
                            <div class="member-info">
                                <h4 class="uppercase mb-0 ">Yasemin Yürük</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End row-->
            </div>
            <!--End container-->
        </section>
        <!--End band members section-->
        <!--Tours section-->
        <section id="tour" class="tour  main">
            <!--Container-->
            <div class="container">
                <!--Row-->
                <div class="row justify-content-center ">
                    <div class="col-12 col-md-10 col-lg-9">
                        <div class="block-content  gap-one-bottom-md text-center">
                            <div class="block-title ">
                                <div class="block-bars">
                                    <img src="img/sound-bars.png" alt="">
                                </div>
                                <h6 class="uppercase mb-1"></h6>
                                <h1 class="uppercase mb-0">Dizinin Bölümleri</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End row-->
            </div>
            <!--End container-->
            <!--Container-->
            <div class="container">
                <!--Row-->
                <div class="row justify-content-center ">
                    <div class=" col-lg-12 ">
                        <ul class="block-tabs list-inline text-center gap-one-bottom-sm">
                            <li class="active list-inline-item">
                                <h4 class="uppercase  mb-0">1. Kısım</h4>
                            </li>
                            <li class="list-inline-item">
                                <h4 class="uppercase  mb-0">2. Kısım</h4>
                            </li>
                        </ul>
                        <ul class="block-tab">
                            <!--Tab-->
                            <li class="active ">
                                <div class="block-content   text-left">
                                    <div class="block-content block-tour">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 text-center ">
                                                <h3>1. Bölüm  </h3>
                                            </div>
                                            <div class="col-lg-5 col-md-5">
                                                <div class="block-content pl-5">
                                                    
                                                    <h5 class="mb-0  uppercase">Peşinden Gidecek Cesaretiniz Varsa Bütün Rüyalar Gerçek Olabilir.</h5>
                                                    <span class="opc-50"></span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4 col-md-4 text-md-right">
                                                <div class="block-content pr-4">
                                                    
                                                    <a class="btn-s uppercase btn  with-ico" href="https://www.youtube.com/watch?v=z58LxhQylng&list=PLIovzIxZbA62DvY9AqfpYtYBsoslUqhG3&index=1"><i class="icon-ticket"></i>İzle</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-content block-tour">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 text-center ">
                                                <h3>2. Bölüm  </h3>
                                            </div>
                                            <div class="col-lg-5 col-md-5">
                                                <div class="block-content pl-5">
                                                    <h5 class="mb-0  uppercase">Aşk mı, Para mı? Klasik mi, Modern mi? </h5>
                                                    <span class="opc-50"> </span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4 col-md-4 text-md-right">
                                                <div class="block-content pr-4">
                                                    <a class="btn-s uppercase btn  with-ico " href="https://www.youtube.com/watch?v=imsucHk7DqE&list=PLIovzIxZbA62DvY9AqfpYtYBsoslUqhG3&index=2"><i class="icon-ticket"></i>İzle</a>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-content block-tour">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 text-center ">
                                                <h3>3. Bölüm </h3>
                                            </div>
                                            <div class="col-lg-5 col-md-5">
                                                <div class="block-content pl-5">
                                                    <h5 class="mb-0  uppercase">Mutluluk, Sahip Olduklarımızın Kıymetini Bilmektir.</h5>
                                                    <span class="opc-50"> </span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4 col-md-4 text-md-right">
                                                <div class="block-content pr-4">
                                                    <a class="btn-s uppercase btn  with-ico " href="https://www.youtube.com/watch?v=4cF_68Qi1Jo&list=PLIovzIxZbA62DvY9AqfpYtYBsoslUqhG3&index=3"><i class="icon-ticket"></i>İzle</a>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-content block-tour">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 text-center ">
                                                <h3>4. Bölüm </h3>
                                            </div>
                                            <div class="col-lg-5 col-md-5">
                                                <div class="block-content pl-5">
                                                    <h5 class="mb-0  uppercase">Gerçekleşen Her Dileğin Arkasında, Umut ve Cesaret Vardır. </h5>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4 col-md-4 text-md-right">
                                                <div class="block-content pr-4">
                                                    <a class="btn-s uppercase btn  with-ico " href="https://www.youtube.com/watch?v=QNEBpWl_cCc&list=PLIovzIxZbA62DvY9AqfpYtYBsoslUqhG3&index=4"><i class="icon-ticket"></i>İzle</a>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-content block-tour">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 text-center">
                                                <h3>5. Bölüm </h3>
                                            </div>
                                            <div class="col-lg-5 col-md-5 ">
                                                <div class="block-content pl-5">
                                                    <h5 class="mb-0  uppercase">Aşk,  Acı Çekmektir.</h5>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4 col-md-4 text-md-right">
                                                <div class="block-content pr-4">
                                                    <a class="btn-s uppercase btn  with-ico" href="https://www.youtube.com/watch?v=tTNIrG83rJc&list=PLIovzIxZbA62DvY9AqfpYtYBsoslUqhG3&index=5"><i class="icon-ticket"></i>İzle </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-content block-tour">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 text-center">
                                                <h3>6. Bölüm </h3>
                                            </div>
                                            <div class="col-lg-5 col-md-5">
                                                <div class="block-content pl-5">
                                                    <h5 class="mb-0  uppercase">Amaç, Sevgi Uğruna Ölmek Değil, Uğruna Ölünecek Sevgi Bulmaktır. </h5>
                                                    
                                                </div>
                                            </div>
                                            <div class=" col-12 col-lg-4 col-md-4 text-md-right">
                                                <div class="block-content pr-4">
                                                    <a class="btn-s uppercase btn  with-ico " href="https://www.youtube.com/watch?v=7PGOA_kFZ_4&list=PLIovzIxZbA62DvY9AqfpYtYBsoslUqhG3&index=6"><i class="icon-ticket"></i>İzle </a>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-content block-tour">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 text-center">
                                                <h3>7. Bölüm </h3>
                                            </div>
                                            <div class="col-lg-5 col-md-5">
                                                <div class="block-content pl-5">
                                                
                                                    <h5 class="mb-0  uppercase">Aşk Her Şeyi Affeder mi? </h5>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4 col-md-4 text-md-right">
                                                <div class="block-content pr-4">
                                                    <a class="btn-s uppercase btn with-ico" href="https://www.youtube.com/watch?v=pP9mSbjlXrk&list=PLIovzIxZbA62DvY9AqfpYtYBsoslUqhG3&index=7"><i class="icon-ticket"></i>İzle </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </li>
                            <li>
                                <div class="block-content  text-left">
                                    <div class="block-content block-tour">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 text-center ">
                                                <h3>8. Bölüm  </h3>
                                            </div>
                                            <div class="col-lg-5 col-md-5">
                                                <div class="block-content pl-5">
                                                    <h5 class="mb-0  uppercase">Gerçek Aşk Engel Tanımaz. </h5>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4 col-md-4 text-md-right">
                                                <div class="block-content pr-4">
                                                    <a class="btn-s uppercase btn  with-ico " href="https://www.youtube.com/watch?v=QAvWrodjvgI&list=PLIovzIxZbA62DvY9AqfpYtYBsoslUqhG3&index=8"><i class="icon-ticket"></i>İzle</a>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-content block-tour">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 text-center ">
                                                <h3>9. Bölüm  </h3>
                                            </div>
                                            <div class="col-lg-5 col-md-5">
                                                <div class="block-content pl-5">
                                                    
                                                    <h5 class="mb-0  uppercase">Aşkın Gururu Olmaz.</h5>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4 col-md-4 text-md-right">
                                                <div class="block-content pr-4">
                                                    <a class="btn-s uppercase btn  with-ico " href="https://www.youtube.com/watch?v=3Dmf870578g&list=PLIovzIxZbA62DvY9AqfpYtYBsoslUqhG3&index=9"><i class="icon-ticket"></i>İzle</a>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-content block-tour">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 text-center ">
                                                <h3>10. Bölüm </h3>
                                            </div>
                                            <div class="col-lg-5 col-md-5">
                                                <div class="block-content pl-5">
                                                    <h5 class="mb-0  uppercase">Her yeni yıl yeni bi umut demektir.</h5>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4 col-md-4 text-md-right">
                                                <div class="block-content pr-4">
                                                    <a class="btn-s uppercase btn  with-ico " href="https://www.youtube.com/watch?v=qqfJMrGStgg&list=PLIovzIxZbA62DvY9AqfpYtYBsoslUqhG3&index=10"><i class="icon-ticket"></i>İzle</a>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-content block-tour">
                                        <div class="row ">
                                            <div class="col-lg-3 col-md-3 text-center">
                                                <h3>11. Bölüm </h3>
                                            </div>
                                            <div class="col-lg-5 col-md-5">
                                                <div class="block-content pl-5">
                                                    <h5 class="mb-0  uppercase">mutluluk parayla satın alınamaz.</h5>
                                                  
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4 col-md-4 text-md-right">
                                                <div class="block-content pr-4">
                                                    <a class="btn-s uppercase btn with-ico" href="https://www.youtube.com/watch?v=FfOAk8xyDOo&list=PLIovzIxZbA62DvY9AqfpYtYBsoslUqhG3&index=11"><i class="icon-ticket"></i>İzle </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-content block-tour">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 text-center">
                                                <h3>12. Bölüm </h3>
                                            </div>
                                            <div class=" col-lg-5 col-md-5">
                                                <div class="block-content pl-5">
                                                    
                                                    <h5 class="mb-0 uppercase">iyiler her zaman kazanır.</h5>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4 col-md-4 float-left text-md-right">
                                                <div class="block-content pr-4">
                                                    <a class="btn-s uppercase btn  with-ico" href="https://www.youtube.com/watch?v=FaEKBEQTmo0&list=PLIovzIxZbA62DvY9AqfpYtYBsoslUqhG3&index=12"><i class="icon-ticket"></i>İzle</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-content block-tour">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 text-center">
                                                <h3>13. Bölüm </h3>
                                            </div>
                                            <div class="col-lg-5 col-md-5">
                                                <div class="block-content pl-5">
                                                    <h5 class="mb-0  uppercase">kaçan her zaman kovalanır.</h5>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4 col-md-4 text-md-right">
                                                <div class="block-content pr-4">
                                                    <a class="btn-s uppercase btn  with-ico " href="https://www.youtube.com/watch?v=NbRFK1oY9nQ&list=PLIovzIxZbA62DvY9AqfpYtYBsoslUqhG3&index=13"><i class="icon-ticket"></i>İzle</a>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-content block-tour">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 text-center">
                                                <h3>14. Bölüm</h3>
                                            </div>
                                            <div class="col-lg-5 col-md-5">
                                                <div class="block-content pl-5">
                                                    <h5 class="mb-0 uppercase">hayal gücünün sizi götüremeyeceği hiçbir yer yoktur.</h5>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4 col-md-4 text-md-right">
                                                <div class="block-content pr-4">
                                                    <a class="btn-s uppercase btn  with-ico " href="https://www.youtube.com/watch?v=P0n7qaDGg_Q&list=PLIovzIxZbA62DvY9AqfpYtYBsoslUqhG3&index=14"><i class="icon-ticket"></i>İzle</a>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="mb-0 text-center text-small"><span class="opc-50">Devamı için -> </span> <a class="link mb-0" href="https://www.youtube.com/playlist?list=PLIovzIxZbA62DvY9AqfpYtYBsoslUqhG3"> Tıklayın </a> </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--End row-->
            </div>
            <!--End container-->
       
        <!--End divider section-->
        <!--Gallery section-->
        <section id="gallery" class="gallery main brd-bottom">
            <!--Container-->
            <div class="container">
                <!--Row-->
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-9 ">
                        <div class="block-content text-center gap-one-bottom-md">
                            <div class="block-title ">
                                <div class="block-bars">
                                    <img src="img/sound-bars.png" alt="">
                                
                        </div>
                    </div>
                </div>
                <!--End row-->
            </div>
            <!--End container-->
            <!--Container-->
            <div class="container">
                <!--Row-->
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-9 ">
                        <div class="block-filter text-center gap-one-bottom-sm">
                            <ul class=" list-inline ">
                                <li class=" list-inline-item">
                                    <a href="#" class="active" data-filter="all">
                                        <h4 class="uppercase  mb-0">Hepsi</h4>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" data-filter="image">
                                        <h4 class="uppercase  mb-0">Resimler</h4>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" data-filter="video">
                                        <h4 class="uppercase  mb-0">Videolar</h4>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--End row-->
            </div>
            <!--End container-->
            <div class="container">
                <!--Row-->
                <div class="row justify-content-center text-center">
                    <div class="col-12 ">
                        <div class="card-gallery image-gallery">
                            <div class=" block-card image">
                                <a href="img/gallery/1.jpg" class="popup-image mb-0 hover-effect ">
                                    <img class="mb-0" alt="" src="img/gallery/1.jpg">
                                </a>
                            </div>
                            <div class=" block-card  image">
                                <a href="img/gallery/3.jpg" class="popup-image mb-0 hover-effect">
                                    <img class="mb-0" alt="" src="img/gallery/3.jpg">
                                </a>
                            </div>
                            <div class=" block-card  video">
                            
                            </div>
                            <div class=" block-card  video">
                               <iframe width="560" height="315" src="https://www.youtube.com/embed/_RC-VNjGxIA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                            
                            <div class=" block-card  video">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/GrXERajrij8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--End row-->
            </div>
        </section> 
                 <div class="container">
                <!--Row-->
                <div class="row justify-content-center ">
                    <div class="col-12 col-md-10 col-lg-9">
                        <div class="block-content  gap-one-bottom-md text-center">
                            <div class="block-title ">
                                <div class="block-bars">
                                    <img src="img/sound-bars.png" alt="">
                                </div>
                                <h6 class="uppercase mb-1"></h6>
                                <h1 class="uppercase mb-0">Yorumlar</h1>
                            </div>
                        </div>
                    </div>
                </div> 
                <iframe id="yrm" width="100%" height="750" src="dist/yrm.php" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <!--End row-->
            </div>  
                      
        <!--End gallery section-->
        <!--Gallery section-->
        
            <!--End container-->
            
            <!--Container-->
            <div class="container">
                <!--Row-->
                <div class="row justify-content-center">
                    <div class="col-12 col-md-7 col-lg-6">
                        <div class="block-content  text-center">
                            <div class=" block-tweets mb-5 ">
                            </div>
                        </div>
                    </div>
                </div>
                <!--End row-->
            </div>
            <!--End container-->
        </section>
        <!--End socials section-->
        <!--Contact section-->
        <section id="contact" class="contact main top bg-secondary">
            <!--Container-->
            <div class="container">
                <!--Row-->
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-9 ">
                        <div class="block-content text-center gap-one-bottom-md">
                            <div class="block-title ">
                                <div class="block-bars">
                                    <img src="img/sound-bars.png" alt="">
                                </div>
                                <h6 class="uppercase mb-1">Bize Ulaşın</h6>
                                <h1 class="uppercase mb-0">İletişim</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End row-->
            </div>
            <!--End container-->
            <!--Container-->
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10">
                        <ul class="feature-list feature-list-sm text-center row gap-one-bottom-sm">
                            <li class="col-sm-4  col-lg-4">
                                <div class="card block-info text-center">
                                    <div class="card-body pt-0">
                                        <h2 class="uppercase h2">Eren</h2>
                                        <p class="mb-0"><em class=" h5 mb-1 uppercase swap-color">Ahmet Çankaya</em>
                                            <br> T+(545)562-4257
                                            <br> eren@hepsigrup.com
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sm-4  col-lg-4">
                                <div class="card block-info text-center">
                                    <div class="card-body pt-0">
                                        <h2 class="uppercase h2">Gülçin</h2>
                                        <p class="mb-0"><em class=" h5 mb-1 uppercase swap-color">Zeynep Esra Kale</em>
                                            <br> T+(556)491-8369
                                            <br> gulcin@hepsigrup.com
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sm-4  col-lg-4">
                                <div class="card block-info text-center">
                                    <div class="card-body pt-0">
                                        <h2 class="uppercase h2">Cemre</h2>
                                        <p class=" mb-0"><em class="h5 mb-1 uppercase swap-color">Yusuf Acar</em>
                                            <br> T+(538)845-8642
                                            <br> cemre@hepsigrup.com
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sm-4  col-lg-4">
                                <div class="card block-info text-center">
                                    <div class="card-body pt-0">
                                        <h2 class="uppercase h2">Yasemin</h2>
                                        <p class=" mb-0"><em class="h5 mb-1 uppercase swap-color">Ahmet Çankaya</em>
                                            <br> T+(545)562-4257
                                            <br> yasemin@hepsigrup.com
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--End container-->
        </section>
        <!--End contact section-->
        <footer class="footer pb-5 bg-secondary text-center">
            <!--Container-->
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-12 ">
                        <div class="block-content pt-5 brd-top">
                            <p class="mb-0 ">Tüm hakları saklıdır. - <a href="#" class="swap-color underline  mr-2">Privacy Policy</a> <a href="#" class="swap-color underline  mr-2">Terms of Use</a> <a href="#" class="swap-color underline">AdChoices</a>
                        
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!--End container-->
        </footer>
        <a class="block-top scroll hover-effect" href="#wrapper"><i class="icon-angle-up"></i></a>
        </div>
        <!-- End wrapper-->
        <!--Javascript-->
        <script src="js/jquery-1.12.4.min.js"></script>
        <script src="js/jquery.flexslider-min.js"></script>
        <script src="js/smooth-scroll.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/audio.min.js"></script>
        <script src="js/twitterFetcher_min.js"></script>
        <script src="js/instafeed.min.js"></script>
        <script src="js/jquery.countdown.min.js"></script>
        <script src="js/placeholders.min.js"></script>
        <script src="js/script.js"></script>
        <!-- Google analytics -->
        <!-- End google analytics -->
</body>


</html>