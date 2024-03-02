<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SkillSet;

class SkillSetController extends Controller
{
    public function index()
    {
        $skillsets = SkillSet::orderBy('candidate_id', 'asc')->get();

        return response()->json([
            'success' => true,
            'message' => 'List Data SkillSet',
            'data'    => $skillsets
        ], 200);
    }
    // public function index()
    // {
    //     // Mengambil semua data skill set
    //     $skillSets = SkillSet::all();
    //     return response()->json(['skill_sets' => $skillSets], 200);
    // }

    // public function store(Request $request)
    // {
    //     // Validasi request
    //     $request->validate([
    //         'candidate_id' => 'required|exists:candidates,id',
    //         'skill_id' => 'required|exists:skills,id',
    //     ]);

    //     // Membuat skill set baru
    //     $skillSet = SkillSet::create($request->all());
    //     return response()->json(['skill_set' => $skillSet], 201);
    // }

    // public function show($id)
    // {
    //     // Mengambil data skill set berdasarkan ID
    //     $skillSet = SkillSet::findOrFail($id);
    //     return response()->json(['skill_set' => $skillSet], 200);
    // }

    // public function update(Request $request, $id)
    // {
    //     // Validasi request
    //     $request->validate([
    //         'candidate_id' => 'required|exists:candidates,id',
    //         'skill_id' => 'required|exists:skills,id',
    //     ]);

    //     // Mengupdate data skill set
    //     $skillSet = SkillSet::findOrFail($id);
    //     $skillSet->update($request->all());
    //     return response()->json(['skill_set' => $skillSet], 200);
    // }

    // public function destroy($id)
    // {
    //     // Menghapus data skill set berdasarkan ID
    //     $skillSet = SkillSet::findOrFail($id);
    //     $skillSet->delete();
    //     return response()->json(['message' => 'Skill set deleted successfully'], 200);
    // }
}
