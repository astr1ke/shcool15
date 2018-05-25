@extends('layouts.layouts');
@section('content');

<div class="container">
    <div class="row">
        <ol class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="/" class="first" itemprop="item"><span itemprop="name">Главная</span><meta itemprop="position" content="1"></a></li>
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="/teachers" itemprop="item"><span itemprop="name">Наши педагоги</span><meta itemprop="position" content="2"></a></li>
            @if($isAdmin==1)
                <li><a href="/addTeacher">Добавить нового учителя</a></li>
            @endif
        </ol>	</div>
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
