<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Yokohama Japan Guide</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <link href="{{ URL::asset('css/vendor.min.css') }}" rel="stylesheet" />
        <link href="{{ URL::asset('css/app.min.css') }}" rel="stylesheet" />
        <link href="{{ URL::asset('plugins/jvectormap-next/jquery-jvectormap.css') }}" rel="stylesheet" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    </head>
    <body class="pace-top">
        <div id="app" class="app theme-orange app-full-height app-without-header app-sidebar-collapsed">
            <div id="content" class="app-content">
                <div class="container">
                    <div class="row">

                        <div class="col-xl-12">
                            <div class="card mb-3" >
                                <div class="card-body" >
                                    <div class="d-flex fw-bold small mb-3">
                                        <span class="flex-grow-1"><a href="/"><i class="fa fa-arrow-left"></i></a> Places to visit in Yokohama Japan</span>
                                        <a href="#" data-toggle="card-expand" class="text-white text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
                                    </div>

                                    <div class="ratio ratio-21x9 mb-3" style="height: 500px;">
                                        <iframe src="https://www.google.com/maps/d/embed?mid=1E8Cp4mpPBswQQuxMvN0DLDm7cmY&hl=en&ehbc=2E312F" width="640" height="480"></iframe>
                                    </div>
                                </div>

                                <div class="card-arrow">
                                    <div class="card-arrow-top-left"></div>
                                    <div class="card-arrow-top-right"></div>
                                    <div class="card-arrow-bottom-left"></div>
                                    <div class="card-arrow-bottom-right"></div>
                                </div>
                            </div>
                        </div>

                        
                    </div>
                    <div class="row justify-content-center">
                        

                        <div class="col-xl-3 col-lg-6">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="d-flex fw-bold small mb-3">
                                        <span class="flex-grow-1" id="f0"></span>
                                        <a href="#" data-toggle="card-expand" class="text-white text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
                                    </div>

                                    <div class="row align-items-center mb-2">
                                        <div class="col-7">
                                            <h3 class="mb-0" id="weather_main_0"></h3>
                                            <i class="fa fa-cloud fa-fw me-1"></i><small id="clouds0"></small>
                                        </div>
                                        <div class="col-5">
                                            <div class="mt-n2"><img id="weather_icon_0"></div>
                                        </div>
                                    </div>

                                    <div class="small text-white text-opacity-50 text-truncate">
                                        <i class="fa fa-tint fa-fw me-1"></i> <small id="humidity0"></small><br>
                                        <i class="fa fa-thermometer-full fa-fw me-1"></i> <small id="temperature0"></small></br>
                                        <i class="fa fa-leaf fa-fw me-1"></i> <small id="wind_speed0"></small>
                                    </div>
                                </div>

                                <div class="card-arrow">
                                    <div class="card-arrow-top-left"></div>
                                    <div class="card-arrow-top-right"></div>
                                    <div class="card-arrow-bottom-left"></div>
                                    <div class="card-arrow-bottom-right"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="d-flex fw-bold small mb-3">
                                        <span class="flex-grow-1" id="f1"></span>
                                        <a href="#" data-toggle="card-expand" class="text-white text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
                                    </div>

                                    <div class="row align-items-center mb-2">
                                        <div class="col-7">
                                            <h3 class="mb-0" id="weather_main_1"></h3>
                                            <i class="fa fa-cloud fa-fw me-1"></i><small id="clouds1"></small>
                                        </div>
                                        <div class="col-5">
                                            <div class="mt-n2"><img id="weather_icon_1"></div>
                                        </div>
                                    </div>

                                    <div class="small text-white text-opacity-50 text-truncate">
                                        <i class="fa fa-tint fa-fw me-1"></i> <small id="humidity1"></small><br>
                                        <i class="fa fa-thermometer-full fa-fw me-1"></i> <small id="temperature1"></small></br>
                                        <i class="fa fa-leaf fa-fw me-1"></i> <small id="wind_speed1"></small>
                                    </div>
                                </div>

                                <div class="card-arrow">
                                    <div class="card-arrow-top-left"></div>
                                    <div class="card-arrow-top-right"></div>
                                    <div class="card-arrow-bottom-left"></div>
                                    <div class="card-arrow-bottom-right"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="d-flex fw-bold small mb-3">
                                        <span class="flex-grow-1" id="f2"></span>
                                        <a href="#" data-toggle="card-expand" class="text-white text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
                                    </div>

                                    <div class="row align-items-center mb-2">
                                        <div class="col-7">
                                            <h3 class="mb-0" id="weather_main_2"></h3>
                                            <i class="fa fa-cloud fa-fw me-1"></i><small id="clouds2"></small>
                                        </div>
                                        <div class="col-5">
                                            <div class="mt-n2"><img id="weather_icon_2"></div>
                                        </div>
                                    </div>

                                    <div class="small text-white text-opacity-50 text-truncate">
                                        <i class="fa fa-tint fa-fw me-1"></i> <small id="humidity2"></small><br>
                                        <i class="fa fa-thermometer-full fa-fw me-1"></i> <small id="temperature2"></small></br>
                                        <i class="fa fa-leaf fa-fw me-1"></i> <small id="wind_speed2"></small>
                                    </div>
                                </div>

                                <div class="card-arrow">
                                    <div class="card-arrow-top-left"></div>
                                    <div class="card-arrow-top-right"></div>
                                    <div class="card-arrow-bottom-left"></div>
                                    <div class="card-arrow-bottom-right"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="d-flex fw-bold small mb-3">
                                        <span class="flex-grow-1" id="f3"></span>
                                        <a href="#" data-toggle="card-expand" class="text-white text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
                                    </div>

                                    <div class="row align-items-center mb-2">
                                        <div class="col-7">
                                            <h3 class="mb-0" id="weather_main_3"></h3>
                                            <i class="fa fa-cloud fa-fw me-1"></i><small id="clouds3"></small>
                                        </div>
                                        <div class="col-5">
                                            <div class="mt-n2"><img id="weather_icon_3"></div>
                                        </div>
                                    </div>

                                    <div class="small text-white text-opacity-50 text-truncate">
                                        <i class="fa fa-tint fa-fw me-1"></i> <small id="humidity3"></small><br>
                                        <i class="fa fa-thermometer-full fa-fw me-1"></i> <small id="temperature3"></small></br>
                                        <i class="fa fa-leaf fa-fw me-1"></i> <small id="wind_speed3"></small>
                                    </div>
                                </div>

                                <div class="card-arrow">
                                    <div class="card-arrow-top-left"></div>
                                    <div class="card-arrow-top-right"></div>
                                    <div class="card-arrow-bottom-left"></div>
                                    <div class="card-arrow-bottom-right"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="d-flex fw-bold small mb-3">
                                        <span class="flex-grow-1" id="f4"></span>
                                        <a href="#" data-toggle="card-expand" class="text-white text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
                                    </div>

                                    <div class="row align-items-center mb-2">
                                        <div class="col-7">
                                            <h3 class="mb-0" id="weather_main_4"></h3>
                                            <i class="fa fa-cloud fa-fw me-1"></i><small id="clouds4"></small>
                                        </div>
                                        <div class="col-5">
                                            <div class="mt-n2"><img id="weather_icon_4"></div>
                                        </div>
                                    </div>

                                    <div class="small text-white text-opacity-50 text-truncate">
                                        <i class="fa fa-tint fa-fw me-1"></i> <small id="humidity4"></small><br>
                                        <i class="fa fa-thermometer-full fa-fw me-1"></i> <small id="temperature4"></small></br>
                                        <i class="fa fa-leaf fa-fw me-1"></i> <small id="wind_speed4"></small>
                                    </div>
                                </div>

                                <div class="card-arrow">
                                    <div class="card-arrow-top-left"></div>
                                    <div class="card-arrow-top-right"></div>
                                    <div class="card-arrow-bottom-left"></div>
                                    <div class="card-arrow-bottom-right"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="d-flex fw-bold small mb-3">
                                        <span class="flex-grow-1" id="f5"></span>
                                        <a href="#" data-toggle="card-expand" class="text-white text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
                                    </div>

                                    <div class="row align-items-center mb-2">
                                        <div class="col-7">
                                            <h3 class="mb-0" id="weather_main_5"></h3>
                                            <i class="fa fa-cloud fa-fw me-1"></i><small id="clouds5"></small>
                                        </div>
                                        <div class="col-5">
                                            <div class="mt-n2"><img id="weather_icon_5"></div>
                                        </div>
                                    </div>

                                    <div class="small text-white text-opacity-50 text-truncate">
                                        <i class="fa fa-tint fa-fw me-1"></i> <small id="humidity5"></small><br>
                                        <i class="fa fa-thermometer-full fa-fw me-1"></i> <small id="temperature5"></small></br>
                                        <i class="fa fa-leaf fa-fw me-1"></i> <small id="wind_speed5"></small>
                                    </div>
                                </div>

                                <div class="card-arrow">
                                    <div class="card-arrow-top-left"></div>
                                    <div class="card-arrow-top-right"></div>
                                    <div class="card-arrow-bottom-left"></div>
                                    <div class="card-arrow-bottom-right"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="d-flex fw-bold small mb-3">
                                        <span class="flex-grow-1" id="f6"></span>
                                        <a href="#" data-toggle="card-expand" class="text-white text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
                                    </div>

                                    <div class="row align-items-center mb-2">
                                        <div class="col-7">
                                            <h3 class="mb-0" id="weather_main_6"></h3>
                                            <i class="fa fa-cloud fa-fw me-1"></i><small id="clouds6"></small>
                                        </div>
                                        <div class="col-5">
                                            <div class="mt-n2"><img id="weather_icon_6"></div>
                                        </div>
                                    </div>

                                    <div class="small text-white text-opacity-50 text-truncate">
                                        <i class="fa fa-tint fa-fw me-1"></i> <small id="humidity6"></small><br>
                                        <i class="fa fa-thermometer-full fa-fw me-1"></i> <small id="temperature6"></small></br>
                                        <i class="fa fa-leaf fa-fw me-1"></i> <small id="wind_speed6"></small>
                                    </div>
                                </div>

                                <div class="card-arrow">
                                    <div class="card-arrow-top-left"></div>
                                    <div class="card-arrow-top-right"></div>
                                    <div class="card-arrow-bottom-left"></div>
                                    <div class="card-arrow-bottom-right"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="d-flex fw-bold small mb-3">
                                        <span class="flex-grow-1" id="f7"></span>
                                        <a href="#" data-toggle="card-expand" class="text-white text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
                                    </div>

                                    <div class="row align-items-center mb-2">
                                        <div class="col-7">
                                            <h3 class="mb-0" id="weather_main_7"></h3>
                                            <i class="fa fa-cloud fa-fw me-1"></i><small id="clouds7"></small>
                                        </div>
                                        <div class="col-5">
                                            <div class="mt-n2"><img id="weather_icon_7"></div>
                                        </div>
                                    </div>

                                    <div class="small text-white text-opacity-50 text-truncate">
                                        <i class="fa fa-tint fa-fw me-1"></i> <small id="humidity7"></small><br>
                                        <i class="fa fa-thermometer-full fa-fw me-1"></i> <small id="temperature7"></small></br>
                                        <i class="fa fa-leaf fa-fw me-1"></i> <small id="wind_speed7"></small>
                                    </div>
                                </div>

                                <div class="card-arrow">
                                    <div class="card-arrow-top-left"></div>
                                    <div class="card-arrow-top-right"></div>
                                    <div class="card-arrow-bottom-left"></div>
                                    <div class="card-arrow-bottom-right"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <a href="#" data-toggle="scroll-to-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
        </div>        
    </body>
    <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="js/vendor.min.js" type="ecebe043bbc59915aafe70e4-text/javascript"></script>
    <script src="js/app.min.js" type="ecebe043bbc59915aafe70e4-text/javascript"></script>

    <script src="js/demo/dashboard.demo.js" type="ecebe043bbc59915aafe70e4-text/javascript"></script>
    <script src="cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="ecebe043bbc59915aafe70e4-|49" defer=""></script>
    <script
        defer
        src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194"
        integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw=="
        data-cf-beacon='{"rayId":"6ffd9b55bc46193d","version":"2021.12.0","r":1,"token":"4db8c6ef997743fda032d4f73cfeff63","si":100}'
        crossorigin="anonymous"
    ></script>


    <script type="text/javascript" src="{{ URL::asset('js/date_format.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/yokohama.js') }}"></script>
</html>
