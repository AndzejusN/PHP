@extends('shop.index')

@section('content')

    <section class="mb-4">
        <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
        <div class="row">
            <div class="col-md-9 mb-md-0 mb-5">
                <form id="contact-form" name="contact-form" action="#" method="POST">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="name" name="name" class="form-control">
                                <label for="name" class="">Your name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="email" name="email" class="form-control">
                                <label for="email" class="">Your email</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form mb-0">
                                <input type="text" id="subject" name="subject" class="form-control">
                                <label for="subject" class="">Subject</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form">
                                <textarea id="message" name="message" rows="2"
                                          class="form-control md-textarea"></textarea>
                                <label for="message">Your message</label>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="text-center text-md-left">
                    <a type="button" class="btn btn-dark">Send</a>
                </div>
                <div class="status"></div>
            </div>
            <div class="col-md-3 text-center">
                <ul class="list-unstyled mb-0">
                    <li><i class="fas fa-map-marker-alt fa-2x"></i>
                        <p>Address</p>
                    </li>

                    <li><i class="fas fa-phone mt-4 fa-2x"></i>
                        <p>+ 00 00 00</p>
                    </li>

                    <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                        <p>some@some.com</p>
                    </li>
                </ul>
            </div>

        </div>
    </section>
@endsection
