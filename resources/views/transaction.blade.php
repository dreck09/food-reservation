@extends('layouts.app')

@section('content')

  <div class="container transaction-container">
      <div class="row">
          <div class="col-xl-6 col-md-6 col-sm-12 col-12 transaction-right card mt-4 p-4">
              <h2 class="p-3 text-center">Transaction Payment</h2>
                <form action="">
                    <Label>Total Payment: <b>₱500.00</b></Label> 
                    <p><label for="">Half Payment: </label> <input type="text" class="form-control" name="" id="" placeholder="Enter Half Payment"></p>
                    <p><label for="">Your G-Cash Name: </label> <input type="text" class="form-control" name="" id="" placeholder="Enter Half Payment"></p>
                    <p><label for="">Upload Sceenshot Reciept: </label> <input type="file" class="form-control" name="" id=""></p>
                    <p><label for="">Payment Date and Time: </label> <input type="date" class="form-control" name="" id=""></p>
                    <input class="special rounded" type="submit" value="Back">
                    <input class="special rounded" type="submit" value="Reserve">
                </form>         
            </div>
            <div class="col-xl-6 col-md-6 col-sm-12 col-12 transaction-left mt-4">
                <div class="gcash-container">
                    <h2 class="card-header text-center mb-4">Our G-Cash Information</h2>
                    <h5>G-Cash Name:</h5>
                    <p style="text-align: center"><b>j4Catering</b></p>
                    <h5>G-Cash Account Number:</h5>
                    <p style="text-align: center"><b>0912345678123</b></p>
                </div>
                <div class="contact-us">
                    <h2 class="card-header text-center mb-4">Contact Us</h2>
                    <h5>Contact Number:</h5>
                    <p style="text-align: center"><b>09123123123</b></p>
                    <h5>E-mail:</h5>
                    <p style="text-align: center"><b>j4s@gmail.com</b></p>
                </div>
            </div>
      </div>
  </div>

@endsection


