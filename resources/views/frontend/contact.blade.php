@extends("layouts.frontend") @section("content") <main id="maincontent" class="page-main lowercase-headers" style="padding-top: 0px;">
  <div class="image-section">
    <div class="text-overlay">
      <p>Contact Us</p>
    </div>
  </div>
  <div class="contact-container">
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center mb-5">
            <h3 style="font-size: 44px">Need Solutions? Expert Consultancy Here</h3>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-12">
            <div class="wrapper">
              <div class="row no-gutters">
                <div class="col-lg-6 order-md-last d-flex align-items-stretch">
                  <div class="contact-wrap w-100 p-md-5 p-4">
                    <h3 class="mb-4">Get in touch</h3>
                    <div id="form-message-warning" class="mb-4"></div>
                    <div id="form-message-success" class="mb-4"> Your message was sent, thank you! </div>
                    <form action="{{ route('consultation.store') }}" method="POST" id="contactForm" name="contactForm" class="contactForm" novalidate="novalidate">
                    @csrf
                      <div class="row">
                        <div class="col-lg-6" style="padding-bottom: 25px;">
                          <div class="form-group">
                            <label class="label" for="name">First Name</label>
                            <input type="text" class="form-control" name="first_name" id="name" required placeholder="First Name" />
                          </div>
                        </div>
                        <div class="col-lg-6" style="padding-bottom: 25px;">
                          <div class="form-group">
                            <label class="label" for="last_name">Last Name</label>
                            <input type="text" class="form-control" name="last_name" id="last_name" required placeholder="Last Name">
                          </div>
                        </div>
                        <div class="col-lg-6" style="padding-bottom: 25px;">
                          <div class="form-group">
                            <label class="label" for="email">Email Address</label>
                            <input type="email" class="form-control" name="email" id="email" required placeholder="Email" />
                          </div>
                        </div>
                        <div class="col-lg-6" style="padding-bottom: 25px;">
                          <div class="form-group">
                            <label class="label" for="phone">Phone</label>
                            <input type="number" class="form-control" name="phone_number" id="phone" placeholder="Phone Number" required>
                          </div>
                        </div>
                        <div class="col-lg-12" style="padding-bottom: 25px;">
                          <div class="form-group">
                            <label class="label" for="subject">Subject</label>
                            <select name="service_type" id="" required>
                            <option value="" selected disabled>Service Type</option>
                            <option value="IT Management Consultancy">IT Management Consultancy</option>
                            <option value="IT Resourcing">IT Resourcing</option>
                            <option value="Cybersecurity">Cybersecurity</option>
                            <option value="Artificial Intelligence">Artificial Intelligence</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-12" style="padding-bottom: 25px;">
                          <div class="form-group">
                            <label class="label" for="#">Message</label>
                            <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message" required></textarea>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary">
                            <div class="submitting"></div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-lg-6 col-md-5 d-flex align-items-stretch" style="background-color: #005EB8;">
                  <div class="info-wrap bg-primary w-100 p-md-5 p-4">
                    <h3>Let's get in touch</h3>
                    <p class="mb-4">We're open for any suggestion or just to have a chat</p>
                    <div class="dbox w-100 d-flex align-items-start">
                      <a class="icon" href="https://www.facebook.com">
                        <svg version="1.1" id="svg1" width="18" height="18" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
                          <defs id="defs1"></defs>
                          <g id="g1">
                            <path style="fill:#ffffff;stroke:none" d="M 246,0.42437744 C 220.59013,3.7606812 196.77753,8.1548767 174,20.861877 156.09927,30.848236 140.51309,43.693756 126.94984,59 c -10.43287,11.77359 -18.40768,24.907623 -25.20832,39 -18.774571,38.90491 -21.267063,85.00919 -7.996151,126 6.552081,20.23788 17.768521,38.46259 27.949071,57 15.40094,28.04303 30.85865,56.06058 46.44522,84 20.96817,37.58612 42.03957,75.1629 62.5517,113 4.90762,9.0527 13.57582,35.01837 26.30864,33.74304 11.12222,-1.11401 18.70358,-23.06463 23.2554,-31.74304 17.13761,-32.67413 35.62912,-64.77768 53.60495,-97 17.44473,-31.27029 34.55524,-62.72961 52,-94 C 401.37253,261.19385 418.21622,233.85068 423.75,202 439.04459,113.96936 384.50912,26.998047 297,5.1265564 280.94498,1.1138611 262.53879,-1.7471313 246,0.42437744 M 254,85.30014 C 305.423,80.492584 345.47733,131.97986 340.83023,180 336.89917,220.62115 302.99561,252.00864 263,255.83023 198.84973,261.95984 152.11232,192.66541 178.3125,135 192.3869,104.02289 221.47929,88.340515 254,85.30014 Z" id="path1"></path>
                          </g>
                        </svg>
                      </a>
                      <div class="text pl-3">
                        <p>
                          <span>Address:</span>Wynantskill, NY
                        </p>
                      </div>
                    </div>
                    <!-- <div class="dbox w-100 d-flex align-items-center"><a class="icon"
                                                    href="https://www.linkedin.com/in/moeen-uddin-itil-csm-784b395/"><svg fill="#fff" version="1.1" id="Capa_1"
														xmlns="http://www.w3.org/2000/svg"
														xmlns:xlink="http://www.w3.org/1999/xlink" width="33px"
                                                        height="33px" viewBox="0 0 93.06 93.06" xml:space="preserve"><g><g><path
                                                                    d="M11.185,0.08C5.004,0.08,0.001,5.092,0,11.259c0,6.173,5.003,11.184,11.186,11.184c6.166,0,11.176-5.011,11.176-11.184
                                                                                C22.362,5.091,17.351,0.08,11.185,0.08z" /><rect x="1.538" y="30.926" width="19.287"
                                                                    height="62.054" /><path
                                                                    d="M69.925,29.383c-9.382,0-15.673,5.144-18.248,10.022h-0.258v-8.479H32.921H32.92v62.053h19.27V62.281
                                                                                c0-8.093,1.541-15.932,11.575-15.932c9.89,0,10.022,9.256,10.022,16.451v30.178H93.06V58.942
                                                                                C93.06,42.235,89.455,29.383,69.925,29.383z" /></g></g></svg></a><div class="text pl-3"><p><span>Phone:</span><a href="tel:+5189510353">+518 951 0353</a></p></div></div> -->
                    <div class="dbox w-100 d-flex align-items-center">
                      <a class="icon" href="mailto:info@example.com">
                        <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M4 7.00005L10.2 11.65C11.2667 12.45 12.7333 12.45 13.8 11.65L20 7" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                          <rect x="3" y="5" width="18" height="14" rx="2" stroke="#fff" stroke-width="2" stroke-linecap="round" />
                        </svg>
                      </a>
                      <div class="text pl-3">
                        <p>
                          <span>Email:</span>
                          <a href="mailto:moeen@buxbusinesses.com">moeen@buxbusinesses.com</a>
                        </p>
                      </div>
                    </div>
                    <div class="dbox w-100 d-flex align-items-center">
                      <a class="icon" href="tel:+15189510353">
                        <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M17.3545 22.2323C15.3344 21.7262 11.1989 20.2993 7.44976 16.5502C3.70065 12.8011 2.2738 8.66559 1.76767 6.6455C1.47681 5.48459 2.00058 4.36434 2.88869 3.72997L5.21694 2.06693C6.57922 1.09388 8.47432 1.42407 9.42724 2.80051L10.893 4.91776C11.5152 5.8165 11.3006 7.0483 10.4111 7.68365L9.24234 8.51849C9.41923 9.1951 9.96939 10.5846 11.6924 12.3076C13.4154 14.0306 14.8049 14.5807 15.4815 14.7576L16.3163 13.5888C16.9517 12.6994 18.1835 12.4847 19.0822 13.1069L21.1995 14.5727C22.5759 15.5257 22.9061 17.4207 21.933 18.783L20.27 21.1113C19.6356 21.9994 18.5154 22.5232 17.3545 22.2323ZM8.86397 15.136C12.2734 18.5454 16.0358 19.8401 17.8405 20.2923C18.1043 20.3583 18.4232 20.2558 18.6425 19.9488L20.3056 17.6205C20.6299 17.1665 20.5199 16.5348 20.061 16.2171L17.9438 14.7513L17.0479 16.0056C16.6818 16.5182 16.0047 16.9202 15.2163 16.7501C14.2323 16.5378 12.4133 15.8569 10.2782 13.7218C8.1431 11.5867 7.46219 9.7677 7.24987 8.7837C7.07977 7.9953 7.48181 7.31821 7.99439 6.95208L9.24864 6.05618L7.78285 3.93893C7.46521 3.48011 6.83351 3.37005 6.37942 3.6944L4.05117 5.35744C3.74413 5.57675 3.64162 5.89565 3.70771 6.15943C4.15989 7.96418 5.45459 11.7266 8.86397 15.136Z" fill="#fff" />
                        </svg>
                      </a>
                      <div class="text pl-3">
                        <p>
                          <span>Phone:</span>
                          <a href="tel:+5189510353">+518 951 0353</a>
                        </p>
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
</main> @endsection