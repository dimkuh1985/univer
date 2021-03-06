@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <h2 class="card-header">Редактирование Студента</h2>
                <div class="panel-body">                                                              
                    <hr>
                    <form id="form1" action="{{route('students.update', $student->id)}}" method="post">
                    	{{method_field('PUT')}}
                        {{csrf_field()}}
                        <p>
                            <label for="sname">Имя студента:</label>
                            <br>                            
                            <input type="text" name="sname" class="form-control" id="sname" required="" value="{{$student->sname}}" style="width: 600px"/>
                            <br>
                            <label for="age">Возраст:</label>
                            <br>                            
                            <input type="number" name="age" class="form-control" id="age" required="" value="{{$student->age}}" style="width: 600px"/>
                            <br>
                            <label for="rate">Средний бал:</label>
                            <br>                            
                            <input type="number" name="rate" class="form-control" id="rate" required="" value="{{$student->rate}}" style="width: 600px" step="0.1"/>
                            <br>
                            <p>
                            <label for="group_id">Группа:</label>
                            <br>
                            <p>
                            	<select for="group_id" class="form-control" name="group_id" id="group_id">                            
                            	@foreach($exec as $ex)                            		                          	                      
                          			<option value="{{$ex->id}}" hidden>{{$ex->gname}} ({{$ex->fname}})</option>                          			
                          		@endforeach
                          		@foreach($exec2 as $ex2)                            		                          	                      
                          			<option value="{{$ex2->id}}">{{$ex2->gname}} ({{$ex2->fname}})</option>                          			
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
                            <a href="{{route('students.edit', $student->id)}}" class="btn btn-danger btn-lg" style="width: 120px; font-size: 12pt;">Отмена</a>
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