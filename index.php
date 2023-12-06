<?php
    header('Access-Control-Allow-Origin: *');
    include('info.php'); 
    $page='home';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/image/<?= $icon_title ?>">
    <link rel="stylesheet" href="assets/css/bootstrap-4.3.1/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
    <link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.css'>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.70.0/dist/L.Control.Locate.min.css" />
    <link rel="stylesheet" href="assets/css/style.min.css?v=<?= date('YmdHis'); ?>">
    <?php //include('report.php'); ?>
</head>

<body>
    <div id="btn_contact"> 
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
    <section id="main">
        <div class="container-fluid">
            <?php include('header.php'); ?>
            <div class="main_content">
                <div class="sub_menu col-12">
                    <div class="lang">
                        <button class="btn btn-sm shadow-drop-bottom-sub_menu active" data-lang="TH">TH</button>
                        <button class="btn btn-sm shadow-drop-bottom-sub_menu" data-lang="EN">EN</button>
                    </div>
                    <div class="aqi">
                        <div class="btn-group">
                            <button class="btn dropdown-toggle shadow-drop-bottom-sub_menu" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="fade_in_ture"> Th (Hourly) </span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right shadow-drop-bottom-sub_menu">
                                <a class="dropdown-item" data-index="us-hr">Us (Hourly)</a>
                                <a class="dropdown-item" data-index="us-dy">Us (Daily)</a>
                                <a class="dropdown-item active" data-index="th-hr">Th (Hourly)</a>
                                <a class="dropdown-item" data-index="th-dy">Th (Daily)</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="map col-12">
                    <div class="bg_map fade_in_ture">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="us_aqi" role="tabpanel">
                                <div id="us_map" class="fade_in_ture anime_delay05"></div>
                                <div class="pm_aqi cate_us" style="display: none;">
                                    <div class="pm fade_in_ture anime_delay1">
                                        <div class="col col-md-6 title_pm_aqi ">PM<sub>2.5</sub>(μg/m<sup>3</sup>)</div>
                                        <div class="col col-md-1 detail_pm_aqi us1 num"></div>
                                        <div class="col col-md-1 detail_pm_aqi us2 num"></div>
                                        <div class="col col-md-1 detail_pm_aqi us3 num"></div>
                                        <div class="col col-md-1 detail_pm_aqi us4 num"></div>
                                        <div class="col col-md-1 detail_pm_aqi us5 num"></div>
                                        <div class="col col-md-1 detail_pm_aqi us6 num"></div>
                                    </div>
                                    <div class="aqi fade_in_ture anime_delay15">
                                        <div class="col col-md-6 title_pm_aqi quality"></div>
                                        <div class="col col-md-1 detail_pm_aqi us1" >
                                            <!-- <i class="fas fa-grin-beam fa-2x text-shadow-drop-bottom-icon anime_delay1"></i> -->
                                            <!-- <img class="shadow-drop-bottom-icon anime_delay1" src="assets/image/pm25/us/nrct-06.png"> -->
                                        </div>
                                        <div class="col col-md-1 detail_pm_aqi us2" >
                                            <!-- <i class="fas fa-meh fa-2x text-shadow-drop-bottom-icon anime_delay1"></i> -->
                                            <!-- <img class="shadow-drop-bottom-icon anime_delay1" src="assets/image/pm25/us/nrct-07.png"> -->
                                        </div>
                                        <div class="col col-md-1 detail_pm_aqi us3" >
                                            <!-- <i class="fas fa-frown-open fa-2x text-shadow-drop-bottom-icon anime_delay1"></i> -->
                                            <!-- <img class="shadow-drop-bottom-icon anime_delay1" src="assets/image/pm25/us/nrct-08.png"> -->
                                        </div>
                                        <div class="col col-md-1 detail_pm_aqi us4" >
                                            <!-- <i class="fas fa-sad-tear fa-2x text-shadow-drop-bottom-icon anime_delay1"></i> -->
                                            <!-- <img class="shadow-drop-bottom-icon anime_delay1" src="assets/image/pm25/us/nrct-09.png"> -->
                                        </div>
                                        <div class="col col-md-1 detail_pm_aqi us5" >
                                            <!-- <i class="fas fa-tired fa-2x text-shadow-drop-bottom-icon anime_delay1"></i> -->
                                            <!-- <img class="shadow-drop-bottom-icon anime_delay1" src="assets/image/pm25/us/nrct-10.png"> -->
                                        </div>
                                        <div class="col col-md-1 detail_pm_aqi us6" >
                                            <!-- <i class="fas fa-dizzy fa-2x text-shadow-drop-bottom-icon anime_delay1"></i> -->
                                            <!-- <img class="shadow-drop-bottom-icon anime_delay1" src="assets/image/pm25/us/nrct-11.png"> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="pm_aqi cate_us_daily" style="display: none;">
                                    <div class="pm fade_in_ture anime_delay1">
                                        <div class="col-2 col-md-7 title_pm_aqi ">PM<sub>2.5</sub>(μg/m<sup>3</sup>)</div>
                                        <div class="col-2 col-md-1 detail_pm_aqi us1 num"></div>
                                        <div class="col-2 col-md-1 detail_pm_aqi us2 num"></div>
                                        <div class="col-2 col-md-1 detail_pm_aqi us3 num"></div>
                                        <div class="col-2 col-md-1 detail_pm_aqi us4 num"></div>
                                        <div class="col-2 col-md-1 detail_pm_aqi us5 num"></div>
                                    </div>
                                    <div class="aqi fade_in_ture anime_delay15">
                                        <div class="col-2 col-md-7 title_pm_aqi quality"></div>
                                        <div class="col-2 col-md-1 detail_pm_aqi us1 daily"></div>
                                        <div class="col-2 col-md-1 detail_pm_aqi us2 daily"></div>
                                        <div class="col-2 col-md-1 detail_pm_aqi us3 daily"></div>
                                        <div class="col-2 col-md-1 detail_pm_aqi us4 daily"></div>
                                        <div class="col-2 col-md-1 detail_pm_aqi us5 daily"></div>
                                    </div>
                                </div>
                                <div class="pm_aqi cate_th">
                                    <div class="pm fade_in_ture anime_delay1">
                                        <div class="col-2 col-md-7 title_pm_aqi ">PM<sub>2.5</sub>(μg/m<sup>3</sup>)</div>
                                        <div class="col-2 col-md-1 detail_pm_aqi th1 num"></div>
                                        <div class="col-2 col-md-1 detail_pm_aqi th2 num"></div>
                                        <div class="col-2 col-md-1 detail_pm_aqi th3 num"></div>
                                        <div class="col-2 col-md-1 detail_pm_aqi th4 num"></div>
                                        <div class="col-2 col-md-1 detail_pm_aqi th5 num"></div>
                                    </div>
                                    <div class="aqi fade_in_ture anime_delay15">
                                        <div class="col-2 col-md-7 title_pm_aqi quality"></div>
                                        <div class="col-2 col-md-1 detail_pm_aqi th1" >
                                            <!-- <i class="fas fa-grin-squint fa-2x text-shadow-drop-bottom-icon anime_delay1"></i> -->
                                            <!-- <img class="shadow-drop-bottom-icon anime_delay1" src="assets/image/pm25/th/nrct-01.png"> -->
                                        </div>
                                        <div class="col-2 col-md-1 detail_pm_aqi th2" >
                                            <!-- <i class="fas fa-grin-beam fa-2x text-shadow-drop-bottom-icon anime_delay1"></i> -->
                                            <!-- <img class="shadow-drop-bottom-icon anime_delay1" src="assets/image/pm25/th/nrct-02.png"> -->
                                        </div>
                                        <div class="col-2 col-md-1 detail_pm_aqi th3" >
                                            <!-- <i class="fas fa-meh fa-2x text-shadow-drop-bottom-icon anime_delay1"></i> -->
                                            <!-- <img class="shadow-drop-bottom-icon anime_delay1" src="assets/image/pm25/th/nrct-03.png"> -->
                                        </div>
                                        <div class="col-2 col-md-1 detail_pm_aqi th4" >
                                            <!-- <i class="fas fa-sad-tear fa-2x text-shadow-drop-bottom-icon anime_delay1"></i> -->
                                            <!-- <img class="shadow-drop-bottom-icon anime_delay1" src="assets/image/pm25/th/nrct-04.png"> -->
                                        </div>
                                        <div class="col-2 col-md-1 detail_pm_aqi th5" >
                                            <!-- <i class="fas fa-dizzy fa-2x text-shadow-drop-bottom-icon anime_delay1"></i> -->
                                            <!-- <img class="shadow-drop-bottom-icon anime_delay1" src="assets/image/pm25/th/nrct-05.png"> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="pm_aqi cate_th_daily" style="display: none;">
                                    <div class="pm fade_in_ture anime_delay1">
                                        <div class="col-2 col-md-7 title_pm_aqi ">PM<sub>2.5</sub>(μg/m<sup>3</sup>)</div>
                                        <div class="col-2 col-md-1 detail_pm_aqi th1 num"></div>
                                        <div class="col-2 col-md-1 detail_pm_aqi th2 num"></div>
                                        <div class="col-2 col-md-1 detail_pm_aqi th3 num"></div>
                                        <div class="col-2 col-md-1 detail_pm_aqi th4 num"></div>
                                        <div class="col-2 col-md-1 detail_pm_aqi th5 num"></div>
                                    </div>
                                    <div class="aqi fade_in_ture anime_delay15">
                                        <div class="col-2 col-md-7 title_pm_aqi quality"></div>
                                        <div class="col-2 col-md-1 detail_pm_aqi th1 daily"></div>
                                        <div class="col-2 col-md-1 detail_pm_aqi th2 daily"></div>
                                        <div class="col-2 col-md-1 detail_pm_aqi th3 daily"></div>
                                        <div class="col-2 col-md-1 detail_pm_aqi th4 daily"></div>
                                        <div class="col-2 col-md-1 detail_pm_aqi th5 daily"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="popupDetail" class="card col-12 col-lg-5 col-xl-4 fade_in_ture anime_delay025" style="display: none;">
                        <div class="card-header">
                            <p class="mb-0"></p>
                            <button class="btn btn-sm btn-close"><i class="fas fa-times"></i></button>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="number col-md-6 col-lg-7">
                                    <div class="number_title"></div>
                                    <div class="number_footer"></div>
                                </div>
                                <div class="anime col-md-6 col-lg-5 d-none d-md-flex">
                                    <img src="" alt="anime of ccdc">
                                </div>
                                <div class="detail col-lg-12">
                                    <div class="detail_title"></div>
                                    <!-- <div class="time"></div> -->
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="weahter col-6 col-md-6 col-xl-5">
                                </div>
                                <div class="favorite col-12 text-center">
                                    <div class="time"></div>
                                    <div class="foot_aqi"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include('contact-footer.php'); ?>
    
    <script src="assets/js/all/compress.min.js?v=<?= date('YmdHis'); ?>"></script>
    <script src="assets/js/all.js?v=<?= date('YmdHis'); ?>"></script>
    <script src="assets/js/main.js?v=<?= date('YmdHis'); ?>"></script>
</body>

</html>
