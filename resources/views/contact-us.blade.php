@include('app')
    <style>
        .contct-box {
            position: relative;
        }
        .contact__form {
            position: absolute;
            top: 50%;
            right: 39%;
            transform: translateY(-50%);
            z-index: 1;
        }
        @media (max-width: 575.98px) {
            .contact__form {
                position: static;
                transform: initial;
            }
        }
    </style>

    <main>
    <section>
    <div class="container-fluid">
    <div class="row contact-box">
    <div class="col-sm-4 px-0 order-2 order-sm-1">
    <div class="feature map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d124426.51899677295!2d77.59190927460185!3d12.950805136864954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3bae1442933125ef%3A0xf84c75e49cc9617d!2stechasoft!3m2!1d12.9360921!2d77.6300208!5e0!3m2!1sen!2sin!4v1535612365424" width="1530" height="650" frameborder="0" style="border:0" allowfullscreen=""></iframe>
    </div>
    </div>
    <div class="col-sm-8 px-0 order-1 order-sm-2 contact__form my-3 mx-2 mx-md-0 my-md-0" id="myDIV">
    <div class="col-sm-7 bg-white" style="margin: 0 auto;">
    <form id="sendContactUs">
    <input hidden="" type="text" value="/contact-us" class="form-control" id="usr" name="lead_url" required="">
    <input type="number" class="form-control" value="1" name="enquiry" hidden="">
    <div class="row">
    <div class="col-12" style="background-color: #0150a9;color: #FFFFFF">
    <p class="in-touch p-2 m-0 text-center">Get in Touch</p>
    <button type="button" onclick="myFunction()" class="close close_btn close_model" style="top:8px">X</button>
    </div>
    </div>
    <div class="row pt-4 px-2">
    <div class="col-12">
    <div class="form-group">
    <input type="text" class="form-control pop_up_model" id="name" required="" placeholder="Full Name" name="contact_fname">
    </div>
    </div>
    <div class="col-12">
    <div class="form-group">
    <input type="email" class="form-control pop_up_model" id="email" required="" placeholder="Email" name="contact_email">
    </div>
    </div>
    <div class="col-12">
    <div class="form-group">
    <input type="text" class="form-control pop_up_model" id="phone" required="" placeholder="Phone Number" name="contact_phone">
    </div>
    </div>
    </div>
    <div class="row px-2">
    <div class="col-12">
    <div class="form-group">
    <textarea class="form-control pop_up_model" placeholder="Enter your message" rows="5" id="contact_message" name="contact_message"></textarea>
    </div>
    </div>
    </div>
    <div class="row px-2">
    <div class="col-12">
    <div class="form-group">
    <div class="g-recaptcha" data-sitekey="6LfJdP4ZAAAAAHLu7rilqtpQdkdiZo90482PBgLN"><div style="width: 304px; height: 78px;"><div><iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LfJdP4ZAAAAAHLu7rilqtpQdkdiZo90482PBgLN&amp;co=aHR0cHM6Ly93d3cudGVjaGFzb2Z0LmNvbTo0NDM.&amp;hl=en&amp;v=dPctOHA2ifhWm5WzFM_B5TjT&amp;size=normal&amp;cb=iythgx33nj0c" width="304" height="78" role="presentation" name="a-4kzt9rkp0yuw" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div></div>
    </div>
    </div>
    </div>
    <div class="row px-2 pb-2">
    <div class="col-md-12 text-center">
    <p class="contact_us_error text-danger"></p>
    <button type="submit" class="btn btn-info writeform-btn py-2 font-weight-bold" style="background-color: #0150a9;-webkit-box-shadow: 0 17px 10px -10px rgba(0,0,0,0.4);box-shadow: 0 17px 10px -10px rgba(0,0,0,0.4);">Submit </button>
    </div>
    </div>
    </form>
    </div>
    </div>
    </div>
    </div>
    </section>
    </main>

    <script type="text/javascript">
        var controller = 'Welcome';
        var base_url = 'https://www.techasoft.com/';


        $(document).ready(function() {

            $("#sendContactUs").on('submit', function(e){
                e.preventDefault();
                $('.contact_us_error').html('');
                $("div#divLoading").addClass('show');
                $.ajax({
                    'url': base_url + controller + '/submit_contact_us',
                    'type': 'post', //the way you want to send data to your URL
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData:false,
                    'dataType': "json",
                    'success': function (data) {
                        if (data.status == 200) {
                            window.location.href = base_url+"thank-you";


                        } else {
                            $("div#divLoading").removeClass('show');
                            $('.contact_us_error').html(data.data);
                        }
                    }
                });
            });

        });

    </script>
    <script>

        function myFunction() {
            var x = document.getElementById("myDIV");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }

    </script>
    <style>
        .close-modal-outside {
            background-color: rgba(24, 62, 132,.8);
            color: white !important;
            font-size: 28px;
        }
        .address-sub{
            font-size: 12px;
            line-height: 1.5;
        }
        .branch-address{
            line-height: 1 !important;
        }

        .modal {
            transform: scale(0);
            opacity: 0;
            -webkit-transition: all .5s linear;
            -o-transition: all .5s linear;
            transition: all .5s linear;
        }
        .modal.show {
            opacity: 1;
            transform: scale(1);
        }
        .btn-close-float {
            background-color: #02326a !important;
            opacity: 1;
            color: white;
            width: 22px;
            height: 22px;
            border-radius: 50%;
            font-size: 12px !important;
            margin-right: -50%;
            margin-top: -50%;
        }

    </style>

    <div class="modal fade-scale" id="Popup-enquiry">
    <div class="modal-dialog modal-dialog-centered" style="transform:translateY(0px) scaleX(1) scaleY(1) translateX(0px)">
    <div class="modal-content">
    <div class="modal-header border-0 py-2 mb-3" style="background-color: rgb(2, 80, 169);;color: #ffffff;">
    <div class="row w-100">
    <div class="col-12 text-center">
    <p class="apply-now text-center">Query</p>
    </div>
    </div>
    <button type="button" class="close close_btn close_model" data-dismiss="modal">X</button>
    </div>
    <form id="enquiry_pop_up_add">
    <input hidden="" type="text" value="/contact-us" class="form-control" id="usr" name="lead_url" required="">
    <input type="number" class="form-control" value="2" name="enquiry" hidden="">
    <div class="px-3">
    <div class="row pt-3">
    <div class="col-sm-6">
    <div class="form-group">
    <input type="text" class="form-control pop_up_model" id="contact_name" placeholder="Name" name="enquiry_name_pop_up" required="">
    </div>
    </div>
    <div class="col-sm-6">
    <div class="form-group">
    <input type="text" class="form-control pop_up_model" name="enquiry_phone_pop_up" minlength="10" maxlength="16" onkeypress="validate(event)" id="mobile_num" placeholder="Mobile Number" required="">
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-sm-6">
    <div class="form-group">
    <input type="email" class="form-control pop_up_model" id="email" placeholder="Email" name="enquiry_email_pop_up" required="">
    </div>
    </div>
    <div class="col-sm-6">
    <div class="form-group">
    <select name="enquiry_services_pop_up" id="" class="form-control pop_up_model">
    <option value="0">Select Services</option>
    <option value="1">Online Marketing</option>
    <option value="2">Web Design &amp; Development</option>
    <option value="3">Mobile Application</option>
    <option value="4">Software Development</option>
    <option value="5">Creative Design</option>
    <option value="6">Others</option>
    </select>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-12">
    <div class="form-group">
    <textarea class="form-control services_head" name="enquiry_message_pop_up" placeholder="Your Message...." id="" rows="3" style="resize: none"></textarea>
    </div>
    </div>
    </div>
    <div class="row pt-4">
    <span style="color: red" class="add_error"></span>
    <div class="col-12 text-center">
    <div class="form-group">
    <button type="submit" class="btn form-control pop_up_contact_us add_enquiry_pop_up_button">Contact Us<span class="add_enquiry_pop_up_fa_spin_icon"></span></button>
    </div>
    </div>
    </div>
    </div>
    </form>
    </div>
    </div>
    </div>

    <div class="modal fade" id="quote-request" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-width" role="document" style="padding-top: 4%">
    <div class="modal-content px-0">
    <div class="modal-body p-0">
    <div class="col-12">
    <div class="row modal-height">
    <button type="button" class="close popup-close" data-dismiss="modal">×</button>
    <div class="col-md-6" style="background-image: linear-gradient(to top, #166ce7, #5990f7);">
    <div class="col-12 pt-3 col-pad-0">
    <h3 class="text-light pop-up-title">
    <b>Get A Free Quote Now</b>
    </h3>
    <p class="text-light">
    Please complete this form to be connected by one of our experts.
    </p>
    </div>
    <div class="row">
    <div class="circle-login">
    <img src="https://www.techasoft.com/debug/img/10-work@2x.png" class="d-flex m-auto" width="80%" alt="pop-up form image">
    </div>
    </div>
    </div>
    <div class="col-md-6 bg-light p-2">

    <form id="home_contact" style="color: #757575; margin-top: 4rem">
    <input hidden="" type="text" value="/contact-us" class="form-control" id="usr" name="lead_url" required="">
    <input type="number" class="form-control" value="1" name="enquiry" hidden="">
    <div class="form-group">
    <input type="text" id="firstName" class="form-control" name="contact_fname" placeholder="Name" required="">
    </div>
    <div class="form-group">
    <input type="email" id="email" class="form-control" name="contact_email" placeholder="Email Id" required="">
    </div>
    <div class="form-group">
    <input type="text" class="form-control" name="contact_phone" placeholder="Phone Number" minlength="10" maxlength="16" onkeypress="validate(event)" required="">
    </div>
    <div class="form-group">
    <textarea class="form-control" rows="3" id="comment" name="contact_message" placeholder="Enter Message"></textarea>
    </div>
    <div class="g-recaptcha" data-sitekey="6LfJdP4ZAAAAAHLu7rilqtpQdkdiZo90482PBgLN"><div style="width: 304px; height: 78px;"><div><iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LfJdP4ZAAAAAHLu7rilqtpQdkdiZo90482PBgLN&amp;co=aHR0cHM6Ly93d3cudGVjaGFzb2Z0LmNvbTo0NDM.&amp;hl=en&amp;v=dPctOHA2ifhWm5WzFM_B5TjT&amp;size=normal&amp;cb=5ot2oblk8z65" width="304" height="78" role="presentation" name="a-7qluhec9itod" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response-1" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div></div>
    <div class="col-12 mt-2">
    <div class="row">
    <span class="add_home_contact_error" style="color: red"></span>
    <button class="btn text-uppercase btn-submit-modal text-light ml-auto add_home_contact_pop_up_button" type="submit">
    Submit <span class="add_home_contact_pop_up_fa_spin_icon"></span>
    </button>
    </div>
    </div>
    </form>

    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>


@include('footer')


