
@extends('layouts.app')

@section('content')



<!-- about -->
<section id="about">
    <div class="container-fluid about">
        <div class="row">
            <div class="col-lg-6 col-sm-12 col-12 about-left">
                <h2>About</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, reiciendis. Eaque incidunt dolor consectetur quisquam labore harum odio, distinctio perspiciatis. Ipsam nobis labore earum excepturi quos fugiat quam iste maxime!</p>
            </div>
            <div class="col-lg-6 col-sm-12 col-12 about-right">
                
            </div>
        </div>
    </div>
</section>
<!-- End about --> 
<!-- Start Contact --> 
<section id="contact">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-sm-12 col-12 contact-left">

            </div>
            <div class="col-lg-6 col-sm-12 col-12 contact-right">
                    <h2>Contact Us</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio officia mollitia et delectus veniam adipisci sit expedita corrupti dolore ipsam!</p>
                    <p><b>+630 123 123123</b></p>
                    <p><b>example@gmail.com</b></p>
            </div>
        </div>
    </div>
</section>
<!-- end of contact -->
<!-- start of services -->
<section id="services">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-sm-12 col-12 services-left">
                <h2>Services</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente, nihil? Modi quod exercitationem dolor temporibus iusto facere atque porro harum itaque, illum repudiandae ipsum corrupti, ratione quidem asperiores. Saepe, voluptas?</p>
                <input type="submit" value="See More Food">
            </div>
            <div class="col-lg-6 col-sm-12 col-12 services-right">
                
            </div>
        </div>
    </div>
</section>

<section class="products">
    <div class="container-fluid">
        <h2>Products</h2>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 card-holder">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('images/food1.jpeg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Adobo</h5>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas ex ab ipsam eveniet possimus natus repellendus numquam beatae quod cumque.</p>
                        <p><b>Price: ₱</b>1000.00</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 card-holder">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('images/food1.jpeg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Adobo</h5>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas ex ab ipsam eveniet possimus natus repellendus numquam beatae quod cumque.</p>
                        <p><b>Price: ₱</b>1000.00</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 card-holder">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('images/food1.jpeg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Adobo</h5>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas ex ab ipsam eveniet possimus natus repellendus numquam beatae quod cumque.</p>
                        <p><b>Price: ₱</b>1000.00</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 card-holder">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('images/food1.jpeg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Adobo</h5>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas ex ab ipsam eveniet possimus natus repellendus numquam beatae quod cumque.</p>
                        <p><b>Price: ₱</b>1000.00</p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>  
</section>

<footer>
 <!-- <h3> J4rs</h3>
    <ul>
        <li>
            <a href="#">About</a>
        </li>
        <li>
            <a href="#">Contact</a>
        </li>
        <li>
            <a href="#">Services</a>
        </li>
    </ul> -->
    All Right Reserve 2021
</footer>

@endsection

