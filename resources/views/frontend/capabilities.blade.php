@extends("layouts.frontend")
@section("content")
<main id="maincontent" class="page-main lowercase-headers" style="padding-top: 0px;">

<div class="image-section">
    <div class="text-overlay">
        <p>Capabilities</p>
    </div>
</div>
<section id="explore--our--services">
    <div class="explore--our--services--wrapper">
        <h3 class="a-services__name">Explore Our Capabilities</h3>
        <p class="a-section__description step-up">
            Proven capbilities in IT Management and successful timely delivery with reliable quality. Application of new technologies
            to achieve better processes and perfiormance.
        </p>

        <div class="grid">
            <a href="{{ route('capabilities.show', ['name' => 'cloud-computing']) }}" class="grid--items">
                <div class="image-wrapper">
                    <img src="./assets/imgs/capabilities/cloud-computing.webp" alt="">
                </div>
                <div class="text-wrapper">
                    <p class="capeabilities-title">Cloud Computing</p>
                </div>
            </a>
            <a href="{{ route('capabilities.show', ['name' => 'MS-azure-dev-ops']) }}" class="grid--items">
                <div class="image-wrapper">
                    <img src="./assets/imgs/capabilities/devOps.jpg" alt="">
                </div>
                <div class="text-wrapper">
                    <p class="capeabilities-title">MS Azure, Dev Ops</p>
                </div>
            </a>
            <a href="{{ route('capabilities.show', ['name' => 'SAFE-SAAS']) }}" class="grid--items">
                <div class="image-wrapper">
                    <img src="./assets/imgs/capabilities/SAAS.jpg" alt="">
                </div>
                <div class="text-wrapper">
                    <p class="capeabilities-title">Agile/SAFE, SAAS</p>
                </div>
            </a>
            <a href="{{ route('capabilities.show', ['name' => '.NET-and-JDK']) }}" class="grid--items">
                <div class="image-wrapper">
                    <img src="./assets/imgs/capabilities/jdk.webp" alt="">
                </div>
                <div class="text-wrapper">
                    <p class="capeabilities-title">.Net and JDK</p>
                </div>
            </a>
            <a href="{{ route('capabilities.show', ['name' => 'banking-and-insurance']) }}" class="grid--items">
                <div class="image-wrapper">
                    <img src="./assets/imgs/capabilities/insurance.jpg" alt="">
                </div>
                <div class="text-wrapper">
                    <p class="capeabilities-title">Banking and Insurance</p>
                </div>
            </a>
            <a href="{{ route('capabilities.show', ['name' => 'healthcare-EDI']) }}" class="grid--items">
                <div class="image-wrapper">
                    <img src="./assets/imgs/capabilities/healthcare-edi.jpg" alt="">
                </div>
                <div class="text-wrapper">
                    <p class="capeabilities-title">Healthcare EDI</p>
                </div>
            </a>
            <a href="{{ route('capabilities.show', ['name' => 'MS-project-PPM']) }}" class="grid--items">
                <div class="image-wrapper">
                    <img src="./assets/imgs/capabilities/ms-project.jpg" alt="">
                </div>
                <div class="text-wrapper">
                    <p class="capeabilities-title">MS Project, PPM</p>
                </div>
            </a>
            <a href="{{ route('capabilities.show', ['name' => 'SDLC-CSV']) }}" class="grid--items">
                <div class="image-wrapper">
                    <img src="./assets/imgs/capabilities/sdlc.jpg" alt="">
                </div>
                <div class="text-wrapper">
                    <p class="capeabilities-title">SDLC/CSV</p>
                </div>
            </a>
            <a href="{{ route('capabilities.show', ['name' => 'IT-optimization-strategy']) }}" class="grid--items">
                <div class="image-wrapper">
                    <img src="./assets/imgs/capabilities/it-optimmization.jpg" alt="">
                </div>
                <div class="text-wrapper">
                    <p class="capeabilities-title">IT Optimization & Strategy</p>
                </div>
            </a>
            <a href="{{ route('capabilities.show', ['name' => 'process-improvement']) }}" class="grid--items">
                <div class="image-wrapper">
                    <img src="./assets/imgs/capabilities/process-improv.jpg" alt="">
                </div>
                <div class="text-wrapper">
                    <p class="capeabilities-title">Process Improvement</p>
                </div>
            </a>
            <a href="{{ route('capabilities.show', ['name' => 'change-management-OCM']) }}" class="grid--items">
                <div class="image-wrapper">
                    <img src="./assets/imgs/capabilities/change.jpg" alt="">
                </div>
                <div class="text-wrapper">
                    <p class="capeabilities-title">Change Management and OCM</p>
                </div>
            </a>
            <a href="{{ route('capabilities.show', ['name' => 'CRM-CMS-UX']) }}" class="grid--items">
                <div class="image-wrapper">
                    <img src="./assets/imgs/capabilities/crm.jpg" alt="">
                </div>
                <div class="text-wrapper">
                    <p class="capeabilities-title">CRM CMS UX</p>
                </div>
            </a>
            <a href="{{ route('capabilities.show', ['name' => 'SAP-HR-office365']) }}" class="grid--items">
                <div class="image-wrapper">
                    <img src="./assets/imgs/capabilities/office365.jpg" alt="">
                </div>
                <div class="text-wrapper">
                    <p class="capeabilities-title">SAP HR Office365</p>
                </div>
            </a>
            <a href="{{ route('capabilities.show', ['name' => 'cross-team-collaboration']) }}" class="grid--items">
                <div class="image-wrapper">
                    <img src="./assets/imgs/capabilities/team-collaoration.jpg" alt="">
                </div>
                <div class="text-wrapper">
                    <p class="capeabilities-title">Cross-Team Collaboration</p>
                </div>
            </a>
            <a href="{{ route('capabilities.show', ['name' => 'quality-assurance']) }}" class="grid--items">
                <div class="image-wrapper">
                    <img src="./assets/imgs/capabilities/quality-assurance.jpg" alt="">
                </div>
                <div class="text-wrapper">
                    <p class="capeabilities-title">Quality Assurance</p>
                </div>
            </a>
            <a href="{{ route('capabilities.show', ['name' => 'SOX-and-regulatory-compliance']) }}" class="grid--items">
                <div class="image-wrapper">
                    <img src="./assets/imgs/capabilities/regulatory.jpg" alt="">
                </div>
                <div class="text-wrapper">
                    <p class="capeabilities-title">SOX and Regulatory Compliance</p>
                </div>
            </a>
            <a href="{{ route('capabilities.show', ['name' => 'company-intranet']) }}" class="grid--items">
                <div class="image-wrapper">
                    <img src="./assets/imgs/capabilities/intranet.webp" alt="">
                </div>
                <div class="text-wrapper">
                    <p class="capeabilities-title">Company Intranet</p>
                </div>
            </a>
            <a href="{{ route('capabilities.show', ['name' => 'ai']) }}" class="grid--items">
                <div class="image-wrapper">
                    <img src="./assets/imgs/capabilities/ai.webp" alt="">
                </div>
                <div class="text-wrapper">
                    <p class="capeabilities-title">Artificial Intelligence</p>
                </div>
            </a>
        </div>
    </div>
</section>


</main>
@endsection