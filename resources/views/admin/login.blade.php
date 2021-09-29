<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>ALA | Admin Login</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet"
        type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Fav Icon -->
    <link rel="icon" href="{{ asset('assets/images/fav.png') }}" sizes="16x16" type="image/png">

    <!-- Bootstrap Core Css -->
    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{ asset('assets/plugins/node-waves/waves.css') }}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{ asset('assets/plugins/animate-css/animate.css') }}" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="{{ asset('assets/plugins/morrisjs/morris.css') }}" rel="stylesheet" />

    <!-- custom Css-->
    <link href="{{ asset('assets/css/custom/custom.css') }}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{ asset('assets/css/themes/all-themes.css') }}" rel="stylesheet" />
</head>

<body id="login">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div id="login-container">
            <div class="card" style="padding: 1%;">
                <div class="header">
                    <h2 class="text-center">
                        <img src="{{ asset('assets/images/logo.png') }}" style="width: 230px; padding: 2px;"
                            alt="User" />
                    </h2>
                </div>
                <div class="body">
                    <form action="{{ url('admin/login') }}" method="post" id="loginForm">
                        @csrf
                        <label for="email_address">Username</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="username" class="form-control" placeholder="Enter your username">
                            </div>
                        </div>
                        <label for="password">Password</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="password" name="password" class="form-control" placeholder="Enter your password">
                            </div>
                        </div>
                        
                            <button type="submit" class="btn btn-lg btn-primary btn-block m-t-15 waves-effect">LOGIN</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>

    

    <!-- Jquery Core Js -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.js') }}"></script>

    <!-- Select Plugin Js -->
    <script src="{{ asset('assets/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="{{ asset('assets/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{ asset('assets/plugins/node-waves/waves.js') }}"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="{{ asset('assets/plugins/jquery-countto/jquery.countTo.js') }}"></script>


    <!-- Custom Js -->
    <script src="{{ asset('assets/js/admin.js') }}"></script>


    <!-- Demo Js -->
    <script src="{{ asset('assets/js/demo.js') }}"></script>

    <script>
        $(document).ready(function() {

            // submit login form
            $('#loginForm').submit(function(e) {
                e.preventDefault();
                //alert('hi');

                var formData = new FormData(this);

                $.ajax({
                    url: $(this).attr('action'),
                    type: $(this).attr('method'),
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        if (!data.success) {
                            alert(data.message);
                        } else {
                            window.location.replace("{{ url('admin/') }}");
                        }
                    }
                });
            });
        
        });
    </script>
</body>

</html>
