@extends("layouts.frontend")
@section("content")
<main id="maincontent" class="page-main lowercase-headers" style="padding-top: 0px;">

<div class="image-section">
  <div class="text-overlay">
    <p>{{ $capability->name }}</p>
  </div>
</div>

<div class="pimcore_area_services pimcore_area_content ">
  <section class="a-services waypoint waypoint-reveal">
    <div class="container">
      <h2 class="a-section__title h2 step-up 1 ">
        <span id="Services" class="not-hover-link" name="Services">{{ $capability->name }}</span>
      </h2>
      <div class="section-service">
        <div class="text-above">
          <p>
          {{ $capability->content }}
          </p>
        </div>
      </div>
    </div>
  </section>
</div>
</main>
@endsection