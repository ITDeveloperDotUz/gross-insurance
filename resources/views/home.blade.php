@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Меню</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Привет <?= __('user.'.Auth::user()->role) .' '. Auth::user()->name ?><br>
                    Вы можете <a href="{{ route('dashboard') }}">Admin</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
