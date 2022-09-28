@extends('index')
@section('login')
 <!-- ##### Breadcumb Area Start ##### -->
 <div class="breadcumb_area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2>Login Now</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Checkout Area Start ##### -->
    <div class="checkout_area section-padding-80">
        <div class="container">

            <div class="row">

                <div class="col-12 col-md-6">
                    <div class="checkout_details_area mt-50 clearfix">

                    <div class="cart-page-heading">
                            <h5>Login Now</h5>
                            <p>Let's explore our world</p>
                        </div>

                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="first_name">UserName<span>*</span></label>
                                    <input type="text" class="form-control" name="username" value="" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="last_name">Password <span>*</span></label>
                                    <input type="password" class="form-control" name="password" value="" required>
                                </div>
                                </div>
                                <div>New in this site?<a href="{{route('user_signup')}}" class="btn btn-link">Signup</a></div>
                                <div><a href="#" class="btn essence-btn">Login</a></div> 
                               
                           
                        </form>
                    </div>
                </div>
</div>
</div>
</div>
                        @endsection