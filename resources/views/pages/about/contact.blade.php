@extends('master')

@section('title', 'Contact')

@section('main-content')
<div class="small-container">
  <h1 class="heading heading-primary--big text-center">Contact</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

  <form action="" class="contact-form">
    <h2 class="heading heading-secondary text-center">
      Send a Message
    </h2>

    <div class="contact-form--block contact-form--flex flex">
      <input class="contact-form--input" type="text" placeholder="Your Name" required>
      <input class="contact-form--input" type="text" placeholder="Your Email" required>
    </div>


    <div class="contact-form--block">
      <p>I would like to contact</p>
      <div class="contact-form--indent">
        <input type="radio" id="author" name="contact-people" checked>
        <label for="author">Andy</label>
      </div>
      <div class="contact-form--indent">
        <input type="radio" id="customer" name="contact-people">
        <label for="customer">Customer support/technical staff</label>
      </div>
    </div>

    <div class="contact-form--block">
      <textarea class="contact-form--input" rows="6" placeholder="Your Message" required></textarea>
    </div>

    <div class="contact-form--block">
      <input type="checkbox" id="confirm" required>
      <label for="confirm">I have read Mark's guidelines and won't make a total ass out of myself.</label>
    </div>

    <input type="submit" value="SEND MESSAGE" class="btn-signup btn-signup--blue">
  </form>
</div>
@endsection

@section('footer__cta')
@include('components/footer-cta')
@endsection