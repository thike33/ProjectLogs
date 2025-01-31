<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', ['projects' => $projects]);
    }

    // プロジェクト作成ページ
    public function create()
    {
        return view('projects.create');
    }

    // プロジェクト作成機能
    public function store(ProjectRequest $request)
    {
        $validated = $request->validated();
        Project::create($validated);

        return to_route('projects.index')->with('success', 'プロジェクトを作成しました');
    }

    // プロジェクト詳細ページ
    public function show(Project $project)
    {
        $project = Project::find($project->id);
        return view('projects.show', ['project' => $project]);
    }

    public function edit(Project $project)
    {
        //
    }

    public function update(Request $request, Project $project)
    {
        //
    }


    public function destroy(Project $project)
    {
        //
    }
}
