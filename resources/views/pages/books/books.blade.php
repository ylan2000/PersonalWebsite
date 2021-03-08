@extends('master')

@section('title', 'Books')

@section('main-content')
<div class="small-container">
  <h1 class="heading heading-primary text-center book__heading">Books</h1>
  <div class="book__block">
    <h2 class="heading heading-secondary text-center">Lorem ipsum dolor sit amet: consectetur adipiscing elit, sed do eiusmod tempor</h2>
    <div class="book__content flex">
      <div class="book__img book--left-side">
        <img src="/images/book.jpg" alt="book">
      </div>
      <div class="book--right-side">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
    </div>
    <a href="" class="book__link link hover-underline text-center">Learn More About <span class="italic">Lorem ipsum dolor sit amet</span> </a>
  </div>

  <div class="book__block">
    <h2 class="heading heading-secondary text-center">Lorem ipsum dolor sit amet: consectetur adipiscing elit, sed do eiusmod tempor</h2>
    <div class="book__content flex">
      <div class="book__img book--left-side">
        <img src="/images/book.jpg" alt="book">
      </div>
      <div class="book--right-side">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
    </div>
    <a href="" class="book__link link hover-underline text-center">Learn More About <span class="italic">Lorem ipsum dolor sit amet</span> </a>
  </div>
</div>
@endsection

@section('footer__cta')
@include('components/footer-cta')
@endsection