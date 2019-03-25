@extends('layouts.app')

@section('content')
    <div class="container maincontainer">
        <div class="card">
            <form id="postform" action="{{ route('terminate') }}" class="" method="post">
                {{ csrf_field() }}
                <example-component></example-component>
            </form>
        </div>
    </div>
@endsection
