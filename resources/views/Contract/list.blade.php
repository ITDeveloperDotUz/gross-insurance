@extends('layouts.app')

@section('content')
    <div class="container maincontainer">
        <div class="card">
            <form id="postform" action="/terminate" class="" method="post">
                {{ csrf_field() }}
                <div class="card-header"><h2 class=" header">Типовой договор</h2></div>
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr class="row">
                            @if($user->can('create', 'permission'))
                            <th class="col-1">ID</th>
                            @endif
                            <th class="col-4">Имя пользователя</th>
                            <th class="col-4">E-mail</th>
                            <th class="col">Роль</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($users as $auser)
                            <tr class="row">
                                @if($user->can('create', 'user'))
                                <td class="col-1">{{ $auser->id }}</td>
                                @endif
                                <td class="col-4">{{ $auser->name }}</td>
                                <td class="col-4">{{ $auser->email }}</td>
                                <td class="col">{{ $auser->role }}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </form>
        </div>
    </div>
@endsection
