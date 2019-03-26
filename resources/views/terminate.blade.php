@extends('layouts.app')

@section('content')
    <div class="container maincontainer">
        <div class="card">
            <form id="postform" action="{{ route('terminate') }}" class="" method="post">
                {{ csrf_field() }}
                <termination-form></termination-form>
            </form>
        </div>
    </div>
@endsection
