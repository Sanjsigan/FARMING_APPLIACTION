<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link href="https://colorlib.com/etc/regform/colorlib-regform-2/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="https://colorlib.com/etc/regform/colorlib-regform-2/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <link href="https://colorlib.com/etc/regform/colorlib-regform-2/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="https://colorlib.com/etc/regform/colorlib-regform-2/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    <link href="https://colorlib.com/etc/regform/colorlib-regform-2/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registration Info</h2>
                    <form method="get" action="{{URL ::to ('/store')}}">
              
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Name" name="name">
                        </div>
                        <div class="row row-space">
                            <div class="input-group">
                                <input class="input--style-2" type="email" placeholder="Email" name="email">
                            </div>
                            <div class="col-2">
                          
                                    <div class="rs-select2 js-select-simple select--no-search">
                                    <div class="input-group">
                                <input class="input--style-2" type="text" placeholder="Gender" name="gender">
                           
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Address" name="address">
                        </div>
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Mobile Number" name="mobile">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-2" type="text" placeholder="Password" name="password">
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="p-t-30">
                            <button class="btn btn--radius btn--green" type="submit">Sign in</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://colorlib.com/etc/regform/colorlib-regform-2/vendor/jquery/jquery.min.js" type="a8c352d7e9281aa33b776925-text/javascript"></script>
<script src="https://colorlib.com/etc/regform/colorlib-regform-2/vendor/select2/select2.min.js" type="a8c352d7e9281aa33b776925-text/javascript"></script>
<script src="https://colorlib.com/etc/regform/colorlib-regform-2/vendor/datepicker/daterangepicker.js" type="a8c352d7e9281aa33b776925-text/javascript"></script>
<script src="https://colorlib.com/etc/regform/colorlib-regform-2/js/global.js" type="a8c352d7e9281aa33b776925-text/javascript"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="a8c352d7e9281aa33b776925-text/javascript"></script>

<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="a8c352d7e9281aa33b776925-|49" defer=""></script>
<script type="a8c352d7e9281aa33b776925-text/javascript">
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>

</html>