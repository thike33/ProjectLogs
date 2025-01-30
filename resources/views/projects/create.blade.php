@extends('layouts.default')

@section('content')
    <h1 class="text-3xl text-center">プロジェクト作成</h1>

    <div class="max-w-2xl mx-auto mt-10">
        <form action="{{ route('projects.store') }}" method="post" class="grid grid-cols-1 gap-5">
            @csrf
            <div class="grid grid-cols-1">
                <lavel for="name">プロジェクト名</lavel>
                <input type="text" name="name" id="name" class="border">
            </div>

            <div class="grid grid-cols-1">
                <lavel for="description">説明</lavel>
                <input type="text" name="description" id="description" class="border">
            </div>

            <div class="text-center">
                <button type="submit" class="inline-block border p-2 bg-blue-600 text-white font-bold text-center">作成</button>
            </div>
        </form>
    </div>
@endsection
