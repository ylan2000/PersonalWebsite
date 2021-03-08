@extends('master')

@section('title', 'Newsletters Archive | Andy Nguyen')

@section('main-content')

<div class="small-container">
  <h1 class="heading heading-primary text-center">Lorem ipsum</h1>
  <p class="newsletters__desc">The latest newsletter can be read by anyone. Previous newsletters can be read by site members. <a href="" class="link hover-underline">Learn more about the site membership.</a></p>

  @include('components/form-sign-up-recommend')

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