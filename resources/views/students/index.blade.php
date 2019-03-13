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
                                <th><input type="hidden"></th>
                                <th scope="col">Имя Фамилия</th>
                                <th scope="col">Возраст</th>
                                <th scope="col">Средний бал</th>
                                <th scope="col">Группа</th>
                                <th scope="col">Факультет</th>
                                <th scope="col">Редактировать</th>
                                <th scope="col">Удалить</th>
                            </tr>
                        </thead>
                        <tbody>                            
                        @foreach ($exec as $ex)
                            <tr>
                                <td><input type="hidden" value="{{$ex->id}}"></td>
                                <td><h4>{{$ex->sname}}</h4></td>
                                <td><h4>{{$ex->age}}</h4></td>
                                <td><h4>{{$ex->rate}}</h4></td>
                                <td><h4>{{$ex->gname}}</h4></td>
                                <td><h4>{{$ex->fname}}</h4></td>
                                <td><a href="{{route('students.edit', $ex->id)}}" style="background-color: white; border: none; margin-left: 15%"><img src='img/edit.png' width='40' height='40'></a></td>
                                <td>
                                    <form id="form2" action="{{route('students.destroy', $ex->id)}}" method="post">
                                        <input name="_method" type="hidden" value="DELETE">
                                        {{csrf_field()}}                                        
                                        <button type="submit" name="submit" style="background-color: white; border: none;"><img src='img/cross.png' width='40' height='40'></button>
                                    </form>
                                </td>
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