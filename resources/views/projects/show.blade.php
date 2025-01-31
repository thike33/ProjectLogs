@extends('layouts.default')

@section('content')
    <h1 class="text-3xl text-center">プロジェクト詳細</h1>

    <div class="grid grid-cols-1 gap-5 max-w-3xl mx-auto mt-10">
        <h2>{{ $project->name }}</h2>
        <p>{{ $project->description }}</p>

        <div class="flex justify-center gap-5 text-center">
            <a href="{{ route('projects.edit', ['project' => $project->id]) }}" class="inline-block border p-2 bg-blue-600 text-white font-bold text-center">プロジェクトの編集</a>
            <form action="{{ route('projects.destroy', ['project' => $project->id]) }}" method="post">
                @csrf
                @method('DELETE')

                <button type="submit" class="inline-block border p-2 bg-red-600 text-white font-bold text-center" onclick="return confirm('削除しますか？')">プロジェクトの削除</button>
            </form>
        </div>
    </div>
@endsection
