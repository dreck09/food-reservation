@extends('layouts.app')

@section('content')
<form action="{{route('add.reservation')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <div class="card mt-5">
        <h3 class="text-center card-header">Reservation Form</h3>
        <div class="outer-form-container">
            <div class="form-container card-body mx-auto">
                <p>
                    <label for="guest">Number of Guest</label>
                    <input class="form-control p-2" id="guest" name="guest" type="number" placeholder="Enter Number of Guests" required=""/>
                </p>
                <p>
                    <label for="r_date_time">Date and Time of Reservation</label>
                    <input  class="form-control p-2" id="r_date_time" name="r_date_time" type="datetime-local" required="">
                </p>
                <p>
                    <label  for="r_type">Type Of Reservation</label>
                    <select name="r_type" id="r_type"  class="form-control p-2" required="">
                        <option>--- Type Of Reservation ---</option>
                        <option value="Birthday">Birthday</option>
                        <option value="Wedding">Wedding</option>
                        <option value="Christening">Christening</option>
                        <option value="Seminar">Seminar</option>
                    </select>    
                </p>
                <p>
                    <label for="s_req">Special Request (Optional)</label>
                    <input class="form-control p-2" type="text" name="s_req" id="s_req" placeholder="Enter Special Request" />
                </p>
            </div>
        </div>
    </div>

    <div class="card mt-3">
        <h3 class="card-header">Package Order</h3>
        <div class="package-container">
            <div class="container">
                <div class="row">
                @foreach ($package as $pkg)
                    <div class="col-xl-4 col-md-6  col-sm-6 col-12">
                        <div class="package-card card">
                            <div class="title">
                                <!--The value must be id of package-->
                                <h4><input type="radio" name="package" value="$pkg->id"> {{$pkg->package_name . " - " . $pkg->price}} pesos</h4>
                            </div>
                            <div class="card-body" style="display: block;">
                                <table class="table table-striped table-bordered">
                                    <tbody>
                                    @foreach($pkg->assign_food_package as $sub_data)
                                        <tr>
                                            <td>{{$sub_data->food_title}}</td>
                                        </tr> 
                                    @endforeach
                                    </tbody>
                                </table> 
                            </div>
                        </div>
                    </div><!--end -->
                @endforeach
                </div>
            </div>
        </div>
    </div>
    
    <div class="card mt-3 pb-4">
    <div class="single-order-container">
        <h3 class="card-header">Choose Single Order <span style="font-size:15px;">(--Optional--)</span></h3>

        <h4 class="text-center card-header mt-3" style="font-style: italic;">Course Menu - <button class="btn .btn-sm" type="button" data-toggle="collapse" data-target="#collapseCourse" aria-expanded="false" aria-controls="collapseCourse">
           ( Show / Hide ) 
        </button></h4>
        <div class="course-menu">
            <div class="container">
            <div class="collapse" id="collapseCourse">
            <div class="card card-body">
                <div class="row">
                    @forelse($foods_main as $data)
                    <div class="col-xl-4 col-md-4 col-sm-6 col-12">
                        <div class="course-mune-inner">
                            <p><input type="checkbox"> {{$data->food_title}} - <b>₱{{$data->price}}</b></p>
                            <img src="/storage/foods_image/{{$data->image}}" alt="" >
                        </div>
                    </div>
                    @empty
                    <p><h5>No records found!</h5></p>
                    @endforelse
                </div>
            </div>
            </div>
            </div>
        </div>

        <h4 class="text-center card-header mt-3" style="font-style: italic;">Desert Menu - <button class="btn .btn-sm" type="button" data-toggle="collapse" data-target="#collapseDesert" aria-expanded="false" aria-controls="collapseDesert">
           ( Show / Hide ) 
        </button></h4>
        <div class="course-menu">
            <div class="container">
            <div class="collapse" id="collapseDesert">
            <div class="card card-body">
                <div class="row">
                    @forelse($foods_desert as $data)
                    <div class="col-xl-4 col-md-4 col-sm-6 col-12">
                        <div class="course-mune-inner">
                            <p><input type="checkbox"> {{$data->food_title}} - <b>₱{{$data->price}}</b></p>
                            <img src="{{url('/images/food2.jpeg')}}" alt="" >
                        </div>
                    </div>
                    @empty
                    <h5>No records found!</h5>
                    @endforelse
                </div>
            </div>
            </div>
            </div>
        </div>

        <h4 class="text-center card-header mt-3" style="font-style: italic;">Drinks Menu - <button class="btn .btn-sm" type="button" data-toggle="collapse" data-target="#collapseDrinks" aria-expanded="false" aria-controls="collapseDrinks">
           ( Show / Hide ) 
        </button></h4>
        <div class="course-menu">
            <div class="container">
            <div class="collapse" id="collapseDrinks">
            <div class="card card-body">
                <div class="row">
                    @forelse($foods_drinks as $data)
                    <div class="col-xl-4 col-md-4 col-sm-6 col-12">
                        <div class="course-mune-inner">
                            <p><input type="checkbox"> {{$data->food_title}} - <b>₱{{$data->price}}</b></p>
                            <img src="{{url('/images/food2.jpeg')}}" alt="" >
                        </div>
                    </div>
                    @empty
                    <h5>No records found!</h5>
                    @endforelse
                </div>
            </div>
            </div>
            </div>
        </div>
    </div>
    </div>

    <div class="button-container">
        <input type="submit" class="rounded mb-5 btn-lg" name="" id="" value="Next">
    </div>
</form>

</div>

@endsection
