@include('app')
    <main>
    <img src="https://www.techasoft.com/debug/img/Vector Smart Object30.svg" alt="vector-smart-object" class="back-img img-fluid">

    <section class="about" id="about">
    <div class="container-fluid">
    <div class="row about-img">
    <img src="https://www.techasoft.com/debug/img/Techasoft_Banner.jpg" class="img-fluid" alt="About image">
    <h1 class="text-center">Get to know Techasoft</h1>
    </div>
    </div>

    <div class="container about-info">
    <div class="p-4 about-para">
    <h2 class="text-center pb-2">ABOUT US</h2>
    <p class="text-justify">
    Techasoft Pvt. Ltd. is a fast-growing IT Company that provides holistic IT solutions to
    businesses across geographies
    We offer IT expertise in software, website, and application (iOS &amp; Android) development;
    UI/UX design; and digital marketing. We are situated at around 12 service locations, serving
    businesses belonging to various sectors. So long, we have forayed into healthcare, food
    services, travel &amp; tourism, logistic &amp; shipping, e-commerce, banking, technology,
    manufacturing, and IT-enabled education service industries so far.
    Currently, we have a team of highly skilled IT professionals that work round the clock to
    ensure Techasoft stays true to its offerings &amp; commitments. Our team of experienced experts
    includes software developers, web developers, designers, and digital marketing experts.
    </p>
    </div>
    <div class="p-4 about-difference">
    <h2 class="text-center pb-2">What makes us different? / Why us? / Why Techasoft?</h2>
    <p class="text-justify">
    We, at Techasoft, believe in working in partnerships with our clients. Each of our clients is
    equally important to us and we collaborate, to understand their unique needs and working
    methods. We consistently interact and work together to create intelligent solutions that meet
    our client’s evolving business demands. And thus, provide quick turnarounds by following
    this collaborative style of working. We have been continuously bridging the gap between
    business and technology.
    </p>
    <p class="text-justify">
    We believe that communication is the key and our team of experts always follows this
    principle. We carry out constant communication between team members and clients, ensuring
    transparency. This also enables us to get greater insights as well as trust from all our clients.
    All of our projects are delivered at the stated times and our services come within a rather
    affordable range.
    </p>
    <p class="text-justify">
    Our development process is seamlessly carried out and it follows a systematic approach – We
    begin with signing a Non-Disclosure Agreement (NDA) with the client. Post which process
    and documentation is done. The responsibilities are shared among the team member to ensure
    a timely and smooth progression of the project. Proper scheduling is done of the whole
    process and we also carry out frequent reporting to keep everyone (including the clients)
    within the loop. We have a completely agile approach and get continuous client feedback and
    output, and accordingly change and progress with our development. This is why we can take
    on complex projects that other developers may perceive as difficult, making us one of the
    best software developers out there.
    </p>
    <div class="text-center">
    <a href="https://www.techasoft.com/uploads/Techasoft_Broucher.pdf" class="btn-color-parent" target="_blank">
    <input type="button" value="Download Our Brouchure" class="py-3 px-5 btn-color">
    </a>
    </div>
    </div>
    </div>

    <div class="container-fluid scrolling-about">
    <h3 class="text-center mission-head" onclick="isScrolledIntoView();">Mission</h3>
    <div class="vertical-line">
    <div class="mission aos-init" id="mission" data-aos="fade-right">
    <p class="p-4 mb-0 text-justify">
    Our mission is to provide innovative software solutions for excellence and enterprise
    compliance.
    </p>
    </div>
    <h3 class="text-center mission-head vision-head">Vision</h3>
    <div class="vision aos-init" id="vision" data-aos="fade-left">
    <p class="p-4 text-justify">Our vision is to become businesses’ first choice when it comes to software development and maintenance. To accomplish this, we always try to exceed our client’s expectations. Techasoft strives to build lasting partnerships and ensures client satisfaction.</p>
    </div>
    </div>
    </div>
    <div class="container noscroll-about">
    <div class="row mb-3">
    <div class="col-12 px-0">
    <h3 class="text-center no-mission p-4 mb-0">Mission</h3>
    </div>
    <div class="col-12 px-0">
    <p class="text-justify p-4 mb-0 no-mission-p">
    Our mission is to provide innovative software solutions for excellence and enterprise compliance.
    </p>
    </div>
    </div>
    </div>
    <div class="container noscroll-about">
    <div class="row mb-3">
    <div class="col-12 px-0">
    <h3 class="text-center no-vision p-4 mb-0">Vision</h3>
    </div>
    <div class="col-12 px-0">
    <p class="text-justify p-4 mb-0 no-vission-p">
    Our vision is to become the first choice of businesses when it comes to software development
    and maintenance. To accomplish this, Techasoft strives to exceed our client’s expectations
    and ensure their satisfaction. We believe in building long-lasting partnerships.
    </p>
    </div>
    </div>
    </div>
    </section>
    </main>
    <script>
        AOS.init();
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
    <input hidden="" type="text" value="/about-us" class="form-control" id="usr" name="lead_url" required="">
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
    <input hidden="" type="text" value="/about-us" class="form-control" id="usr" name="lead_url" required="">
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
    <div class="g-recaptcha" data-sitekey="6LfJdP4ZAAAAAHLu7rilqtpQdkdiZo90482PBgLN"><div style="width: 304px; height: 78px;"><div><iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LfJdP4ZAAAAAHLu7rilqtpQdkdiZo90482PBgLN&amp;co=aHR0cHM6Ly93d3cudGVjaGFzb2Z0LmNvbTo0NDM.&amp;hl=en&amp;v=dPctOHA2ifhWm5WzFM_B5TjT&amp;size=normal&amp;cb=sbpie7jmxjqo" width="304" height="78" role="presentation" name="a-vkmholw5z2hx" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div></div>
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
