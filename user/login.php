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
                        <div class="card-body p3">

                            <form>

                                <p class="text-center"><strong>Login to your account</strong></p>

                                <div class="form-group input-group-lg ">
                                    <label for="inputEmail/phonenumber"></label>
                                    <input type="email" class="form-control" id="inputEmail"
                                        placeholder="Email / Phone number">
                                </div>

                                <div class="form-group input-group-lg ">
                                    <label for="inputPassword"></label>
                                    <input type="password" class="form-control" id="inputPassword"
                                        placeholder="Password">
                                </div>

                                <div class="text-center my-4">
                                    <button type="submit" class="btn  px-5 white " style="color: white; ">Login</button>
                                </div>

                                <p class="text-center py-2">
                                    <a href="#">Dont have account? Click <span
                                            style="color: #4D9F45">here</span> to register forgot password?</a>
                                </p>

                                <p class="text-center py-2">
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