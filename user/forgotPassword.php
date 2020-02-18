

<?php
include_once '../includes/header.php'; ?>


<main class="login-page mb-5">


    <section class="title-component-wrapper py-5">
        <div class="container">
            <h1 class="page-title">Forgot Password</h1>
        </div>
    </section>




    <section class="form-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 offset-md-3">
                    <div class="card my-5">
                        <div class="card-body p-5">

                        <div class="card-body p-2">


                            <form>

                                <h4 class="text-center"><strong>PMT forgot password</strong></h4>

                                <div class="form-group">
                                    <label for="newPassword"></label>
                                    <input type="password" class="form-control" id="newPassword"
                                        placeholder="Enter New Password">
                                </div>

                                <div class="form-group">
                                    <label for="confirmPassword"></label>
                                    <input type="password" class="form-control" id="confirmPassword"
                                        placeholder="Confirm Password">
                                </div>

                                <div class="my-4 text-center"> 
                                    <button type="submit" class="btn form-btn px-5">Submit</button>
                                </div>

                               


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