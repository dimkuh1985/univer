@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <h2 class="panel-heading" style="margin: 0; text-align: center;">Студенты</h2>                    
                <div class="panel-body">
                    <h3 style="margin: 0; text-align: center;">Панель управления Студентами</h3>
                    <hr>
                    <hr>
                    <h5>
                        <a href="{{ url('/home') }}">На Главную</a>
                    </h5>
                    @if (Auth::user()->name == 'admin')
                        <h5>
                            <a href="{{route('students.create')}}">Добавить студента</a>
                        </h5>
                    @endif
                    <hr>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Имя Фамилия</th>
                                <th scope="col">Возраст</th>
                                <th scope="col">Средний бал</th>
                                <th scope="col">Группа</th>
                                <th scope="col">Факультет</th>
                            </tr>
                        </thead>
                        <tbody>                            
                        @foreach ($exec as $ex)
                            <tr>
                                <td><h4>{{$ex->sname}}</h4></td>
                                <td><h4>{{$ex->age}}</h4></td>
                                <td><h4>{{$ex->rate}}</h4></td>
                                <td><h4>{{$ex->gname}}</h4></td>
                                <td><h4>{{$ex->fname}}</h4></td>
                            </tr>  
                        @endforeach                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection