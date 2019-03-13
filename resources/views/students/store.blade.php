@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <h2 class="panel-heading" style="margin: 0; text-align: center;">Отчёт об операции</h2>                    
                <div class="panel-body">
                    <h3 style="margin: 0; text-align: center;">Студент {{$sname}} успешно добавлен!</h3>
                    <hr>                    
                    <hr>
                    <h5>
                        <a href="{{route('students.index')}}">Назад к студентам</a>
                    </h5>                        
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection