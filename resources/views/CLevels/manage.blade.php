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
@section('modals')
    <script>
        //Delete Application
        $(".deleteClass").click(function(){
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
                $.get("<?php echo url('academic/classes/remove') ?>/"+id1,function(data){
                    btn.hide("slow").next("hr").hide("slow");
                });
            });
        });
        //adding school user
        $(".addClass").click(function(){

            var id1 = $(this).parent().attr('id');
            var modal = '<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">';
            modal+= '<div class="modal-dialog" style="width:60%;margin-right: 20% ;margin-left: 20%">';
            modal+= '<div class="modal-content">';
            modal+= '<div class="modal-header">';
            modal+= '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>';
            modal+= '<span id="myModalLabel" class="h2 modal-title text-center text-info" style="text-align: center">Create School Class Level</span>';
            modal+= '</div>';
            modal+= '<div class="modal-body">';
            modal+= ' </div>';
            modal+= '</div>';
            modal+= '</div>';
            $('body').css('overflow','hidden');

            $("body").append(modal);
            $("#myModal").modal("show");
            $(".modal-body").html("<h3><i class='fa fa-spin fa-spinner '></i><span>loading...</span><h3>");
            $(".modal-body").load("<?php echo url("academic/classes/create") ?>");
            $("#myModal").on('hidden.bs.modal',function(){
                $("#myModal").remove();
            })

        });
        //Edit class streams
        $(".editClass").click(function(){
            var id1 = $(this).parent().attr('id');
            var modal = '<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">';
            modal+= '<div class="modal-dialog" style="width:60%;margin-right: 20% ;margin-left: 20%">';
            modal+= '<div class="modal-content">';
            modal+= '<div class="modal-header">';
            modal+= '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>';
            modal+= '<span id="myModalLabel" class="h2 modal-title text-center text-info" style="text-align: center">Update School Class Level</span>';
            modal+= '</div>';
            modal+= '<div class="modal-body">';
            modal+= ' </div>';
            modal+= '</div>';
            modal+= '</div>';
            $('body').css('overflow','hidden');

            $("body").append(modal);
            $("#myModal").modal("show");
            $(".modal-body").html("<h3><i class='fa fa-spin fa-spinner '></i><span>loading...</span><h3>");
            $(".modal-body").load("<?php echo url("academic/classes/edit") ?>/"+id1);
            $("#myModal").on('hidden.bs.modal',function(){
                $("#myModal").remove();
            })

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
    @section('contents')
            <!-- Page Heading Start -->
    <div class="page-heading">
        <h1><i class='fa fa-table'></i> MANAGE SCHOOLS CLASSES</h1>
    </div>
    <div class="row">

        <div class="col-md-12">
            <div class="widget">
                <div class="widget-header">
                    <h2>List of registered classes</h2>
                    <div class="additional-btn">
                        <a class="addClass btn btn-blue-1" style="color: #fff" href="#"><i class="fa fa-file-text-o"></i> New Class </a>
                        <a class="btn btn-blue-3" style="color: #fff" href="{{url('academic/classes')}}"><i class="fa fa-th-list"></i> View Classes </a>
                        <a class="btn btn-red-1" style="color: #fff" href="{{url('academic/manage')}}"><i class="fa fa-cog"></i> Manage Classes </a>
                        <a class="btn btn-green-3" style="color: #fff" href="{{url('academic/reports')}}"><i class="fa fa-bar-chart-o"></i> Classes Reports </a>
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
                                    <th>Class Level name</th>
                                    <th>Descriptions</th>
                                    <th>Remarks</th>
                                    <th>Status</th>
                                    <th>Class streams</th>
                                    <th>Action</th>
                                </thead>

                                <tfoot>
                                <tr>
                                    <th>SNO</th>
                                    <th>Class Level name</th>
                                    <th>Descriptions</th>
                                    <th>Remarks</th>
                                    <th>Status</th>
                                    <th>Class streams</th>
                                    <th>Action</th>
                                </tfoot>

                                <tbody>
                                <?php $c=1;?>
                                @foreach($classes as $sc)
                                    <tr>
                                        <td>{{$c}}</td>
                                        <td>{{$sc->level_name}}</td>
                                        <td>{{$sc->level_descriptions}}</td>
                                        <td>{{$sc->remarks}}</td>
                                        <td>{{$sc->status}}</td>
                                        <td  id="{{$sc->level_name}}" style="align-content: center"> <div class="col-md-12" id="{{$sc->id}}">
                                                <a href="#" title="Add Streams" class="adduser "><i class="fa fa-users text-success"></i> View</a>&nbsp;&nbsp;&nbsp;
                                            </div></td>
                                        <td id="{{$sc->id}}" style="align-content: center" >
                                            <div class="col-md-6" id="{{$sc->id}}">
                                                <a href="#" title="Edit" class="editClass "><i class="fa fa-pencil-square-o text-info"></i> edit</a>&nbsp;&nbsp;&nbsp;
                                            </div>
                                            <div class="col-md-6" id="{{$sc->id}}">
                                                <a href="#b" title="Delete" class="deleteClass "><i class="fa fa-trash-o text-danger"></i> delete </a>
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