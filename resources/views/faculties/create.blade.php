@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <h2 class="card-header">Добавление факультета</h2>
                <div class="panel-body">
                    <div class="alert alert-success" role="alert">
                        <h2>Исхдные данные</h2>
                    </div>                    
                    <hr>
                    <form id="form1" action="{{route('faculties.store')}}" method="post">
                        {{csrf_field()}}
                        <p>
                            <label for="fname">Название факультета:</label>
                            <br>
                            <input type="text" name="fname" id="fname" required="" style="width: 600px"/>
                        </p>
                        <p>
                            <input type="submit" name="submit" value="Добавить" style="width: 120px; font-size: 12pt;">
                        </p>
                    </form>
                    <hr>
                    <h5>
                        <a href="{{url('/home')}}">На главную</a>
                    </h5>                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection