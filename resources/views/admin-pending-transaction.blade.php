@extends('layouts.admin')

@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-12">
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
                        <form action="{{route('view.pending',$data->id)}}" method="post">
                        @csrf
                           <button class="btn btn-primary m-1 .btn-sm"
                                type="submit"
                                class="btn btn-primary">
                                Show
                                <i class="fas fa-eye"></i>
                            </button>  
                        </form>
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
@endsection
