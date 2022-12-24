@extends('front.layout.master')

@section('title','Home')

@section('body')
<!--Breadcrumb -->
<div class = "container">
    <div class = "row">
        <div class = "col-lg-12">
            <div class = "breadcrumb-text">
                <a href = "index.html">Home</a>
                <span>About Us</span>
            </div>
        </div>
    </div>
</div>

<!-- Banner Header -->
<div id = "banner" style = "background-image: url(img/about-faqs/bannerall.jpg)">
    <div id = "banner-text">
        <h2>About us</h2>
    </div>
</div>

<!-- Main -->
<!-- Main -->
<!-- History -->
<section class = "about-us">
    <div class = "container">
        <div class = "row">
            <div class = "col-lg-6" data-aos="fade-left"
                 data-aos-easing="ease-in-sine">
                <h2>Our History</h2>
                <span class = "underline"></span>
                <div class = "about-text">
                    <p>
                        Our story started with a problem (the best ideas usually do). Some ten years ago, our founder, Jenny Johnson, was furnishing her flat, while she realized the lack of affordable and quality furniture pieces available in the market.
                        So she set out to collaborate with independent designers and makers to create pieces you’ll love, minus the mark-up.
                    </p>
                    <p>
                        In 2010, Jenny got a chance to visit renowned chair manufacturers, Bergen and Bel Air. Surprised by the top-notch quality of their designs,
                        along with the approach they took to protect the environment, she set out to team with them.
                    </p>
                    <p>
                        Yet, they all knew that they lacked something: an organization that suits every taste and need of customers. That was when Bartlett came in with the versatility of a new brand in the industry, the last piece of the puzzle that they all needed.
                        And so Richfield Chairs was born. The destination for creating your dream home.
                    </p>
                </div>
            </div>
            <div class = "col-lg-5 offset-lg-1" data-aos="fade-right"
                 data-aos-easing="ease-in-sine">
                <img src = "img/products/8/intro.jpg">
            </div>
        </div>
    </div>
</section>
<!-- Vision -->
<section class = "about-us">
    <div class = "vision" data-aos="fade-down"
         data-aos-easing="linear"
         data-aos-duration="1500">
        <div class = "container">
            <h2>Our Vision</h2>
            <span class = "underline"></span>
            <p>
                We continue to grow and add to the unique diversity of styles we offer in order to satisfy
                the most discriminating of shoppers. We’re all about the details start to finish.
                By selecting only the finest wood and quality hardware, our woodcrafters
                utilize the best-proven construction techniques to create furniture that is as durable as it is
                beautiful. Each piece is individually crafted, not mass-produced. Our desire is to provide you with the highest quality furniture at the best value.
            </p>
        </div>
    </div>
</section>
<!-- Quote -->
<section class = "about-us">
    <div class = "row quote">
        <div class = "container" data-aos="fade-up"
             data-aos-duration="3000">
            <h2>"When it comes to your home, we believe you can have it all: great design and quality, at an affordable price"</h2>
        </div>
    </div>
</section>
<!-- Our Approach -->
<section class = "about-us">
    <div class = "container">
        <div class = "row">

            <div class = "col-lg-5 order-2 order-lg-1" data-aos="fade-left"
                 data-aos-offset="300"
                 data-aos-easing="ease-in-sine">
                <img src = "img/products/10/intro.jpg">
            </div>
            <div class = "col-lg-6 offset-lg-1 order-1 order-lg-2" data-aos="fade-right"
                 data-aos-offset="300"
                 data-aos-easing="ease-in-sine">
                <h2>Our Approach</h2>
                <span class = "underline"></span>
                <div class = "about-text">
                    <p>
                        We’re taking positive steps to reduce our impact on the planet. For us, that means retailing responsibly. We’ve set a number of goals to get us there.
                    </p>
                    <p>
                        Our commitment to great design has extended into making better business choices that minimise our impact on people and the planet. For 2021, we’re focusing on four key areas where we can really make a difference. This is just the start of our journey, so keep checking back for updates.
                    </p>
                    <p>
                        The way we see it, sustainability begins with responsible sourcing. From making sure our key materials create less environmental impact, through to selecting suppliers aligned with our core values. It’s not simply our business strategy, but our moral obligation.
                    </p>
                    <p>
                        Things like: eliminating all unnecessary plastic from our product packaging, and ensuring that the most environmentally impactful materials we use are 100% sustainably sourced.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Our Community -->
<section class = "about-us">
    <div class = "container">
        <div class = "row">
            <div class = "col-lg-6" data-aos="fade-left"
                 data-aos-offset="300"
                 data-aos-easing="ease-in-sine">
                <h2>Our Community</h2>
                <span class = "underline"></span>
                <div class = "about-text">
                    <p>
                        People are at the heart of what we do, and we’re proud to have created a community as passionate about design as we are. From reviews on our product pages to our 1.2 million Instagram fans, nothing makes us happier than seeing real people sharing our products in their homes.
                    </p>
                </div>
            </div>
            <div class = "col-lg-5 offset-lg-1" data-aos="fade-right"
                 data-aos-offset="300"
                 data-aos-easing="ease-in-sine">
                <img src = "img/about-faqs/community.jpeg">
            </div>

        </div>
    </div>
</section>

<!-- Meet our team -->
<section class = "about-us">
    <div class = "vision">
        <div class = "container">
            <h2>Meet our team</h2>
            <span class = "underline"></span>
            <div class = "row team" data-aos="fade-up">
                <div class = "col-lg-4 founder-info order-lg-1 order-1" data-aos="fade-left">
                    <div class="founder-pic">
                        <div class = "pic-overlay">
                            <p>Connect with Ha Linh</p>
                            <ul>
                                <li class="w-icon mail-icon"><a href="mailto:dohalinh2303@gmail.com">
                                    <i class="fa fa-envelope"></i></a></li>
                                <li class="w-icon fb-icon"><a href="https://www.facebook.com/profile.php?id=100056048947923">
                                    <i class="ti-facebook"></i></a></li>
                                <li class="w-icon twit-icon"><a href=""><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <img src = "img/about-faqs/founder1-01.png">
                    </div>
                </div>
                <div class = "col-lg-8 order-lg-2 order-2" data-aos="fade-right">
                    <div class = "founder-text">
                        <h3>Ha Linh</h3>
                        <p>Leader</p>
                        <p>
                            Ha Linh has been creative her whole life – and after a trip to Paris aged 17, she realised her calling: illustration and object design. After studying Product Design and Interior Architecture, she launched her own namesake studio, where she’s worked on award-winning projects and collaborations.
                        </p>
                    </div>
                </div>
            </div>
            <div class = "row team" data-aos="fade-up">
                <div class = "col-lg-4 founder-info order-lg-2 order-1" data-aos="fade-right">
                    <div class="founder-pic">
                        <div class = "pic-overlay">
                            <p>Connect with Nguyet Cam</p>
                            <ul>
                                <li class="w-icon mail-icon"><a href="mailto:camvcnth2108013@fpt.edu.vn">
                                    <i class="fa fa-envelope"></i></a></li>
                                <li class="w-icon fb-icon"><a href="https://www.facebook.com/sen.1712/">
                                    <i class="ti-facebook"></i></a></li>
                                <li class="w-icon twit-icon"><a href=""><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <img src = "img/about-faqs/founder2-01.png">
                    </div>
                </div>
                <div class = "col-lg-8 order-lg-1 order-2" data-aos="fade-left">
                    <div class = "founder-text">
                        <h3>Nguyet Cam</h3>
                        <p>Member</p>
                        <p>
                            Balancing function with aesthetics, it all makes sense to Nguyet Cam. Founding her own studio in 2012, Cam has always been fascinated by creative activities. It makes sense that as a little girl, she often took on the task of redecorating her bedroom. And why now, her designs feature details that will definitely surprise.
                        </p>
                    </div>
                </div>
            </div>
            <div class = "row team" data-aos="fade-up">
                <div class = "col-lg-4 founder-info order-lg-1 order-1" data-aos="fade-left">
                    <div class="founder-pic">
                        <div class = "pic-overlay">
                            <p>Connect with Le Cuong</p>
                            <ul>
                                <li class="w-icon mail-icon"><a href="mailto:cuonglpth2108001@fpt.edu.vn">
                                    <i class="fa fa-envelope"></i></a></li>
                                <li class="w-icon fb-icon"><a href="https://www.facebook.com/lpc2k3">
                                    <i class="ti-facebook"></i></a></li>
                                <li class="w-icon twit-icon"><a href=""><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <img src = "img/about-faqs/founder3-01.png">
                    </div>
                </div>
                <div class = "col-lg-8 order-lg-2 order-2" data-aos="fade-right">
                    <div class = "founder-text">
                        <h3>Le Cuong</h3>
                        <p>Member</p>
                        <p>
                            There isn’t much of the design world Le Cuong hasn’t explored – and he's done it all over the globe. From working with small studios to multinational retailers, doing everything from leading product development to working on sourcing and strategy, Cuong’s passion for design comes from a love of art and science. His pieces are a perfect blend of the two.
                        </p>
                    </div>
                </div>
            </div>
            <div class = "row team" data-aos="fade-up">
                <div class = "col-lg-4 founder-info order-lg-2 order-1" data-aos="fade-right">
                    <div class="founder-pic">
                        <div class = "pic-overlay">
                            <p>Connect with Duc Duy</p>
                            <ul>
                                <li class="w-icon mail-icon"><a href="mailto:duyldth2106007@fpt.edu.vn">
                                    <i class="fa fa-envelope"></i></a></li>
                                <li class="w-icon fb-icon"><a href="https://www.facebook.com/germanduy.10.11.99">
                                    <i class="ti-facebook"></i></a></li>
                                <li class="w-icon twit-icon"><a href=""><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <img src = "img/about-faqs/founder4-01.png">
                    </div>
                </div>
                <div class = "col-lg-8 order-lg-1 order-2" data-aos="fade-left">
                    <div class = "founder-text">
                        <h3>Duc Duy</h3>
                        <p>Member</p>
                        <p>
                            Duc Duy is originally from Vietnam, moving to London to study product and furniture design. His signature aesthetic is minimal, modern and emotive. And he believes great design should be useful, as well as beautiful.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
