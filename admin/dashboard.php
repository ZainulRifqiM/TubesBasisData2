<?php
// Menghitung Total Pelanggan
// $count_guru = "SELECT COUNT(*) AS total FROM t_guru";
// $result_guru = $conn->query($count_guru);
// $total_guru = mysqli_fetch_assoc($result_guru);

// // Menghitung Total genre
// $count_sarana = "SELECT COUNT(*) AS total FROM t_sarana";
// $result_sarana = $conn->query($count_sarana);
// $total_sarana = mysqli_fetch_assoc($result_sarana);

// // Menghitung Total sutradara
// $count_t_ekstrakurikuler = "SELECT COUNT(*) AS total FROM t_ekstrakurikuler";
// $result_t_ekstrakurikuler = $conn->query($count_t_ekstrakurikuler);
// $total_t_ekstrakurikuler = mysqli_fetch_assoc($result_t_ekstrakurikuler);
?>

<h3 style="color: #66615B;">Dashboard Zahran Kramik</h3>
<div class="row">
    <div class="col-lg-4 col-md-6 col-sm-6">
        <a href=" index.php?halaman=table-guru">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <!-- <i class="nc-icon nc-spaceship text-warning"></i> -->
                                <i class="fas fa-user-check text-primary"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">Jumlah Sales</p>
                                <p class="card-title">1
                                <p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </a>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6">
        <a href="index.php?halaman=table-sarana">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <!-- <i class="nc-icon nc-sun-fog-29 text-success"></i> -->
                                <i class="fas fa-users text-success"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">Jumlah Pembeli</p>
                                <p class="card-title">1
                                <p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </a>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6">
        <a href="index.php?halaman=table-ekstrakurikuler">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <!-- <i class="nc-icon nc-glasses-2 text-danger"></i> -->
                                <i class="fas fa-people-arrows text-warning"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">Jumlah Transaksi</p>
                                <p class="card-title">1
                                <p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </a>
    </div>

</div>