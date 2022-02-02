@include('app')
    <style type="text/css">
        /*@import url(//fonts.googleapis.com/css?family=Lato:300:400);

        body {
            margin:0;
        }

        h1 {
            font-family: 'Lato', sans-serif;
            font-weight:300;
            letter-spacing: 2px;
            font-size:48px;
        }
        p {
            font-family: 'Lato', sans-serif;
            letter-spacing: 1px;
            font-size:14px;
            color: #333333;
        }
    */
        .header {
            position:relative;
            text-align:center;
            background: linear-gradient(60deg, rgba(84,58,183,1) 0%, rgba(0,172,193,1) 100%);
            /*background: linear-gradient(60deg, rgba(84,58,183,1) 0%, #035ca7 100%);*/
            color:white;
            /* margin-top: 70px;*/
        }
        .logo {
            width:50px;
            fill:white;
            padding-right:15px;
            display:inline-block;
            vertical-align: middle;
        }

        .inner-header {
            height:19vh;
            width:100%;
            margin: 0;
            padding: 0;
        }

        .flex { /*Flexbox for containers*/
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .waves {
            position:relative;
            width: 100%;
            height:15vh;
            margin-bottom:-7px; /*Fix for safari gap*/
            min-height:100px;
            max-height:150px;
        }

        .content {
            position:relative;
            height:20vh;
            text-align:center;
            background-color: white;
        }

        /* Animation */

        .parallax > use {
            animation: move-forever 25s cubic-bezier(.55,.5,.45,.5)     infinite;
        }
        .parallax > use:nth-child(1) {
            animation-delay: -2s;
            animation-duration: 7s;
        }
        .parallax > use:nth-child(2) {
            animation-delay: -3s;
            animation-duration: 10s;
        }
        .parallax > use:nth-child(3) {
            animation-delay: -4s;
            animation-duration: 13s;
        }
        .parallax > use:nth-child(4) {
            animation-delay: -5s;
            animation-duration: 20s;
        }
        @keyframes move-forever {
            0% {
                transform: translate3d(-90px,0,0);
            }
            100% {
                transform: translate3d(85px,0,0);
            }
        }
        @media (max-width: 1024px) {
            .inner-header {
                height: 25vh;
            }
        }
        /*Shrinking for mobile*/
        @media (max-width: 768px) {
            .waves {
                height:40px;
                min-height:40px;
            }
            .content {
                height:30vh;
            }
            h1 {
                font-size:24px;
            }
        }
    </style>
    <main class="blogs">
    <div class="header">

    <div class="inner-header flex">
    <h1 class="text-uppercase">Blogs</h1>
    </div>

    <div>
    <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
    <defs>
    <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
    </defs>
    <g class="parallax">
    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7"></use>
    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)"></use>
    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)"></use>
    <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff"></use>
    </g>
    </svg>
    </div>

    </div>
    <div class="container-fluid">
    <div class="row">

    <div class="col-lg-8 pt-4 px-5">
    <div class="row allList" id="allList">
    {{-- <div class="col-md-4 px-2 py-3"><div class="card all-blog-cards" style="height: 525px"> <a href="https://www.techasoft.com/post/how-to-improve-and-upgrade-your-seo-strategy"><img class="blog_sec_img img-fluid" src="blog/2022/01/1643618402.jpg" alt="How To Improve And Upgrade Your SEO Strategy?"></a><div class="card-body all-card-box p-2"><div class="category blogs"><a href="https://www.techasoft.com/post/how-to-improve-and-upgrade-your-seo-strategy" style="font-size:13px"> Digital Marketing</a><p class="date meta-last">28-01-2022</p></div><div class="card-title blog_title mb-0" style="height: 130px"><a href="https://www.techasoft.com/post/how-to-improve-and-upgrade-your-seo-strategy"><h3 class="blog-titles mb-0 font-weight-bold" style="color: #000000;text-align: justify; height:60px"> How To Improve And Upgrade Your SEO Strategy?</h3></a><p class="mb-0" style="font-size: 14px;text-align: justify">How to modify and upgrade the SEO ranking through an efficient SEO strategy in 2022?

    Well, you need to upgrade your (Search Engine Optimization) SEO strategy for better results....</p></div><div class="row sharelinks-blogs"><div class="col-12" style="text-align: right"><a href="https://www.facebook.com/sharer/sharer.php?u=https://www.techasoft.com/post/how-to-improve-and-upgrade-your-seo-strategy" target="_blank"><img src="https://www.techasoft.com/debug/img/facebook_blog.svg" alt="" class="blog_social_media_icons pr-2 w-75"></a><a href="http://www.twitter.com/intent/tweet?url=https://www.techasoft.com/post/how-to-improve-and-upgrade-your-seo-strategy&amp;text=How To Improve And Upgrade Your SEO Strategy?" target="_blank"><img src="https://www.techasoft.com/debug/img/twitter_blog.svg" alt="" class="blog_social_media_icons pr-2 w-75"></a><a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://www.techasoft.com/post/how-to-improve-and-upgrade-your-seo-strategy&amp;title=How To Improve And Upgrade Your SEO Strategy?&amp;source=SushantTravels" target="_blank"><img src="https://www.techasoft.com/debug/img/linkedin.svg" alt="" class="blog_social_media_icons pr-2 w-75"></a></div></div></div></div>
</div>
<div class="col-md-4 px-2 py-3"><div class="card all-blog-cards" style="height: 525px"> <a href="https://www.techasoft.com/post/the-ultimate-guide-to-creating-a-google-my-business-account"><img class="blog_sec_img img-fluid" src="blog/2022/01/1643618449.jpg" alt="The Ultimate Guide To Creating A Google My Business Account"></a><div class="card-body all-card-box p-2"><div class="category blogs"><a href="https://www.techasoft.com/post/the-ultimate-guide-to-creating-a-google-my-business-account" style="font-size:13px"> Digital Marketing</a><p class="date meta-last">28-01-2022</p></div><div class="card-title blog_title mb-0" style="height: 130px"><a href="https://www.techasoft.com/post/the-ultimate-guide-to-creating-a-google-my-business-account"><h3 class="blog-titles mb-0 font-weight-bold" style="color: #000000;text-align: justify; height:60px"> The Ultimate Guide To Creating A Google My Business Account</h3></a><p class="mb-0" style="font-size: 14px;text-align: justify">What is Google My Business?

    GMB [Google My Business] is a free service that allows you to control how your company appears in Google Search and Maps. It includes things like add...</p></div><div class="row sharelinks-blogs"><div class="col-12" style="text-align: right"><a href="https://www.facebook.com/sharer/sharer.php?u=https://www.techasoft.com/post/the-ultimate-guide-to-creating-a-google-my-business-account" target="_blank"><img src="https://www.techasoft.com/debug/img/facebook_blog.svg" alt="" class="blog_social_media_icons pr-2 w-75"></a><a href="http://www.twitter.com/intent/tweet?url=https://www.techasoft.com/post/the-ultimate-guide-to-creating-a-google-my-business-account&amp;text=The Ultimate Guide To Creating A Google My Business Account" target="_blank"><img src="https://www.techasoft.com/debug/img/twitter_blog.svg" alt="" class="blog_social_media_icons pr-2 w-75"></a><a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://www.techasoft.com/post/the-ultimate-guide-to-creating-a-google-my-business-account&amp;title=The Ultimate Guide To Creating A Google My Business Account&amp;source=SushantTravels" target="_blank"><img src="https://www.techasoft.com/debug/img/linkedin.svg" alt="" class="blog_social_media_icons pr-2 w-75"></a></div></div></div></div>
</div>
<div class="col-md-4 px-2 py-3"><div class="card all-blog-cards" style="height: 525px"> <a href="https://www.techasoft.com/post/top-50-it-companies-in-saudi-arabia"><img class="blog_sec_img img-fluid" src="blog/2022/01/1643379421.jpg" alt="Top 50 IT Companies In Saudi Arabia"></a><div class="card-body all-card-box p-2"><div class="category blogs"><a href="https://www.techasoft.com/post/top-50-it-companies-in-saudi-arabia" style="font-size:13px"> Software Development</a><p class="date meta-last">27-01-2022</p></div><div class="card-title blog_title mb-0" style="height: 130px"><a href="https://www.techasoft.com/post/top-50-it-companies-in-saudi-arabia"><h3 class="blog-titles mb-0 font-weight-bold" style="color: #000000;text-align: justify; height:60px"> Top 50 IT Companies In Saudi Arabia</h3></a><p class="mb-0" style="font-size: 14px;text-align: justify">Nowadays, everyone is entering into businesses. While doing an online business we have to accumulate proper research and then set the targets. But to achieve such a target with the...</p></div><div class="row sharelinks-blogs"><div class="col-12" style="text-align: right"><a href="https://www.facebook.com/sharer/sharer.php?u=https://www.techasoft.com/post/top-50-it-companies-in-saudi-arabia" target="_blank"><img src="https://www.techasoft.com/debug/img/facebook_blog.svg" alt="" class="blog_social_media_icons pr-2 w-75"></a><a href="http://www.twitter.com/intent/tweet?url=https://www.techasoft.com/post/top-50-it-companies-in-saudi-arabia&amp;text=Top 50 IT Companies In Saudi Arabia" target="_blank"><img src="https://www.techasoft.com/debug/img/twitter_blog.svg" alt="" class="blog_social_media_icons pr-2 w-75"></a><a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://www.techasoft.com/post/top-50-it-companies-in-saudi-arabia&amp;title=Top 50 IT Companies In Saudi Arabia&amp;source=SushantTravels" target="_blank"><img src="https://www.techasoft.com/debug/img/linkedin.svg" alt="" class="blog_social_media_icons pr-2 w-75"></a></div></div></div></div>
</div>
<div class="col-md-4 px-2 py-3"><div class="card all-blog-cards" style="height: 525px"> <a href="https://www.techasoft.com/post/top-30-mobile-app-development-companies-in-chandigarh"><img class="blog_sec_img img-fluid" src="blog/2022/01/1643379404.jpg" alt="Top 30 Mobile App Development Companies In Chandigarh"></a><div class="card-body all-card-box p-2"><div class="category blogs"><a href="https://www.techasoft.com/post/top-30-mobile-app-development-companies-in-chandigarh" style="font-size:13px"> Mobile App Development</a><p class="date meta-last">27-01-2022</p></div><div class="card-title blog_title mb-0" style="height: 130px"><a href="https://www.techasoft.com/post/top-30-mobile-app-development-companies-in-chandigarh"><h3 class="blog-titles mb-0 font-weight-bold" style="color: #000000;text-align: justify; height:60px"> Top 30 Mobile App Development Companies In Chandigarh</h3></a><p class="mb-0" style="font-size: 14px;text-align: justify">Technology is advancing at an alarming rate. We are also adapting to technology in our daily lives. Technology advancement thereby leads to the growth of the digital world. Mobile ...</p></div><div class="row sharelinks-blogs"><div class="col-12" style="text-align: right"><a href="https://www.facebook.com/sharer/sharer.php?u=https://www.techasoft.com/post/top-30-mobile-app-development-companies-in-chandigarh" target="_blank"><img src="https://www.techasoft.com/debug/img/facebook_blog.svg" alt="" class="blog_social_media_icons pr-2 w-75"></a><a href="http://www.twitter.com/intent/tweet?url=https://www.techasoft.com/post/top-30-mobile-app-development-companies-in-chandigarh&amp;text=Top 30 Mobile App Development Companies In Chandigarh" target="_blank"><img src="https://www.techasoft.com/debug/img/twitter_blog.svg" alt="" class="blog_social_media_icons pr-2 w-75"></a><a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://www.techasoft.com/post/top-30-mobile-app-development-companies-in-chandigarh&amp;title=Top 30 Mobile App Development Companies In Chandigarh&amp;source=SushantTravels" target="_blank"><img src="https://www.techasoft.com/debug/img/linkedin.svg" alt="" class="blog_social_media_icons pr-2 w-75"></a></div></div></div></div>
</div>
<div class="col-md-4 px-2 py-3"><div class="card all-blog-cards" style="height: 525px"> <a href="https://www.techasoft.com/post/top-30-mobile-app-development-companies-in-bhopal"><img class="blog_sec_img img-fluid" src="blog/2022/01/1643618501.jpg" alt="Top 30 Mobile App Development Companies In Bhopal"></a><div class="card-body all-card-box p-2"><div class="category blogs"><a href="https://www.techasoft.com/post/top-30-mobile-app-development-companies-in-bhopal" style="font-size:13px"> Mobile App Development</a><p class="date meta-last">27-01-2022</p></div><div class="card-title blog_title mb-0" style="height: 130px"><a href="https://www.techasoft.com/post/top-30-mobile-app-development-companies-in-bhopal"><h3 class="blog-titles mb-0 font-weight-bold" style="color: #000000;text-align: justify; height:60px"> Top 30 Mobile App Development Companies In Bhopal</h3></a><p class="mb-0" style="font-size: 14px;text-align: justify">Phones are crucial for the current age as digital change has developed its wings more than ever. There is no better time than the present for associations to recognize this change ...</p></div><div class="row sharelinks-blogs"><div class="col-12" style="text-align: right"><a href="https://www.facebook.com/sharer/sharer.php?u=https://www.techasoft.com/post/top-30-mobile-app-development-companies-in-bhopal" target="_blank"><img src="https://www.techasoft.com/debug/img/facebook_blog.svg" alt="" class="blog_social_media_icons pr-2 w-75"></a><a href="http://www.twitter.com/intent/tweet?url=https://www.techasoft.com/post/top-30-mobile-app-development-companies-in-bhopal&amp;text=Top 30 Mobile App Development Companies In Bhopal" target="_blank"><img src="https://www.techasoft.com/debug/img/twitter_blog.svg" alt="" class="blog_social_media_icons pr-2 w-75"></a><a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://www.techasoft.com/post/top-30-mobile-app-development-companies-in-bhopal&amp;title=Top 30 Mobile App Development Companies In Bhopal&amp;source=SushantTravels" target="_blank"><img src="https://www.techasoft.com/debug/img/linkedin.svg" alt="" class="blog_social_media_icons pr-2 w-75"></a></div></div></div></div>
</div>
<div class="col-md-4 px-2 py-3"><div class="card all-blog-cards" style="height: 525px"> <a href="https://www.techasoft.com/post/software-for-work-productivity-how-you-can-use-them-effectively"><img class="blog_sec_img img-fluid" src="blog/2022/01/1643618540.jpg" alt="Software For Work Productivity: How You Can Use Them Effectively?"></a><div class="card-body all-card-box p-2"><div class="category blogs"><a href="https://www.techasoft.com/post/software-for-work-productivity-how-you-can-use-them-effectively" style="font-size:13px"> Software Development</a><p class="date meta-last">25-01-2022</p></div><div class="card-title blog_title mb-0" style="height: 130px"><a href="https://www.techasoft.com/post/software-for-work-productivity-how-you-can-use-them-effectively"><h3 class="blog-titles mb-0 font-weight-bold" style="color: #000000;text-align: justify; height:60px"> Software For Work Productivity: How You Can Use Them Effectively?</h3></a><p class="mb-0" style="font-size: 14px;text-align: justify">The only competitor of yours is yourself. You have to look for new ways to improve yourselves on a daily basis. That is why developing a new set of skills; increasing productivity ...</p></div><div class="row sharelinks-blogs"><div class="col-12" style="text-align: right"><a href="https://www.facebook.com/sharer/sharer.php?u=https://www.techasoft.com/post/software-for-work-productivity-how-you-can-use-them-effectively" target="_blank"><img src="https://www.techasoft.com/debug/img/facebook_blog.svg" alt="" class="blog_social_media_icons pr-2 w-75"></a><a href="http://www.twitter.com/intent/tweet?url=https://www.techasoft.com/post/software-for-work-productivity-how-you-can-use-them-effectively&amp;text=Software For Work Productivity: How You Can Use Them Effectively?" target="_blank"><img src="https://www.techasoft.com/debug/img/twitter_blog.svg" alt="" class="blog_social_media_icons pr-2 w-75"></a><a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://www.techasoft.com/post/software-for-work-productivity-how-you-can-use-them-effectively&amp;title=Software For Work Productivity: How You Can Use Them Effectively?&amp;source=SushantTravels" target="_blank"><img src="https://www.techasoft.com/debug/img/linkedin.svg" alt="" class="blog_social_media_icons pr-2 w-75"></a></div></div></div></div>
</div>
<div class="col-md-4 px-2 py-3"><div class="card all-blog-cards" style="height: 525px"> <a href="https://www.techasoft.com/post/what-can-you-do-with-a-software-engineering-degree"><img class="blog_sec_img img-fluid" src="blog/2022/01/1643112728.jpg" alt="What Can You Do With A Software Engineering Degree?"></a><div class="card-body all-card-box p-2"><div class="category blogs"><a href="https://www.techasoft.com/post/what-can-you-do-with-a-software-engineering-degree" style="font-size:13px"> Software Development</a><p class="date meta-last">25-01-2022</p></div><div class="card-title blog_title mb-0" style="height: 130px"><a href="https://www.techasoft.com/post/what-can-you-do-with-a-software-engineering-degree"><h3 class="blog-titles mb-0 font-weight-bold" style="color: #000000;text-align: justify; height:60px"> What Can You Do With A Software Engineering Degree?</h3></a><p class="mb-0" style="font-size: 14px;text-align: justify">What is software engineering?

    Software engineering is the process of examining the user's requirements and then implementing and designing the integrated software applicatio...</p></div><div class="row sharelinks-blogs"><div class="col-12" style="text-align: right"><a href="https://www.facebook.com/sharer/sharer.php?u=https://www.techasoft.com/post/what-can-you-do-with-a-software-engineering-degree" target="_blank"><img src="https://www.techasoft.com/debug/img/facebook_blog.svg" alt="" class="blog_social_media_icons pr-2 w-75"></a><a href="http://www.twitter.com/intent/tweet?url=https://www.techasoft.com/post/what-can-you-do-with-a-software-engineering-degree&amp;text=What Can You Do With A Software Engineering Degree?" target="_blank"><img src="https://www.techasoft.com/debug/img/twitter_blog.svg" alt="" class="blog_social_media_icons pr-2 w-75"></a><a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://www.techasoft.com/post/what-can-you-do-with-a-software-engineering-degree&amp;title=What Can You Do With A Software Engineering Degree?&amp;source=SushantTravels" target="_blank"><img src="https://www.techasoft.com/debug/img/linkedin.svg" alt="" class="blog_social_media_icons pr-2 w-75"></a></div></div></div></div>
</div>
<div class="col-md-4 px-2 py-3"><div class="card all-blog-cards" style="height: 525px"> <a href="https://www.techasoft.com/post/what-is-full-stack-web-development-and-why-is-it-important-to-learn"><img class="blog_sec_img img-fluid" src="blog/2022/01/1643112675.jpg" alt="What Is Full Stack Web Development And Why Is It Important To Learn?"></a><div class="card-body all-card-box p-2"><div class="category blogs"><a href="https://www.techasoft.com/post/what-is-full-stack-web-development-and-why-is-it-important-to-learn" style="font-size:13px"> Website Development</a><p class="date meta-last">24-01-2022</p></div><div class="card-title blog_title mb-0" style="height: 130px"><a href="https://www.techasoft.com/post/what-is-full-stack-web-development-and-why-is-it-important-to-learn"><h3 class="blog-titles mb-0 font-weight-bold" style="color: #000000;text-align: justify; height:60px"> What Is Full Stack Web Development And Why Is It Important To Learn?</h3></a><p class="mb-0" style="font-size: 14px;text-align: justify">Full-stack web developers are probably the most exceptionally respected experts inside the field of web advancement. However, what is a full-stack developer? As a general rule, web...</p></div><div class="row sharelinks-blogs"><div class="col-12" style="text-align: right"><a href="https://www.facebook.com/sharer/sharer.php?u=https://www.techasoft.com/post/what-is-full-stack-web-development-and-why-is-it-important-to-learn" target="_blank"><img src="https://www.techasoft.com/debug/img/facebook_blog.svg" alt="" class="blog_social_media_icons pr-2 w-75"></a><a href="http://www.twitter.com/intent/tweet?url=https://www.techasoft.com/post/what-is-full-stack-web-development-and-why-is-it-important-to-learn&amp;text=What Is Full Stack Web Development And Why Is It Important To Learn?" target="_blank"><img src="https://www.techasoft.com/debug/img/twitter_blog.svg" alt="" class="blog_social_media_icons pr-2 w-75"></a><a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://www.techasoft.com/post/what-is-full-stack-web-development-and-why-is-it-important-to-learn&amp;title=What Is Full Stack Web Development And Why Is It Important To Learn?&amp;source=SushantTravels" target="_blank"><img src="https://www.techasoft.com/debug/img/linkedin.svg" alt="" class="blog_social_media_icons pr-2 w-75"></a></div></div></div></div>
</div>
<div class="col-md-4 px-2 py-3"><div class="card all-blog-cards" style="height: 525px"> <a href="https://www.techasoft.com/post/what-skills-are-required-to-become-a-full-stack-developer"><img class="blog_sec_img img-fluid" src="blog/2022/01/1643026147.jpg" alt="What Skills Are Required To Become A Full Stack Developer?"></a><div class="card-body all-card-box p-2"><div class="category blogs"><a href="https://www.techasoft.com/post/what-skills-are-required-to-become-a-full-stack-developer" style="font-size:13px"> Technology</a><p class="date meta-last">22-01-2022</p></div><div class="card-title blog_title mb-0" style="height: 130px"><a href="https://www.techasoft.com/post/what-skills-are-required-to-become-a-full-stack-developer"><h3 class="blog-titles mb-0 font-weight-bold" style="color: #000000;text-align: justify; height:60px"> What Skills Are Required To Become A Full Stack Developer?</h3></a><p class="mb-0" style="font-size: 14px;text-align: justify">In the realm of programming, it helps with having someone in the gathering who's something of a jack of all trades. They can help with various moderate stages and have the flex...</p></div><div class="row sharelinks-blogs"><div class="col-12" style="text-align: right"><a href="https://www.facebook.com/sharer/sharer.php?u=https://www.techasoft.com/post/what-skills-are-required-to-become-a-full-stack-developer" target="_blank"><img src="https://www.techasoft.com/debug/img/facebook_blog.svg" alt="" class="blog_social_media_icons pr-2 w-75"></a><a href="http://www.twitter.com/intent/tweet?url=https://www.techasoft.com/post/what-skills-are-required-to-become-a-full-stack-developer&amp;text=What Skills Are Required To Become A Full Stack Developer?" target="_blank"><img src="https://www.techasoft.com/debug/img/twitter_blog.svg" alt="" class="blog_social_media_icons pr-2 w-75"></a><a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://www.techasoft.com/post/what-skills-are-required-to-become-a-full-stack-developer&amp;title=What Skills Are Required To Become A Full Stack Developer?&amp;source=SushantTravels" target="_blank"><img src="https://www.techasoft.com/debug/img/linkedin.svg" alt="" class="blog_social_media_icons pr-2 w-75"></a></div></div></div></div>
</div> --}}
</div>
    <div class="row justify-content-center pb-5 read_more_blog_button">
    <button type="button" class="btn btn-info" onclick="read_more_blog();">
    Read More
    </button>
    </div>
    </div>
    <aside class="col-lg-4 widget-listing">

    <div class="widget search">
    <header>
    <h3 class="h6">Search the blog</h3>
    </header>
    <form action="#" class="search-form">
    <div class="form-group">
    <input type="search" id="searchData" class="form-control" onkeyup="allBlogs();" value="" placeholder="What are you looking for?">
    <button type="submit" class="submit"><i class="icon-search"></i></button>
    </div>
    </form>
    </div>

    <div class="widget latest-posts">
    <header>
    <h3 class="h6">Latest Posts</h3>
    </header>
    {{-- <div class="blog-posts"><a href="post/how-to-improve-and-upgrade-your-seo-strategy">
    <div class="item d-flex align-items-center">
    <div class="image"><img src="blog/2022/01/1643618402.jpg" alt="..." class="img-fluid"></div>
    <div class="title"><strong>How To Improve And Upgrade Your SEO Strategy?</strong>
    </div>
    </div>
    </a>
    </div>
    <div class="blog-posts"><a href="post/the-ultimate-guide-to-creating-a-google-my-business-account">
    <div class="item d-flex align-items-center">
    <div class="image"><img src="blog/2022/01/1643618449.jpg" alt="..." class="img-fluid"></div>
    <div class="title"><strong>The Ultimate Guide To Creating A Google My Business Account</strong>
    </div>
    </div>
    </a>
    </div>
    <div class="blog-posts"><a href="post/top-50-it-companies-in-saudi-arabia">
    <div class="item d-flex align-items-center">
    <div class="image"><img src="blog/2022/01/1643379421.jpg" alt="..." class="img-fluid"></div>
    <div class="title"><strong>Top 50 IT Companies In Saudi Arabia</strong>
    </div>
    </div>
    </a>
    </div>
     <div class="blog-posts"><a href="post/top-30-mobile-app-development-companies-in-chandigarh">
    <div class="item d-flex align-items-center">
    <div class="image"><img src="blog/2022/01/1643379404.jpg" alt="..." class="img-fluid"></div>
    <div class="title"><strong>Top 30 Mobile App Development Companies In Chandigarh</strong>
    </div>
    </div>
    </a>
    </div> --}}
    </div>
    </aside>
    </div>
    </div>
    </main>
    <script type="text/javascript">


        var controller = 'Welcome';
        var base_url = 'https://www.techasoft.com/';
        var page =1;

        /*Blog List*/
        function allBlogs(){
            limit=$('#limit').val();
            searchStatus=$('#searchStatus').val();
            searchData=$('#searchData').val();

            $.ajax({
                'url': base_url + controller + '/blogAjaxList/'+page,
                'type': 'POST', //the way you want to send data to your URL
                'dataType': "json",
                data:{
                    'limit':9,
                    'searchStatus':searchStatus,
                    'searchData':searchData,

                },
                'success': function (data) { //probably this request will return anything, it'll be put in var "data"
                    if(data.status == 200) {
                        $('#pagination').html(data.pagination);
                        $('.allList').append(data.data);

                    }else{
                        $('#pagination').html('');
                        $('.allList').append(data.data);
                        $('.read_more_blog_button').hide();
                    }

                }
            });

        }
        allBlogs();

        function read_more_blog(){
            page = page + 1;
            allBlogs();
        }

        /*Blog Pagination */
        $(document).on("click", ".pagination li a", function(event){
            event.preventDefault();
            page = $(this).data("ci-pagination-page");
            allBlogs();
        });
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
    <input hidden="" type="text" value="/blogs" class="form-control" id="usr" name="lead_url" required="">
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
    <input hidden="" type="text" value="/blogs" class="form-control" id="usr" name="lead_url" required="">
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
    <div class="g-recaptcha" data-sitekey="6LfJdP4ZAAAAAHLu7rilqtpQdkdiZo90482PBgLN"><div style="width: 304px; height: 78px;"><div><iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LfJdP4ZAAAAAHLu7rilqtpQdkdiZo90482PBgLN&amp;co=aHR0cHM6Ly93d3cudGVjaGFzb2Z0LmNvbTo0NDM.&amp;hl=en&amp;v=dPctOHA2ifhWm5WzFM_B5TjT&amp;size=normal&amp;cb=y6b9qfl6xm7p" width="304" height="78" role="presentation" name="a-42jrrldjz1vf" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div></div>
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


