@extends('layouts.app')

@section('content')

{{-- <a href="{{ route('comics.create') }}">CREATE</a> --}}


<table class="index-table">

    <thead>
        <tr>
            <th>title</th>
            <th>description</th>
            <th>url</th>
            <th>client</th>
            {{-- <th>destroy</th> --}}
        </tr>
    </thead>

    <tbody>
        @foreach ($projects as $project)
            <tr>
                <td><a href="{{ route('projects.show', $project) }}">
                    {{ $project->title }}</a>
                </td>
                <td>{{ $project->description }}</td>
                <td>{{ $project->url }}</td>
                <td>{{ $project->client }}</td>
            </tr>
        @endforeach

    </tbody>

</table>

@endsection