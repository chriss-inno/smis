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
                                <li><a href='{{url('schools/add')}} ' class='active'><span>New School</span></a></li>
                                <li><a href='{{url('schools')}}'><span>Available Schools</span></a></li>
                                <li><a href='{{url('schools-manage')}}'><span>Manage Schools</span></a></li>
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
@section('pageScript')

    <!-- Wizard-->
    {!!HTML::script("assets/libs/jquery-wizard/jquery.easyWizard.js")!!}
    {!!HTML::script("assets/js/pages/form-wizard.js")!!}

    @stop
@section('contents')
<!-- Page Heading Start -->
<div class="page-heading">
    <h1>Add New School</h1>
</div>
<!-- Page Heading End-->
{!! Form::open(array('url' => 'schools/add','id'=>'school_add')) !!}
<div class="row">
    <div class="col-sm-12 portlets">
        <div class="widget">
            <div class="widget-header transparent">
                <h2><strong>School Information</strong> Form</h2>
                <div class="additional-btn">
                    <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>

                </div>
            </div>
            <div class="widget-content padding">

                    <div class="form-group">
                        <label>School Code</label>
                        <input type="text" class="form-control" name="school_code">
                    </div>
                    <div class="form-group">
                        <label>Name of the School</label>
                        <input type="text" class="form-control" name="school_name">
                    </div>
                    <div class="form-group">
                        <label>Is Shool registered</label>
                        <input type="text" class="form-control" name="registered">
                    </div>
                    <div class="form-group">
                        <label>Registration Number</label>
                        <input type="text" class="form-control" name="registration_no">
                    </div>
                    <div class="form-group">
                        <label>Accredited</label>
                        <input type="text" class="form-control" name="accredited">
                    </div>
                    <div class="form-group">
                        <label>Start Date</label>
                        <input type="text" class="form-control" name="start_date">
                    </div>
                    <div class="form-group">
                        <label>Website</label>
                        <input type="text" class="form-control" name="website">
                    </div>
                    <div class="form-group">
                        <label>School Profile</label>
                        <textarea class="form-control" name="SchoolProfile" style="height: 140px; resize: none;"></textarea>
                    </div>


            </div>
        </div>
    </div>
</div>
<div class="row">
        <div class="col-sm-12 portlets">
            <div class="widget">
                <div class="widget-header transparent">
                    <h2><strong>School Ownership Details</strong> Form</h2>
                    <div class="additional-btn">
                        <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                    </div>
                </div>
                <div class="widget-content padding">

                        <div class="form-group">
                            <label>Ownership Type</label>
                            <select name="ownership_type" class="form-control">
                                <option value="">--Select Ownership Detail--</option>
                                <option>Government</option>
                                <option>Private</option>
                                <option>FBO</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Owner Name</label>
                            <input type="text" class="form-control" name="owner">
                        </div>
                        <div class="form-group">
                            <label>Head/Principal of school</label>
                            <input type="text" class="form-control" name="school_head">
                        </div>


                </div>
            </div>
        </div>
    </div>
<div class="row">
    <div class="col-sm-12 portlets">
        <div class="widget">
            <div class="widget-header transparent">
                <h2><strong>School location </strong> Form</h2>
                <div class="additional-btn">
                    <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                </div>
            </div>
            <div class="widget-content padding">

                    <div class="form-group">
                        <label>Postal Address</label>
                        <textarea class="form-control" name="postal_address"> </textarea>
                    </div>
                    <div class="form-group">
                        <label>Physical Address</label>
                        <textarea class="form-control" name="physical_address"> </textarea>
                    </div>
                    <div class="form-group">
                        <label>Phisical Address</label>
                        <textarea class="form-control" name="phisical_address"> </textarea>
                    </div>
                    <div class="form-group">
                        <label>Region</label>
                        <select name="region" class="form-control">
                            <option value="">--Select Ownership Detail--</option>
                            <option>Government</option>
                            <option>Private</option>
                            <option>FBO</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>District</label>
                        <select name="district" class="form-control">
                            <option value="">--Select Ownership Detail--</option>
                            <option>Government</option>
                            <option>Private</option>
                            <option>FBO</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Mobile</label>
                        <input type="text" class="form-control" name="mobile">
                    </div>
                    <div class="form-group">
                        <label>Telephone</label>
                        <input type="text" class="form-control" name="telephone">
                    </div>
                    <div class="form-group">
                        <label>Fax</label>
                        <input type="text" class="form-control" name="fax">
                    </div>
                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="text" class="form-control" name="email">
                    </div>


            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 portlets">
        <div class="widget">
            <div class="widget-content padding">
                <div class="col-sm-2 pull-right" style="margin-top: 10px; margin-bottom: 10px;">
                     <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>

            </div>
        </div>
    </div>
</div>
{!!Form::close() !!}

    @stop
