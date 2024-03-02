<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidate;
use Illuminate\Support\Facades\Validator;

class CandidateController extends Controller
{
    public function index()
    {


        $candidates = Candidate::orderBy('id', 'asc')->get();

        return response()->json([
            'success' => true,
            'message' => 'List Data Candidate',
            'data'    => $candidates
        ], 200);
    }


    // public function index()
    // {
    //     // Mengambil semua data kandidat
    //     $candidates = Candidate::all();
    //     return response()->json(['candidates' => $candidates], 200);
    // }

    // public function store(Request $request)
    // {
    //     // Validasi request
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|email|unique:candidates',
    //         'phone' => 'required|string|unique:candidates',
    //         'year' => 'required|integer',
    //         'job_id' => 'required|exists:jobs,id',
    //     ]);

    //     // Membuat kandidat baru
    //     $candidate = Candidate::create($request->all());
    //     return response()->json(['candidate' => $candidate], 201);
    // }

    // public function show($id)
    // {
    //     // Mengambil data kandidat berdasarkan ID
    //     $candidate = Candidate::findOrFail($id);
    //     return response()->json(['candidate' => $candidate], 200);
    // }

    // public function update(Request $request, $id)
    // {
    //     // Validasi request
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|email|unique:candidates,email,' . $id,
    //         'phone' => 'required|string|unique:candidates,phone,' . $id,
    //         'year' => 'required|integer',
    //         'job_id' => 'required|exists:jobs,id',
    //     ]);

    //     // Mengupdate data kandidat
    //     $candidate = Candidate::findOrFail($id);
    //     $candidate->update($request->all());
    //     return response()->json(['candidate' => $candidate], 200);
    // }

    // public function destroy($id)
    // {
    //     // Menghapus data kandidat berdasarkan ID
    //     $candidate = Candidate::findOrFail($id);
    //     $candidate->delete();
    //     return response()->json(['message' => 'Candidate deleted successfully'], 200);
    // }
}
