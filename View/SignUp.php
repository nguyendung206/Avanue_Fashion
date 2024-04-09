<?php
include "../View/MainHeader.php"
?>
<div class="col-md-12 col-sm-12 col-12">
    <img src="../assets/img/welcome.png" alt="" class="img my-3">
</div>
<div class="container form-signup">
    <div class="row">
        <div class="col-md-6 col-sm-12 col-12 signup border-right">
            <form>
                <h2>SIGN IN</h2>
                <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Email..">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Your Password..">
                </div>
                <div class="form-group row">
                    <div class="col-md-6 col-sm-12 col-12">
                        <button type="submit" class="signin btn-shared btn btn-primary">SIGN IN</button>
                    </div>
                    <div class="col-md-6 col-sm-12 col-12">
                        <a href="#" class="link forgot-password float-right">Forgot your Password <i class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-6 col-sm-12 col-12 signup">
            <form>
                <h2>REGISTER</h2>
                <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Sign up for exclusive updates, discounts, new arrivals, contests, and more!</label>
                </div>
                <div class="form-group row">
                    <div class="col-md-6 col-sm-12 col-12">
                        <button type="submit" class="register btn-shared btn btn-primary">CREATE ACCOUNT</button>
                    </div>
                    <div class="col-md-6 col-sm-12 col-12 policy">
                        <div class="text-right">
                            By clicking 'Create Account', you agree to our <a href="#" class="link forgot-password">Pricacy Policy <i class="fa-solid fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
include "../View/MainFooter.php"
?>