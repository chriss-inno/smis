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
                        <a href='{{url('home')}}' class='active'>
                            <i class='icon-home-3'></i><span>Dashboard</span> <span class="pull-right"></span></a>
                    </li>
                    @if( \App\Http\Controllers\UserController::checkAccessRights(Auth::user()->id,1) )
                        <li class='has_sub'><a href='javascript:void(0);'>
                                <span><i class="fa fa-building"></i> Schools</span>
                            <span class="pull-right">
                                <i class="fa fa-angle-down"></i>
                            </span>
                            </a>
                            <ul>
                                <li><a href='{{url('schools/add')}}'><span><i class="fa fa-arrow-right"></i>School Registration</span></a></li>
                                <li><a href='{{url('schools')}}'><span><i class="fa fa-arrow-right"></i>List Schools</span></a></li>
                                <li><a href='{{url('schools-manage')}}'><span><i class="fa fa-arrow-right"></i>Manage Schools</span></a></li>
                                <li><a href='{{url('schools-reports/')}}'><span><i class="fa fa-arrow-right"></i>School general reports</span></a></li>

                            </ul>
                        </li>
                    @endif
                    @if( \App\Http\Controllers\UserController::checkAccessRights(Auth::user()->id,2) )
                        <li class='has_sub'><a href='javascript:void(0);'>
                                <span><i class="fa fa-graduation-cap"></i> Students </span>
                            <span class="pull-right">
                                <i class="fa fa-angle-down"></i>
                            </span>
                            </a>
                            <ul>
                                <li><a href='{{url('student/admission')}}'><span><i class="fa fa-arrow-right"></i>Register new Students</span></a></li>
                                <li><a href='{{url('schools')}}'><span><i class="fa fa-arrow-right"></i>List students</span></a></li>
                                <li><a href='{{url('schools-manage')}}'><i class="fa fa-arrow-right"></i><span>Search Student</span></a></li>
                                <li><a href='{{url('schools-reports/')}}'><i class="fa fa-arrow-right"></i><span>Students Reports</span></a></li>

                            </ul>
                        </li>
                    @endif
                    @if( \App\Http\Controllers\UserController::checkAccessRights(Auth::user()->id,2) )
                        <li class='has_sub'><a href='javascript:void(0);'>
                                <span><i class="fa fa-users"></i> Staff </span>
                            <span class="pull-right">
                                <i class="fa fa-angle-down"></i>
                            </span>
                            </a>
                            <ul>
                                <li><a href='{{url('student/admission')}}'><span><i class="fa fa-arrow-right"></i>Register new Staff</span></a></li>
                                <li><a href='{{url('schools')}}'><span><i class="fa fa-arrow-right"></i>List staff</span></a></li>
                                <li><a href='{{url('schools-manage')}}'><i class="fa fa-arrow-right"></i><span>Search staff</span></a></li>
                                <li><a href='{{url('schools-reports/')}}'><i class="fa fa-arrow-right"></i><span>Students staff</span></a></li>

                            </ul>
                        </li>
                    @endif
                    @if( \App\Http\Controllers\UserController::checkAccessRights(Auth::user()->id,2) )
                        <li class='has_sub'><a href='javascript:void(0);'>
                                <span><i class="fa fa-newspaper-o"></i> News and Announcements </span>
                            <span class="pull-right">
                                <i class="fa fa-angle-down"></i>
                            </span>
                            </a>
                            <ul>
                                <li><a href='{{url('student/admission')}}'><span><i class="fa fa-arrow-right"></i>Add News/Announcement</span></a></li>
                                <li><a href='{{url('schools')}}'><span><i class="fa fa-arrow-right"></i>Current News</span></a></li>
                                <li><a href='{{url('schools-reports/')}}'><i class="fa fa-arrow-right"></i><span>News Archive</span></a></li>
                                <li><a href='{{url('student/admission')}}'><span><i class="fa fa-arrow-right"></i>Search News</span></a></li>

                            </ul>
                        </li>
                    @endif
                    @if( \App\Http\Controllers\UserController::checkAccessRights(Auth::user()->id,2) )
                        <li class='has_sub'><a href='javascript:void(0);'>
                                <span> <i class="fa fa-book"></i> Courses </span>
                            <span class="pull-right">
                                <i class="fa fa-angle-down"></i>
                            </span>
                            </a>
                            <ul>
                                <li><a href='{{url('student/admission')}}'><span><i class="fa fa-arrow-right"></i>Register new course</span></a></li>
                                <li><a href='{{url('schools')}}'><span><i class="fa fa-arrow-right"></i>List Courses</span></a></li>
                                <li><a href='{{url('schools-manage')}}'><i class="fa fa-arrow-right"></i><span>Courses Management</span></a></li>
                                <li><a href='{{url('schools-reports/')}}'><i class="fa fa-arrow-right"></i><span>Courses Asignment </span></a></li>

                            </ul>
                        </li>
                    @endif
                    @if( \App\Http\Controllers\UserController::checkAccessRights(Auth::user()->id,2) )
                        <li class='has_sub'><a href='javascript:void(0);'>
                                <span><i class="fa fa-newspaper-o"></i> Academic</span>
                            <span class="pull-right">
                                <i class="fa fa-angle-down"></i>
                            </span>
                            </a>
                            <ul>
                                <li><a href='{{url('student/admission')}}'><span><i class="fa fa-arrow-right"></i>Student Progress</span></a></li>
                                <li><a href='{{url('schools')}}'><span><i class="fa fa-arrow-right"></i>Assessments</span></a></li>
                                <li><a href='{{url('schools-reports/')}}'><i class="fa fa-arrow-right"></i><span>Enrollement</span></a></li>
                                <li><a href='{{url('student/admission')}}'><span><i class="fa fa-arrow-right"></i>Examination Period</span></a></li>

                            </ul>
                        </li>
                    @endif
                    @if( \App\Http\Controllers\UserController::checkAccessRights(Auth::user()->id,2) )
                        <li class='has_sub'><a href='javascript:void(0);'>
                                <span><i class="fa fa-graduation-cap"></i> Students </span>
                            <span class="pull-right">
                                <i class="fa fa-angle-down"></i>
                            </span>
                            </a>
                            <ul>
                                <li><a href='{{url('student/admission')}}'><span><i class="fa fa-arrow-right"></i>Register new Students</span></a></li>
                                <li><a href='{{url('schools')}}'><span><i class="fa fa-arrow-right"></i>List students</span></a></li>
                                <li><a href='{{url('schools-manage')}}'><i class="fa fa-arrow-right"></i><span>Search Student</span></a></li>
                                <li><a href='{{url('schools-reports/')}}'><i class="fa fa-arrow-right"></i><span>Students Reports</span></a></li>

                            </ul>
                        </li>
                    @endif
                    @if( \App\Http\Controllers\UserController::checkAccessRights(Auth::user()->id,2) )
                        <li class='has_sub'><a href='javascript:void(0);'>
                                <span><i class="fa fa-calendar"></i> Calendar </span>
                            <span class="pull-right">
                                <i class="fa fa-angle-down"></i>
                            </span>
                            </a>
                            <ul>
                                <li><a href='{{url('schools')}}'><span><i class="fa fa-arrow-right"></i>Calendar</span></a></li>
                                <li><a href='{{url('schools-manage')}}'><i class="fa fa-arrow-right"></i><span>My Calendar</span></a></li>
                                <li><a href='{{url('schools-reports/')}}'><i class="fa fa-arrow-right"></i><span>My Events</span></a></li>
                                <li><a href='{{url('student/admission')}}'><span><i class="fa fa-arrow-right"></i>School Events</span></a></li>

                            </ul>
                        </li>
                    @endif

                    @if( \App\Http\Controllers\UserController::checkAccessRights(Auth::user()->id,2) )
                        <li class='has_sub'><a href='javascript:void(0);'>
                                <span><i class="fa fa-money"></i> Accountant </span>
                            <span class="pull-right">
                                <i class="fa fa-angle-down"></i>
                            </span>
                            </a>
                            <ul>
                                <li><a href='{{url('student/admission')}}'><span><i class="fa fa-arrow-right"></i>Finances</span></a></li>
                                <li><a href='{{url('schools')}}'><span><i class="fa fa-arrow-right"></i>Fee Payments</span></a></li>
                                <li><a href='{{url('schools-manage')}}'><i class="fa fa-arrow-right"></i><span>Search Payments</span></a></li>
                                <li><a href='{{url('schools-reports/')}}'><i class="fa fa-arrow-right"></i><span>Budget</span></a></li>
                                <li><a href='{{url('student/admission')}}'><span><i class="fa fa-arrow-right"></i>Budget Setup</span></a></li>

                            </ul>
                        </li>
                    @endif
                    @if( \App\Http\Controllers\UserController::checkAccessRights(Auth::user()->id,2) )
                        <li class='has_sub'><a href='javascript:void(0);'>
                                <span><i class="fa fa-cogs"></i> Clases </span>
                            <span class="pull-right">
                                <i class="fa fa-angle-down"></i>
                            </span>
                            </a>
                            <ul>
                                <li><a href='{{url('student/admission')}}'><span><i class="fa fa-arrow-right"></i>Add new class</span></a></li>
                                <li><a href='{{url('schools')}}'><span><i class="fa fa-arrow-right"></i>List classes</span></a></li>
                                <li><a href='{{url('schools-manage')}}'><i class="fa fa-arrow-right"></i><span></span></a></li>
                                <li><a href='{{url('schools-reports/')}}'><i class="fa fa-arrow-right"></i><span>Enlorement</span></a></li>
                                <li><a href='{{url('student/admission')}}'><span><i class="fa fa-arrow-right"></i>Examination Period</span></a></li>

                            </ul>
                        </li>
                    @endif
                    @if( \App\Http\Controllers\UserController::checkAccessRights(Auth::user()->id,2) )
                        <li class='has_sub'><a href='javascript:void(0);'>
                                <span><i class="fa fa-cogs"></i> General Setup </span>
                            <span class="pull-right">
                                <i class="fa fa-angle-down"></i>
                            </span>
                            </a>
                            <ul>
                                <li><a href='{{url('student/admission')}}'><span><i class="fa fa-arrow-right"></i>Academic Year</span></a></li>
                                <li><a href='{{url('schools')}}'><span><i class="fa fa-arrow-right"></i>Test Setting</span></a></li>
                                <li><a href='{{url('schools-manage')}}'><i class="fa fa-arrow-right"></i><span>Class Levels</span></a></li>
                                <li><a href='{{url('schools-reports/')}}'><i class="fa fa-arrow-right"></i><span>Enlorement</span></a></li>
                                <li><a href='{{url('student/admission')}}'><span><i class="fa fa-arrow-right"></i>Examination Period</span></a></li>

                            </ul>
                        </li>
                    @endif

                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
            <div class="clearfix"></div><br><br><br>
        </div>
    </div>
    @stop
@section('pageScript')
    {!!HTML::script("assets/libs/d3/d3.v3.js")!!}
    {!!HTML::script("assets/libs/rickshaw/rickshaw.min.js")!!}
    {!!HTML::script("assets/libs/raphael/raphael-min.js")!!}
    {!!HTML::script("assets/libs/morrischart/morris.min.js")!!}
    {!!HTML::script("assets/libs/jquery-knob/jquery.knob.js")!!}
    {!!HTML::script("assets/libs/jquery-jvectormap/js/jquery-jvectormap-1.2.2.min.js")!!}
    {!!HTML::script("assets/libs/jquery-jvectormap/js/jquery-jvectormap-us-aea-en.js")!!}
    {!!HTML::script("assets/libs/jquery-clock/clock.js")!!}
    {!!HTML::script("assets/libs/jquery-easypiechart/jquery.easypiechart.min.js")!!}
    {!!HTML::script("assets/libs/jquery-weather/jquery.simpleWeather-2.6.min.js")!!}
    {!!HTML::script("assets/libs/bootstrap-xeditable/js/bootstrap-editable.min.js")!!}
    {!!HTML::script("assets/libs/bootstrap-calendar/js/bic_calendar.min.js")!!}
    {!!HTML::script("assets/js/apps/calculator.js")!!}
    {!!HTML::script("assets/js/apps/todo.js")!!}
    {!!HTML::script("assets/js/apps/notes.js")!!}
    {!!HTML::script("assets/js/pages/index.js")!!}
    @stop
@section('contents')
    <!-- Start info box -->
    <div class="row top-summary">
        <div class="col-lg-3 col-md-6">
            <div class="widget green-1 animated fadeInDown">
                <div class="widget-content padding">
                    <div class="widget-icon">
                        <i class="icon-globe-inv"></i>
                    </div>
                    <div class="text-box">
                        <p class="maindata">TOTAL <b>SCHOOLS</b></p>
                        <h2><span class="animate-number" data-value="25153" data-duration="3000">0</span></h2>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="widget-footer">
                    <div class="row">
                        <div class="col-sm-12">
                            <i class="fa fa-caret-up rel-change"></i> <b>39%</b> increase in schools
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="widget darkblue-2 animated fadeInDown">
                <div class="widget-content padding">
                    <div class="widget-icon">
                        <i class="icon-bag"></i>
                    </div>
                    <div class="text-box">
                        <p class="maindata">TOTAL <b>STAFF</b></p>
                        <h2><span class="animate-number" data-value="6399" data-duration="3000">0</span></h2>

                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="widget-footer">
                    <div class="row">
                        <div class="col-sm-12">
                            <i class="fa fa-caret-down rel-change"></i> <b>11%</b> increase in staff #
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="widget pink-1 animated fadeInDown">
                <div class="widget-content padding">
                    <div class="widget-icon">
                        <i class="fa fa-dollar"></i>
                    </div>
                    <div class="text-box">
                        <p class="maindata">TOTAL <b>STUDENTS</b></p>
                        <h2><span class="animate-number" data-value="70389" data-duration="3000">0</span></h2>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="widget-footer">
                    <div class="row">
                        <div class="col-sm-12">
                            <i class="fa fa-caret-down rel-change"></i> <b>7%</b> increase in student#
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="widget lightblue-1 animated fadeInDown">
                <div class="widget-content padding">
                    <div class="widget-icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <div class="text-box">
                        <p class="maindata">TOTAL <b>PROGRAM/COUSES</b></p>
                        <h2><span class="animate-number" data-value="18648" data-duration="3000">0</span></h2>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="widget-footer">
                    <div class="row">
                        <div class="col-sm-12">
                            <i class="fa fa-caret-up rel-change"></i> <b>6%</b> increase in programs #
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

    </div>
    <!-- End of info box -->

    <div class="row">
        <div class="col-lg-8 portlets">
            <div id="website-statistics1" class="widget">
                <div class="widget-header transparent">
                    <h2><i class="icon-chart-line"></i> <strong>Website</strong> Statistics</h2>
                    <div class="additional-btn">
                        <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                        <a class="hidden" id="dropdownMenu1" data-toggle="dropdown">
                            <i class="fa fa-cogs"></i>
                        </a>
                        <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dropdownMenu1">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                        <a href="#" class="widget-popout hidden tt" title="Pop Out/In"><i class="icon-publish"></i></a>
                        <a href="#" class="widget-maximize hidden"><i class="icon-resize-full-1"></i></a>
                        <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                        <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                    </div>
                </div>
                <div class="widget-content">
                    <div id="website-statistic" class="statistic-chart">
                        <div class="row stacked">
                            <div class="col-sm-12">
                                <div class="toolbar">
                                    <div class="pull-left">
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-default btn-xs">Daily</a>
                                            <a href="#" class="btn btn-default btn-xs active">Monthly</a>
                                            <a href="#" class="btn btn-default btn-xs">Yearly</a>
                                        </div>
                                    </div>
                                    <div class="pull-right">
                                        <div class="btn-group">
                                            <a class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                                Export <i class="icon-down-open-2"></i>
                                            </a>
                                            <ul class="dropdown-menu pull-right" role="menu">
                                                <li><a href="#">Export as PDF</a></li>
                                                <li><a href="#">Export as CSV</a></li>
                                                <li><a href="#">Export as PNG</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <a href="#" class="btn btn-primary btn-xs"><i class="icon-cog-2"></i></a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="clearfix"></div>
                                <div id="morris-home" class="morris-chart" style="height: 270px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="col-lg-4 portlets">
            <div class="row">
                <div class="col-sm-12">
                    <div id="todo-app" class="widget">
                        <div class="widget-header centered">
                            <div class="left-btn"><a class="btn btn-sm btn-default add-todo"><i class="fa fa-plus"></i></a></div>
                            <h2>Todo List</h2>
                            <div class="additional-btn">
                                <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                <a href="#" class="widget-popout hidden tt" title="Pop Out/In"><i class="icon-publish"></i></a>
                                <a href="#" class="widget-maximize hidden"><i class="icon-resize-full-1"></i></a>
                                <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                            </div>
                        </div>
                        <div class="widget-content padding-sm">
                            <ul class="todo-list">
                                <li>
                                    <span class="check-icon"><input type="checkbox" /></span>
                                    <span class="todo-item">Generate monthly sales report for John</span>
												<span class="todo-options pull-right">
													<a href="javascript:;" class="todo-delete"><i class="icon-cancel-3"></i></a>
												</span>
												<span class="todo-tags pull-right">
													<div class="label label-success">New</div>
												</span>
                                </li>
                                <li class="high">
                                    <span class="check-icon"><input type="checkbox" /></span>
                                    <span class="todo-item">Mail those reports to John</span>
												<span class="todo-options pull-right">
													<a href="javascript:;" class="todo-delete"><i class="icon-cancel-3"></i></a>
												</span>
                                </li>
                                <li>
                                    <span class="check-icon"><input type="checkbox" /></span>
                                    <span class="todo-item">Don't forget to send those reports to John</span>
												<span class="todo-options pull-right">
													<a href="javascript:;" class="todo-delete"><i class="icon-cancel-3"></i></a>
												</span>
                                </li>
                                <li class="medium">
                                    <span class="check-icon"><input type="checkbox" /></span>
                                    <span class="todo-item">If you forgot, go back to office to pick them up</span>
												<span class="todo-options pull-right">
													<a href="javascript:;" class="todo-delete"><i class="icon-cancel-3"></i></a>
												</span>
												<span class="todo-tags pull-right">
													<div class="label label-info">Today</div>
												</span>
                                </li>
                                <li class="low">
                                    <span class="check-icon"><input type="checkbox" /></span>
                                    <span class="todo-item">Deliver reports by hand to John</span>
												<span class="todo-options pull-right">
													<a href="javascript:;" class="todo-delete"><i class="icon-cancel-3"></i></a>
												</span>
                                </li>
                                <li>
                                    <span class="check-icon"><input type="checkbox" /></span>
                                    <span class="todo-item">Say John that you are sorry</span>
												<span class="todo-options pull-right">
													<a href="javascript:;" class="todo-delete"><i class="icon-cancel-3"></i></a>
												</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8 portlets">
            <div class="widget">
                <div class="widget-header">
                    <h2><i class="icon-chart-pie-1"></i> <strong>Sales</strong> Report</h2>
                    <div class="additional-btn">
                        <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                        <a class="hidden" id="dropdownMenu1" data-toggle="dropdown">
                            <i class="fa fa-cogs"></i>
                        </a>
                        <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dropdownMenu1">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                        <a href="#" class="widget-popout hidden tt" title="Pop Out/In"><i class="icon-publish"></i></a>
                        <a href="#" class="widget-maximize hidden"><i class="icon-resize-full-1"></i></a>
                        <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                        <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                    </div>
                </div>
                <div class="widget-content">
                    <div class="row stacked">
                        <div class="col-sm-5 mini-stats">
                            <div id="morris-bar-home" class="morris-chart" style="height: 170px;"></div>
                            <div class="sales-report-data">
                                <span class="pull-left">Completed Sales</span><span class="pull-right">65 / 174</span>
                                <div class="progress progress-xs">
                                    <div style="width: 38%;" class="progress-bar bg-blue-1"></div>
                                </div>
                                <div class="clearfix"></div>
                                <span class="pull-left">Return(s) Processed</span><span class="pull-right">22 / 25</span>
                                <div class="progress progress-xs">
                                    <div style="width: 88%;" class="progress-bar bg-lightblue-1"></div>
                                </div>
                                <div class="clearfix"></div>
                                <span class="pull-left">Shipped Products</span><span class="pull-right">418 / 624</span>
                                <div class="progress progress-xs">
                                    <div style="width: 58%;" class="progress-bar"></div>
                                </div>
                                <div class="clearfix"></div>
                                <span class="pull-left">Overall Product Stock</span><span class="pull-right">19%</span>
                                <div class="progress progress-xs">
                                    <div style="width: 19%;" class="progress-bar bg-pink-1"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div id="vector-map" style="height:370px"></div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 portlets">
            <div class="row">
                <div class="col-sm-12">
                    <div id="notes-app" class="widget">
                        <div class="notes-line"></div>
                        <div class="widget-header centered transparent">
                            <div class="left-btn btn-group"><a class="btn btn-sm btn-primary add-note"><i class="fa fa-plus"></i></a><a class="btn btn-sm btn-primary back-note-list"><i class="icon-align-justify"></i></a></div>
                            <h2>Notes</h2>
                            <div class="additional-btn">
                                <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                <a href="#" class="widget-popout hidden tt" title="Pop Out/In"><i class="icon-publish"></i></a>
                                <a href="#" class="widget-maximize hidden"><i class="icon-resize-full-1"></i></a>
                                <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                            </div>
                        </div>
                        <div class="widget-content padding-sm">
                            <div id="notes-list">
                                <div class="scroller">
                                    <ul class="list-unstyled">
                                    </ul>
                                </div>
                            </div>
                            <div id="note-data">
                                <form>
                                    <textarea class="form-control" id="note-text" placeholder="Your note..."></textarea>
                                </form>
                            </div>
                            <div class="status-indicator">Saved</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@stop
