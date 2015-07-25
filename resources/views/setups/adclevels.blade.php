@extends('layout.master')
@section('page-title')
    School Information System| Accademic Setup
@stop
@section('pageScript')
    {!!HTML::script("assets/libs/jquery-datatables/js/jquery.dataTables.min.js")!!}
    {!!HTML::script("assets/libs/jquery-datatables/js/dataTables.bootstrap.js")!!}
    {!!HTML::script("assets/libs/jquery-datatables/extensions/TableTools/js/dataTables.tableTools.min.js")!!}
    {!!HTML::script("assets/js/pages/datatables.js")!!}
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


                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
            <div class="clearfix"></div><br><br><br>
        </div>
    </div>
@stop
@section('modals')
    <script>
        //Delete Application
        $(".deleteapp").click(function(){
            var id1 = $(this).parent().attr('id');
            $(".deleteuser").show("slow").parent().parent().find("span").remove();
            var btn = $(this).parent().parent();
            $(this).hide("slow").parent().append("<span><br>Are You Sure <br /> <a href='#s' id='yes' class='btn btn-success btn-xs'><i class='fa fa-check'></i> Yes</a> <a href='#s' id='no' class='btn btn-danger btn-xs'> <i class='fa fa-times'></i> No</a></span>");
            $("#no").click(function(){
                $(this).parent().parent().find(".deleteapp").show("slow");
                $(this).parent().parent().find("span").remove();
            });
            $("#yes").click(function(){
                $(this).parent().html("<br><i class='icon-spinner icon-spin'></i>deleting...");
                $.get("<?php echo url('schools/delete/') ?>/"+id1,function(data){
                    btn.hide("slow").next("hr").hide("slow");
                });
            });
        });
        //adding school user
        $(".adduser").click(function(){
            var name = $(this).parent().attr('id');
            var id1 = $(this).parent().attr('id');
            var modal = '<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">';
            modal+= '<div class="modal-dialog" style="width:80%;margin-right: 10% ;margin-left: 10%">';
            modal+= '<div class="modal-content">';
            modal+= '<div class="modal-header">';
            modal+= '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>';
            modal+= '<h2 class="modal-title" id="myModalLabel">Register new user</h2>';
            modal+= '</div>';
            modal+= '<div class="modal-body">';
            modal+= ' </div>';
            modal+= '</div>';
            modal+= '</div>';
            $('body').css('overflow','hidden');

            $("body").append(modal);
            $("#myModal").modal("show");
            $(".modal-body").html("<h3><i class='fa fa-spin fa-spinner '></i><span>loading...</span><h3>");
            $(".modal-body").load("<?php echo url("users/create") ?>");
            $("#myModal").on('hidden.bs.modal',function(){
                $("#myModal").remove();
            })

        });
        $(".editUser").click(function(){
            var name = $(this).parent().attr('name');
            var id1 = $(this).parent().attr('id');
            var modal = '<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">';
            modal+= '<div class="modal-dialog" style="width:80%;margin-right: 10% ;margin-left: 10%">';
            modal+= '<div class="modal-content">';
            modal+= '<div class="modal-header">';
            modal+= '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>';
            modal+= '<h2 class="modal-title" id="myModalLabel">Update User information for '+name+'</h2>';
            modal+= '</div>';
            modal+= '<div class="modal-body">';
            modal+= ' </div>';
            modal+= '</div>';
            modal+= '</div>';
            $('body').css('overflow','hidden');

            $("body").append(modal);
            $("#myModal").modal("show");
            $(".modal-body").html("<h3><i class='fa fa-spin fa-spinner '></i><span>loading...</span><h3>");
            $(".modal-body").load("<?php echo url("users/edit") ?>/"+id1);
            $("#myModal").on('hidden.bs.modal',function(){
                $("#myModal").remove();
            })

        });
    </script>
    @stop
    @section('contents')
            <!-- Page Heading Start -->
    <div class="page-heading">
        <h1><i class='fa fa-users'></i> System Users</h1>
    </div>
    <div class="row">

        <div class="col-md-12">
            <div class="widget">
                <div class="widget-header">
                    <h2>List of registered users</h2>
                    <div class="additional-btn">
                        <a class="adduser btn btn-blue-1" style="color: #fff" href="#"><i class="fa fa-file-text-o"></i> New User </a>
                        <a class="btn btn-red-1" style="color: #fff" href="{{url('users')}}"><i class="fa fa-cog"></i> Manage Users </a>
                        <a class="btn btn-green-3" style="color: #fff" href="{{url('users/reports')}}"><i class="fa fa-bar-chart-o"></i> User Reports </a>
                    </div>
                </div>
                <div class="widget-content">
                    <br>
                    <div class="table-responsive">
                        <form class='form-horizontal' role='form'>
                            <table id="datatables-4" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>SNO</th>
                                    <th>First Name</th>
                                    <th>Surname</th>
                                    <th>Other Name</th>
                                    <th>E-Mail</th>
                                    <th>Phone Number</th>
                                    <th>School</th>
                                    <th>Access</th>
                                    <th style="text-align: center">Actions</th>
                                </thead>

                                <tfoot>
                                <tr>
                                    <th>SNO</th>
                                    <th>First Name</th>
                                    <th>Surname</th>
                                    <th>Other Name</th>
                                    <th>E-Mail</th>
                                    <th>Phone Number</th>
                                    <th>School</th>
                                    <th>Access</th>
                                    <th style="text-align: center">Actions</th>
                                </tfoot>

                                <tbody>
                                <?php $c=1;?>
                                @foreach($users as $usr)
                                    <tr>
                                        <td>{{$c}}</td>
                                        <td>{{$usr->first_name}}</td>
                                        <td>{{$usr->surname}}</td>
                                        <td>{{$usr->other_name}}</td>
                                        <td>{{$usr->email}}</td>
                                        <td>{{$usr->phone}}</td>
                                        <td><?php echo \App\Http\Controllers\SchoolController::getSchoolNameById($usr->school_id);?></td>
                                        <td><?php echo$usr->physical_address;?></td>
                                        <td id="{{$usr->id}}" style="align-content: center" >
                                            <div class="col-md-6" id="{{$usr->id}}" name="<?php echo \App\Http\Controllers\SchoolController::getSchoolNameById($usr->school_id);?>">
                                                <a href="#" title="Edit" class="editUser "><i class="fa fa-pencil-square-o text-info"></i> edit</a>&nbsp;&nbsp;&nbsp;
                                            </div>
                                            <div class="col-md-6" id="{{$usr->id}}">
                                                <a href="#b" title="Delete" class="deleteapp "><i class="fa fa-trash-o text-danger"></i> delete </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php $c++;;?>
                                @endforeach
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop