@extends('layout.master')
@section('pageScript')

    <!-- Wizard-->
    {!!HTML::script("assets/libs/jquery-wizard/jquery.easyWizard.js")!!}
    {!!HTML::script("assets/js/pages/form-wizard.js")!!}
    <script>
        $("#region").change(function () {
            var id1 = this.value;
            $.get("<?php echo url('getDistricts') ?>/"+id1,function(data){
                $("#district").html(data);
            });
        });
    </script>
@stop
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
                                <i class="fa fa-delicious"></i>
                                <span>Manage Schools</span>
                            <span class="pull-right">
                                <i class="fa fa-angle-down"></i>
                            </span>
                            </a>
                            <ul>
                                <li><a href='{{url('schools/add')}} ' class='active'><span><i class="fa fa-arrow-right"></i>New School</span></a></li>
                                <li><a href='{{url('schools')}}'><span><i class="fa fa-arrow-right"></i>Available Schools</span></a></li>
                                <li><a href='{{url('schools-manage')}}'><span><i class="fa fa-arrow-right"></i>Manage Schools</span></a></li>
                                <li><a href='{{url('schools-reports/')}}'><span><i class="fa fa-arrow-right"></i>School general reports</span></a></li>

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
@section('contents')
    {!!HTML::script("assets/js/tinymce/tinymce.min.js")!!}
    <script type="text/javascript">
        tinymce.init({
            selector: "textarea",
            plugins: [
                "advlist autolink lists   charmap   anchor",
                "insertdatetime  contextmenu paste"
            ],
            toolbar: " undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent "
        });
    </script>
    <!-- Page Heading Start -->
    <div class="page-heading">
        <h1><i class='fa fa-building'></i> School Information</h1></div>
    <!-- Page Heading End-->
    <div class="row">
        <div class="row">

            <div class="col-md-12">
                <div class="widget">
                    <div class="widget-header">
                        <h2>School Registration</h2>
                        <div class="additional-btn">
                            <a class="btn btn-blue-1" style="color: #fff" href="{{url('schools/add')}}"><i class="fa fa-file-text-o"></i> New School </a>
                            <a class="btn btn-blue-3" style="color: #fff" href="{{url('schools')}}"><i class="fa fa-th-list"></i> View Schools </a>
                            <a class="btn btn-red-1" style="color: #fff" href="{{url('schools-manage')}}"><i class="fa fa-cog"></i> Manage Schools </a>
                            <a class="btn btn-green-3" style="color: #fff" href="{{url('schools-reports')}}"><i class="fa fa-bar-chart-o"></i> School Reports </a>
                        </div>
                    </div>
                    <div class="widget-content">
                        <br>
                        <div class="widget animated fadeInDown">
                            {!! Form::open(array('url' => 'schools/add','id'=>'myWizard')) !!}

                            <section class="step" data-step-title="Basic School Information">
                                <div class="row">
                                    <div class="col-sm-8">
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
                                            <input type="text" class="form-control datepicker-input" data-mask="9999-99-99" placeholder="yyyy-mm-dd" name="start_date">
                                        </div>

                                    </div>
                                    <div class="col-sm-4">
                                        <div class="notes">
                                            <h4><strong>About School Information</strong></h4>
                                            <p style="text-align: justify">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                                            </p>
                                            <ol>
                                                <li>Duis autem vel eum iriure dolor in hendrerit in vulputate</li>
                                                <li>Lorem ipsum dolor sit amet</li>
                                                <li>Sed diam nonummy nibh euismod tincidunt</li>
                                                <li>Sonsectetuer adipiscing elit</li>
                                                <li>Tincidunt ut laoreet dolore magna aliquam erat volutpat</li>
                                            </ol>
                                            <p style="text-align: justify">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="step" data-step-title="Ownership Details">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label>Ownership Type</label>
                                            <select name="ownership_type" class="form-control">
                                                <option value="">--Select Ownership Detail--</option>
                                                <option>Government</option>
                                                <option>Private</option>
                                                <option>FBO</option>
                                                <option>Other</option>
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
                                        <div class="form-group">
                                            <label>Website</label>
                                            <input type="text" class="form-control" name="website">
                                        </div>
                                        <div class="form-group">
                                            <label>School Profile</label>
                                            <textarea class="form-control" name="SchoolProfile" style="height: 140px; resize: none;"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="notes">
                                            <h4><strong>Ownership Details</strong> note</h4>
                                            <p style="text-align: justify">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                                            </p>
                                            <ol>
                                                <li>Duis autem vel eum iriure dolor in hendrerit in vulputate</li>
                                                <li>Lorem ipsum dolor sit amet</li>
                                                <li>Sed diam nonummy nibh euismod tincidunt</li>
                                                <li>Sonsectetuer adipiscing elit</li>
                                                <li>Tincidunt ut laoreet dolore magna aliquam erat volutpat</li>
                                            </ol>
                                            <p style="text-align: justify">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="step" data-step-title="School location/Address">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label>Postal Address</label>
                                            <textarea class="form-control" name="postal_address"> </textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Physical Address</label>
                                            <textarea class="form-control" name="physical_address"> </textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="region">Region</label>
                                            <?php
                                            $reg=array(''=>'--Select Region--');
                                            $reg=\App\Region::all(); ?>

                                            <select id="region" name="region" class="form-control">
                                                <option value="" selected="selected">--Select Region--</option>
                                                 @foreach($reg as $rg)
                                                     <option value="{{$rg->id}}">{{$rg->region_name}}</option>
                                                     @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>District</label>
                                            <label>District</label>
                                            <select name="district" id="district" class="form-control">
                                                <option value="">--Select District--</option>
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
                                    <div class="col-sm-4">
                                        <div class="notes">
                                            <h4><strong>Address</strong> note</h4>
                                            <p style="text-align: justify">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                                            </p>
                                            <ol>
                                                <li>Duis autem vel eum iriure dolor in hendrerit in vulputate</li>
                                                <li>Lorem ipsum dolor sit amet</li>
                                                <li>Sed diam nonummy nibh euismod tincidunt</li>
                                                <li>Sonsectetuer adipiscing elit</li>
                                                <li>Tincidunt ut laoreet dolore magna aliquam erat volutpat</li>
                                            </ol>
                                            <p style="text-align: justify">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </section>
                            {!!Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

