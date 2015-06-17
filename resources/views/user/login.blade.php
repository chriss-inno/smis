<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>GFXFree.Net</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="description" content="">
    <meta name="keywords" content="coco bootstrap template, coco admin, bootstrap,admin template, bootstrap admin,">
    <meta name="author" content="Huban Creative">

    <!-- Base Css Files -->
    <link href="assets/libs/jqueryui/ui-lightness/jquery-ui-1.10.4.custom.min.css" rel="stylesheet" />
    <link href="assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/libs/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/libs/fontello/css/fontello.css" rel="stylesheet" />
    <link href="assets/libs/animate-css/animate.min.css" rel="stylesheet" />
    <link href="assets/libs/nifty-modal/css/component.css" rel="stylesheet" />
    <link href="assets/libs/magnific-popup/magnific-popup.css" rel="stylesheet" />
    <link href="assets/libs/ios7-switch/ios7-switch.css" rel="stylesheet" />
    <link href="assets/libs/pace/pace.css" rel="stylesheet" />
    <link href="assets/libs/sortable/sortable-theme-bootstrap.css" rel="stylesheet" />
    <link href="assets/libs/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" />
    <link href="assets/libs/jquery-icheck/skins/all.css" rel="stylesheet" />
    <!-- Code Highlighter for Demo -->
    <link href="assets/libs/prettify/github.css" rel="stylesheet" />

    <!-- Extra CSS Libraries Start -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <!-- Extra CSS Libraries End -->
    <link href="assets/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    {!!HTML::script("https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js")!!}
    {!!HTML::script("https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js")!!}
    <![endif]-->

    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/apple-touch-icon-152x152.png" />
</head>
<body class="fixed-left login-page">
<!-- Modal Start -->
<!-- Modal Task Progress -->
<div class="md-modal md-3d-flip-vertical" id="task-progress">
    <div class="md-content">
        <h3><strong>Task Progress</strong> Information</h3>
        <div>
            <p>CLEANING BUGS</p>
            <div class="progress progress-xs for-modal">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                    <span class="sr-only">80&#37; Complete</span>
                </div>
            </div>
            <p>POSTING SOME STUFF</p>
            <div class="progress progress-xs for-modal">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                    <span class="sr-only">65&#37; Complete</span>
                </div>
            </div>
            <p>BACKUP DATA FROM SERVER</p>
            <div class="progress progress-xs for-modal">
                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                    <span class="sr-only">95&#37; Complete</span>
                </div>
            </div>
            <p>RE-DESIGNING WEB APPLICATION</p>
            <div class="progress progress-xs for-modal">
                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                    <span class="sr-only">100&#37; Complete</span>
                </div>
            </div>
            <p class="text-center">
                <button class="btn btn-danger btn-sm md-close">Close</button>
            </p>
        </div>
    </div>
</div>

<!-- Modal Logout -->
<div class="md-modal md-just-me" id="logout-modal">
    <div class="md-content">
        <h3><strong>Logout</strong> Confirmation</h3>
        <div>
            <p class="text-center">Are you sure want to logout from this awesome system?</p>
            <p class="text-center">
                <button class="btn btn-danger md-close">Nope!</button>
                <a href="login.html" class="btn btn-success md-close">Yeah, I'm sure</a>
            </p>
        </div>
    </div>
</div>        <!-- Modal End -->
<!-- Begin page -->
<div class="container">
    <div class="full-content-center">
        <p class="text-center"><a href="#">smis</a></p>
        <div class="login-wrap animated flipInX">
            <div class="login-block">
                <img src="images/users/default-user.png" class="img-circle not-logged-avatar">
                {!! Form::open(array('url' => 'login','id'=>'loginForm')) !!}
                    <div class="form-group login-input">
                        <i class="fa fa-user overlay"></i>
                        <input  name="username" type="text" class="form-control text-input" placeholder="Username" value="{{old('username')}}">
                    </div>
                    <div class="form-group login-input">
                        <i class="fa fa-key overlay"></i>
                        <input name="password" type="password" class="form-control text-input" placeholder="********">
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-success btn-block">LOGIN</button>
                        </div>

                    </div>
                {!!Form::close() !!}

            </div>
        </div>

    </div>
</div>
<!-- the overlay modal element -->
<div class="md-overlay"></div>
<!-- End of eoverlay modal -->
<script>
    var resizefunc = [];
</script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
{!!HTML::script("assets/libs/jquery/jquery-1.11.1.min.js")!!}
{!!HTML::script("assets/libs/bootstrap/js/bootstrap.min.js")!!}
{!!HTML::script("assets/libs/jqueryui/jquery-ui-1.10.4.custom.min.js")!!}
{!!HTML::script("assets/libs/jquery-ui-touch/jquery.ui.touch-punch.min.js")!!}
{!!HTML::script("assets/libs/jquery-detectmobile/detect.js")!!}
{!!HTML::script("assets/libs/jquery-animate-numbers/jquery.animateNumbers.js")!!}
{!!HTML::script("assets/libs/ios7-switch/ios7.switch.js")!!}
{!!HTML::script("assets/libs/fastclick/fastclick.js")!!}
{!!HTML::script("assets/libs/jquery-blockui/jquery.blockUI.js")!!}
{!!HTML::script("assets/libs/bootstrap-bootbox/bootbox.min.js")!!}
{!!HTML::script("assets/libs/jquery-slimscroll/jquery.slimscroll.js")!!}
{!!HTML::script("assets/libs/jquery-sparkline/jquery-sparkline.js")!!}
{!!HTML::script("assets/libs/nifty-modal/js/classie.js")!!}
{!!HTML::script("assets/libs/nifty-modal/js/modalEffects.js")!!}
{!!HTML::script("assets/libs/sortable/sortable.min.js")!!}
{!!HTML::script("assets/libs/bootstrap-fileinput/bootstrap.file-input.js")!!}
{!!HTML::script("assets/libs/bootstrap-select/bootstrap-select.min.js")!!}
{!!HTML::script("assets/libs/bootstrap-select2/select2.min.js")!!}
{!!HTML::script("assets/libs/magnific-popup/jquery.magnific-popup.min.js")!!}
{!!HTML::script("assets/libs/pace/pace.min.js")!!}
{!!HTML::script("assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.js")!!}
{!!HTML::script("assets/libs/jquery-icheck/icheck.min.js")!!}

<!-- Demo Specific JS Libraries -->
{!!HTML::script("assets/libs/prettify/prettify.js")!!}
{!!HTML::script("assets/js/init.js")!!}
{!!HTML::script("assets/libs/bootstrap-validator/js/bootstrapValidator.min.js")!!}
{!!HTML::script("assets/js/pages/form-validation.js")!!}

</body>
</html>