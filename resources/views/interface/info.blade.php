@extends('layouts.main_layout')
@section('content')

<div class="b-example-divider"></div> 
<div class="container">
 <div class="px-4 py-5 my-5 text-center" style=" position: relative;">

    <img class="d-block mx-auto mb-4" src="{{asset('img/1.png')}}" alt="" width="72" height="57">
    <h1 class="display-5 fw-bold ">Centered hero</h1>
    <div class="col-lg-10 mx-auto " style=" position: absolute; text-align: center; right: 200px; top:80%; width: 70%; font-size: 18px;">
      <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Primary button</button>
        <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button>
      </div>
    </div>
  </div> 
  </div>
  <div class="b-example-divider"></div>

<div class="container" style="padding: 100px;">
  <h2>Panel Group</h2>
  <p>The panel-group class clears the bottom-margin. Try to remove the class and see what happens.</p>
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">Panel Header</div>
      <div class="panel-body">Panel Content</div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">Panel Header</div>
      <div class="panel-body">Panel Content</div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">Panel Header</div>
      <div class="panel-body">Panel Content</div>
    </div>
  </div>
</div>
@stop