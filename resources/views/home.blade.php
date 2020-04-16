@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Dashboard <span class="float-right"><a href="{{route('listings.create')}}" class="btn btn-secondary">Create listing</a></span></div>

            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                <h3>Your Listings</h3>
                @if(count($listings))
                <table class="table table-striped">
                    <tr>
                        <th>Company</th>
                        <th></th>
                    </tr>
                    @foreach ( $listings as $listing )
                    <tr>
                        <td>{{ $listing->name}}</td>
                        <td>
                        {{ Form::open(array('action' => ['ListingsController@destroy', $listing->id], 'method' => 'post')) }}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::submit('Delete', ['class' => 'btn btn-danger ml-2 float-right'])}}
                        {{ Form::close() }}
                        <a href="{{route('listings.index')}}/{{$listing->id}}/edit" class="btn btn-info float-right">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
                @else
                <p>You dont have any listings yet!</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
