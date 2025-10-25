<?php 

include 'function.php';

$hub = mysqli_connect('localhost', 'root', 'Frozzyt123', 'mia');

$data1 = mysqli_query($hub, 'SELECT * FROM umkm WHERE id=1');
$data2 = mysqli_query($hub, 'SELECT * FROM umkm WHERE id=2');
$data3 = mysqli_query($hub, 'SELECT * FROM umkm WHERE id=3');
$data4 = mysqli_query($hub, 'SELECT * FROM umkm WHERE id=4');
$data5 = mysqli_query($hub, 'SELECT * FROM umkm WHERE id=5');
$data6 = mysqli_query($hub, 'SELECT * FROM umkm WHERE id=6');
$data7 = mysqli_query($hub, 'SELECT * FROM umkm WHERE id=7');
$data8 = mysqli_query($hub, 'SELECT * FROM umkm WHERE id=8');
$data9 = mysqli_query($hub, 'SELECT * FROM umkm WHERE id=9');
$data10 = mysqli_query($hub, 'SELECT * FROM umkm WHERE id=10');

$umkm1 = mysqli_fetch_row($data1);
$umkm2 = mysqli_fetch_row($data2);
$umkm3 = mysqli_fetch_row($data3);
$umkm4 = mysqli_fetch_row($data4);
$umkm5 = mysqli_fetch_row($data5);
$umkm6 = mysqli_fetch_row($data6);
$umkm7 = mysqli_fetch_row($data7);
$umkm8 = mysqli_fetch_row($data8);
$umkm9 = mysqli_fetch_row($data9);
$umkm10 = mysqli_fetch_row($data10);


if(isset($_POST['search'])) {
    $query = cari($_POST['cari']);
};




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Dashboard</title>
</head>
<body>
    <!-- Navbar -->
    <nav>
        <div class="navbar">
            <div class="navbar-h2">
                <h2>UMKM</h2>
            </div>
            <div class="navbar-a">
                <a href="">Home</a>
                <a href="">UMKM</a>
            </div>
            <div class="navbar-search">
                <input type="search" placeholder="Search" name="cari">
                <button type="submit" name="search">tombol</button>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Content 1 -->
     <section>
        <div class="main">
            <div class="content-1"></div>
        </div>
     </section>
    <!-- Content 1 End -->

    <!-- Content 2 -->
     <section>
        <div class=container-card>
            <div class="primary-card">
                <div class="sec-card">
                        <div class="card">
                            <div>
                                <img src="assets/cozy drink/alpokat kocok + ice cream.png" alt="umkm1">
                            </div>
                            <div>
                                <a href="">
                                    <h3><?= $umkm1[1]?></h3>
                                </a>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <div class="card-btn">
                                    <a href="cozydrink.html">
                                        <button>Kunjungi</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div>
                                <img src="assets/bakso khas makassar daeng lalang/bakso komplit.png" alt="umkm1">
                            </div>
                            <div>
                                <a href="">
                                    <h3><?= $umkm6[1]?></h3>
                                </a>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <div class="card-btn">
                                    <a href="baksodaenglalang.html">
                                        <button>Kunjungi</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div>
                                <img src="assets/mocin/m1.jpg
                                " alt="umkm1">
                            </div>
                            <div>
                                <a href="">
                                    <h3><?= $umkm3[1]?></h3>
                                </a>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <div class="card-btn">
                                    <a href="mocin.html">
                                        <button>Kunjungi</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div>
                                <img src="assets/komau juice/alpukat kocok dancow.png" alt="umkm1">
                            </div>
                            <div>
                                <a href="">
                                    <h3><?= $umkm8[1]?></h3>
                                </a>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <div class="card-btn">
                                    <a href="komau juice.html">
                                        <button>Kunjungi</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div>
                                <img src="assets/nasi goreng skripsi/nasi goreng kari + katsu.jpeg" alt="umkm1">
                            </div>
                            <div>
                                <a href="">
                                    <h3><?= $umkm5[1]?></h3>
                                </a>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <div class="card-btn">
                                    <a href="nasigorengskripsi.html">
                                        <button>Kunjungi</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div>
                                <img src="assets/oishii banana/o4.jpg" alt="umkm1">
                            </div>
                            <div>
                                <a href="">
                                    <h3><?= $umkm4[1]?></h3>
                                </a>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <div class="card-btn">
                                    <a href="oishi banana.html">
                                        <button>Kunjungi</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div>
                                <img src="assets/kebab turkiyem/full sapi original.png" alt="umkm1">
                            </div>
                            <div>
                                <a href="">
                                    <h3><?= $umkm9[1]?></h3>
                                </a>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <div class="card-btn">
                                    <a href="raishacraft.html">
                                        <button>Kunjungi</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div>
                                <img src="assets/skripsi service/s2.webp" alt="umkm1">
                            </div>
                            <div>
                                <a href="">
                                    <h3><?= $umkm7[1]?></h3>
                                </a>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <div class="card-btn">
                                    <a href="skripsiservice.html">
                                        <button>Kunjungi</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div>
                                <img src="assets/teras ryker/tr3.png" alt="umkm1">
                            </div>
                            <div>
                                <a href="">
                                    <h3><?= $umkm2[1]?></h3>
                                </a>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <div class="card-btn">
                                    <a href="terasryker.html">
                                        <button>Kunjungi</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div>
                                <img src="assets/wr pangkep/wr1.png" alt="umkm1">
                            </div>
                            <div>
                                <a href="">
                                    <h3><?= $umkm10[1]?></h3>
                                </a>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <div class="card-btn">
                                    <a href="wr pangkep.html">
                                        <button>Kunjungi</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
     </section>
    <!-- Content 2 End-->



</body>
</html>