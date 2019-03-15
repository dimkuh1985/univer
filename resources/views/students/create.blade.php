@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <h2 class="card-header">Добавление Студентов</h2>
                <div class="panel-body">
                    <div class="alert alert-success" role="alert">
                        <h2>Исходные данные</h2>
                    </div>                                            
                    <hr>
                    <form id="form1" action="{{route('students.store')}}" method="post">
                        {{csrf_field()}}
                        <p>
                            <label for="sname">Имя студента:</label>
                            <br>                            
                            <input type="text" name="sname" class="form-control" id="sname" required="" style="width: 600px"/>
                            <br>
                            <label for="age">Возраст:</label>
                            <br>                            
                            <input type="number" name="age" class="form-control" id="age" required="" style="width: 600px"/>
                            <br>
                            <label for="rate">Средний бал:</label>
                            <br>                            
                            <input type="number" name="rate" class="form-control" id="rate" required="" style="width: 600px" step="0.1"/>
                            <br>
                            <p>
                            <label for="group_id">Группа:</label>
                            <br>
                            <p>
                            <select for="group_id" class="form-control" name="group_id" id="group_id" required="">
                            <!--Обязательно добавить в StudentController выборку по объекту в метод create()--> 
                            	@foreach($exec as $ex)                            		                          	                      
                          			<option value="{{$ex->id}}">{{$ex->gname}} ({{$ex->fname}})</option>                          			
                          		@endforeach
                          	</select>
                          	</p>
                        	</p>                            
                        </p>
                         <div class="row">
                            <div class="col-sm-2">
                        
                            <input type="submit" class="btn btn-success btn-lg" name="submit" value="Сохранить" style="width: 120px; font-size: 12pt;">
                        </div>
                        <div class="col-sm-2">
                            <a href="{{route('students.create')}}" class="btn btn-danger btn-lg" style="width: 120px; font-size: 12pt;">Отмена</a>
                        </div>
                        
                        </div>
                    </form>
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