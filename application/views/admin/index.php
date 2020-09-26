<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1"><?= $title ?></h2>
                    </div>
                </div>
            </div>
            <div class="row m-t-25">
                <div class="col-sm-6 col-lg-3">
                    <div class="overview-item overview-item--c1">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">
                                <div class="icon">
                                    <i class="fas fa-user"></i>
                                </div>
                                <hr>
                                <div class="text m-b-10">
                                    <h2><?= $this->db->count_all('tb_user'); ?></h2>
                                    <span>Jumlah User</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="overview-item overview-item--c2">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">
                                <div class="icon">
                                    <i class="fas fa-sitemap"></i>
                                </div>
                                <hr>
                                <div class="text m-b-10">
                                    <h2><?= $this->db->count_all('tb_unit'); ?></h2>
                                    <span>Jumlah Unit</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="overview-item overview-item--c3">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">
                                <div class="icon">
                                    <i class="fas fa-book"></i>
                                </div>
                                <hr>
                                <div class="text m-b-10">
                                    <h2><?= $this->db->count_all('tb_logbook'); ?></h2>
                                    <span>Jumlah E-Logbook</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="overview-item overview-item--c4">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">
                                <div class="icon">
                                    <i class="fas fa-bookmark"></i>
                                </div>
                                <hr>
                                <div class="text m-b-10">
                                    <h2><?= $log; ?></h2>
                                    <span>My E-Logbook</span>
                                </div>
                            </div>
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