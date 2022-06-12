@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center>
                    <div class="card-header">{{ __('Dashboard') }}</div>
                </center>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <center>
                        {{ __('You are logged in!') }}
                    </center>




                </div>
            </div>
            <div class="card">
                <a type="button" class="btn btn-danger" href="{{route('students.index')}}" >Students</a>

            </div>
             <div class="card">
                <a type="button" class="btn btn-danger" href="{{route('teachers.index')}}" >Teachers</a>

            </div>
        </div>
    </div>
</div>
@endsection
