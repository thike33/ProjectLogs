@extends('layouts.default')

@section('content')
    <h1 class="text-3xl text-center">プロジェクト一覧</h1>

    <div class="grid grid-cols-1 gap-5 max-w-3xl mx-auto mt-10">
        @foreach($projects as $project)
            <div class="border-b">
                <h2>
                    <a href="{{ route('projects.show', ['project' => $project->id]) }}">{{ $project->name }}</a>
                </h2>
                <p>{{ $project->description }}</p>
            </div>
        @endforeach
    </div>
@endsection
