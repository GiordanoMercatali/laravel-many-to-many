@extends('layouts.admin')

@section('content')
    <div class="container py-5">
        <h1>Boolfolio</h1>
        <h2>List of Projects</h2>

        <div class="text-end">
          <a class="btn btn-primary" href="{{ route('admin.projects.create' )}}"><i class="fa-solid fa-plus"></i></a>
        </div>

        @if (count($projects)>0)
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">Title</th>
              <th scope="col">Description</th>
              <th scope="col">Languages</th>
              <th scope="col">N° of Stakeholders</th>
              <th scope="col">Year</th>
              <th scope="col">GitHub Link</th>
              <th scope="col">More</th>
            </tr>
          </thead>
          <tbody>
              @foreach($projects as $project)
              <tr>
                  <th scope="row">{{ $project->id }}</th>
                  <td>{{ $project->title }}</td>
                  <td>{{ $project->description }}</td>
                  <td>{{ $project->languages }}</td>
                  <td>{{ $project->n_stakeholders }}</td>
                  <td>{{ $project->year }}</td>
                  <td>{{ $project->git_link }}</td>
                  <td>
                    <a class="btn btn-success" href="{{ route('admin.projects.show', ['project' => $project->slug]) }}"><i class="fa-solid fa-info"></i></a>
                    <a class="btn btn-warning" href="{{ route('admin.projects.edit', ['project' => $project->slug]) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                    <form action="{{ route('admin.projects.destroy', ['project' => $project->slug]) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger" type="submit"><i class="fa-solid fa-trash"></i></button>
                    </form>
                  </td>
              </tr>
              @endforeach
          </tbody>
        </table>
        @else
            <div class="alert alert-warning mt-4">
              <p>No projects yet! <a href="{{ route('admin.projects.create' )}}">Create a new one.</a></p>
            </div>
        @endif
    </div>
@endsection