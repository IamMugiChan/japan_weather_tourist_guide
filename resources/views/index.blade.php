<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Tourist Application Weather Guide</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <link href="{{ URL::asset('css/vendor.min.css') }}" rel="stylesheet" />
        <link href="{{ URL::asset('css/app.min.css') }}" rel="stylesheet" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    </head>
    <body class="pace-top">
        <div id="app" class="app app-full-height app-without-header">
            <div class="login">
                <div class="login-content">
                    <form action="https://seantheme.com/hud/index.html" method="POST" name="login_form">
                        <div id="notif" class="text-white text-opacity-50 text-center mb-4">
                            Please select city
                        </div>
                        <div class="mb-3">
                            <select id="city_select" class="form-control form-control-lg text-warning bg-opacity-5 text-center" >
                                <option disabled selected><i>No selected</i></option>
                                <option value="tokyo" class="text-black">Tokyo</option>
                                <option value="yokohama" class="text-black">Yokohama</option>
                                <option value="kyoto" class="text-black">Kyoto</option>
                                <option value="osaka" class="text-black">Osaka</option>
                                <option value="sapporo" class="text-black">Sapporo</option>
                                <option value="nagoya" class="text-black">Nagoya</option>
                            </select>
                        </div>
                       
                    </form>
                </div>
            </div>

            <a href="#" data-toggle="scroll-to-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
        </div>        
    </body>
    <script type="text/javascript">
        $(document).ready(function() {  
            $('#city_select').change(function(){
                var city = $(this).find("option:selected").attr('value');
                $('#notif').removeClass("text-white");
                $("#notif").addClass("text-warning")
                $("#notif").text("Redirecting Please Wait...")
                setTimeout(function(){
                    location.assign("/"+city)
                },2000)
            });
         });

    </script>

</html>
