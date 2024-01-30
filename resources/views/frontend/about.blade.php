@extends("layouts.frontend")
@section("content")
<main id="maincontent" class="page-main lowercase-headers" style="padding-top: 0px;">
        <div class="image-section">
            <div class="text-overlay">
                <p>About Us</p>
            </div>
        </div>
        <section id="about--sec--bux">
            <div class="about--sec--bux--wrapper">
                <div class="flexbox">
                    <div class="flexitem">
                        <h2>Our CEO</h2>
                        <p>Meet our dynamic CEO, a globally experienced and results-oriented IT professional specializing in Project/Program
                        Management. With a proven track record of delivering multi-million dollar projects for industry giants like IBM, PwC,
                        KPMG, and 3M, our CEO maximizes return on investment through business-focused IT solutions. Proficient in CMM, ITIL, and
                        SDLC, he has enabled clients to achieve optimal results with on-site off-shore working models. </p>
                    </div>
                    <div class="flexitem">
                        <div class="image-wrapper">
                            <img src="./assets/imgs/ceo.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="choices">
            <div class="choices--container">
                <div class="choices--row">
                    <div class="col-lg-6">
                        <div class="content">
                            <h3>The First Choice For Your Problem</h3>
                            <p>We understand that every case is unique. That's why we take the time to listen to your
                                concerns and tailor our services to your specific situation, ensuring the best possible
                                outcomes.</p>
                            <div class="flex">
                                <p><strong>Our Vision</strong></p>
                                <p><strong>Our Mission</strong></p>
                                <p><strong>Our Values</strong></p>
                            </div>
                        </div>
                        <div class="bottom-content">
                            <p><strong>Personalized Approach:</strong> We understand that every case unique. That's why
                                we take the time to listen to your concerns and tailor our services to your specific
                                situation.</p>
                            <p><strong>Client-Centric:</strong> Your satisfaction is our priority. We maintain to open
                                communication, keeping you informed at every step of the process. Your questions and
                                feedback are always welcome.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="image--wrapper">
                            <img src="./assets/imgs/vissionimg.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection