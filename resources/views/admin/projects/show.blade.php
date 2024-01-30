@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>{{ $project->title }}</h1>

        <div>
            <img src="{{asset('storage/' . $project->cover_image)}}" alt="">
        </div>

        <hr>
        <p>{{ $project->description }}</p>

        <ul>
            <li>
                {{ $project->languages }}
            </li>
            <li>
               {{ $project->n_stakeholders }}
            </li>
            <li>
                {{ $project->year }}
            </li>
            <li>
                {{ $project->git_link }}
            </li>

            <li>
                Type: {{ $project->type ? $project->type->name : 'None' }}
            </li>

        </ul>
        <a class="btn btn-warning" href="{{ route('admin.projects.index') }}"><i class="fa-solid fa-backward"></i></a>
    </div>    
@endsection