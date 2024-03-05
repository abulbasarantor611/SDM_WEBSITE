@extends('admin.layouts.master', ['pageSlug' => 'dashboard'])

@section('title','Admin Dashboard')
@push('css')
<style>
    .dashboard_wrap{
        height: 83vh;
    }
    .dashboard_wrap h2{
        margin: 40px auto;
        font-family: 'Ubuntu', sans-serif;
        font-size: 90px;
        color: #183fdb;
        text-align: center;
        letter-spacing: 5px;
        -webkit-box-shadow: 19px 19px 6px 0px rgba(0,0,0,0.23);
        -moz-box-shadow: 19px 19px 6px 0px rgba(0,0,0,0.23);
        box-shadow: 19px 19px 6px 0px rgba(0,0,0,0.23);
        text-shadow: 8px 0px 1px rgba(0,0,0,0.50);
    }
</style>
@endpush

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="dashboard_wrap d-flex flex-column justify-content-center align-items-center">
                <h2>{{('DASHBOARD')}}</h2>
                
            </div>
        </div>
    </div>

@endsection