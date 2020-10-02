<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="au-card recent-report">
                        <div class="au-card-inner">
                            <h3 class="title-2 m-b-10"><?= $title ?></h3>
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="<?= base_url('assets/img/profile/' . $user['image']); ?>" width="100px" height="100px" />
                                </div>
                                <div class="col-md-6">
                                    NIP : <strong><?= $user['nip']; ?></strong><br>
                                    Nama : <strong><?= $user['name']; ?></strong><br>
                                    Jabatan : <strong><?= $user['jabatan']; ?></strong><br>
                                    <?php foreach ($unit as $u) : ?>
                                        Unit : <strong><?= $u->unit ?></strong><br>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <h3 class="title-2 m-t-10">QR Code NIP</h3>
                            <img src="<?= base_url('assets/qrcode/' . $user['qr_code']); ?>" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="au-card m-b-30">
                        <div class="au-card-inner">
                            <h5 class="lg-title">Grafik E-Logbook</h5>
                            <p class="mb15">Berikut hasil laporan E-Logbook yang masuk berdasarkan resiko.</p>
                            <canvas id="myChart" class="height300"></canvas>
                            <script type="text/javascript" src="<?= base_url('assets/'); ?>js/Chart.js"></script>
                            <script>
                                var ctx = document.getElementById("myChart").getContext('2d');
                                var myChart = new Chart(ctx, {
                                    type: 'bar',
                                    data: {
                                        labels: ["High", "Medium", "Low"],
                                        datasets: [{
                                            label: '',
                                            data: [
                                                <?= $high; ?>,
                                                <?= $medium; ?>,
                                                <?= $low; ?>
                                            ],
                                            backgroundColor: [
                                                'rgba(255, 99, 132)',
                                                'rgba(54, 162, 235)',
                                                'rgba(255, 206, 86)'
                                            ],
                                            borderColor: [
                                                'rgba(255,99,132)',
                                                'rgba(54, 162, 235)',
                                                'rgba(255, 206, 86)'
                                            ],
                                            borderWidth: 1
                                        }]
                                    },
                                    options: {
                                        scales: {
                                            yAxes: [{
                                                ticks: {
                                                    beginAtZero: true
                                                }
                                            }]
                                        }
                                    }
                                });
                            </script>
                        </div>
                    </div>
                </div> <!-- col -->
            </div><!-- row -->
        </div>
    </div>
</div>
<!-- END MAIN CONTENT-->
<!-- END PAGE CONTAINER-->