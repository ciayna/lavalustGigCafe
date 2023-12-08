<?php
    $title = "Home | Online Catering System";
    include('include/header.php')
?>


        <!-- Book Us Start -->
        <div class="container-fluid contact py-6 wow bounceInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row g-0">
                    <div class="col-1">
                        <img src="public/CRS1/img/background-site.jpg" class="img-fluid h-100 w-100 rounded-start" style="object-fit: cover; opacity: 0.7;" alt="">
                    </div>
                    <div class="col-10">
                        <div class="border-bottom border-top border-primary bg-light py-5 px-4">
                            <div class="text-center">
                                <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Book Us</small>
                                <h1 class="display-5 mb-5">Where you want Our Services</h1>
                            </div>
                            <div class="row g-4 form">
                            <form action="/save1" method="post">
                            <center>
                            <input type="hidden" class="form-control" name="status" value="Pending" />
                            <input type='hidden' name='id' value='<?php if(isset($selected['id'])): ?><?= $selected['id']; endif; ?>'>
                                <div class="col-lg-8 text-center">
                                    <select class="form-select border-primary p-2" name="event" aria-label="Default select example">
                                        <option selected>Select Event</option>
                                        <option value="Birthday">Birthday</option>
                                        <option value="Wedding">Wedding</option>
                                        <option value="Anniversary">Anniversary</option>
                                        <option value="Others...">Others...</option>
                                    </select>
                                </div><br>
                                <div class="col-8 text-center">
                                    <input name="date" type="date" class="form-control border-primary p-2" placeholder="Choose a Date">
                                </div><br>
                                <div class="col-8 text-center">
                                    <input name="name" type="text" value=""class="form-control border-primary p-2" placeholder="Your Name">
                                </div><br>
                                <div class="col-8 text-center">
                                    <input name="email" type="email" class="form-control border-primary p-2" placeholder="Your Email">
                                </div><br>
                                <div class="col-8 text-center">
                                    <input name="address" type="text" class="form-control border-primary p-2" placeholder="Your Location">
                                </div><br>
                                <div class="col-8 text-center">
                                    <input name="phone" type="text" class="form-control border-primary p-2" placeholder="Your Contact No.">
                                </div><br></center>
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary px-5 py-3 rounded-pill">Submit Now</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-1">
                        <img src="public/CRS1/img/background-site.jpg" class="img-fluid h-100 w-100 rounded-end" style="object-fit: cover; opacity: 0.7;" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Book Us End -->



<?php
    include('include/footer.php')
?>