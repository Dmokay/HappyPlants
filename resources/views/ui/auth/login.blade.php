@extends('ui.layouts.main')
@section('content')

<!-- login page -->
<div id="login_page" class="login-page animate__animated animate__fadeInUp">
         <div class="sp_header bg-white p-3 ">
            <div class="container custom_container">
               <div class="row ">
                  <div class="col-12 ">
                     <ul>
                        <li class="d-inline-block font-weight-bolder"><a href="index.html">home</a></li>
                        <li class="d-inline-block hr_ font-weight-bolder"><a href="#">login</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="container custom_container ">
            <h3 class="text-center">Log in to your account </h3>
            <div id="login" class="page-content card card-block p-3 p-sm-4 ">
               <form class="needs-validation " method="post" novalidate >
                  <div class="form-group">
                     <label for="user_email" class="font-weight-bolder">Email address</label>
                     <input type="email" class="form-control" id="user_email" aria-describedby="emailHelp" required>
                     <div class="invalid-feedback">Please Enter your Account Name.</div>
                     <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>
                  <div class="form-group font-weight-bolder" >
                     <label for="user_password" class="font-weight-bolder">Password</label>
                     <input type="password" class="form-control" id="user_password" required>
                     <div class="invalid-feedback">Please enter your password.</div>
                  </div>
                  <div class="form-group form-check">
                     <input type="checkbox" class="form-check-input" id="user_check" >
                     <label class="form-check-label" for="user_check">Check me out</label>
                  </div>
                  <input type="submit" name="submit" class="btn btn-primary mb-3" value="submit">
                  <div class="pass_acc border-top pt-3">
                     <span class="forgot_password font-weight-bolder"><a href="forgot.html">Forgot your password? </a></span>
                     <span class="no_account float-right font-weight-bolder"><a href="registration.html">No account? Create one here</a></span>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <!-- login_page -->
      <!-- login page -->

@endsection