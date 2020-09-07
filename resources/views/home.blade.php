@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <br><a href='/todos'>MY TODO</a>
                </div>
                <div class="card-body">
                    @if(session()->Has('message'))
                    <div class="alert alert-success" role='alert'>
                        {{session()->get('message')}}
                    </div>
                    @elseif(session()->Has('error'))
                    <div class="alert alert-danger" role='alert'>
                        {{session()->get('error')}}
                    </div>
                    @endif
                    <form action="/upload" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="image">
                        <input type="submit" name="Upload"> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
