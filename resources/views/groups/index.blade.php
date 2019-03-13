@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <h2 class="panel-heading" style="margin: 0; text-align: center;">Группы</h2>                    
                <div class="panel-body">
                    <h3 style="margin: 0; text-align: center;">Панель управления группами
                    </h3>
                    <hr>
                    <h5>
                        <a href="{{ url('/home') }}">На Главную</a>
                    </h5>
                    @if (Auth::user()->name == 'admin')
                        <h5>
                            <a href="{{route('groups.create')}}">Добавить Группу</a>
                        </h5>
                    @endif
                    <hr>
                    <div class="row">
                        @foreach ($exec as $ex)
                            <div class="col-md-4" style="text-align: center;">                                
                                <hr>
                                <h4>{{$ex->gname}}</h4>
                                <h4>{{$ex->fname}}</h4>    
                                <h5>
                                    <a href="">Подробно</a>
                                </h5>                          
                            </div> 
                        @endforeach                               
                     </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection