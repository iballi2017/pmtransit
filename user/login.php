<?php
include_once '../includes/header.php'; ?>


<main class="login-page mb-5">


    <section class="title-component-wrapper py-5">
        <div class="container">
            <h1 class="page-title">Login</h1>
        </div>
    </section>




    <section class="form-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3">
                    <div class="card my-5">
                        <div class="card-body p1">

                        <div class="card-body p-2">


                            <form>

                                <h4 class="text-center"><strong>Login to your account</strong></h4>

                                <div class="form-group">
                                    <label for="inputEmail/phonenumber"></label>
                                    <input type="email" class="form-control" id="inputEmail"
                                        placeholder="Email / Phone number">
                                </div>

                                <div class="form-group">
                                    <label for="inputPassword"></label>
                                    <input type="password" class="form-control" id="inputPassword"
                                        placeholder="Password">
                                </div>

                                <div class="my-4 text-center">
                                    <button type="submit" class="btn form-btn px-3">Login</button>
                                </div>

                                <p class="">
                                    <a href="#">Dont have account? Click <span style="color: #4D9F45">here</span> to
                                        register forgot password?</a>
                                </p>

                                <p>
                                    <a href="#" style="color: #4D9F45; ">Continue without login</a>
                                </p>


                            </form> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</main>

<?php include_once '../includes/footer-script.php';

?>