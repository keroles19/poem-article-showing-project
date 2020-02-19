<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>عماد ملاك   </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link rel="stylesheet" href="{{asset('adminlte/plugins/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons 2.0.0 -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('adminlte/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('adminlte/css/skins/_all-skins.min.css')}}">


    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{asset('adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">

    <link rel="stylesheet" href="{{asset('adminlte/fonts/fonts-fa.css')}}">
    <link rel="stylesheet" href="{{asset('adminlte/css/bootstrap-rtl.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminlte/css/rtl.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
</head>
<body class="skin-blue sidebar-mini">
<div class="wrapper">
    <header class="main-header">
        <!-- Logo -->
        <a href="{{url('admin')}}" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>عماد</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>عماد </b>ملاك </span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only"></span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <img src="{{asset('adminlte/img/emad.jpg')}}" class="user-image" alt="User Image">
                            <span class="hidden-xs">عماد ملاك</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="{{asset('adminlte/img/emad.jpg')}}" class="img-circle" alt="User Image">
                                <p>
                                    {{$setting->name}}-{{$setting->address}}
                                    <small>{{$setting->date_of_birth}}</small>
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-right">
                                    <a href="{{url('admin/setting')}}" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-left">
                                    <a class="btn btn-default btn-flat" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>


    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-right image">
                    <img src="{{asset('adminlte/img/emad.jpg')}}" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>عماد ملاك</p>
                </div>
            </div>

            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                // main
                <li><a href="{{url('admin/')}}"><i class="fa fa-book"></i> <span> الرئسيه </span></a></li>
                  <!-- About  -->
                <li><a href="{{url('admin/setting')}}"><i class="fa fa-book"></i> <span>معلوماتي  </span></a></li>
                <!--ads -->
                <li><a href="{{url('admin/ad')}}"><i class="fa fa-book"></i> <span>اعلاناتي  </span></a></li>
                <!-- articles -->
                <li><a href="{{url('admin/article')}}"><i class="fa fa-book"></i> <span>مقالاتي  </span></a></li>
                <!-- poems -->
                <li><a href="{{url('admin/poem')}}"><i class="fa fa-book"></i> <span>قصائدي  </span></a></li>
                <!--videos -->
                <li><a href="{{url('admin/video')}}"><i class="fa fa-book"></i> <span>فيديوهاتي  </span></a></li>
                <!-- comments -->
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-comment"></i> <span>كومنتات</span>
                    </a>
                    <ul class="treeview-menu" style="display: none;">
                        <li><a href="{{route('comment.poem')}}"><i class="fa fa-circle-o"></i> القصائد</a></li>
                        <li class=""><a href="{{route('comment.article')}}"><i class="fa fa-circle-o"></i> المقالات</a></li>
                    </ul>
                </li>

            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <h1>@yield("page_title")</h1>
            </h1>
            @yield('breadcrumb')
        </section>


        <!-- Main content -->
        @yield("content")



    </div>
</div><!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="pull-left hidden-xs">
            <b>M . K </b>
        </div>
        <strong>Copyright &copy; 2019-2020 <a href="http://facebook.com/user/keroles1tef200">Keroles atef</a>.</strong> All rights reserved.
    </footer>
<!-- ./wrapper -->

<!-- jQuery 2.1.4 -->
<script src="{{asset('adminlte/plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<!-- Bootstrap 3.3.4 -->
<script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>


<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>

<!-- AdminLTE App -->
<script src="{{asset('adminlte/js/app.min.js')}}"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{asset('adminlte/js/demo.js')}}"></script>

<script src="{{asset('ckeditor/ckeditor.js') }}"></script>

<script src="{{asset('app.js')}}"></script>
</body>
</html>
