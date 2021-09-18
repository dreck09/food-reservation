@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card mt-5">
        <h2 class="text-center card-header">Reservation Form</h2>
        <div class="outer-form-container">
            <div class="form-container card-body mx-auto">
                <p><label for="">Number of Guest</label> <input class="form-control" type="text"></p>

                <p><label for="">Date of</label> <input  class="form-control" type="date"></p>

                <label for="">Time</label> 
                <p>
                    <input class="form-control" type="time">
                </p>

                <p><label  for="">Type Of Reservation</label>
                    <select name="" id=""  class="form-control">
                        <option value="">--- Type Of Reservation ---</option>
                    </select>    
                </p>

                <p><label for="">Special Request</label><input class="form-control" type="text" name="" id=""></p>
            </div>
        </div>
    </div>

    <div class="card mt-5">
        <h2 class="card-header">Package Order</h2>
        <div class="package-container">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6  col-sm-6 col-12">
                        <div class="package-card card">
                            <div class="title">
                                <!--The value must be id of package-->
                                <h4><input type="radio" name="package" value=""> Package 1 - 350 pesos</h4>
                            </div>
                            <div class="food-list card-body">
                                <ul>
                                    <li>Adobo</li>
                                    <li>Lumpia</li>
                                    <li>Adobo</li>
                                    <li>Lumpia</li>
                                </ul>
                            </div>
                        </div>
                    </div><!--end -->
                    <div class="col-xl-4 col-md-6  col-sm-6 col-12">
                        <div class="package-card card">
                            <div class="title">
                                <!--The value must be id of package-->
                                <h4><input type="radio" name="package" value=""> Package 2 - 250 pesos</h4>
                            </div>
                            <div class="food-list card-body">
                                <ul>
                                    <li>Adobo</li>
                                    <li>Lumpia</li>
                                    <li>Adobo</li>
                                    <li>Lumpia</li>
                                </ul>
                            </div>
                        </div>
                    </div><!--end -->
                    <div class="col-xl-4 col-md-6  col-sm-6 col-12">
                        <div class="package-card card">
                            <div class="title">
                                <!--The value must be id of package-->
                                <h4><input type="radio" name="package" value=""> Package 2 - 250 pesos</h4>
                            </div>
                            <div class="food-list card-body">
                                <ul>
                                    <li>Adobo</li>
                                    <li>Lumpia</li>
                                    <li>Adobo</li>
                                    <li>Lumpia</li>
                                </ul>
                            </div>
                        </div>
                    </div><!--end -->
                    <div class="col-xl-4 col-md-6  col-sm-6 col-12">
                        <div class="package-card card">
                            <div class="title">
                                <!--The value must be id of package-->
                                <h4><input type="radio" name="package" value=""> Package 2 - 250 pesos</h4>
                            </div>
                            <div class="food-list card-body">
                                <ul>
                                    <li>Adobo</li>
                                    <li>Lumpia</li>
                                    <li>Adobo</li>
                                    <li>Lumpia</li>
                                </ul>
                            </div>
                        </div>
                    </div><!--end -->
                </div>
            </div>
        </div>
    </div>
    
    <div class="card mt-3 pb-4">
    <div class="single-order-container">
        <h2 class="card-header">Choose Single Order <span style="font-size:15px;">(--Optional Only--)</span></h2>
        <h4 class="text-center card-header mt-3" style="font-style: italic;">Course Menu</h4>
        <div class="course-menu">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-4 col-sm-6 col-12">
                        <div class="course-mune-inner">
                            <p><input type="checkbox"> Adobong Manok - <b>₱150.00</b></p>
                            <img src="{{url('/images/food2.jpeg')}}" alt="" >
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 col-sm-6 col-12">
                        <div class="course-mune-inner">
                            <p><input type="checkbox"> Adobong Manok - <b>₱150.00</b></p>
                            <img src="{{url('/images/food2.jpeg')}}" alt="" >
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 col-sm-6 col-12">
                        <div class="course-mune-inner">
                            <p><input type="checkbox"> Adobong Manok - <b>₱150.00</b></p>
                            <img src="{{url('/images/food3.jpeg')}}" alt="" >
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 col-sm-6 col-12">
                        <div class="course-mune-inner">
                            <p><input type="checkbox"> Adobong Manok - <b>₱150.00</b></p>
                            <img src="{{url('/images/food3.jpeg')}}" alt="" >
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <h4 class="text-center card-header mt-3" style="font-style: italic;">Desert Menu</h4>
        <div class="course-menu">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-4 col-sm-6 col-12">
                        <div class="course-mune-inner">
                            <p><input type="checkbox"> Desert 1 - <b>₱150.00</b></p>
                            <img src="{{url('/images/food2.jpeg')}}" alt="" >
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 col-sm-6 col-12">
                        <div class="course-mune-inner">
                            <p><input type="checkbox"> Desert 1 - <b>₱150.00</b></p>
                            <img src="{{url('/images/food2.jpeg')}}" alt="" >
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 col-sm-6 col-12">
                        <div class="course-mune-inner">
                            <p><input type="checkbox"> Desert 1 - <b>₱150.00</b></p>
                            <img src="{{url('/images/food3.jpeg')}}" alt="" >
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h4 class="text-center card-header mt-3" style="font-style: italic;">Drinks Menu</h4>
        <div class="course-menu">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-4 col-sm-6 col-12">
                        <div class="course-mune-inner">
                            <p><input type="checkbox"> Drinks 1 - <b>₱150.00</b></p>
                            <img src="{{url('/images/food2.jpeg')}}" alt="" >
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 col-sm-6 col-12">
                        <div class="course-mune-inner">
                            <p><input type="checkbox"> Drinks 1 - <b>₱150.00</b></p>
                            <img src="{{url('/images/food2.jpeg')}}" alt="" >
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 col-sm-6 col-12">
                        <div class="course-mune-inner">
                            <p><input type="checkbox"> Drinks 1 - <b>₱150.00</b></p>
                            <img src="{{url('/images/food3.jpeg')}}" alt="" >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="button-container">
        <a href="{{route('transaction')}}">
            <input type="submit" class="rounded mb-5 btn-lg" name="" id="" value="Next">
        </a>
    </div>
</div>



@endsection
