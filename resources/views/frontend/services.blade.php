@extends("layouts.frontend")
@section('styles')
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
@endsection
@section("content")

<main
      id="maincontent"
      class="page-main lowercase-headers"
      style="padding-top: 0px"
    >
      <div class="image-section">
        <div class="text-overlay">
          <p>Services</p>
        </div>
      </div>
      <section id="services--section">
        <div class="services--container">
          <div class="services--row">
            <div class="col-lg-6">
              <h2>Your Business Jounrney With Our consultation</h2>
              <p>
                Our team of experienced immigration consultants is here to
                simplify this process for you. With a deep understand of the
                ever-evolving.
              </p>
              <p>
                Our dedicated team of experienced to immigration experts is here
                to guide in so you through every step of the process.
              </p>
            </div>
            <div class="col-lg-6">
              <div class="services--grid">
                <a href="{{ route('consultancy') }}" class="grid--items">
                  <p>IT Management Consultancy</p>
                </a>
                <a href="{{ route('resourcing') }}" class="grid--items">
                  <p>IT Resourcing</p>
                </a>
                <a href="{{ route('cybersecurity') }}" class="grid--items">
                  <p>Cybersecurity</p>
                </a>
                <a href="{{ route('ai') }}" class="grid--items">
                  <p>Artificial Intelligence</p>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="consultation">
        <div class="container">
          <h2 class="a-section__title h2 step-up 1 ">
            <span id="Awards" class="not-hover-link" name="Awards">Schedule a time for consultancy</span>
          </h2>
        </div>
        <div class="consultation--container">
          <div class="consultation--form">
            <div class="form--grid">
              <div class="main--form">
                <p class="heading">Send Us A Message</p>
                <p>Our response time is within 30 minutes during business hours</p>
                <form action="{{ route('consultation.store') }}" method="POST">
                  @csrf
                  <div class="input--grid">
                    <input type="text" name="first_name" placeholder="First Name" required>
                    <input type="text" name="last_name" placeholder="Last Name" required>
                    <input type="number" name="phone_number" placeholder="Phone Number" required>
                    <input type="email" name="email" placeholder="Email Address" required>
                  </div>
                  <div class="flex--form">
                    <select name="service_type" id="" required>
                      <option value="" selected disabled>Service Type</option>
                      <option value="IT Management Consultancy">IT Management Consultancy</option>
                      <option value="IT Resourcing">IT Resourcing</option>
                      <option value="Cybersecurity">Cybersecurity</option>
                      <option value="Artificial Intelligence">Artificial Intelligence</option>
                    </select>
                    <textarea name="message" id="" cols="30" rows="3" placeholder="Message" required></textarea>
                    <div class="button-style-2">
                      <input type="submit" class="btn-style-2" value="Submit"></a>
                    </div>
                  </div>
                </form>
              </div>
              <div class="contact--details">
              <div class="flexbox">
                <div class="contact--card">
                  <div class="iconbox">
                    <svg width="40" height="41" viewBox="0 0 40 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M19.984 3.83203C10.784 3.83203 3.33398 11.2987 3.33398 20.4987C3.33398 29.6987 10.784 37.1654 19.984 37.1654C29.2007 37.1654 36.6673 29.6987 36.6673 20.4987C36.6673 11.2987 29.2007 3.83203 19.984 3.83203ZM20.0007 33.832C12.634 33.832 6.66732 27.8654 6.66732 20.4987C6.66732 13.132 12.634 7.16536 20.0007 7.16536C27.3673 7.16536 33.334 13.132 33.334 20.4987C33.334 27.8654 27.3673 33.832 20.0007 33.832ZM19.634 12.1654H19.534C18.8673 12.1654 18.334 12.6987 18.334 13.3654V21.232C18.334 21.8154 18.634 22.3654 19.1507 22.6654L26.0673 26.8154C26.634 27.1487 27.3673 26.982 27.7007 26.4154C27.7843 26.2804 27.84 26.13 27.8644 25.9731C27.8887 25.8162 27.8812 25.6559 27.8423 25.502C27.8034 25.348 27.734 25.2035 27.638 25.0769C27.5421 24.9504 27.4217 24.8444 27.284 24.7654L20.834 20.932V13.3654C20.834 12.6987 20.3006 12.1654 19.634 12.1654Z"
                        fill="#141B2C" />
                    </svg>
                  </div>
                  <div class="content">
                    <p class="heading">Contact us</p>
                    <p style="margin-bottom: 0;">Wynantskill, NY</p>
                  </div>
                </div>
                <div class="contact--card">
                  <div class="iconbox">
                    <svg version="1.1" id="svg1" width="30" height="41" viewBox="0 0 512 512"
                      xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
                      <defs id="defs1"></defs>
                      <g id="g1">
                        <path
                          d="M 95,0.42825317 C 73.214622,3.5491638 60.816704,19.183289 46,34 33.383675,46.616333 17.142794,59.005829 8.7847223,75 -12.090283,114.94687 8.0182858,167.28973 24.424383,205 44.222355,250.50668 75.165329,292.87646 107.71528,330 157.54721,386.83383 215.8035,440.0863 283,475.78009 c 40.70499,21.62189 92.84897,46.15601 140,32.79166 18.67044,-5.29187 30.74985,-19.3216 44,-32.57175 16.3038,-16.3038 38.29388,-32.24741 43.33102,-56 C 518.61261,380.94806 475.96597,352.96597 452,329 441.24722,318.24722 430.91638,305.59161 418,297.38348 398.20892,284.80661 370.37845,288.71146 355.46759,307.00076 341.47455,324.16431 340.0524,344.97394 315,351.71063 295.28833,357.0112 275.86328,348.85751 259,338.79938 224.85745,318.435 195.58098,289.73926 174.57639,256 165.46521,241.36487 155.39058,221.79047 157.17053,204 158.65225,189.19025 168.29126,175.65424 181,168.1983 c 7.87231,-4.6185 16.83521,-6.58136 23.99924,-12.527 C 217.75545,145.08453 221.6819,129.888 220.96065,114 220.14761,96.090271 206.80948,83.809479 195,72 L 152,29 C 136.36853,13.36853 119.09158,-3.0230103 95,0.42825317 Z"
                          id="path1"></path>
                      </g>
                    </svg>
                  </div>
                  <div class="content">
                    <p class="heading">Call or text</p>
                    <a href="tel:+5189510353">+518 951 0353</a>
                  </div>
                </div>
                <div class="contact--card">
                  <div class="iconbox">
                    <svg width="40" height="41" viewBox="0 0 40 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M6.66732 33.8327C5.75065 33.8327 4.96565 33.506 4.31232 32.8527C3.65899 32.1994 3.33288 31.4149 3.33399 30.4994V10.4994C3.33399 9.58269 3.66065 8.79768 4.31399 8.14435C4.96732 7.49102 5.75176 7.16491 6.66732 7.16602H33.334C34.2507 7.16602 35.0357 7.49268 35.689 8.14602C36.3423 8.79935 36.6684 9.5838 36.6673 10.4994V30.4994C36.6673 31.416 36.3407 32.201 35.6873 32.8544C35.034 33.5077 34.2495 33.8338 33.334 33.8327H6.66732ZM33.334 13.8327L20.8757 21.6244C20.7368 21.7077 20.5907 21.7705 20.4373 21.8127C20.284 21.8549 20.1384 21.8755 20.0007 21.8744C19.8618 21.8744 19.7157 21.8538 19.5623 21.8127C19.409 21.7716 19.2634 21.7088 19.1257 21.6244L6.66732 13.8327V30.4994H33.334V13.8327ZM20.0007 18.8327L33.334 10.4994H6.66732L20.0007 18.8327ZM6.66732 14.2494V11.791V11.8327V11.8127V14.2494Z"
                        fill="#141B2C" />
                    </svg>
                  </div>
                  <div class="content">
                    <p class="heading">Email us today</p>
                    <a href="mailto:moeen@buxbusinesses.com">moeen@buxbusinesses.com</a>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
      </section>
    </main>

@endsection


@section('scripts')
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const successMessage = "{{ session('success') }}";
        const errorMessage = "{{ session('error') }}";

        if (successMessage) {
            Toastify({
                text: successMessage,
                duration: 3000,
                gravity: 'top',
                close: true,
                backgroundColor: '#0BDA51',
                style: {
                    'font-size': "16px",
                }
            }).showToast();
        } else if (errorMessage) {
            Toastify({
                text: errorMessage,
                duration: 3000,
                gravity: 'top',
                close: true,
                backgroundColor: '#D22B2B',
                style: {
                    'font-size': "16px",
                }
            }).showToast();
        }

    });
</script>

@endsection