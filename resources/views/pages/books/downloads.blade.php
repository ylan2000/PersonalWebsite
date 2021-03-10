@extends('master')

@section('title', 'Ebooks')

@section('main-content')
<div class="small-container">
  <h1 class="heading text-center heading-primary--big">Ebooks</h1>
  <p class="ebook__shareable">To help you with some of the deeper and more serious topics, I’ve compiled these short ebooks. They are free to download. Learn more below.</p>

  <div class="ebook__block ebook__block--happiness">
    <h2 class="heading heading-secondary">Lorem Ipsum Dolor</h2>
    <p class="ebook__shareable">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
    <a href="" class="ebook__btn-down signup-btn signup-btn--black font-montserrat text-center"><i class="fa fa-download"></i> GET THE EBOOK</a>
  </div>

  <div class="ebook__block ebook__block--self-knowledge">
    <h2 class="heading heading-secondary">Lorem Ipsum Dolor</h2>
    <p class="ebook__shareable">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p> 
    <a href="" class="ebook__btn-down signup-btn signup-btn--black font-montserrat text-center"><i class="fa fa-download"></i> GET THE EBOOK</a>
  </div>

  <div class="ebook__block ebook__block--habit">
    <h2 class="heading heading-secondary">Lorem Ipsum Dolor</h2>
    <p class="ebook__shareable">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
    <a href="" class="ebook__btn-down signup-btn signup-btn--black font-montserrat text-center"><i class="fa fa-download"></i> GET THE EBOOK</a>
  </div>

  <div class="ebook__block ebook__block--relationship">
    <h2 class="heading heading-secondary">Lorem Ipsum Dolor</h2>
    <p class="ebook__shareable">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
    <a href="" class="ebook__btn-down signup-btn signup-btn--black font-montserrat text-center"><i class="fa fa-download"></i> GET THE EBOOK</a>
  </div>
</div>
@endsection

@section('footer__cta')
@include('components/footer-cta')
@endsection