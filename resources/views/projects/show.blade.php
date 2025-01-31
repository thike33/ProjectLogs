@extends('layouts.default')

@section('content')
    <h1 class="text-3xl text-center">プロジェクト詳細</h1>

    <div class="grid grid-cols-1 gap-5 max-w-3xl mx-auto mt-10">
        <h2>{{ $project->name }}</h2>
        <p>{{ $project->description }}</p>
    </div>
@endsection
