<?php
include_once '../includes/header.php'; ?>

<main class="contact-us-container mb-5">


    <section class="title-component-wrapper py-5">
        <div class="container">
            <h3 class="page-title">Contact Us</h3>

        </div>
    </section>

    <section class="mt-5">
        <div class="container bg-white p-3">
            <div class="row">
                <div class="col">
                    <h3>Send us a message</h3>
                    <div class="card mb-4">
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" aria-describedby="nameHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="subject">Subject</label>
                                    <input type="text" class="form-control" id="subject">
                                </div>

                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea class="form-control" id="message" rows="3"></textarea>
                                </div>
                                <button type="submit" class="btn custom-form-btn">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <h3>For further inquiries, see our office address below:</h3>
                    <p><span>Address:</span><span class="ml-3">ROYAL RESIDENCE, olay street, ondo state</span></p>
                    <p><span>Phone:</span><span class="ml-3">07065194485</span></p>
                    <p><span>E-mail:</span><span class="ml-3">postmailexpresss@demolink.org
                        </span></p>
                </div>
            </div>
        </div>

    </section>

</main>






<?php include_once '../includes/footer.php';

?>