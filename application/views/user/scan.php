<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
<script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
<!-- MAIN CONTENT-->
<style type="text/css">
    .preview-container {
        flex-direction: column;
        display: flex;
        width: 100%;
        overflow: hidden;
    }

    ul {
        list-style-type: none;
    }
</style>
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10">
                    <div class="au-card recent-report">
                        <div class="au-card-inner">
                            <h3 class="title-2 m-b-10"><?= $title ?></h3>
                            <div class="row m-l-10">
                                <div id="app">
                                    <div class="sidebar">
                                        <div class="row">
                                            <div class="col">
                                                <section class="cameras">
                                                    <h4>Pilih Kamera</h4>
                                                    <ul>
                                                        <li v-if="cameras.length === 0" class="empty">No cameras found</li>
                                                        <li v-for="camera in cameras">
                                                            <span v-if="camera.id == activeCameraId" :title="formatName(camera.name)" class="active">{{ formatName(camera.name) }}</span>
                                                            <span v-if="camera.id != activeCameraId" :title="formatName(camera.name)">
                                                                <a @click.stop="selectCamera(camera)">{{ formatName(camera.name) }}</a>
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </section>
                                            </div>
                                            <div class="col">
                                                <section class="scans">
                                                    <h4>Hasil Scan</h4>
                                                    <ul v-if="scans.length === 0">
                                                        <li class="empty">Arahkan QR Code ke kamera</li>
                                                    </ul>
                                                    <transition-group name="scans" tag="ul">
                                                        <li v-for="scan in scans" :key="scan.date" :title="scan.content">{{ scan.content }}</li>
                                                    </transition-group>
                                                    <!-- Gimana caranya biar hasil scan otomatis membuka dihalaman baru -->
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                    <section class="scans">
                                                    <h4>Hasil Scan</h4>
                                                    <ul v-if="scans.length === 0">
                                                        <li class="empty">Arahkan QR Code ke kamera</li>
                                                    </ul>
                                                    <transition-group name="scans" tag="ul">
                                                        <a href="" v-for="scan in scans" :key="scan.date" :title="scan.content">{{ scan.content }}</a>
                                                    </transition-group>
                                                    <!-- Gimana caranya biar hasil scan otomatis membuka dihalaman baru -->
                                                </section>
                                    <div class="row m-t-10">
                                        <div class="col">
                                            <div class="preview-container">
                                                <video id="preview"></video>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script type="text/javascript" src="<?= base_url('assets/js/') ?>app.js"></script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT-->
    <!-- END PAGE CONTAINER-->