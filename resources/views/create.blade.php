@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Listing <span class="float-right"><a href="{{route('home')}}" class="btn btn-secondary">Go back</a></span></div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    {{ Form::open(['action' => 'ListingsController@store', 'method'=>'POST'])}}
                    <div class="form-group">
                        {{ Form::label('name', 'Enter your name')}}
                        {{ Form::text('name','',['class' => 'form-control', 'placeholder' => 'Enter name']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('address', 'Enter your address')}}
                        {{ Form::text('address','',['class' => 'form-control', 'placeholder' => 'Enter address']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('website', 'Enter your website')}}
                        {{ Form::text('website','',['class' => 'form-control', 'placeholder' => 'Enter website']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('email', 'Enter your email')}}
                        {{ Form::email('email','',['class' => 'form-control', 'placeholder' => 'Enter email']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('phone', 'Enter your phone number')}}
                        {{ Form::number('phone','',['class' => 'form-control', 'placeholder' => 'Enter number']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('bio', 'Enter your bio')}}
                        {{ Form::text('bio','',['class' => 'form-control', 'placeholder' => 'Enter bio']) }}
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@endsection