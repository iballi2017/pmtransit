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

                        <div class="card-body p-5">
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

                                <div class="form-group">
                                    <button type="submit" class="btn custom-form-btn px-3">Login</button>
                                </div>
                                <p class="">
                                    Dont have account? Click <a href="#">here</a> to
                                    register
                                </p>
                                <p><a href="#"> Forgot password?</a></p>

                                <p>
                                    <a href="#">Continue without login</a>
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