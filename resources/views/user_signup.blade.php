@extends('index')
@section('user_signup')
 <!-- ##### Breadcumb Area Start ##### -->
 <div class="breadcumb_area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2>Welcome To Our Family</h2>
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
                            <h5>Create an account</h5>
                            <p>Let's explore our world</p>
                        </div>

                        <form action="{{route('save_user')}}" method="post">
                            @csrf
                            <div class="row">
                            <div class="col-12 mb-3">
                                    <label for="name">Name <span>*</span></label>
                                    <input type="text" class="form-control" name="name" value="">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="email">Email<span>*</span></label>
                                    <input type="email" class="form-control" name="email" value="" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="phoneno">Contact Number<span>*</span></label>
                                    <input type="text" class="form-control" name="phno" value="" required>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="username">UserName<span>*</span></label>
                                    <input type="text" class="form-control" name="username" value="" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="password">Password <span>*</span></label>
                                    <input type="password" class="form-control"  value="" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="password">Confirm Password <span>*</span></label>
                                    <input type="password" class="form-control" name="password" value="" required>
                                </div>
                                </div>
                                <div>Already have an account<a href="{{route('login')}}" class="btn btn-link">Login now</a></div>
                                <div><input type="submit"class="btn essence-btn" valu="Signup"></div> 
                               
                           
                        </form>
                    </div>
                </div>
</div>
</div>
</div>
                        @endsection