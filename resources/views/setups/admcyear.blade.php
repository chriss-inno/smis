@extends('layout.master')
@section('page-title')
    School Information System| Accademic Setup
@stop
@section('pageScript')
    {!!HTML::script("assets/libs/bootstrap-validator/js/bootstrapValidator.min.js")!!}
    {!!HTML::script("assets/js/pages/form-validation.js")!!}
<script>
    $("#school").change(function () {
        var id1 = this.value;
        if (id1 != ""){
            $.get("<?php echo url('getYear') ?>/" + id1, function (data) {
                document.getElementById('current_year').value=data;
            });
         }
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
        <h1><i class='fa fa-building'></i> Academic Setup: Current Year</h1></div>
    <!-- Page Heading End-->
    <div class="row">
        <div class="row">

            <div class="col-md-12">
                <div class="widget">
                    <div class="widget-header">
                        <h2>Current Year Setup</h2>

                    </div>
                    <div class="widget-content">
                        <br>
                        <div class="widget animated fadeInDown">
                            {!! Form::open(array('url' => 'academic/current-year','id'=>'formacyear','role'=>'form')) !!}
                           <div class="row">
                               <div class="form-group">
                                   <div class="col-sm-2 text-right">
                                       <label>Select School</label>
                                   </div>
                                   <div class="col-sm-6">
                                       <select name="school" class="form-control" id="school">
                                           <option value="">----</option>
                                           @foreach($schools as $sc)
                                               <option value="{{$sc->id}}">{{$sc->school_name}}</option>
                                           @endforeach
                                       </select>
                                   </div>
                               </div>
                           </div>
                            <div class="row" style="margin-top: 20px">
                                <div class="form-group">
                                    <div class="col-sm-2 text-right">
                                        <label>Academic Year</label>

                                    </div>
                                    <div class="col-sm-6" id="getCYear">
                                        <input type="text" class="form-control" name="current_year" id="current_year" placeholder="Year (YYYY) eg 2015">
                                    </div>
                                    <div class="col-sm-4">
                                        Current Academic year is settled once per year and can be automatically generated.
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 20px">
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <input type="submit" class="btn btn-blue-3 btn-block" value="Set Current Year">
                                    </div>
                                    <div class="col-sm-6" id="output"></div>
                                </div>
                            </div>
                            {!!Form::close() !!}


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

