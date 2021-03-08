@extends('master')

@section('title', 'Newsletters Archive | Andy Nguyen')

@section('main-content')

<div class="small-container">
  <h1 class="heading heading-primary text-center">Lorem ipsum</h1>
  <p class="newsletters__desc">The latest newsletter can be read by anyone. Previous newsletters can be read by site members. <a href="" class="link hover-underline">Learn more about the site membership.</a></p>

  <div class="sign-up-recommend text-center">
    <h2 class="heading heading-secondary">Sign Up to Receive More Book Recommendations</h2>

    <form action="" class="form-recommend">
      <input type="text" placeholder="Your Email Address">
      <input type="submit" value="SIGN UP">
    </form>

    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <p>Note: Your information is protected and I never spam, ever. You can view my privacy policy <a href="" class="link">here</a> .</p>
  </div>

  <table class="newsletters__topic">
    <tbody>
      <tr>
        <td class="newsletters__date">March 8</td>
        <td>
          <a href="" class="link hover-underline">Sed do eiusmod tempor incididunt ut labore et dolore</a>
        </td>
      </tr>

      <tr>
        <td class="newsletters__date">February 22</td>
        <td>
          <a href="" class="link hover-underline">Sed do eiusmod tempor incididunt ut labore et dolore</a>
        </td>
      </tr>
    </tbody>
  </table>
</div>
@endsection

@section('footer__cta')
@include('components/footer-cta')
@endsection