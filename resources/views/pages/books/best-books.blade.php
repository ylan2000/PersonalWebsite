@extends('master')

@section('title', 'List the Best Books to Read, Organized by Genre')

@section('main-content')
<div class="best-books">
  <div class="small-container">
    <h1 class="heading-primary heading text-center">200 of the Best Books to Read, Organized by Genre</h1>

    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <div class="best-books--block">
      <h2 class="heading heading-secondary">The Best Books of All Time</h2>
      <ul>
        <li><a href="" class="link">The 27 Best Nonfiction Books of All Time</a></li>
        <li><a href="" class="link">The 27 Best Nonfiction Books of All Time</a></li>
      </ul>
    </div>

    <div class="best-books--block">
      <h2 class="heading heading-secondary">The Best Books of All Time</h2>
      <ul>
        <li><a href="" class="link">The 27 Best Nonfiction Books of All Time</a></li>
        <li><a href="" class="link">The 27 Best Nonfiction Books of All Time</a></li>
      </ul>
    </div>
  </div>

  <hr>

  <div class="small-container best-books__suggestion">
    <h2 class="heading heading-secondary text-center">Looking for a goood book to read?</h2>
    <div class="flex">
      <div class="best-books__img">
        <img src="/images/best-book.jpg" alt="Best book">
      </div>
      <p class="best-books__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
  </div>

  <hr>

  <div class="small-container">
    <div class="best-books--block">
      <h2 class="heading-secondary heading">My Book Reviews</h2>
      <ul>
        <li><a href="" class="link">6 Books that Will Help You Grow from Your Pain</a></li>
        <li><a href="" class="link">My 2019 in Review… And 62 Book Reviews</a><span> (Subscribers only)</span></li>
      </ul>
    </div>

    <div class="best-books--block">
      <h2 class="heading-secondary heading">My Book Reviews</h2>
      <ul>
        <li><a href="" class="link">6 Books that Will Help You Grow from Your Pain</a></li>
        <li><a href="" class="link">My 2019 in Review… And 62 Book Reviews</a><span> (Subscribers only)</span></li>
      </ul>
    </div>

    <div class="sign-up-recommend text-center">
      <h2 class="heading heading-secondary">Sign Up to Receive More Book Recommendations</h2>

      <form action="" class="form-recommend">
        <input type="text" placeholder="Your Email Address">
        <input type="submit" value="SIGN UP">
      </form>

      <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

      <p>Note: Your information is protected and I never spam, ever. You can view my privacy policy <a href="" class="link">here</a> .</p>
    </div>
  </div>
</div>
@endsection

@section('footer__cta')
@include('components/footer-cta')
@endsection