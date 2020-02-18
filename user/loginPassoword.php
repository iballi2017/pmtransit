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
                <div class="col-12 col-sm-12 col-md-6 offset-md-3">
                    <div class="card my-5">
                        <div class="card-body p-5">

                        <div class="card-body p-3">


                            <form>

                                <h4 class="text-center"><strong>Login to your account</strong></h4>

                                <div class="form-group">
                                    <label for="inputEmail"></label>
                                    <input type="email" class="form-control" id="inputEmail"
                                        placeholder="Email">
                                </div>

                              

                                <div class="my-4 text-center">
                                    <button type="submit" class="btn form-btn px-2 mt-2">Send Link</button>
                                </div>

                               

                                <p  class="my-4 text-center"> 
                                    <a href="#" style="color: #A8B622; ">Click here to go back to login</a>
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