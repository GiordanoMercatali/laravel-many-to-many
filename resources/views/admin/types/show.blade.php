@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2>{{ $type->name }}</h2>

        <hr>
        @if (count($type->projects) > 0)
            <h3>Projects with type: {{ $type->name }}</h3>
            <ul>
                @foreach ($type->projects as $project)
                    <li>
                        <a href="{{ route('admin.projects.show', ['project' => $project->slug]) }}">{{ $project->title }}</a>
                    </li>
                @endforeach
            </ul>
        @else
            <p>No project with this type!</p>            
        @endif
        <a class="btn btn-warning" href="{{ route('admin.types.index') }}"><i class="fa-solid fa-backward"></i></a>
    </div>
@endsection