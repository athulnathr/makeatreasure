@extends('layouts.layout')

@section('section')
<!-- Start Home -->
<section class="p-5  bg-light hidden-moible"></section>
    <section class="section bg-light Features">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="title text-center mb-5">
                        <h3 class="font-weight-600 mb-3">Applications Required</h3>
                        <p class="text-muted">Please download &amp; install the applications mentioned below to proceed with the registration process.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6 d-flex align-items-stretch">
                    <div class="card widget-flat" onclick="window.open('https://telegram.org/', '_blank');">
                        <div class="card-body">
                            <div class="row">
                                <div class=" align-items-center col-sm-4 d-flex">
                                    <div class="icon-holder">
                                        <img src="{{URL::to('assets/images/icons/telegram.png')}}" alt="" class="img-fluid img-block">
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <h3 class="mb-3 text-center ">Telegram</h3>
                                    <p class="mb-0 text-muted">
                                        <span>
                                            This app is required for connecting with the Crypto stockist to buy or
                                            transfer Ethereum, needed for the registration process. This app also helps
                                            you stay connected with Make A Treasure Community and delivers you with
                                            latest updates
                                            and ideas helpful for your growth.
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- end card-body-->
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 d-flex align-items-stretch">
                    <div class="card widget-flat" onclick="window.open('https://www.google.com/keep/', '_blank');">
                        <div class="card-body">
                            <div class="row">
                                <div class=" align-items-center col-sm-4 d-flex">
                                    <div class="icon-holder">
                                        <img src="{{URL::to('assets/images/icons/Keep.png')}}" alt="" class="img-fluid img-block">
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <h3 class="mb-3 text-center ">Google Keep Notes</h3>
                                    <p class="mb-0 text-muted">
                                        <span>
                                            Helps you to securely store the ‘12 phrase passcode’ of your crypto wallet
                                            in your Google Account, which will be required for retrieving your crypto
                                            wallet, in case of any device changing situations or any other circumstances
                                            like that.
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- end card-body-->
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 d-flex align-items-stretch">
                    <div class="card widget-flat" onclick="window.open('https://trustwallet.com/', '_blank');">
                        <div class="card-body">
                            <div class="row">
                                <div class=" align-items-center col-sm-4 d-flex">
                                    <div class="icon-holder">
                                        <img src="{{URL::to('assets/images/icons/Trust.png')}}" alt="" class="img-fluid img-block">
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <h3 class="mb-3 text-center ">Trust Crypto Wallet</h3>
                                    <p class="mb-0 text-muted">
                                        <span>
                                            This is a crypto wallet used to store your earned cryptocurrency on your
                                            smartphone. It also helps you to send &amp; receive cryptocurrencies to
                                            others and
                                            the smart contract project
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- end card-body-->
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 d-flex align-items-stretch">
                    <div class="card widget-flat" onclick="window.open('https://metamask.io/download.html', '_blank');">
                        <div class="card-body">
                            <div class="row">
                                <div class=" align-items-center col-sm-4 d-flex">
                                    <div class="icon-holder">
                                        <img src="{{URL::to('assets/images/icons/Metamask.png')}}" alt="" class="img-fluid img-block">
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <h3 class="mb-3 text-center ">Meta Mask Wallet</h3>
                                    <p class="mb-0 text-muted">
                                        <span>
                                            This is a crypto wallet used to store your earned cryptocurrency on your
                                            Desktop or Laptop. It also helps you to send &amp; receive cryptocurrencies
                                            to
                                            others and the smart contract projects.
                                            <br>
                                            <p>*Requires Google Chrome to function.
                                                <br> Installed as Chrome Extension.</p>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- end card-body-->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="contact">
        <div class="container">
            <div class="row justify-content-center" id="join_header">
                <div class="col-lg-8">
                    <div class="title text-center mb-5">
                        <h3 class="font-weight-600 mb-3">Join Now</h3>
                        <p class="text-muted">Please provide following details to proceed with the registration.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center mt-4">
                <div class="col-lg-10">
                    <div class="custom-form">
                        <div id="message"></div>
                        <form method="post" action="#" name="contact-form" id="contact-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group mt-2">
                                        <input name="name" id="name" class="form-control" placeholder="Your Full Name" type="text" value="test">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mt-2">
                                        <input name="phone" id="phone" class="form-control" placeholder="Your Mobile Number" type="text" value="8075029374">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mt-2">
                                        <input name="email" id="email" class="form-control" placeholder="Your Email id" type="text" value="asdfasdf@jhkfjas.com">
                                    </div>
                                </div>
                                <!-- <div class="col-lg-6">
                                    <div class="form-group mt-2">
                                        <input class="form-control" id="refree" name="refree"
                                            placeholder="Your Referrer(If any)" type="text">
                                    </div>
                                </div> -->
                            </div>
                            <div class="row text-center">
                                <div class="col-lg-12 mt-3">
                                    <input id="submit" name="send" class="submitBnt btn btn-sm btn-custom btn-round" value="Register" type="submit">
                                    <div id="simple-msg"></div>
                                </div>

                            </div>
                        </form>
                    </div>

                    <div class="main-class my-5" style="display: none;" id="second_class">
                        <div class="title text-center mb-5">
                            <h3 class="font-weight-600 mb-3">Congrats! Phase 1 of your registration is complete.</h3>
                            <p class="text-muted">Buy or Transfer ETH to proceed to Phase 2 of your Registration process. Installation of Telegram app is a must for this step.</p>
                            <div class="button_holder">
                                <a href="https://telegram.me/crazer007" target="_blank" class="btn btn-sm btn-custom btn-round">
                                    Buy ETH
                                </a>
                                <a href="#" id="start_over" class="text-muted"> Start Over  <i class="mdi mdi-autorenew"></i></a>
                            </div>
                        </div>
                        <div class="title text-center mb-5">
                            <h3 class="font-weight-600 mb-3">Phase-2 : Registration</h3>
                            <p class="text-muted">After purchasing ETH, comeback to this page and click on the button
                                below to complete your registration</p>
                            <div class="button_holder">
                                <a href="https://bit.ly/3eyrSH3" class="btn btn-sm btn-custom btn-round" target="_blank">
                                    Register Now
                                </a>
                                <p class="text-muted mt-2">(Choose Trust Wallet app to open this link if you are registering using mobile phone)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection


@section('custom-scripts')
<script>
   $.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
   });
   
   $('#contact-form').submit(function (e) {
       if ($('#contact-form').valid()) {
           $("#message").slideUp(750, function () {
               $('#message').hide();
   
               $('#submit')
                   .before('')
                   .attr('disabled', 'disabled');
   
               $.ajax({
                   type:'POST',
                   url: "{{route('join-now')}}" , 
                   data: {
                        name: $('#name').val(),
                        phone: $('#phone').val(),
                        email: $('#email').val(),
                        refree: $('#refree').val(),
                    },
                   function (data) {
                       $('#contact-form').hide();
                       $('#join_header').hide();
                       $('.main-class').show();
                       localStorage.setItem('registrations', true);
                   }
               });
           });
       } else {
           e.preventDefault();
       }
   
       return false;
   
   });
</script>


@endsection