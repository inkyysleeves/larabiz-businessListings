@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Latest business listings</div>
            <div class="card-body">
                @if(count($listings))
                <div class="list-group">
                    @foreach ( $listings as $listing )
                    <div class="list-group-item">
                       <a href="{{route('listings.index')}}/{{$listing->id}}"> {{ $listing->name }} </a>
                    </div>
                    @endforeach
                </div>
                @else
                <p>No listings found!</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection