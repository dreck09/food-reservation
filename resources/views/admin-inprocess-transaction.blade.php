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
            <h3 class="card-title">Processing Reservation</h3>
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
                <tr>
                    <td hidden=""></td>
                    <td>311231</td>
                    <td>Rosalinda Havier</td>
                    <td>20,000</td>
                    <td>10,000</td>
                    <td>Sept 30, 2022</td>
                    <td><span class="bg-primary rounded p-1">In Process</span></td>
                    <td>
                        <a class="btn btn-primary m-1 .btn-sm"
                            type="button" 
                           
                            class="btn btn-primary" 
                            data-toggle="modal" 
                            data-target="#showReservationModal">
                            Show
                            <i class="fas fa-eye"></i>
                        </a> 
                    </td>
                </tr>
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
                    .....Maintenance
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
