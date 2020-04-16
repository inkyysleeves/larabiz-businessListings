@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Edit Listing <span class="float-right"><a href="{{route('home')}}" class="btn btn-secondary">Go back</a></span></div>
            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                {{ Form::open(['action' => ['ListingsController@update', $listing->id], 'method'=>'POST'])}}
                @csrf
                <div class="form-group">
                    {{ Form::label('name', 'Enter your name')}}
                    {{ Form::text('name', $listing->name,['class' => 'form-control', 'placeholder' => $listing->name]) }}
                </div>
                <div class="form-group">
                    {{ Form::label('address', 'Enter your address')}}
                    {{ Form::text('address', $listing->address,['class' => 'form-control', 'placeholder' => $listing->address]) }}
                </div>
                <div class="form-group">
                    {{ Form::label('website', 'Enter your website')}}
                    {{ Form::text('website', $listing->website,['class' => 'form-control', 'placeholder' => $listing->website]) }}
                </div>
                <div class="form-group">
                    {{ Form::label('email', 'Enter your email')}}
                    {{ Form::email('email', $listing->email,['class' => 'form-control', 'placeholder' => $listing->email]) }}
                </div>
                <div class="form-group">
                    { { Form::label('phone', 'Enter your phone number')} }
                    {{ Form::number('phone', $listing->phone,['class' => 'form-control', 'placeholder' => $listing->phone]) }}
                </div>
                <div class="form-group">
                    {{ Form::label('bio', 'Enter your bio')}}
                    {{ Form::text('bio', $listing->bio,['class' => 'form-control', 'placeholder' => $listing->bio]) }}
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                {{Form::hidden('_method', 'PUT')}}
                {{Form::close() }}
            </div>
        </div>
    </div>
</div>
@endsection