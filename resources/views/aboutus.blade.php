@extends('layouts.main.master')
@section('title')
Giới thiệu về {{$setting->company}}
@endsection
@section('description')
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<main id="main" class="">
   <div class="row page-wrapper">
      <div id="content" class="large-12 col" role="main">
         <header class="entry-header text-center">
            <h1 class="entry-title">Giới thiệu về {{$setting->company}}</h1>
            <div class="is-divider medium"></div>
         </header>
         <div class="entry-content">
            {!!$pageContent->content!!}
         </div>
         <div class="entry-content">
          {!!$setting->iframe_map!!}
         </div>
      </div>
      <!-- #content -->
   </div>
   <!-- .row -->
</main>
@endsection