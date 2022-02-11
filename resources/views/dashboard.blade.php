<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.ico')}}">
    <title>online Support Platform</title>
    <!-- Custom CSS -->
    <link href="{{ asset('assets/extra-libs/c3/c3.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/libs/chartist/dist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet"/>

    <!-- This page plugin CSS -->
    <link href="{{ asset('assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css?ver=1.1')}}" rel="stylesheet">


@yield('css')
@stack('css-scripts')
<!-- Sweet Alerts css -->
    <link href="{{ asset('assets/css/libs/sweetalerts/sweetalert2.min.css?ver=1.4') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('assets/css/style.css?ver=1.4')}}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
     data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
    <!-- ============================================================== -->

@include('includes.top-header')



<!-- ============================================================== -->
    <!-- ============================================================== -->
@include('includes.sidemenu')
<!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->


    <!-- ============================================================== -->
    <div class="page-wrapper">
{{--        <!-- Bread crumb and right sidebar toggle -->--}}
{{--        <!-- ============================================================== -->--}}
{{--        <div class="page-breadcrumb">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12 align-self-center">--}}
{{--                    <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Good Morning Jason!</h3>--}}
{{--                    <div class="d-flex align-items-center">--}}
{{--                        <nav aria-label="breadcrumb">--}}
{{--                            <ol class="breadcrumb m-0 p-0">--}}
{{--                                <li class="breadcrumb-item"><a href="#">Dashboard</a>--}}
{{--                                </li>--}}
{{--                            </ol>--}}
{{--                        </nav>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- ============================================================== -->--}}
{{--        <div class="container-fluid">--}}
{{--            <!-- *************************************************************** -->--}}
{{--            <!-- Start First Cards -->--}}
{{--            <!-- *************************************************************** -->--}}
{{--            <div class="card-group">--}}
{{--                <div class="card border-right">--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="d-flex d-lg-flex d-md-block align-items-center">--}}
{{--                            <div>--}}
{{--                                <div class="d-inline-flex align-items-center">--}}
{{--                                    <h2 class="text-dark mb-1 font-weight-medium">236</h2>--}}
{{--                                    <span--}}
{{--                                        class="badge bg-primary font-12 text-white font-weight-medium badge-pill ml-2 d-lg-block d-md-none">+18.33%</span>--}}
{{--                                </div>--}}
{{--                                <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">New Clients</h6>--}}
{{--                            </div>--}}
{{--                            <div class="ml-auto mt-md-3 mt-lg-0">--}}
{{--                                <span class="opacity-7 text-muted"><i data-feather="user-plus"></i></span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card border-right">--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="d-flex d-lg-flex d-md-block align-items-center">--}}
{{--                            <div>--}}
{{--                                <h2 class="text-dark mb-1 w-100 text-truncate font-weight-medium"><sup--}}
{{--                                        class="set-doller">$</sup>18,306</h2>--}}
{{--                                <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Earnings of Month--}}
{{--                                </h6>--}}
{{--                            </div>--}}
{{--                            <div class="ml-auto mt-md-3 mt-lg-0">--}}
{{--                                <span class="opacity-7 text-muted"><i data-feather="dollar-sign"></i></span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card border-right">--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="d-flex d-lg-flex d-md-block align-items-center">--}}
{{--                            <div>--}}
{{--                                <div class="d-inline-flex align-items-center">--}}
{{--                                    <h2 class="text-dark mb-1 font-weight-medium">1538</h2>--}}
{{--                                    <span--}}
{{--                                        class="badge bg-danger font-12 text-white font-weight-medium badge-pill ml-2 d-md-none d-lg-block">-18.33%</span>--}}
{{--                                </div>--}}
{{--                                <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">New Projects</h6>--}}
{{--                            </div>--}}
{{--                            <div class="ml-auto mt-md-3 mt-lg-0">--}}
{{--                                <span class="opacity-7 text-muted"><i data-feather="file-plus"></i></span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card">--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="d-flex d-lg-flex d-md-block align-items-center">--}}
{{--                            <div>--}}
{{--                                <h2 class="text-dark mb-1 font-weight-medium">864</h2>--}}
{{--                                <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Projects</h6>--}}
{{--                            </div>--}}
{{--                            <div class="ml-auto mt-md-3 mt-lg-0">--}}
{{--                                <span class="opacity-7 text-muted"><i data-feather="globe"></i></span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- *************************************************************** -->--}}
{{--            <!-- End First Cards -->--}}
{{--            <!-- basic table -->--}}
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-body">--}}
{{--                            <h4 class="card-title">Data Table Configuration</h4>--}}
{{--                            <div class="table-responsive">--}}
{{--                                <table id="zero_config" class="table table-striped table-bordered no-wrap">--}}
{{--                                    <thead>--}}
{{--                                    <tr>--}}
{{--                                        <th>ID</th>--}}
{{--                                        <th>Video</th>--}}
{{--                                        <th>Title</th>--}}
{{--                                        <th>Video Size</th>--}}
{{--                                        <th>Start date</th>--}}
{{--                                        <th class="text-center">Status</th>--}}
{{--                                    </tr>--}}
{{--                                    </thead>--}}
{{--                                    <tbody>--}}
{{--                                    <tr>--}}
{{--                                        <td>1</td>--}}
{{--                                        <td>--}}
{{--                                            <img src="../assets/images/users/profile-pic.jpg" class="img-fluid tbl-video-thumbnail" alt="Video Title">--}}
{{--                                        </td>--}}
{{--                                        <td>Edinburgh</td>--}}
{{--                                        <td>61</td>--}}
{{--                                        <td>2011/04/25</td>--}}
{{--                                        <td>--}}
{{--                                            <div class="onoffswitch">--}}
{{--                                                <input type="checkbox" class="toggle" name="status_1" id="status_1" onchange="" checked="">--}}
{{--                                                <label for="status_1">--}}
{{--                                                    <span class="on">Active</span>--}}
{{--                                                    <span class="off">De-active</span>--}}
{{--                                                </label>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}

{{--                                    <tr>--}}
{{--                                        <td>2</td>--}}
{{--                                        <td>--}}
{{--                                            <img src="../assets/images/users/profile-pic.jpg" class="img-fluid tbl-video-thumbnail" alt="Video Title">--}}
{{--                                        </td>--}}
{{--                                        <td>Edinburgh</td>--}}
{{--                                        <td>61</td>--}}
{{--                                        <td>2011/04/25</td>--}}
{{--                                        <td>--}}
{{--                                            <div class="onoffswitch">--}}
{{--                                                <input type="checkbox" class="toggle" name="status_2" id="status_2" onchange="" checked="">--}}
{{--                                                <label for="status_1">--}}
{{--                                                    <span class="on">Active</span>--}}
{{--                                                    <span class="off">De-active</span>--}}
{{--                                                </label>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}


{{--                                    <tr>--}}
{{--                                        <td>3</td>--}}
{{--                                        <td>--}}
{{--                                            <img src="../assets/images/users/profile-pic.jpg" class="img-fluid tbl-video-thumbnail" alt="Video Title">--}}
{{--                                        </td>--}}
{{--                                        <td>Edinburgh</td>--}}
{{--                                        <td>61</td>--}}
{{--                                        <td>2011/04/25</td>--}}
{{--                                        <td>--}}
{{--                                            <div class="onoffswitch">--}}
{{--                                                <input type="checkbox" class="toggle" name="status_3" id="status_3" onchange="" checked="">--}}
{{--                                                <label for="status_3">--}}
{{--                                                    <span class="on">Active</span>--}}
{{--                                                    <span class="off">De-active</span>--}}
{{--                                                </label>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}


{{--                                    <tr>--}}
{{--                                        <td>4</td>--}}
{{--                                        <td>--}}
{{--                                            <img src="../assets/images/users/profile-pic.jpg" class="img-fluid tbl-video-thumbnail" alt="Video Title">--}}
{{--                                        </td>--}}
{{--                                        <td>Edinburgh</td>--}}
{{--                                        <td>61</td>--}}
{{--                                        <td>2011/04/25</td>--}}
{{--                                        <td>--}}
{{--                                            <div class="onoffswitch">--}}
{{--                                                <input type="checkbox" class="toggle" name="status_4" id="status_4" onchange="" checked="">--}}
{{--                                                <label for="status_4">--}}
{{--                                                    <span class="on">Active</span>--}}
{{--                                                    <span class="off">De-active</span>--}}
{{--                                                </label>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}

{{--                                    </tbody>--}}
{{--                                    <tfoot>--}}
{{--                                    <tr>--}}
{{--                                        <th>ID</th>--}}
{{--                                        <th>Position</th>--}}
{{--                                        <th>Title</th>--}}
{{--                                        <th>Video Size</th>--}}
{{--                                        <th>Start date</th>--}}
{{--                                        <th class="text-center">Status</th>--}}
{{--                                    </tr>--}}
{{--                                    </tfoot>--}}
{{--                                </table>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}


{{--            <div class="row">--}}
{{--                <div class="col-6">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-body">--}}
{{--                            <h4 class="card-title">Form</h4>--}}
{{--                            <form action="#">--}}
{{--                                <div class="form-body">--}}
{{--                                    <label>Label </label>--}}
{{--                                    <div class="row">--}}

{{--                                        <div class="col-md-8">--}}
{{--                                            <div class="form-group">--}}
{{--                                                <input type="text" class="form-control"--}}
{{--                                                       placeholder="Name">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-4">--}}
{{--                                            <div class="form-group">--}}
{{--                                                <fieldset class="checkbox">--}}
{{--                                                    <label>--}}
{{--                                                        <input type="checkbox" value="" checked> Checked Checkbox--}}
{{--                                                    </label>--}}
{{--                                                </fieldset>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="form-actions mt-2">--}}
{{--                                    <div class="text-left">--}}
{{--                                        <button type="submit" class="btn btn-info">Submit</button>--}}
{{--                                        <button type="reset" class="btn btn-dark">Reset</button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}

    @yield('content')

{{--    @include('includes.copyrights')--}}
    <!-- End footer -->
    </div>
    <!-- End Page wrapper  -->
</div>

<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{ asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
<script src="{{ asset('assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>

<!-- Sweet Alerts -->
<script src="{{ asset('assets/js/libs/sweetalerts/sweetalert2.min.js?ver=1.3') }}"></script>

<!-- apps -->
<!-- apps -->
<script src="{{ asset('assets/js/app-style-switcher.js')}}"></script>
<script src="{{ asset('assets/js/feather.min.js')}}"></script>
<script src="{{ asset('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
<script src="{{ asset('assets/js/sidebarmenu.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{ asset('assets/js/custom.min.js')}}"></script>




<!--This page plugins -->
<script src="{{ asset('assets/extra-libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('assets/js/pages/datatable/datatable-basic.init.js')}}"></script>


@yield('js')
@stack('js-scripts')


</body>

</html>
