@extends('layouts.layouts');
@section('content');


<div id="breadcrumb">
    <div class="container">
        <div class="breadcrumb">
            <li><a href="/">Главная</a></li>
            <li>Наши педагоги</li>
            @if($isAdmin==1)
                <li><a href="/addTeacher">Добавить нового учителя</a></li>
            @endif
        </div>
    </div>
</div>


<div class="container">
    <div class="wp-content row">
        <div class="col-md-12"><h1>
                Наши педагоги</h1>
        </div>

        @foreach($teachers as $teacher)
        <div class="wp-teacher-item col-sm-12">
            <div class="wp-photo-side">
			<span class="img-border-square">
				<div class="shadow-layer"></div>
				<img src="{{$teacher->foto}}">
			</span>
                </a>
            </div>
            <div class="section-title-2">{{$teacher->FIO}}</div>
            <div class="job-title">{{$teacher->specialization}}</div>
            <p>{{$teacher->about}}</p>	<div>
            </div>

        </div>
        @endforeach

    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <hr>
    </div>
</div>



@endsection
