@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <h2 class="panel-heading" style="margin: 0; text-align: center;">Группы</h2>                    
                <div class="panel-body">
                    <h3 style="margin: 0; text-align: center;">Панель управления группами</h3>
                    <hr>
                    <h5>
                        <a href="{{ url('/home') }}">
                            На Главную
                        </a>
                    </h5>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection