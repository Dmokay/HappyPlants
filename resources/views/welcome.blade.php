@extends('ui.layouts.main')
@section('content')
   <body>
      <!-- cart-model -->
      <div class="modal fade" id="cart_model" tabindex="-1"  aria-hidden="true">
         <div class="modal-dialog ">
            <div class="modal-content">
               <div class="modal-header">
                  <div class="modal-title f_13 font-weight-bolder">Product successfully added to your shopping cart</div>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="row">
                     <div class="col-sm-4 col-xs-12 mb-3  ">
                        <img src="assets/img/product/product_13.jpg" class="fst-image mx-auto d-block img-fluid border rounded" alt="product_13">
                     </div>
                     <div class="col-sm-8 col-xs-12 ">
                        <h6 class="font-weight-bolder">Hummingbird printed t-shirt</h6>
                        <div class="font-weight-bolder pb-1">$19.12</div>
                        <span class="font-weight-bolder f_13 pb-1">Size: S</span><br>
                        <span class="font-weight-bolder f_13 pb-1">Color: White</span><br>
                        <span class="font-weight-bolder f_13 pb-1">Qty: 2</span>
                     </div>
                  </div>
                  <div class="row">
                     <div class=" col-12 ">
                        <div class="border rounded final_payment">
                           <div class="card-body  border-bottom">
                              <p class="text-muted">5 items</p>
                              <p class="font-weight-bolderer">show details</p>
                              <div>
                                 <span class="font-weight-bolder">subtotal</span>
                                 <span class="float-right font-weight-bolder">$94.00</span>
                              </div>
                              <div>
                                 <span class="font-weight-bolder">shipping</span>
                                 <span class="float-right font-weight-bolder">$9.00</span>
                              </div>
                           </div>
                           <div class="card-body ">
                              <div>
                                 <span class="font-weight-bolder">total(tax excl.)</span>
                                 <span class="float-right font-weight-bolder">$94.00</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="modal-footer">
                  <a class="btn btn-primary mt-2 f_13 px-3 py-2 rounded" data-dismiss="modal">close</a>
                  <a href="checkout.html" class="btn btn-primary mt-2 f_13 px-3 py-2 rounded">continue</a>
               </div>
            </div>
         </div>
      </div>
      <!-- cart_model -->
      <!-- eye-model -->
      <div class="modal fade" id="eye_model" tabindex="-1"  aria-hidden="true">
         <div class="modal-dialog modal-lg  modal-dialog-centered">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="row">
                     <div class="col-sm-5 col-12">
                        <img src="assets/img/product/product_13.jpg" class="fst-image mx-auto d-block img-fluid border rounded" alt="product_13">
                     </div>
                     <div class="col-sm-7 col-12">
                        <h5 class="border-bottom me_name">Aliquam Top Erat Volutpat</h5>
                        <div class="font-weight-bolder border-bottom me_price">$19.12</div>
                        <div class="my-2 border-bottom me_des">Fashion has been creating well-designed collections since 2010. </div>
                        <div class="me_quan">
                           <div class="sp_counter ">
                              <div class="input-group">
                                 <span class="input-group-btn">
                                 <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]"><span class="minus">-</span></button>
                                 </span>
                                 <input type="number" name="quant[1]" class="form-control input-number" value="1" min="1" max="10">
                                 <span class="input-group-btn">
                                 <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]"><span class="plus">+</span></button>
                                 </span>
                              </div>
                           </div>
                           <span>
                           <a href="cart.html" class="btn btn-primary primary mt-3">add to cart</a>
                           </span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- eye_model -->
      <!-- compare-model -->
      <div class="modal fade" id="compare_model" tabindex="-1"  aria-hidden="true">
         <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body text-center">
                  <p class="checked"></p>
                  <h5>Compare list updated!</h5>
                  <p class="text-muted font-weight-bolder">Product successfully removed from the product comparison!</p>
                  <div class="text-danger font-weight-bolder"><a href="compare.html">Go to Compare</a></div>
               </div>
            </div>
         </div>
      </div>
      <!-- compare_model -->
      <!-- heart-model -->
      <div class="modal fade" id="heart_model" tabindex="-1"  aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content ">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body text-center">
                  <p class="checked"></p>
                  <p class="text-muted font-weight-bolder">You must be logged in to manage your wishlist.</p>
                  <div class="text-danger font-weight-bolder"><a href="wishlist.html">Go to wishlist</a></div>
               </div>
            </div>
         </div>
      </div>
      <!-- heart_model -->
      <!-- shipping -->
      <div class="modal fade" id="shippingModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg  modal-dialog-centered">
            <div class="modal-content ">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <ul>
                     <li>Fashion has been creating well-designed collections since 2010. </li>
                     <li>The brand offers feminine designs delivering stylish separates and statement dresses which have since evolved into a full ready-to-wear collection in which every item is a vital part of a woman's wardrobe. </li>
                     <li>The result? Cool, easy, chic looks with youthful elegance and unmistakable signature style. </li>
                     <li>All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion extends to a range of accessories including shoes, hats, belts and more!</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <!-- shipping -->
      <!-- ask about product -->
      <div class="modal fade" id="question_Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title " id="exampleModalLabel">shipping</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body que_form">
                  <h6>have a any question?</h6>
                  <form>
                     <div>
                        <div class="col-12 sp_form pl-0 pb-3">
                           <textarea class="form-control"  rows="3" placeholder="Enter Your Message"></textarea>
                        </div>
                        <div class="col-12 sp_form pl-0 pb-3">
                           <input type="text" class="form-control" placeholder="Enter Your Name">
                        </div>
                        <div class="col-12 sp_form pl-0 pb-3">
                           <input type="email" class="form-control" placeholder="Enter Your Mail">
                        </div>
                        <div class="col-12 sp_form pl-0 pb-3 ">
                           <input type="tel" pattern=".{10}" class="form-control" id="other_number" oninput="check(this)" required placeholder="Enter Your Phone">
                        </div>
                        <div class="col-12 sp_form pl-0 pb-3">
                           <button type="submit" class="btn btn-primary">submit review</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- ask about product -->
      <!-- add to wishlist -->
      <div class="modal fade" id="wish_Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
               <div class="modal-body">
                  Please login and you will add product to your wishlist
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Sign In</button>
                  <button type="submit" class="btn btn-primary">Register</button>
               </div>
            </div>
         </div>
      </div>
      <!-- add to wishlist -->
      <div class="preloader"></div>
      
      <!-- vertical menu and slider -->
      <div id="home_vertical_menu" class="menu_slider ">
         <div class="row ">
            
            <!-- col-md-3 vertical_menu -->
            <div class="col-lg-12 col-md-12 main_slider">
               <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img src="{{asset('assets/img/s1.jpg')}}" class="d-block w-100 img-fluid" alt="s1">
                  <div class="carousel-caption container silder_text">
                     <p class="arrival">New Arrival 2020</p>
                     <h5 class="headding">New Perfect Plant <br>Collection</h5>
                     <a type="btn" class="shop-now">Shop Now</a>
                  </div>
               </div>
               <div class="carousel-item">
                  <img src="{{asset('assets/img/s2.jpg')}}" class="d-block w-100 img-fluid" alt="s2">
                  <div class="carousel-caption container silder_text">
                     <p>New Arrival 2020</p>
                     <h5 class="headding">Spring Houseplant<br> The Perfect Choice! </h5>
                     <a type="btn" class="shop-now">Shop Now</a>
                  </div>
               </div>
               <div class="carousel-item">
                  <img src="{{asset('assets/img/s3.jpg')}}" class="d-block w-100 img-fluid" alt="s3">
                  <div class="carousel-caption container silder_text">
                     <p>New Arrival 2020</p>
                     <h5 class="headding">Plants Gonna Make<br> People Happy.</h5>
                     <a type="btn" class="shop-now">Shop Now</a>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"></a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"></a>
         </div>
            </div>
            <!-- col-md-9 main_slider -->
         </div>
         <!-- row -->
      </div>
      <!-- container mt-4 -->
      <!-- vertical menu and slider end -->
      
      <!-- services -->
      <div class="container ">
         <div class="main_services">
            <div class="row">
               <div class="col-md-3 col-sm-6 col-12 m_service ">
                  <ul class="bg-white service service-1 rounded text-center  animate__animated animate__fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s">
                     <li class="ser-svg d-lg-inline-block d-md-block  align-middle">
                        <span class="icon-image"></span>
                     </li>
                     <li class="ser-t d-lg-inline-block d-md-block  align-middle text-left">
                        <h6>24/7 free support</h6>
                        <p class="mb-0 text-muted">Online Support 24/7</p>
                     </li>
                  </ul>
               </div>
               <div class="col-md-3 col-sm-6 col-12 m_service">
                  <ul class="bg-white service service-2 rounded text-center  animate__animated animate__fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                     <li class="ser-svg d-lg-inline-block d-md-block align-middle">
                        <span class="icon-image"></span>
                     </li>
                     <li class="ser-t d-lg-inline-block d-md-block align-middle text-left">
                        <h6>secure payment</h6>
                        <p class="mb-0 text-muted">100% Secure Payment</p>
                     </li>
                  </ul>
               </div>
               <div class="col-md-3 col-sm-6 col-12 m_service">
                  <ul class="bg-white service service-3 rounded text-center  animate__animated animate__fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                     <li class="ser-svg d-lg-inline-block d-md-block align-middle">
                        <span class="icon-image"></span>
                     </li>
                     <li class="ser-t d-lg-inline-block d-md-block align-middle  text-left">
                        <h6>special gift cards</h6>
                        <p class="mb-0 text-muted">Give The Perfect Gift</p>
                     </li>
                  </ul>
               </div>
               <div class="col-md-3 col-sm-6 col-12 m_service">
                  <ul class="bg-white service service-4 rounded text-center  animate__animated animate__fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
                     <li class="ser-svg d-lg-inline-block d-md-block align-middle">
                        <span class="icon-image"></span>
                     </li>
                     <li class="ser-t d-lg-inline-block d-md-block align-middle  text-left">
                        <h6>world wide shipping</h6>
                        <p class="mb-0 text-muted">On Order Over $99</p>
                     </li>
                  </ul>
               </div>
            </div>
            <!-- row -->
         </div>
         <!-- main_services -->
      </div>
      <!-- container  -->
      <!-- services end -->
     
      <div class="main_top_pro_tab">
         <div class="container ">
         <div class="row title">
               <div class="col-12">
                  <div class="title4 text-center">
                  
                     <h2 class="font-weight-bold">Interior Design Categories</h2>
                     <div class="title_line"><span></span></div>
                  </div>
               </div>
            </div>
            <!-- <div class="row">
               <div class="col-12 d-flex justify-content-center">
                  <ul class="nav nav-tabs mb-4"  role="tablist">
                     <li class="nav-item" >
                        <a class="nav-link active" id="featured_tab" role="tab" data-toggle="tab" href="#featured_"  aria-selected="true">Featured</a>
                     </li>
                     <li class="nav-item" >
                        <a class="nav-link" id="latest_tab" role="tab" data-toggle="tab" href="#latest_"  aria-selected="true">Latest</a>
                     </li>
                     <li class="nav-item" >
                        <a class="nav-link" id="bags_tab" data-toggle="tab" role="tab" href="#bags" aria-selected="false">bestseller</a>
                     </li>
                  </ul>
               </div>
              
            </div> -->
         </div>
      </div>
      </div>
      <!-- Sm banners start -->
      <div class="main_banner_tx">
         <div class="container  ">
            <div class="row">
               <div class="col-lg-6 col-12">
                  <div class="img-1">
                     <a href="category.html">
                        <img src="{{asset('assets/img/sm-sec-1.png')}}" alt="sm-sec-1" class="w-100 img-fluid">
                     <div class="box-1">
                        <h3 class="">Ceiling Designs (06)</h3>
                     </div>
                     </a>
                  </div>
                  <div class="row">
                     <div class="col-12 mt-4 img-1">
                        <a href="category.html">
                           <img src="{{asset('assets/img/sm-sec-2.png')}}" alt="sm-sec-2" class="w-100 img-fluid">
                           <div class="box-1">
                              <h3 class="">Wall Designs (08)</h3>
                           </div>
                          </a> 
                     </div>
                  </div>
               </div>
               <div class="col-6">
                  <div class="row">
                     <div class="col-6 img-1 d-none d-lg-block">
                         <a href="category.html">
                           <img src="{{asset('assets/img/sm-sec-3.png')}}" alt="sm-sec-3" class="w-100 img-fluid">
                           <div class="box-1">
                              <h3 style="color: #6ea820;">Floor Designs (12)</h3>
                           </div>
                        </a>
                     </div>
                     <div class="col-6 img-1 d-none d-lg-block">
                        <a href="category.html">
                        <img src="{{asset('assets/img/sm-sec-4.png')}}" alt="sm-sec-4" class="w-100 img-fluid">
                        <div class="box-1">
                           <h3>Kitchen Designs (04)</h3>
                        </div>
                     </a>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-12 mt-4 img-1 d-none d-lg-block">
                        <a href="category.html">
                        <img src="{{asset('assets/img/sm-sec-5.png')}}" alt="sm-sec-5" class="w-100 img-fluid">
                        <div class="box-1">
                           <h3 class="">Landscape  Designs (10)</h3>
                        </div>
                     </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Sm banners start -->    
      <!-- top product -->
      <div class="Lastest-Products">
         <div class="container   animate__animated animate__fadeInUp">
            <div class="row">
               <div class="col-12">
               <div class="row title">
               <div class="col-12">
                  <div class="title3 text-center">
                     <h2 class="font-weight-bold">Design Shop</h2>
                     <div class="title_line"></div>
                  </div>
               </div>
            </div>
                  <!-- title_outer -->
               </div>
               <!-- col-12 -->
            </div>
            <!-- row -->
            <div class="row">
               <div id="lastest_carousel" class="owl-carousel owl-theme pro_thumb">
                  <div class="item">
                     <div class="col-12">
                        <div class="product_thumb bg-white rounded">  
                           <div class="pro_image">
                              <a href="single-product.html"><img src="{{asset('assets/img/product/product_1.jpg')}}" class="fst-image mx-auto d-block img-fluid" alt="product_1"></a>
                              <a href="single-product.html"><img src="{{asset('assets/img/product/product_6.jpg')}}" class="second-img mx-auto d-block img-fluid" alt="product_6"></a>
                           </div>
                           <div class="text-center">
                              <div class="button-group">
                                 <a href="#"  class="symbol pro_heart" data-toggle="modal" data-target="#heart_model"></a>
                                 <a href="#" class="symbol pro_eye"  data-toggle="modal" data-target="#eye_model"></a>
                                 <a href="#" class="symbol pro_compare" data-toggle="modal" data-target="#compare_model "></a>   
                              </div>
                              <div class="main_text">
                                 <h2 class="text-center pro-heading my-2"><a href="single-product.html" class="font-weight-bolderer">Ugaoo Indoor Plants With Pot For Home</a></h2>
                                 <div class="star">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                 </div>
                                 <span class="text-center prices"><span class="font-weight-bolderer price">$69.00 </span> <del class="text-muted">$100.00</del></span>
                                 <a href="#" class="symbol add_to_cart" data-toggle="modal" data-target="#cart_model">
                                 + ADD TO CART
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- item -->
                  <div class="item">
                     <div class="col-12">
                        <div class="product_thumb bg-white rounded"> 
                           <div class="pro_image">
                              <a href="single-product.html"><img src="{{asset('assets/img/product/product_16.jpg')}}" class="fst-image mx-auto d-block img-fluid" alt="product_16"></a>
                              <a href="single-product.html"><img src="{{asset('assets/img/product/product_1.jpg')}}" class="second-img mx-auto d-block img-fluid" alt="product_1"></a>
                           </div>
                           <div class="text-center">
                              <div class="button-group">
                                 <a href="#"  class="symbol pro_heart" data-toggle="modal" data-target="#heart_model"></a>
                                 <a href="#" class="symbol pro_eye"  data-toggle="modal" data-target="#eye_model"></a>
                                 <a href="#" class="symbol pro_compare" data-toggle="modal" data-target="#compare_model "></a>   
                              </div>
                              <div class="main_text">
                                 <h2 class="text-center pro-heading my-2"><a href="single-product.html" class="font-weight-bolderer">Ugaoo Good Luck Jade Plant with Self Watering Pot</a></h2>
                                 <div class="star">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                 </div>
                                 <span class="text-center prices"><span class="font-weight-bolderer price">$69.00 </span> <del class="text-muted">$100.00</del></span>
                                 <a href="#" class="symbol add_to_cart" data-toggle="modal" data-target="#cart_model">
                                 + ADD TO CART
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- item -->
                  <div class="item">
                     <div class="col-12">
                        <div class="product_thumb bg-white rounded">   
                           <div class="pro_image">
                              <a href="single-product.html"><img src="{{asset('assets/img/product/product_17.jpg')}}" class="fst-image mx-auto d-block img-fluid" alt="product_17"></a>
                              <a href="single-product.html"><img src="{{asset('assets/img/product/product_18.jpg')}}" class="second-img mx-auto d-block img-fluid" alt="product_18"></a>
                           </div>
                           <div class="text-center">
                              <div class="button-group">
                                 <a href="#"  class="symbol pro_heart" data-toggle="modal" data-target="#heart_model"></a>
                                 <a href="#" class="symbol pro_eye"  data-toggle="modal" data-target="#eye_model"></a>
                                 <a href="#" class="symbol pro_compare" data-toggle="modal" data-target="#compare_model "></a>   
                              </div>
                              <div class="main_text">
                                 <h2 class="text-center pro-heading my-2"><a href="single-product.html" class="font-weight-bolderer">Ayansh Plants Lily Plant  (Hybrid, Pack of 2)</a></h2>
                                 <div class="star">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                 </div>
                                 <span class="text-center prices"><span class="font-weight-bolderer price">$69.00 </span> <del class="text-muted">$100.00</del></span>
                                 <a href="#" class="symbol add_to_cart" data-toggle="modal" data-target="#cart_model">
                                 + ADD TO CART
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- item -->
                  <div class="item">
                     <div class="col-12">
                        <div class="product_thumb bg-white rounded">
                           <div class="pro_image">
                              <a href="single-product.html"><img src="{{asset('assets/img/product/product_19.jpg')}}" class="fst-image mx-auto d-block img-fluid" alt="product_19"></a>
                              <a href="single-product.html"><img src="{{asset('assets/img/product/product_20.jpg')}}" class="second-img mx-auto d-block img-fluid" alt="product_20"></a>
                           </div>
                           <div class="text-center">
                              <div class="button-group">
                                 <a href="#"  class="symbol pro_heart" data-toggle="modal" data-target="#heart_model"></a>
                                 <a href="#" class="symbol pro_eye"  data-toggle="modal" data-target="#eye_model"></a>
                                 <a href="#" class="symbol pro_compare" data-toggle="modal" data-target="#compare_model "></a>   
                              </div>
                              <div class="main_text">
                                 <h2 class="text-center pro-heading my-2"><a href="single-product.html" class="font-weight-bolderer">get some deals Heart Leaf Oxycardium Plant</a></h2>
                                 <div class="star">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                 </div>
                                 <span class="text-center prices"><span class="font-weight-bolderer price">$69.00 </span> <del class="text-muted">$100.00</del></span>
                                 <a href="#" class="symbol add_to_cart" data-toggle="modal" data-target="#cart_model">
                                 + ADD TO CART
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- item -->
                  <div class="item">
                     <div class="col-12">
                        <div class="product_thumb bg-white rounded"> 
                           <div class="pro_image">
                              <a href="single-product.html"><img src="{{asset('assets/img/product/product_21.jpg')}}" class="fst-image mx-auto d-block img-fluid" alt="product_21"></a>
                              <a href="single-product.html"><img src="{{asset('assets/img/product/product_22.jpg')}}" class="second-img mx-auto d-block img-fluid" alt="product_22"></a>
                           </div>
                           <div class="text-center">
                              <div class="button-group">
                                 <a href="#"  class="symbol pro_heart" data-toggle="modal" data-target="#heart_model"></a>
                                 <a href="#" class="symbol pro_eye"  data-toggle="modal" data-target="#eye_model"></a>
                                 <a href="#" class="symbol pro_compare" data-toggle="modal" data-target="#compare_model "></a>   
                              </div>
                              <div class="main_text">
                                 <h2 class="text-center pro-heading my-2"><a href="single-product.html" class="font-weight-bolderer">GreenBourne Areca Plam  (Hybrid, Pack of 1)</a></h2>
                                 <div class="star">
                                    <i class="fa fa-star" aria-hiddeAnahn="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                 </div>
                                 <span class="text-center prices"><span class="font-weight-bolderer price">$69.00 </span> <del class="text-muted">$100.00</del></span>
                                 <a href="#" class="symbol add_to_cart" data-toggle="modal" data-target="#cart_model">
                                 + ADD TO CART
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- item --> 
                  <div class="item">
                     <div class="col-12">
                        <div class="product_thumb bg-white rounded">  
                           <div class="pro_image">
                              <a href="single-product.html"><img src="{{asset('assets/img/product/product_23.jpg')}}" class="fst-image mx-auto d-block img-fluid" alt="product_23"></a>
                              <a href="single-product.html"><img src="{{asset('assets/img/product/product_24.jpg')}}" class="second-img mx-auto d-block img-fluid" alt="product_24"></a>
                           </div>
                           <div class="text-center">
                              <div class="button-group">
                                 <a href="#"  class="symbol pro_heart" data-toggle="modal" data-target="#heart_model"></a>
                                 <a href="#" class="symbol pro_eye"  data-toggle="modal" data-target="#eye_model"></a>
                                 <a href="#" class="symbol pro_compare" data-toggle="modal" data-target="#compare_model "></a>   
                              </div>
                              <div class="main_text">
                                 <h2 class="text-center pro-heading my-2"><a href="single-product.html" class="font-weight-bolderer">Platycladus/Morpankhi Plant</a></h2>
                                 <div class="star">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                 </div>
                                 <span class="text-center prices"><span class="font-weight-bolderer price">$69.00 </span> <del class="text-muted">$100.00</del></span>
                                 <a href="#" class="symbol add_to_cart" data-toggle="modal" data-target="#cart_model">
                                 + ADD TO CART
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- item --> 
                  <div class="item">
                     <div class="col-12">
                        <div class="product_thumb bg-white rounded">  
                           <div class="pro_image">
                              <a href="single-product.html"><img src="{{asset('assets/img/product/product_25.jpg')}}" class="fst-image mx-auto d-block img-fluid" alt="product_25"></a>
                              <a href="single-product.html"><img src="{{asset('assets/img/product/product_26.jpg')}}" class="second-img mx-auto d-block img-fluid" alt="product_26"></a>
                           </div>
                           <div class="text-center">
                              <div class="button-group">
                                 <a href="#"  class="symbol pro_heart" data-toggle="modal" data-target="#heart_model"></a>
                                 <a href="#" class="symbol pro_eye"  data-toggle="modal" data-target="#eye_model"></a>
                                 <a href="#" class="symbol pro_compare" data-toggle="modal" data-target="#compare_model "></a>   
                              </div>
                              <div class="main_text">
                                 <h2 class="text-center pro-heading my-2"><a href="single-product.html" class="font-weight-bolderer">NurseryNature Asparagus live</a></h2>
                                 <div class="star">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                 </div>
                                 <span class="text-center prices"><span class="font-weight-bolderer price">$69.00 </span> <del class="text-muted">$100.00</del></span>
                                 <a href="#" class="symbol add_to_cart" data-toggle="modal" data-target="#cart_model">
                                 + ADD TO CART
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- item --> 
                  <div class="item">
                     <div class="col-12">
                        <div class="product_thumb bg-white rounded">  
                           <div class="pro_image">
                              <a href="single-product.html"><img src="{{asset('assets/img/product/product_27.jpg')}}" class="fst-image mx-auto d-block img-fluid" alt="product_27"></a>
                              <a href="single-product.html"><img src="{{asset('assets/img/product/product_28.jpg')}}" class="second-img mx-auto d-block img-fluid" alt="product_28"></a>
                           </div>
                           <div class="text-center">
                              <div class="button-group">
                                 <a href="#"  class="symbol pro_heart" data-toggle="modal" data-target="#heart_model"></a>
                                 <a href="#" class="symbol pro_eye"  data-toggle="modal" data-target="#eye_model"></a>
                                 <a href="#" class="symbol pro_compare" data-toggle="modal" data-target="#compare_model "></a>   
                              </div>
                              <div class="main_text">
                                 <h2 class="text-center pro-heading my-2"><a href="single-product.html" class="font-weight-bolderer">plant center Variegated Saplera</a></h2>
                                 <div class="star">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                 </div>
                                 <span class="text-center prices"><span class="font-weight-bolderer price">$69.00 </span> <del class="text-muted">$100.00</del></span>
                                 <a href="#" class="symbol add_to_cart" data-toggle="modal" data-target="#cart_model">
                                 + ADD TO CART
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- item --> 
                  <div class="item">
                     <div class="col-12">
                        <div class="product_thumb bg-white rounded"> 
                           <div class="pro_image">
                              <a href="single-product.html"><img src="{{asset('assets/img/product/product_29.jpg')}}" class="fst-image mx-auto d-block img-fluid" alt="product_29"></a>
                              <a href="single-product.html"><img src="{{asset('assets/img/product/product_30.jpg')}}" class="second-img mx-auto d-block img-fluid" alt="product_30"></a>
                           </div>
                           <div class="text-center">
                              <div class="button-group">
                                 <a href="#"  class="symbol pro_heart" data-toggle="modal" data-target="#heart_model"></a>
                                 <a href="#" class="symbol pro_eye"  data-toggle="modal" data-target="#eye_model"></a>
                                 <a href="#" class="symbol pro_compare" data-toggle="modal" data-target="#compare_model "></a>   
                              </div>
                              <div class="main_text">
                                 <h2 class="text-center pro-heading my-2"><a href="single-product.html" class="font-weight-bolderer">GreenBourne Coleus Plant  (Hybrid, Pack of 1)</a></h2>
                                 <div class="star">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                 </div>
                                 <span class="text-center prices"><span class="font-weight-bolderer price">$69.00 </span> <del class="text-muted">$100.00</del></span>
                                 <a href="#" class="symbol add_to_cart" data-toggle="modal" data-target="#cart_model">
                                 + ADD TO CART
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- item --> 
                  <div class="item">
                     <div class="col-12">
                        <div class="product_thumb bg-white rounded">  
                           <div class="pro_image">
                              <a href="single-product.html"><img src="{{asset('assets/img/product/product_3.jpg')}}" class="fst-image mx-auto d-block img-fluid" alt="product_3"></a>
                              <a href="single-product.html"><img src="{{asset('assets/img/product/product_2.jpg')}}" class="second-img mx-auto d-block img-fluid" alt="product_2"></a>
                           </div>
                           <div class="text-center">
                              <div class="button-group">
                                 <a href="#"  class="symbol pro_heart" data-toggle="modal" data-target="#heart_model"></a>
                                 <a href="#" class="symbol pro_eye"  data-toggle="modal" data-target="#eye_model"></a>
                                 <a href="#" class="symbol pro_compare" data-toggle="modal" data-target="#compare_model "></a>   
                              </div>
                              <div class="main_text">
                                 <h2 class="text-center pro-heading my-2"><a href="single-product.html" class="font-weight-bolderer">MorningVale Croton Mammy pot</a></h2>
                                 <div class="star">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                 </div>
                                 <span class="text-center prices"><span class="font-weight-bolderer price">$69.00 </span> <del class="text-muted">$100.00</del></span>
                                 <a href="#" class="symbol add_to_cart" data-toggle="modal" data-target="#cart_model">
                                 + ADD TO CART
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- item --> 
               </div>
               <!-- owl-carousel-1 -->
            </div>
            <div class="text-center">
               <button type="btn" type="submit" class="products-btn"><a href="shop-left-sidebar.html">All Products</a></button>
            </div>
         </div>
      </div>

      <!-- Video Sec Start -->
      <div class="video_bg">
         <h3 class="perfect-choice">
            Give your home a treat of a kind
         </h3>
         
      </div>
      <!-- Video Sec End -->

       <!-- banner -->
       <div class="container ">
         <div class="row">
            <div class="col-12 col-lg-5 col-md-6">  
               <div class="banner">
                  <a href="#">
                  <img src="{{asset('assets/img/sm1.png')}}" class="rounded img-fluid  animate__animated animate__fadeInUp " data-wow-duration="0.8s" data-wow-delay="0.4s" alt="sm1">
                  </a>
               </div>
            </div>
            <div class="col-12  col-lg-3 col-md-6 img-center d-none d-lg-block Layer3">
               <div class="banner">
                  <a href="#">
                  <img src="{{asset('assets/img/Layer3.png')}}" class="rounded float-left img-fluid  animate__animated animate__fadeInUp " data-wow-duration="0.8s" data-wow-delay="0.4s" alt="Layer3">
                  </a>
               </div>
            </div>
            <div class="col-12 col-lg-4 collection col-md-6">
               <div class="banner_text">
                  <p class="sec-1">New Collection 2021</p>
                  <h1 class="sec-2">House Shape Plant </h1>
                  <p class="sec-3">Casual multifunctional sofabeds head elevation comfortable sofa at daytime ttransforms into changes to a very comfortable bed at night.
                  </p>
                  <a class="shop-btn-1">Shop Now <i class="fas fa-arrow-right"></i></a>
               </div>
            </div>
         </div>
      </div>
      <!-- top product end -->
      <!---------------------------------------------------------- testimonials ------------------------------------------------------->
      <!-- <div class="testimonial">
         <div class="container ">
            <div class="title_outer">
               <h5 class="font-weight-bolderer d-inline-block"> Testimonials </h5>
            </div>
            <div id="testimonial_carousel" class="owl-carousel owl-theme pro_thumb row">
               <div class="item">
                  <div class="col-12">
                     <div class="mr-jhon">
                        <p class="">
                           Sed elit quam the iaculis sed semper or sit amet the udin vitae nibh at magna akal semper Fusce commodo molestie elit quam, iaculis sum sempervitae nibh at magna semperusce commodo ltieelit semper quam molestie iaculis...
                        </p>
                     </div>
                     <div class="designer">
                        <div class="">
                           <img src="assets/img/Testi-1.png" alt="Testi-1" class="jhon-img img-fluid">
                        </div>
                        <div class="name">
                           <h5 class="">mr.John doe</h5>
                           <span>Designer</span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="col-12">
                     <div class="mr-jhon">
                        <p class="">
                           Sed elit quam the iaculis sed semper or sit amet the udin vitae nibh at magna akal semper Fusce commodo molestie elit quam, iaculis sum sempervitae nibh at magna semperusce commodo ltieelit semper quam molestie iaculis...
                        </p>
                     </div>
                     <div class="designer">
                        <div class="">
                           <img src="assets/img/Testi-2.png" alt="Testi-2" class="jhon-img img-fluid">
                        </div>
                        <div class="name">
                           <h5 class="">mr.John doerrrr</h5>
                           <span>Designer</span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="col-12">
                     <div class="mr-jhon">
                        <p class="">
                           Sed elit quam the iaculis sed semper or sit amet the udin vitae nibh at magna akal semper Fusce commodo molestie elit quam, iaculis sum sempervitae nibh at magna semperusce commodo ltieelit semper quam molestie iaculis...
                        </p>
                     </div>
                     <div class="designer">
                        <div class="">
                           <img src="assets/img/Testi-3.png" alt="Testi-3" class="jhon-img img-fluid">
                        </div>
                        <div class="name">
                           <h5 class="">mr.John doehhhh</h5>
                           <span>Designer</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div> -->
      <!---------------------------------------------------------- testimonials ---------------------------------------------------------->
      <!-- Video Sec Start -->
      <div class="video_bg">
         <h3 class="perfect-choice">
            The Perfect Choice Of Any Plant
         </h3>
         <div class="video text-center">
            <a data-fancybox="gallery" href="https://www.youtube.com/watch?v=BaKwRXMoL1Q"><img src="{{asset('assets/img/playvideo.png')}}"></a>
            <p>Play Video</p>
         </div>
      </div>
      <!-- Video Sec End -->   
      <!-- blog -->
      <div class="main-blog">
         <div class="container   animate__animated animate__fadeInUp">
            <div class="row">
               <div class="col-12  col-lg-5">
                  <div class="banner">
                     <a href="#">
                     <img src="{{asset('assets/img/blog/img-2.png')}}" class="rounded float-left img-fluid  animate__animated animate__fadeInUp " data-wow-duration="0.8s" data-wow-delay="0.4s" alt="img-2">
                     </a>
                  </div>
               </div>
               <div class="col-12  col-lg-7 news blog_containt">
                  <div class="title_outer">
                     <h5 class="font-weight-bolderer d-inline-block">Latest News</h5>
                  </div>
                  <!-- title_outer -->
                  <div id="blog_carousel" class="owl-carousel owl-theme blog_class">   
                     <div class="item">
                        <div class="col-12 blog_ pb-2 pr-0 pl-0">
                           <div class="d-flex">
                              <div class="blog_image col-6">
                                 <a href="single-blog.html"><img src="{{asset('assets/img/blog/blog_1.jpg')}}" class="fst-image img-fluid rounded" alt="blog-1"></a>  
                                 <div class="blog_mask">
                                    <div class="blog_mask_content mx-0 my-auto text-center">
                                       <a href="single-blog.html" class="icon d-inline-block"><i class="fas fa-search"></i></a>
                                       <a href="single-blog.html" class="icon d-inline-block"><i class="fas fa-link"></i></a>
                                    </div>
                                 </div>
                              </div>
                              <div class="text-left col-6 pr-0">
                                 <div class="sec-product">
                                    <div class="blog-img-1"></div>
                                    <div class="deatil">
                                       <span class="ml-2">By Mr.John Doe</span>
                                    </div>
                                 </div>
                                 <h5 class="secound"><a href="single-blog.html">Nunc placerat augue vel porta venenatis </a></h5>
                                 <p class="text-muted mb-0 f_13 blog-quotes"> consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna...</p>
                                 <a href="single-blog.html" class="shop-btn" style="border-bottom: none;">Read More <i class="fas fa-arrow-right"></i></a>  
                              </div>
                           </div>
                        </div>
                        <!-- col-12 -->
                        <div class="col-12 blog_">
                           <div class="d-flex">
                              <div class="text-right col-6 blog-2">
                                 <div class="sec-product">
                                    <div class="deatils">
                                       <span>By Mr.John Doe</span>  
                                    </div>
                                    <div class="blog-img-1"></div>
                                 </div>
                                 <h5 class="secound"><a href="single-blog.html">Nam quis odio id eros porta consequat </a></h5>
                                 <p class="text-muted mb-0 f_13 blog-quotes"> consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna...</p>
                                 <a href="single-blog.html" class="shop-btn" style="border-bottom: none;">Read More <i class="fas fa-arrow-right"></i></a>  
                              </div>
                              <div class="blog_image col-6 blog-2">
                                 <a href="single-blog.html"><img src="{{asset('assets/img/blog/blog_2.jpg')}}" class="fst-image img-fluid rounded" alt="blog-1"></a>  
                                 <div class="blog_mask">
                                    <div class="blog_mask_content mx-0 my-auto text-center">
                                       <a href="single-blog.html" class="icon d-inline-block"><i class="fas fa-search"></i></a>
                                       <a href="single-blog.html" class="icon d-inline-block"><i class="fas fa-link"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- col-12 -->
                     </div>
                     <!-- item -->
                     <div class="item">
                        <div class="col-12 blog_ pl-0">
                           <div class="d-flex">
                              <div class="blog_image col-6">   
                                 <a href="single-blog.html"><img src="{{asset('assets/img/blog/blog_3.jpg')}}" class="fst-image img-fluid rounded" alt="blog-1"></a>  
                                 <div class="blog_mask">
                                    <div class="blog_mask_content mx-0 my-auto text-center">
                                       <a href="single-blog.html" class="icon d-inline-block"><i class="fas fa-search"></i></a>
                                       <a href="single-blog.html" class="icon d-inline-block"><i class="fas fa-link"></i></a>
                                    </div>
                                 </div>
                              </div>
                              <div class="text-left col-6 pr-0">
                                 <div class="sec-product">
                                    <div class="blog-img-1"></div>
                                    <div class="deatil">
                                       <span class="ml-2">By Mr.John Doe</span>
                                    </div>
                                 </div>
                                 <h5 class="secound"><a href="single-blog.html">Donec sollicitudin lectus ut efficitur elementum </a></h5>
                                 <p class="text-muted mb-0 f_13 blog-quotes"> consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna...</p>
                                 <a href="single-blog.html" class="shop-btn" style="border-bottom: none;">Read More <i class="fas fa-arrow-right"></i></a>  
                              </div>
                           </div>
                        </div>
                        <!-- col-12 -->
                        <div class="col-12 blog_">
                           <div class="d-flex">
                              <div class="text-right col-6 blog-2">
                                 <div class="sec-product">
                                    <div class="deatils">
                                       <span>By Mr.John Doe</span>
                                    </div>
                                    <div class="blog-img-1"></div>  
                                 </div>
                                 <h5 class="secound"><a href="single-blog.html">Nam quis odio id eros porta consequat </a></h5>
                                 <p class="text-muted mb-0 f_13 blog-quotes"> consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna...</p>
                                 <a href="single-blog.html" class="shop-btn" style="border-bottom: none;">Read More <i class="fas fa-arrow-right"></i></a>  
                              </div>
                              <div class="blog_image col-6 blog-2">
                                 <a href="single-blog.html"><img src="{{asset('assets/img/blog/blog_4.jpg')}}" class="fst-image img-fluid rounded" alt="blog-1"></a>  
                                 <div class="blog_mask">
                                    <div class="blog_mask_content mx-0 my-auto text-center">
                                       <a href="single-blog.html" class="icon d-inline-block"><i class="fas fa-search"></i></a>
                                       <a href="single-blog.html" class="icon d-inline-block"><i class="fas fa-link"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- col-12 -->
                     </div>
                     <!-- item -->
                     <div class="item">
                        <div class="col-12 blog_">
                           <div class="d-flex">
                              <div class="blog_image col-6">      
                                 <a href="single-blog.html"><img src="{{asset('assets/img/blog/blog_5.jpg')}}" class="fst-image img-fluid rounded" alt="blog-1"></a>  
                                 <div class="blog_mask">
                                    <div class="blog_mask_content mx-0 my-auto text-center">
                                       <a href="single-blog.html" class="icon d-inline-block"><i class="fas fa-search"></i></a>
                                       <a href="single-blog.html" class="icon d-inline-block"><i class="fas fa-link"></i></a>
                                    </div>
                                 </div>
                              </div>
                              <div class="text-left col-6 pr-0">
                                 <div class="sec-product">
                                    <div class="blog-img-1"></div>
                                    <div class="deatil">
                                       <span class="ml-2">By Mr.John Doe</span>
                                    </div>
                                 </div>
                                 <h5 class="secound"><a href="single-blog.html">Vestibulum vel diam tincidunt accumsan mauris </a></h5>
                                 <p class="text-muted mb-0 f_13 blog-quotes"> consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna...</p>
                                 <a href="single-blog.html" class="shop-btn" style="border-bottom: none;">Read More <i class="fas fa-arrow-right"></i></a>  
                              </div>
                           </div>
                        </div>
                        <!-- col-12 -->
                        <div class="col-12 blog_">
                           <div class="d-flex">
                              <div class="text-right col-6 blog-2">
                                 <div class="sec-product">
                                    <div class="deatils">
                                       <span>By Mr.John Doe</span>
                                    </div>
                                    <div class="blog-img-1"></div>      
                                 </div>
                                 <h5 class="secound"><a href="single-blog.html">Maecenas suscipit massa quis magna dignissim ultricies</a></h5>
                                 <p class="text-muted mb-0 f_13 blog-quotes"> consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna...</p>
                                 <a href="single-blog.html" class="shop-btn" style="border-bottom: none;">Read More <i class="fas fa-arrow-right"></i></a>  
                              </div>
                              <div class="blog_image col-6 blog-2">
                                 <a href="single-blog.html"><img src="{{asset('assets/img/blog/blog_6.jpg')}}" class="fst-image img-fluid rounded" alt="blog-1"></a>  
                                 <div class="blog_mask">
                                    <div class="blog_mask_content mx-0 my-auto text-center">
                                       <a href="single-blog.html" class="icon d-inline-block"><i class="fas fa-search"></i></a>
                                       <a href="single-blog.html" class="icon d-inline-block"><i class="fas fa-link"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- col-12 -->
                     </div>
                     <!-- item -->
                     <div class="item">
                        <div class="col-12 blog_">
                           <div class="d-flex">                   
                              <div class="blog_image col-6">
                                 <a href="single-blog.html"><img src="{{asset('assets/img/blog/blog_1.jpg')}}" class="fst-image img-fluid rounded" alt="blog-1"></a>  
                                 <div class="blog_mask">
                                    <div class="blog_mask_content mx-0 my-auto text-center">
                                       <a href="single-blog.html" class="icon d-inline-block"><i class="fas fa-search"></i></a>
                                       <a href="single-blog.html" class="icon d-inline-block"><i class="fas fa-link"></i></a>
                                    </div>
                                 </div>
                              </div>
                              <div class="text-left col-6 pr-0">
                                 <div class="sec-product">
                                    <div class="blog-img-1"></div>
                                    <div class="deatil">
                                       <span class="ml-2">By Mr.John Doe</span>
                                    </div>
                                 </div>
                                 <h5 class="secound"><a href="single-blog.html">Aenean eleifend metus in leo volutpat sodales </a></h5>
                                 <p class="text-muted mb-0 f_13 blog-quotes"> consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna...</p>
                                 <a href="single-blog.html" class="shop-btn" style="border-bottom: none;">Read More <i class="fas fa-arrow-right"></i></a>  
                              </div>
                           </div>
                        </div>
                        <!-- col-12 -->
                        <div class="col-12 blog_">
                           <div class="d-flex">
                              <div class="text-right col-6 blog-2">
                                 <div class="sec-product">
                                    <div class="deatils">
                                       <span>By Mr.John Doe</span>
                                    </div>
                                    <div class="blog-img-1"></div>         
                                 </div>
                                 <h5 class="secound"><a href="single-blog.html">Nullam in neque vitae arcu auctor feugiat </a></h5>
                                 <p class="text-muted mb-0 f_13 blog-quotes"> consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna...</p>
                                 <a href="single-blog.html" class="shop-btn" style="border-bottom: none;">Read More <i class="fas fa-arrow-right"></i></a>  
                              </div>
                              <div class="blog_image col-6 blog-2">
                                 <a href="single-blog.html"><img src="{{asset('assets/img/blog/blog_2.jpg')}}" class="fst-image img-fluid rounded" alt="blog-1"></a>  
                                 <div class="blog_mask">
                                    <div class="blog_mask_content mx-0 my-auto text-center">
                                       <a href="single-blog.html" class="icon d-inline-block"><i class="fas fa-search"></i></a>
                                       <a href="single-blog.html" class="icon d-inline-block"><i class="fas fa-link"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- col-12 -->
                     </div>
                     <!-- item -->     
                  </div>
               </div>
            </div>
            <!-- row -->   
         </div>
      </div>
      <!-- blog end -->
      <!-- logo-carousel -->
      <div class="logo-carousel">
         <div class="container ">
            <div class="row">
               <div id="logo_carousel" class="owl-carousel owl-theme ">
                  <div class="item">
                     <div class="col-12">
                        <a href="#">
                        <img src="{{asset('assets/img/logo1.png')}}" class="second-img mx-auto d-block img-fluid" alt="logo1">                                  
                        </a>                    
                     </div>
                  </div>
                  <!-- item -->
                  <div class="item">
                     <div class="col-12">
                        <a href="#">
                        <img src="{{asset('assets/img/logo2.png')}}" class="second-img mx-auto d-block img-fluid" alt="logo2">                                  
                        </a>                    
                     </div>
                  </div>
                  <!-- item -->
                  <div class="item">
                     <div class="col-12">
                        <a href="#">
                        <img src="{{asset('assets/img/logo3.png')}}" class="second-img mx-auto d-block img-fluid" alt="logo3">                                  
                        </a>                    
                     </div>
                  </div>
                  <!-- item -->
                  <div class="item">
                     <div class="col-12">
                        <a href="#">
                        <img src="{{asset('assets/img/logo4.png')}}" class="second-img mx-auto d-block img-fluid" alt="logo4">                                  
                        </a>                    
                     </div>
                  </div>
                  <!-- item -->
                  <div class="item">
                     <div class="col-12">
                        <a href="#">
                        <img src="{{asset('assets/img/logo1.png')}}" class="second-img mx-auto d-block img-fluid" alt="logo1">                                  
                        </a>                    
                     </div>
                  </div>
                  <!-- item -->
                  <div class="item">
                     <div class="col-12">
                        <a href="#">
                        <img src="{{asset('assets/img/logo2.png')}}" class="second-img mx-auto d-block img-fluid" alt="logo2">                                  
                        </a>                    
                     </div>
                  </div>
                  <!-- item -->
                  <div class="item">
                     <div class="col-12">
                        <a href="#">
                        <img src="{{asset('assets/img/logo3.png')}}" class="second-img mx-auto d-block img-fluid" alt="logo3">                                  
                        </a>                    
                     </div>
                  </div>
                  <!-- item -->
               </div>
            </div>
         </div>
      </div>
      <!-- logo-carousel End -->
@endsection      