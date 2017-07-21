<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Podcast Crawler API</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ url('assets/css/simple-sidebar.css') }}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Podcast Crawler API
                    </a>
                </li>
                <li>
                    <a href="https://github.com/podcastcrawler/api">Github</a>
                </li>
                <li>
                    <a href="http://library.podcastcrawler.com/">Library</a>
                </li>
                <li>
                    <a href="https://github.com/podcastcrawler/api/issues">Issues</a>
                </li>
                <li>
                    <a href="https://github.com/podcastcrawler">Know the full project</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Podcast Crawler API</h1>
                        <p>Podcast Crawler API is a software that provide a API that enables the search for podcasts to get details and mp3 files through <a href="http://library.podcastcrawler.com/">Podcast Crawler library</a>.</p>
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <h2>API endpoints</h2>

                        <h3>List</h3>
                        <p>Route:  <span class="label label-primary">/list</span></p>
                        <p>Options (query string):</p>
                        <ul>
                            <li>name <span class="label label-default">string</span></li>
                            <li>limit <span class="label label-default">int</span></li>
                        </ul>
                        <p>Examples:</p>
                        <p>Searchs for a name: <a href="http://api.podcastcrawler.com/list?name=nerd">http://api.podcastcrawler.com/list?name=nerd</a></p>
                        <p>Searchs for a name with limit: <a href="http://api.podcastcrawler.com/list?name=nerd&limit=4">http://api.podcastcrawler.com/list?name=nerd&limit=4</a></p>

                        <h3>Find</h3>
                        <p>Route:  <span class="label label-primary">/find</span></p>
                        <p>Options (query string):</p>
                        <ul>
                            <li>url <span class="label label-default">string</span></li>
                        </ul>
                        <p>Examples:</p>
                        <p>Searchs for a RSS: <a href="http://api.podcastcrawler.com/find?url=https://improvephotography.com/category/roundtable/feed/">http://api.podcastcrawler.com/find?url=https://improvephotography.com/category/roundtable/feed/</a></p>

                        <br><br><br><br>
                        <p>Designed with ♥ by <a href="https://github.com/dorianneto">Dorian Neto</a>. Licensed under the <a href="https://github.com/podcastcrawler/api/blob/master/LICENSE.md" target="_blank">MIT License</a>.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{ url('assets/js/jquery.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ url('assets/js/bootstrap.min.js') }}"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
