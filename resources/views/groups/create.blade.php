@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <h2 class="card-header">Добавление группы</h2>
                <div class="panel-body">
                    <div class="alert alert-success" role="alert">
                        <h2>Исходные данные</h2>
                    </div>                                            
                    <hr>
                    <form id="form1" action="{{route('groups.store')}}" method="post">
                        {{csrf_field()}}
                        <p>
                            <label for="gname">Название Группы:</label>
                            <br>                            
                            <input type="text" name="gname" class="form-control" id="gname" required="" style="width: 600px"/>
                            <br>
                            <p>
                            <label for="faculty_id">Факультет:</label>
                            <br>
                            <p>
                            <select for="faculty_id" class="form-control" name="faculty_id" id="faculty_id" required="">
                            <!--Обязательно добавить в GroupController выборку по объекту в метод create()--> 
                            	@foreach($faculties as $faculty)                            		                          	                      
                          			<option value="{{$faculty->id}}">{{$faculty->fname}}</option>                          			
                          		@endforeach
                          	</select>
                          	</p>
                        	</p>                            
                        </p>
                        <p>
                            <input type="submit" class="btn btn-success btn-lg" name="submit" value="Добавить" style="width: 120px; font-size: 12pt;">
                        </p>
                    </form>
                    <hr>
                    <h5>
                        <a href="{{route('groups.index')}}">Назад к группам</a>
                    </h5>                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection