@extends('layouts.admin')

@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-12">
        @if(session('message'))
            <div class="alert alert-success alert-dismissible">
                {{ session('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="card">
            <div class="card-header bg-primary">
            <h3 class="card-title">Pending Reservation</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <table id="food_item" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th hidden="">No.</th>
                    <th>Trasaction Number</th>
                    <th>Full Name</th>
                    <th>Total Payment</th>
                    <th>Down Payment</th>
                    <th>Date of Reservation</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($pending_list as $data)
                <tr>
                    <td hidden=""></td>
                    <td>{{str_pad($data->id, 6, '0', STR_PAD_LEFT)}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->total_payment}}</td>
                    <td>{{$data->downpayment}}</td>
                    <td>{{Carbon\Carbon::parse($data->r_date)->format('M d, Y | H:i:s')}}</td>
                    <td><span class="bg-danger rounded p-1">Pending</span></td>
                    <td>
                        <a class="btn btn-primary m-1 .btn-sm"
                            type="button"
                            user="{{$data->name}}" 
                            venue="{{$data->venue}}"
                            motif="{{$data->motif}}"
                            
                            class="btn btn-primary" 
                            data-toggle="modal" 
                            data-target="#showReservationModal">
                            Show
                            <i class="fas fa-eye"></i>
                        </a> 
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
  </div>
</div>

<!-- Modal SHOW FOOD -->
<div class="modal fade" id="showReservationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-information">
            <h5 class="modal-title" id="exampleModalLabel">Reservation Information</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <div class="container p-3">
                    <div class="col-12 col-md-12 col-lg-12 order-1 order-md-2">
                        <div class="row">
                            <h3 class="text-primary"><i class="fas fa-user"></i> Client Name </h3>
                            <div class="ml-auto">
                                <button type="button" class="btn btn-primary">
                                <i class="fas fa-eye"></i> View User
                                </button>
                            </div>
                        </div>
                        <div class="text-muted">
                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Venue</b> <a class="float-right">Bulan, Sorsogon</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Motif</b> <a class="float-right">Violet</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Guests No.</b> <a class="float-right">55 person</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Reservation Date</b> <a class="float-right">Sep 30, 2021 | 13:00:00</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Reservation Type</b> <a class="float-right bg-danger rounded">Pending</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Special Request</b> <a class="float-right">none</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Reservation Type</b> <a class="float-right">Wedding</a>
                                </li>
                                <li class="list-group-item">
                                    <b>GCash Name</b> <a class="float-right">Client Middle.</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Uploaded Receipt</b>
                                    <a href="https://via.placeholder.com/1200/FFFFFF.png?text=1" class="float-right" data-toggle="lightbox" data-title="sample 1 - white">
                                        <img src="https://via.placeholder.com/300/FFFFFF?text=1" height="50px" class="mb-2" alt="white sample">
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                                
                        <div class="col-6">
                            <h5 class="mt-2 text-muted">Package 1 - 250pesos</h5>
                            <ul>
                                <li>
                                    <a href="" class="btn-link text-secondary">Adobo</a>
                                </li>
                                <li>
                                    <a href="" class="btn-link text-secondary">Coke 12oz</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6">

                        </div>
                        <div class="text-center mt-5 mb-3">
                            <a href="#" class="btn btn-sm btn-primary">Approved</a>
                            <a href="#" class="btn btn-sm btn-warning">Disapproved</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
