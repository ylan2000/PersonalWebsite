@extends('master')

@section('title', 'Andy Nguyen')

@section('main-content')
<section class="home__intro">
  <div class="small-container">
    <h1 class="heading heading-primary">Lorem ipsum dolor sit amet</h1>

    <p class="home__intro--para">Lorem ipsum dolor sit amet <a href="" class="link italic">Consectetur adipiscing elit</a> sed <a href="" class="link italic">Do eiusmod tempor incididunt</a> ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

    <h4 class="heading">Sign Up to Receive My Free Newsletter
    </h4>

    <form action="" class="form-recommend home__intro--form">
      <input type="text" placeholder="Your email address">
      <input type="submit" value="SUBSCRIBE">
    </form>
  </div>
</section>

<section class="home__ebook font-montserrat">
  <div class="big-container">
    <h2 class="heading-secondary">Sed do eiusmod tempor incididunt ut labore et dolore</h2>

    <div class="home__ebook--list flex">
      <a href="" class="home__ebook--card">
        <h3 class="heading heading-tertiary">Lorem ipsum</h3>
        <p class="home__ebook--desc">Exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat<p>
          <p class="home__ebook--link">Get the ebook</p>
      </a>

      <a href="" class="home__ebook--card">
        <h3 class="heading heading-tertiary">Lorem ipsum</h3>
        <p class="home__ebook--desc">Exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat<p>
          <p class="home__ebook--link">Get the ebook</p>
      </a>

      <a href="" class="home__ebook--card">
        <h3 class="heading heading-tertiary">Lorem ipsum</h3>
        <p class="home__ebook--desc">Exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat<p>
          <p class="home__ebook--link">Get the ebook</p>
      </a>

      <a href="" class="home__ebook--card">
        <h3 class="heading heading-tertiary">Lorem ipsum</h3>
        <p class="home__ebook--desc">Exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat<p>
          <p class="home__ebook--link">Get the ebook</p>
      </a>
    </div>
  </div>
</section>

<section class="home__article">
  <div class="big-container">
    <h3 class="heading heading-primary text-center">
      RECENT ARTICLES
    </h3>

    <div class="home__article-card">
      <div class="home__article-img">
        <img src="/images/home-article.jpg" alt="article picture">
      </div>
      <div class="home__article-info">
        <div class="home__article-info--block">
          <p class="font-montserrat">Date:</p>
          <p>February 15, 2021</p>
        </div>

        <div class="home__article-info--block">
          <p class="font-montserrat">Category:</p>
          <a href="" class="hover-blue">Society</a>,
          <a href="" class="hover-blue">Philosophy</a>
        </div>

        <div class="home__article-info--block">
          <p class="font-montserrat">Reading time:</p>
          <p>19 minutes</p>
        </div>
      </div>
      <div class="home__article-desc">
        <a href="">
          <h2 class="heading heading-secondary">Lorem ipsum dolor sit amet</h2>
          <p class="home__article-cond">(Members Only)</p>
          <p class="home__article-detail">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
        </a>
      </div>
    </div>

    <div class="home__article-card">
      <div class="home__article-img">
        <img src="/images/home-article.jpg" alt="article picture">
      </div>
      <div class="home__article-info">
        <div class="home__article-info--block">
          <p class="font-montserrat">Date:</p>
          <p>February 15, 2021</p>
        </div>

        <div class="home__article-info--block">
          <p class="font-montserrat">Category:</p>
          <a href="" class="hover-blue">Society</a>,
          <a href="" class="hover-blue">Philosophy</a>
        </div>

        <div class="home__article-info--block">
          <p class="font-montserrat">Reading time:</p>
          <p>19 minutes</p>
        </div>
      </div>
      <div class="home__article-desc">
        <a href="">
          <h2 class="heading heading-secondary">Lorem ipsum dolor sit amet</h2>
          <p class="home__article-detail">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
        </a>
      </div>
    </div>
  </div>
</section>

<div class="home__divide-section"></div>

<section class="home__member">
  <div class="big-container">
    <h3 class="heading heading-primary text-center">MEMBERSHIP CONTENT</h3>

    <div class="home__member--card flex">
      <a href="" class="home__member--img">
        <img src="/images/thumbnail-01.jpg" alt=""></a>

      <div class="home__member--content">
        <h2 class="heading heading-secondary hover-blue">
          <a href="">Videos: Ask Me Anything, Episode #14</a>
        </h2>
        <p class="home__member--desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
        <a href="" class="link hover-underline">Lorem ipsum dolor sit amet consectetur</a>
      </div>
    </div>

    <div class="home__member--card flex">
      <a href="" class="home__member--img">
        <img src="/images/thumbnail-01.jpg" alt=""></a>

      <div class="home__member--content">
        <h2 class="heading heading-secondary hover-blue">
          <a href="">Videos: Ask Me Anything, Episode #14</a>
        </h2>
        <p class="home__member--desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
        <a href="" class="link hover-underline">Lorem ipsum dolor sit amet consectetur</a>
      </div>
    </div>
  </div>
</section>

<section class="home__signup-cta text-center">
  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis <a href="" class="link hover-underline">Nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</a>

  <a href="" class="font-montserrat btn-signup">SIGN UP AND GET FULL ACCESS</a>
</section>
@endsection

@section('footer__cta')
@include('components/footer-cta')
@endsection