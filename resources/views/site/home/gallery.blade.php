@extends('site.layouts.main')
@section('title', 'Ventajas')
@section('content')
<div class="app-gallery wrapper style1">
  <div class="container">
    <div class="row">
      <div class="12u">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators 
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>
          -->

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="{!! asset('public/assets/img/img-carousel-2.png') !!}" alt="...">
              <div class="carousel-caption">
              </div>
            </div>
            <div class="item">
              <img src="{!! asset('public/assets/img/img-carousel-4.png') !!}" alt="...">
              <div class="carousel-caption">
              </div>
            </div>
            <div class="item">
              <img src="{!! asset('public/assets/img/img-carousel-5.png') !!}" alt="...">
              <div class="carousel-caption">
              </div>
            </div>
          </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection