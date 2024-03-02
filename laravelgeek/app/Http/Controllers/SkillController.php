<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;

class SkillController extends Controller
{
    public function index()
    {
        $skills = Skill::orderBy('id', 'asc')->get();

        return response()->json([
            'success' => true,
            'message' => 'List Data Skill',
            'data'    => $skills
        ], 200);
    }
    // public function index()
    // {
    //     // Mengambil semua data skill
    //     $skills = Skill::all();
    //     return response()->json(['skills' => $skills], 200);
    // }

    // public function store(Request $request)
    // {
    //     // Validasi request
    //     $request->validate([
    //         'name' => 'required|string|max:255|unique:skills',
    //     ]);

    //     // Membuat skill baru
    //     $skill = Skill::create($request->all());
    //     return response()->json(['skill' => $skill], 201);
    // }

    // public function show($id)
    // {
    //     // Mengambil data skill berdasarkan ID
    //     $skill = Skill::findOrFail($id);
    //     return response()->json(['skill' => $skill], 200);
    // }

    // public function update(Request $request, $id)
    // {
    //     // Validasi request
    //     $request->validate([
    //         'name' => 'required|string|max:255|unique:skills,name,' . $id,
    //     ]);

    //     // Mengupdate data skill
    //     $skill = Skill::findOrFail($id);
    //     $skill->update($request->all());
    //     return response()->json(['skill' => $skill], 200);
    // }

    // public function destroy($id)
    // {
    //     // Menghapus data skill berdasarkan ID
    //     $skill = Skill::findOrFail($id);
    //     $skill->delete();
    //     return response()->json(['message' => 'Skill deleted successfully'], 200);
    // }
}
