@extends('backend.layout')
@section('content')
    <section class="content-header">
        <div class="box box-primary">
            <div class="box-header with-border">
                <p><h3 class="box-title">HoşGeldin : {{Auth::user()->name}}</h3></p>
            </div>
        </div>
    </section>
@endsection
@section('css') @endsection
@section('js') @endsection
