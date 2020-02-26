<?php
include_once '../includes/header.php'; ?>

<main class="contact-us-container mb-5">


    <section class="title-component-wrapper py-5">
        <div class="container">
            <h1 class="page-title">Contact Us</h1>

        </div>
    </section>

    <div class="container">
        <div class="row  ">
            <div class="col-12 col-md-6 pt-2 ">
                <div class="card my-5">
                    <div class="card-body p3">
                        <form>

                            <h4 class=" pb-5">Send us a message</h4>


                            <div class="form-group input-group-lg ">
                                <label for="inputName">Full Name:</label>
                                <input type="text" class="form-control" id="inputName" placeholder="">
                            </div>

                            <div class="form-group input-group-lg  ">
                                <label for="inputEmail/phonenumber">Email:</label>
                                <input type="email" class="form-control" id="inputEmail" placeholder="">
                            </div>


                            <div class="form-group input-group-lg ">
                                <label for="inputSubject">Subject</label>
                                <input type="text" class="form-control" id="inputSubject" placeholder="">
                            </div>



                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea class="form-control" id="message" rows="5"
                                    style="background-color: white;"></textarea>
                            </div>

                            <div class="my-4">
                                <button type="submit" class="btn  px-5 white " style="color: white; ">Submit</button>
                            </div>



                        </form>

                    </div>
                </div>




            </div>

            <div class="col-12  col-md-6 pt-5 pr-2">
                <h4 class="py-3">For further inquiries, see our office address below: </h4>
                <p class="py-2 "><span><strong>Address:</strong></span> ROYAL RESIDENCE, olay street, ondo state</p>
                <p><span><strong>Phone:</strong></span> 07065194485</p>
                <p>
                    <span><strong>Email:</strong></span>
                    contact@pmtransit.com
                    <br>
                    <p class="ml-5">info@pmtransit.com</p>
                </p>

                <div class="col-12  col-md-6 pt-5 pr-2">
                    <h4 class="py-3">For further inquiries, see our office address below: </h4>
                    <p class="py-2 "><span><strong>Address:</strong></span> ROYAL RESIDENCE, olay street, ondo state</p>
                    <p><span><strong>Phone:</strong></span> 07065194485</p>
                    <p><span><strong>Email:</strong></span> postmailexpresss@demolink.org</p>


                </div>

            </div>




        </div>

        </section>




</main>









<?php include_once '../includes/footer.php';

?>