<?php
include "../View/MainHeader.php"
?>
<div class="col-md-12 col-sm-12 col-12">
    <img src="../assets/img/productview.png" alt="" class="img my-3">
</div>
<div class="product-view">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-12 col-12">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../assets/img/default.png" class="d-block w-100" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="../assets/img/zoomphoto.png" class="d-block w-100" alt="">
                        </div>
                    </div>
                    <button class="carousel-control-prev btn-carousel" type="button" data-target="#carouselExampleControls" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </button>
                    <button class="carousel-control-next btn-carousel" type="button" data-target="#carouselExampleControls" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-md-7 col-sm-12 col-12">
                <div class="product-info">
                    <form action="">
                        <h2 class="product-heading">
                            Ave classic sweatshirt
                        </h2>
                        <ul class="d-flex product-about row">
                            <li class="product-rate col-6">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </li>
                            <li class="col-6"><b>3 Review(s)</b></li>
                            <li class="col-12 add-product border-right border-left"><b>Add a Review</b></li>
                            <li class="product-social col-12">
                                Share:
                                <i class="fa-brands fa-facebook-f"></i>
                                <i class="fa-brands fa-twitter"></i>
                                <i class="fa-brands fa-google-plus-g"></i>
                                <i class="fa-brands fa-pinterest-p"></i>
                                <i class="fa-brands fa-instagram"></i>
                                <i class="fa-regular fa-envelope"></i>
                            </li>
                        </ul>
                        <p class="product-price"><sup>£</sup><span>107</span> <sup>£</sup>89.99</p>
                        <p class="mb-2"><b>AVAILABILITY:</b> In stock</p>
                        <p class="mb-2"><b>PRODUCT CODE:</b> #499577</p>
                        <p class="product-tag mb-2"><b>TAGS:</b> Classic, Casual, V-neck, Loose</p>
                        <p class="mb-2">Donec sem lorem laoreet tempor un risus vitae, rutrum sodales nibh suspendisse est congue metus nunc, id viverra elit loreti rhoncus quis consecteur es. Donec pulvinar tempor lorem a pretium justo interdum.
                        </p>
                        <ul class="product-attribute">
                            <li>Elasticated cuffs</li>
                            <li>Casual fit</li>
                            <li>100% Cotton</li>
                            <li>Free shipping with 4 days delivery</li>
                        </ul>
                        <div class="form-row mb-2">
                            <div class="form-group col-md-3 mr-3">
                                <label for="exampleFormControlSelect1"><b>COLOUR</b></label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option selected>Select Colour</option>
                                    <option>Red</option>
                                    <option>Green</option>
                                    <option>White</option>
                                    <option>Black</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3 mr-3">
                                <label for="exampleFormControlSelect2"><b>SIZE</b></label>
                                <select class="form-control" id="exampleFormControlSelect2">
                                    <option selected>Select Size</option>
                                    <option>1</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2 mr-3">
                                <label class="form-label" for="typeNumber"><b>QTY</b></label>
                                <input type="number" id="typeNumber" class="form-control" placeholder="1" />
                            </div>
                        </div>
                        <button type="submit" class="btn-shared btn-product btn btn-primary mr-3"><i class="fa-solid fa-cart-shopping"></i> ADD TO CART</button>
                        <button type="submit" class="btn-shared btn-product btn btn-primary"><i class="fa-regular fa-heart"></i> ADD TO LOOKBOOK</button>
                    </form>
                    <br>
                    <a class="product-compare" href="#"><i class="fa-solid fa-down-left-and-up-right-to-center"></i> <b>ADD TO COMPARE</b></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="product-data my-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12">
                <ul class="d-flex list-data">
                    <li class="">
                        <a href="#" class="btn-shared btn-product btn btn-product-data text-uppercase">Description </a>
                    </li>
                    <li class="">
                        <a href="#" class="btn-shared btn-product btn btn-product-data text-uppercase">Video</a>
                    </li>
                    <li class="">
                        <a href="#" class="btn-shared btn-product btn btn-product-data text-uppercase">Size & Specs</a>
                    </li>
                    <li class="">
                        <a href="#" class="btn-shared btn-product btn btn-product-data text-uppercase">Delivery & Returns</a>
                    </li>
                    <li class="">
                        <a href="#" class="btn-shared btn-product btn btn-product-data text-uppercase">Reviews</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-12">
                <div class="product-data-content">
                    <h2 class="text-uppercase my-3"><b>Nunc egestas posuere enim, eu maximus erat posuere eget</b></h2>
                    <p>Sed ut mi mollis, consequat nulla lacinia, hendrerit turpis. Nulla sapien magna, interdum quis pretium nec, pharetra at felis. Curabitur dictum sapien est, eget ultricies turpis porta vel. Nam suscipit nec lacus sed imperdiet. Vestibulum a purus risus. Nulla et dictum augue, nec efficitur mi. Nam sit amet pretium elit. Aliquam congue, ligula id vehicula vestibulum, orci ex vulputate lacus, ac malesuada elit dolor eget ex. Sed quis aliquet risus, ut cursus lectus. In eget lorem tellus.</p>
                    <br>
                    <p>Quisque eleifend varius nisi nec sagittis. Nulla ullamcorper imperdiet justo, ut venenatis purus lobortis ut. Nunc sagittis urna et hendrerit sodales. Nunc molestie risus nec fringilla lacinia. Nulla facilisi. Etiam neque velit, tristique eget sollicitudin eget, placerat at metus. Proin dictum lobortis velit, id suscipit orci faucibus ut. Aliquam erat volutpat. Vivamus feugiat justo in diam placerat, id dignissim elit auctor. Vestibulum scelerisque sem et lobortis ultricies. Morbi suscipit nulla urna. Suspendisse potenti. Nullam varius quam sed nisl dignissim, vel faucibus ipsum blandit. Vivamus at suscipit augue. Nam finibus gravida lorem eu viverra. Praesent rhoncus imperdiet ultricies. Nullam pretium cursus augue auctor vulputate. Quisque a convallis diam commodo eget diam id, eleifend dictum libero. Etiam varius, nisi vel dignissim sodales, enim dui posuere mauris, in aliquet lorem eros eget neque.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include "../View/MainFooter.php"
?>