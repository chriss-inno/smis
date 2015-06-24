@extends('layout.master')
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
 @section('contents')
     <!-- Page Heading Start -->
     <div class="page-heading">
         <h1><i class='fa fa-table'></i> SCHOOLS</h1>
     </div>
     <div class="row">

         <div class="col-md-12">
             <div class="widget">
                 <div class="widget-header">
                     <h2>List of registered schools</h2>
                     <div class="additional-btn">
                         <a class="btn btn-blue-1" style="color: #fff" href="{{url('schools/add')}}"><i class="fa fa-file-text-o"></i> New School </a>
                         <a class="btn btn-blue-3" style="color: #fff" href="{{url('schools')}}"><i class="fa fa-th-list"></i> View Schools </a>
                         <a class="btn btn-red-1" style="color: #fff" href="{{url('schools-manage')}}"><i class="fa fa-cog"></i> Manage Schools </a>
                         <a class="btn btn-green-3" style="color: #fff" href="{{url('schools-reports')}}"><i class="fa fa-bar-chart-o"></i> School Reports </a>
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
                                     <th>School Code</th>
                                     <th>Name of the School</th>
                                     <th>Registration Number</th>
                                     <th>ownership</th>
                                     <th>owner</th>
                                     <th>Postal Address</th>
                                     <th>Users</th>
                                 </thead>

                                 <tfoot>
                                 <tr>
                                     <th>SNO</th>
                                     <th>School Code</th>
                                     <th>Name of the School</th>
                                     <th>Registration Number</th>
                                     <th>ownership</th>
                                     <th>owner</th>
                                     <th>Postal Address</th>
                                     <th>Users</th>
                                 </tfoot>

                                 <tbody>
                                 <?php $c=1;?>
                                 @foreach($school as $sc)
                                     <tr>
                                         <td>{{$c}}</td>
                                         <td>{{$sc->school_code}}</td>
                                         <td>{{$sc->school_name}}</td>
                                         <td>{{$sc->registration_no}}</td>
                                         <td>{{$sc->ownership_type}}</td>
                                         <td>{{$sc->owner}}</td>
                                         <td>{{$sc->postal_address}}</td>
                                         <td id="{{$sc->id}}" ></td>
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