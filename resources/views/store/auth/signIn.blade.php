@extends('store.storeHome.master')

@section('content')

<div class="modal fade" id="msgModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Message</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p id="modal-content"></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
         </div>
      </div>
    </div>
  </div>

    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Login / Register</h1>
                    
                </div>
            </div>
        </div>
    </section>
    <section class="login_box_area section_gap">
        <div class="container">

            <div class="errorCreate">
                <p class="errorPara"></p>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="login_form_inner">
                        <h3>Create Account</h3>
                        <form class="row login_form" method="post" id="CreateForm" novalidate="novalidate">
                            @csrf
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="name" name="username" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="name" name="fname" placeholder="First Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="name" name="lname" placeholder="Last Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="tel" pattern="((\+92)|(0092))-{0,1}\d{3}-{0,1}\d{7}$|^\d{11}$|^\d{4}-\d{7}$" class="form-control" id="pnum" name="pnum" placeholder="Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirm Password'">
                            </div>
                            <div class="col-md-12 form-group">
                                <button type="submit" id="create" value="submit" class="primary-btn">Sign Up</button>
                                
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 my-auto">
                    <div class="login_form_inner">
                        <h3>Log in to enter</h3>
                        <form class="row login_form" action="{{route('UserLogin')}}" method="post" id="contactForm" novalidate="novalidate">
                            @csrf
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="name" name="username" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="password" class="form-control" id="name" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="creat_account">
                                    <input type="checkbox" id="f-option2" name="remember">
                                    <label for="f-option2">Keep me logged in</label>
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <button type="submit" id="logIn" value="submit" class="primary-btn">Log In</button>
                                <a href="#">Forgot Password?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="{{asset('karma/ajax/signUp.ajax.js')}}"></script>
@endsection