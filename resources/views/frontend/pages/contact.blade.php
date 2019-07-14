@extends('layouts.frontend')
@section('title', 'Contact Us')
@section('content')
<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area bg-img" style="background-image:  url('{{ asset('academy/img/bg-img/breadcumb.jpg') }}');">
    <div class="bradcumbContent">
        <h2>Contact</h2>
    </div>
</div>
<!-- ##### Breadcumb Area End ##### -->

<div class="map-area wow fadeInUp" data-wow-delay="300ms">
    <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
    <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3974.001180346346!2d-1.2846716857129519!3d5.103505996296088!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfddfed6fc798569%3A0x7531c2a02fe48636!2sUniversity+Of+Cape+Coast!5e0!3m2!1sen!2sgh!4v1542380241050"></iframe>
</div>
<!-- ##### Contact Area Start ##### -->
<section class="contact-area m-t-40">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="contact-content">
                    <div class="row">
                        <!-- Contact Information -->
                        <div class="col-12 col-lg-5">
                            <div class="contact-information wow fadeInUp" data-wow-delay="400ms">
                                <div class="section-heading text-left">
                                    <h3>Contact Us</h3>
                                    <p class="mt-30">Lacinia, lacinia la cus non, fermen tum nisi. Donec et sollicitudin. Morbi vel arcu gravida, iaculis lacus vel, posuere ipsum. Sed faucibus mauris vitae urna consectetur, sit amet maximus nisl sagittis. Ut in iaculis enim, et pulvinar mauris.</p>
                                </div>

                                <!-- Contact Social Info -->
                                <div class="contact-social-info d-flex mb-30">
                                    <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                </div>

                                <!-- Single Contact Info -->
                                <div class="single-contact-info d-flex">
                                    <div class="contact-icon mr-15">
                                        <i class="icon-placeholder"></i>
                                    </div>
                                    <p>Ayensu , UCC<br> Cape Coast, GH</p>
                                </div>

                                <!-- Single Contact Info -->
                                <div class="single-contact-info d-flex">
                                    <div class="contact-icon mr-15">
                                        <i class="icon-telephone-1"></i>
                                    </div>
                                    <p>Main: 054-388-5191 <br> Office: 050-119-5382</p>
                                </div>

                                <!-- Single Contact Info -->
                                <div class="single-contact-info d-flex">
                                    <div class="contact-icon mr-15">
                                        <i class="icon-contract"></i>
                                    </div>
                                    <p>office@yourbusiness.com</p>
                                </div>
                            </div>
                        </div>
                        <!-- Contact Form Area -->
                        <div class="col-12 col-lg-7">
                            <div class="contact-form-area wow fadeInUp" data-wow-delay="500ms">
                                <form action="#" method="post">
                                    <input type="text" class="form-control" id="name" placeholder="Name">
                                    <input type="email" class="form-control" id="email" placeholder="E-mail">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                    <button class="btn academy-btn mt-30" type="submit">Contact Us</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Contact Area End ##### -->
@endsection
