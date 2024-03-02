<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::orderBy('id', 'asc')->get();

        return response()->json([
            'success' => true,
            'message' => 'List Data Job',
            'data'    => $jobs
        ], 200);
    }

    // public function index()
    // {
    //     // Mengambil semua data pekerjaan
    //     $jobs = Job::all();
    //     return response()->json(['jobs' => $jobs], 200);
    // }

    // public function store(Request $request)
    // {
    //     // Validasi request
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //     ]);

    //     // Membuat pekerjaan baru
    //     $job = Job::create($request->all());
    //     return response()->json(['job' => $job], 201);
    // }

    // public function show($id)
    // {
    //     // Mengambil data pekerjaan berdasarkan ID
    //     $job = Job::findOrFail($id);
    //     return response()->json(['job' => $job], 200);
    // }

    // public function update(Request $request, $id)
    // {
    //     // Validasi request
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //     ]);

    //     // Mengupdate data pekerjaan
    //     $job = Job::findOrFail($id);
    //     $job->update($request->all());
    //     return response()->json(['job' => $job], 200);
    // }

    // public function destroy($id)
    // {
    //     // Menghapus data pekerjaan berdasarkan ID
    //     $job = Job::findOrFail($id);
    //     $job->delete();
    //     return response()->json(['message' => 'Job deleted successfully'], 200);
    // }
}
