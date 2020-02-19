<?php
include_once '../includes/header.php'; ?>


<main class="register-page mb-5">


    <section class="title-component-wrapper py-5">
        <div class="container">
            <h1 class="page-title">Register</h1>
        </div>
    </section>


    <section class="form-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3">
                    <div class="card my-5">
                        <div class="card-body p-5">
                            <h4 class="text-center mb-5"><strong>Register</strong></h4>
                            <form>

                                <div class="form-group">
                                    <input type="text" class="form-control" id="inputName" placeholder="Full name">
                                </div>

                                <div class="form-group">
                                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" id="inputMobile" placeholder="Mobile">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <select id="inputGender" class="form-control" style="background-color: #E5E5E5">

                                            <option selected> Gender</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="password" class="form-control" id="inputPassword"
                                            placeholder="Password">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <input type="password" class="form-control" id="inputConfirmPassword"
                                            placeholder="Confirm Password">
                                    </div>
                                </div>

                                <div>By signing up I agree to the terms and conditions</div>

                                <button type="submit" class="btn custom-form-btn px-4">Sign Up</button>
                                <div class="mt-2"><a href="#" style="color: #4D9F45;">Click here to Login</a></div>

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