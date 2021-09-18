@extends('layouts.app')

@section('content')

    <div class="container">
        <h1 class="text-center">Reservation Form</h1>

       <div class="outer-form-container">
       <div class="form-container">
            <p><label for=""># of Guest</label> <input type="text"></p>
            <p><label for="">Date of</label> <input type="date"></p>
            <label for="">Time</label> 
            <p>
            <input class="input" type="text">
            <select class="select" name="" id="">
                <option value="PM">PM</option>
                <option value="PM">AM</option>
            </select>
            </p>
            <p><label  for="">Type Of Reservation</label>
                <select name="" id="">
                    <option value="">--- Type Of Reservation ---</option>
                </select>    
            </p>
            <p><label for="">Special Request</label><input type="text" name="" id=""></p>
        </div>
       </div>
          <h2>Single Order</h2>
        <div class="package-container">
           <div class="container">
               <div class="row">
                   <div class="col-xl-4 col-md-6  col-sm-6 col-12">
                     <div class="package-card">
                                <div class="title">
                                    <h2> Package 1</h2>
                                    <input type="radio">
                                </div>
                                <div class="food-list">
                                    <ul>
                                        <li>Adobo</li>
                                        <li>Lumpia</li>
                                        <li>Adobo</li>
                                        <li>Lumpia</li>
                                    </ul>
                                </div>
                        </div>
                    </div><!--end -->
                    <div class="col-xl-4 col-md-6 col-sm-6 col-12">
                     <div class="package-card">
                                <div class="title">
                                    <h2> Package 2</h2><input type="radio">
                                </div>
                                <div class="food-list">
                                    <ul>
                                        <li>Adobo</li>
                                        <li>Lumpia</li>
                                    </ul>
                                </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-6 col-12">
                     <div class="package-card">
                                <div class="title">
                                    <h2> Package 2</h2><input type="radio">
                                </div>
                                <div class="food-list">
                                    <ul>
                                        <li>Adobo</li>
                                        <li>Lumpia</li>
                                    </ul>
                                </div>
                        </div>
                    </div>
                  
               </div>
           </div>
</div>
          
         

        <div class="single-order-container">
            <h2>Choose Single Order</h2>
            <h2 class="text-center">Course Menu</h2>
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
                    </div>
                </div>
            </div>

           
            <h2 class="text-center">Desert Menu</h2>
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

      
            <h2 class="text-center">Drinks Menu</h2>
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


    <div class="button-container">
        <input type="submit" name="" id="" value="Next">
    </div>
    </div>



@endsection
