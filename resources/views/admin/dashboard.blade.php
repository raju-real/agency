@extends('admin.layouts.app')
@section('title', 'Dashboard')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h4>Dashboard</h4>
                </div>
                <div class="col-md-6 text-end">

                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="four col-md-4 pb-3">
                    <div class="counter-box bg-info"> <i class="fa fa-calendar"></i> 
                        <span class="counter text-white">{{ count(upcommingEvents()) }}</span>
                        <p class="text-white">Upcomming Events</p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection
