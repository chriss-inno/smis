@extends('layout.master')
@extends('layout.master')
@section('menus')
    <div class="left side-menu">
        <div class="sidebar-inner slimscrollleft">
            <div class="clearfix"></div>
            <!--- Divider -->
            <div class="clearfix"></div>
            <hr class="divider" />
            <div class="clearfix"></div>
            <!--- Divider -->
            <div id="sidebar-menu">
                <ul>
                    <li>
                        <a href='{{url('home')}}' >
                            <i class='icon-home-3'></i><span>Dashboard</span> <span class="pull-right"></span>
                        </a>
                    </li>
                    @if(Auth::user()->role =="Superuser")
                        <li class='has_sub'><a href='javascript:void(0);'>
                                <i class='icon-feather'></i>
                                <span>Manage Schools</span>
                            <span class="pull-right">
                                <i class="fa fa-angle-down"></i>
                            </span>
                            </a>
                            <ul>
                                <li><a href='{{url('schools/add')}} ' ><span>New School</span></a></li>
                                <li><a href='{{url('schools')}}' ><span>Available Schools</span></a></li>
                                <li><a href='{{url('schools-manage')}}' class='active'><span>Manage Schools</span></a></li>
                                <li><a href='{{url('schools-reports/')}}'><span>School general reports</span></a></li>

                            </ul>
                        </li>
                    @endif
                    <li class='has_sub'>
                        <a href='javascript:void(0);'><i class='icon-pencil-3'></i><span>Forms</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                        <ul>
                            <li><a href='forms.html'><span>Form Elements</span></a></li>
                            <li><a href='advanced-forms.html'><span>Advanced Forms</span></a></li>
                            <li><a href='form-wizard.html'><span>Form Wizard</span></a></li>
                            <li><a href='form-validation.html'><span>Form Validation</span></a></li>
                            <li><a href='form-uploads.html'><span>File Uploads</span></a></li></ul></li>
                    <li class='has_sub'><a href='javascript:void(0);'>
                            <i class='fa fa-table'></i><span>Tables</span>
                            <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                        <ul>
                            <li><a href='tables.html'><span>Basic Tables</span></a></li>
                            <li><a href='datatables.html'><span>Datatables</span></a></li>
                        </ul>
                    </li>
                    <li class='has_sub'>
                        <a href='javascript:void(0);'>
                            <i class='fa fa-map-marker'></i>
                            <span>Maps</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span>
                        </a>
                        <ul>
                            <li><a href='google-maps.html'><span>Google Maps</span></a></li>
                            <li><a href='vector-maps.html'><span>Vector Maps</span></a></li></ul></li>
                    <li class='has_sub'><a href='javascript:void(0);'>
                            <i class='fa fa-envelope'></i><span>Email</span>
                            <span class="pull-right"><i class="fa fa-angle-down"></i>
                            </span></a>
                        <ul>
                            <li><a href='inbox.html'><span>Inbox</span></a></li>
                            <li><a href='read-message.html'><span>View Email</span></a></li>
                            <li><a href='new-message.html'><span>New Message</span></a></li>
                        </ul>
                    </li>
                    <li class='has_sub'><a href='javascript:void(0);'>
                            <i class='icon-chart-line'></i><span>Charts</span>
                            <span class="pull-right"><i class="fa fa-angle-down"></i>
                            </span></a>
                        <ul>
                            <li><a href='sparkline-charts.html'><span>Sparkline Charts</span></a></li>
                            <li><a href='morris-charts.html'><span>Morris Charts</span></a></li>

                            <li><a href='rickshaw-charts.html'><span>Rickshaw Charts</span></a></li>
                            <li><a href='other-charts.html'><span>Other Charts</span></a></li></ul>
                    </li>

                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
            <div class="clearfix"></div><br><br><br>
        </div>
    </div>
@stop
@section('contents')
    <!-- Page Heading Start -->
    <div class="page-heading">
        <h1>Schools page</h1>
    </div>
    <!-- Page Heading End-->
    <div class="row">

        <div class="col-md-12">
            <div class="widget">
                <div class="widget-header">
                    <h2><strong>List of available schools</strong> </h2>
                    <div class="additional-btn">
                        <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                    </div>
                </div>
                <div class="widget-content">
                    <br>
                    <div class="table-responsive">
                        @include('school.list')
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop