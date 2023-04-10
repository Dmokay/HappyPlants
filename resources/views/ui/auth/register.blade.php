@extends('ui.layouts.main')
@section('content')

<!-- registration page -->
<div id="Registration_page" class="Registration-page animate__animated animate__fadeInUp">
         <div class="sp_header bg-white p-3">
            <div class="container custom_container">
               <div class="row ">
                  <div class="col-12 ">
                     <ul>
                        <li class="d-inline-block font-weight-bolder"><a href="index.html">home</a></li>
                        <li class="d-inline-block hr_ font-weight-bolder"><a href="#">Registration</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="container custom_container">
            <h1 class="text-center h1_">Log in to your account </h1>
            <div id="Registration" class="page-content card card-block p-3 p-sm-4  ">
               <form class="needs-validation " method="post" novalidate >
                  <p>Already have an account?<a href="#"> Log in instead!</a></p>
                  <div class="form-group text-left">
                     <label class="font-weight-bolder">Social title</label><br>
                     <span class="form-check">
                     <input class="form-check-input" type="radio" name="gridRadios" id="gender_mr" checked>
                     <label class="form-check-label" for="gender_mr">
                     mr.
                     </label>
                     </span>
                     <span class="form-check">
                     <input class="form-check-input" type="radio" name="gridRadios" id="gender_mrs">
                     <label class="form-check-label" for="gender_mrs">
                     mrs.
                     </label>
                     </span>
                  </div>
                  <div class="d-flex">
                     <div class="form-group col-md-6 pl-0 ">
                        <label for="f_name" class="font-weight-bolder">First name</label>
                        <input type="text" class="form-control" id="f_name"  required>
                        <div class="invalid-feedback">Please Enter your Name.</div>
                     </div>
                     <div class="form-group col-md-6 pr-0 " >
                        <label for="l_name" class="font-weight-bolder">Last name</label>
                        <input type="text" class="form-control" id="l_name"  required>
                        <div class="invalid-feedback">Please Enter your Name.</div>
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="r_email" class="font-weight-bolder">Email address</label>
                     <input type="email" class="form-control" id="r_email"  required>
                     <div class="invalid-feedback">Please Enter your Account Name.</div>
                  </div>
                  <div class="form-group">
                     <label for="r_password" class="font-weight-bolder">Password</label>
                     <input type="password" class="form-control" id="r_password" required>
                     <div class="invalid-feedback">Please Enter your password.</div>
                  </div>
                  <div class="form-group">
                     <label for="r_date" class="font-weight-bolder">birth date</label>
                     <input type="date" id="r_date" class="form-control"    required>
                     <div class="invalid-feedback">Please Enter your birthdate.</div>
                  </div>
                  <div class="form-group form-check">
                     <input type="checkbox" class="form-check-input"  >
                     <label class="form-check-label" >Sign up for our newsletter</label>
                  </div>
                  <div class="form-group form-check">
                     <input type="checkbox" class="form-check-input"  >
                     <label class="form-check-label" >I agree to the terms and conditions and the privacy policy</label>
                  </div>
                  <div><button id="clearButton" type="reset" class="btn btn-primary rese float-left mt-3">reset</button><input type="submit" name="submit" class="btn btn-primary mt-3 float-right" value="Save"></div>
               </form>
            </div>
         </div>
      </div>
      <!-- login_page -->
      <!-- registration page -->

@endsection