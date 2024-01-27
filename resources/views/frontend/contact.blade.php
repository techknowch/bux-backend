@extends("layouts.frontend")
@section("content")
<main id="maincontent" class="page-main lowercase-headers" style="padding-top: 0px;">
        <div class="image-section">
            <div class="text-overlay">
                <p>Contact Us</p>
            </div>
        </div>
        <div class="contact-container">

            <section class="ftco-section">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6 text-center mb-5">
                            <h3 style="font-size: 44px">Need Solutions? Expert Consultancy Here</h3>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="wrapper">
                                <div class="row no-gutters">
                                    <div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
                                        <div class="contact-wrap w-100 p-md-5 p-4">
                                            <h3 class="mb-4">Get in touch</h3>
                                            <div id="form-message-warning" class="mb-4"></div>
                                            <div id="form-message-success" class="mb-4">
                                                Your message was sent, thank you!
                                            </div>
                                            <form method="POST" id="contactForm" name="contactForm" class="contactForm"
                                                novalidate="novalidate">
                                                <div class="row">
                                                    <div class="col-md-12" style="padding-bottom: 25px;">
                                                        <div class="form-group">
                                                            <label class="label" for="name">Full Name</label>
                                                            <input type="text" class="form-control" name="name"
                                                                id="name" placeholder="Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12" style="padding-bottom: 25px;">
                                                        <div class="form-group">
                                                            <label class="label" for="email">Email Address</label>
                                                            <input type="email" class="form-control" name="email"
                                                                id="email" placeholder="Email">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12" style="padding-bottom: 25px;">
                                                        <div class="form-group">
                                                            <label class="label" for="subject">Subject</label>
                                                            <input type="text" class="form-control" name="subject"
                                                                id="subject" placeholder="Subject">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12" style="padding-bottom: 25px;">
                                                        <div class="form-group">
                                                            <label class="label" for="#">Message</label>
                                                            <textarea name="message" class="form-control" id="message"
                                                                cols="30" rows="4" placeholder="Message"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input type="submit" value="Send Message"
                                                                class="btn btn-primary">
                                                            <div class="submitting"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-5 d-flex align-items-stretch"
                                        style="background-color: #005EB8;">
                                        <div class="info-wrap bg-primary w-100 p-md-5 p-4">
                                            <h3>Let's get in touch</h3>
                                            <p class="mb-4">We're open for any suggestion or just to have a chat</p>
                                            <div class="dbox w-100 d-flex align-items-start">
                                                <a class="icon" href="https://www.facebook.com">
                                                    <svg width="40px" height="40px"
                                                        viewBox="38.657999999999994 12.828 207.085 207.085"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M158.232 219.912v-94.461h31.707l4.747-36.813h-36.454V65.134c0-10.658 2.96-17.922 18.245-17.922l19.494-.009V14.278c-3.373-.447-14.944-1.449-28.406-1.449-28.106 0-47.348 17.155-47.348 48.661v27.149H88.428v36.813h31.788v94.461l38.016-.001z"
                                                            fill="#fff" />
                                                    </svg>
                                                </a>
                                                <div class="text pl-3">
                                                    <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY
                                                        10016</p>
                                                </div>
                                            </div>
                                            <div class="dbox w-100 d-flex align-items-center">
                                                <a class="icon"
                                                    href="https://www.linkedin.com/in/moeen-uddin-itil-csm-784b395/">
                                                    <svg fill="#fff" version="1.1" id="Capa_1"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="33px"
                                                        height="33px" viewBox="0 0 93.06 93.06" xml:space="preserve">
                                                        <g>
                                                            <g>
                                                                <path
                                                                    d="M11.185,0.08C5.004,0.08,0.001,5.092,0,11.259c0,6.173,5.003,11.184,11.186,11.184c6.166,0,11.176-5.011,11.176-11.184
                                                                                C22.362,5.091,17.351,0.08,11.185,0.08z" />
                                                                <rect x="1.538" y="30.926" width="19.287"
                                                                    height="62.054" />
                                                                <path
                                                                    d="M69.925,29.383c-9.382,0-15.673,5.144-18.248,10.022h-0.258v-8.479H32.921H32.92v62.053h19.27V62.281
                                                                                c0-8.093,1.541-15.932,11.575-15.932c9.89,0,10.022,9.256,10.022,16.451v30.178H93.06V58.942
                                                                                C93.06,42.235,89.455,29.383,69.925,29.383z" />
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </a>

                                                <div class="text pl-3">
                                                    <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="dbox w-100 d-flex align-items-center">
                                                <a class="icon" href="mailto:info@example.com">
                                                    <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M4 7.00005L10.2 11.65C11.2667 12.45 12.7333 12.45 13.8 11.65L20 7"
                                                            stroke="#fff" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <rect x="3" y="5" width="18" height="14" rx="2" stroke="#fff"
                                                            stroke-width="2" stroke-linecap="round" />
                                                    </svg>
                                                </a>
                                                <div class="text pl-3">
                                                    <p><span>Email:</span> <a
                                                            href="mailto:info@yoursite.com">info@yoursite.com</a>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="dbox w-100 d-flex align-items-center">
                                                <a class="icon" href="tel:+15189510353">
                                                    <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M17.3545 22.2323C15.3344 21.7262 11.1989 20.2993 7.44976 16.5502C3.70065 12.8011 2.2738 8.66559 1.76767 6.6455C1.47681 5.48459 2.00058 4.36434 2.88869 3.72997L5.21694 2.06693C6.57922 1.09388 8.47432 1.42407 9.42724 2.80051L10.893 4.91776C11.5152 5.8165 11.3006 7.0483 10.4111 7.68365L9.24234 8.51849C9.41923 9.1951 9.96939 10.5846 11.6924 12.3076C13.4154 14.0306 14.8049 14.5807 15.4815 14.7576L16.3163 13.5888C16.9517 12.6994 18.1835 12.4847 19.0822 13.1069L21.1995 14.5727C22.5759 15.5257 22.9061 17.4207 21.933 18.783L20.27 21.1113C19.6356 21.9994 18.5154 22.5232 17.3545 22.2323ZM8.86397 15.136C12.2734 18.5454 16.0358 19.8401 17.8405 20.2923C18.1043 20.3583 18.4232 20.2558 18.6425 19.9488L20.3056 17.6205C20.6299 17.1665 20.5199 16.5348 20.061 16.2171L17.9438 14.7513L17.0479 16.0056C16.6818 16.5182 16.0047 16.9202 15.2163 16.7501C14.2323 16.5378 12.4133 15.8569 10.2782 13.7218C8.1431 11.5867 7.46219 9.7677 7.24987 8.7837C7.07977 7.9953 7.48181 7.31821 7.99439 6.95208L9.24864 6.05618L7.78285 3.93893C7.46521 3.48011 6.83351 3.37005 6.37942 3.6944L4.05117 5.35744C3.74413 5.57675 3.64162 5.89565 3.70771 6.15943C4.15989 7.96418 5.45459 11.7266 8.86397 15.136Z"
                                                            fill="#fff" />
                                                    </svg>
                                                </a>
                                                <div class="text pl-3">
                                                    <p><span>Website</span> <a href="#">yoursite.com</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection