<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RA project</title>

    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/RA.css" rel="stylesheet">

    <link rel="icon" href="img/icons/favicon.png">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="/js/d3.v3.min.js"></script>

</head>
<body>
<div class="container-content" align="center" width="90%">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-4 hidden-xs">
                <h3>RA studio &reg</h3>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs">
                @if (Auth::user() != null)
                    <a href='../admin'>
                        <h3>Admin panel</h3>
                    </a>
                @else
                    <h3></h3>
                @endif
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 hidden-xs">
                @if(Auth::user() !=null)
                    <h3 >Hallo, {{Auth::user()->name}}! </h3>
                @else
                    <h3 >Hallo, guest! </h3>
                @endif
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                {{--<a href="/auth/logout" class="disabled">--}}
                <a href="../" class="disabled">
                    <h3>Logout</h3>
                </a>
            </div>
        </div>
    </div>

    @yield('content')

    @yield('scripts')

    <div class="foot">
            <p>&copy Rusinov Alexandr 2015</p>
    </div>
</div>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>--}}

{{--<script src="../dist/js/bootstrap.min.js"></script>--}}

{{--<script src="../assets/js/docs.min.js"></script>--}}

{{--<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->--}}
{{--<script src="../assets/js/ie10-viewport-bug-workaround.js"></script>--}}

</body>
</html>
