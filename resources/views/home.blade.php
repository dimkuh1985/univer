@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <h2 class="panel-heading" style="margin: 10; text-align: center;">Панель управления</h2>                    
                <div class="panel-body">
                    <h3 style="margin: 0; text-align: center;">Доступ к основным разделам системы
                    </h3>
                    <!-- Панель навигации -->
                    <hr>
                    <div id="nav" style="text-align: center">
                        <div class="col-md-4">
                            <a href="{{ route('faculties.index') }}">
                                <img src="{{ asset('img/fac.png')}}" width="70%">
                            </a>
                            <h4>Управление факультетами</h4>
                        </div>
                            <div class="col-md-4">
                            <a href="{{ route('groups.index') }}">
                                <img src="{{ asset('img/group.png')}}" width="70%">
                            </a>
                            <h4>Управление группами</h4>
                        </div>
                        <div class="col-md-4">
                            <a href="{{ route('students.index') }}">
                                <img src="{{ asset('img/stud.png')}}" width="70%">
                            </a><br>
                            <h4>Управление студентами</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
