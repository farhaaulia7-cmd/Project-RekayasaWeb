<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class AdminProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::latest()->get();

        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'teknologi' => 'required|string|max:255',
            'status' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        Project::create([
            'title' => $request->title,
            'description' => $request->description,
            'teknologi' => $request->teknologi,
            'status' => $request->status,
            'image' => $imageName,
        ]);

        return redirect()->route('admin.projects.index')->with('success', 'Data project berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Opsional, bisa dibiarkan atau diisi jika butuh detail view
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $project = Project::findOrFail($id);
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $project = Project::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'teknologi' => 'required|string|max:255',
            'status' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'teknologi' => $request->teknologi,
            'status' => $request->status,
        ];

        if ($request->hasFile('image')) {
            if ($project->image && file_exists(public_path('images/' . $project->image))) {
                unlink(public_path('images/' . $project->image));
            }

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $data['image'] = $imageName;
        }

        $project->update($data);

        return redirect()->route('admin.projects.index')->with('success', 'Data project berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $project = Project::findOrFail($id);

        if ($project->image && file_exists(public_path('images/' . $project->image))) {
            unlink(public_path('images/' . $project->image));
        }

        $project->delete();

        return redirect()->route('admin.projects.index')->with('success', 'Data project berhasil dihapus.');
    }
}