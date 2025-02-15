<?php

namespace App\Http\Controllers;

use App\Models\Log;
use Illuminate\Http\Request;

class LogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $logs = Log::all();
        return view('logs.index', compact('logs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('logs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'aksi' => 'required|string',
        ]);

        Log::create([
            'user_id' => $validated['user_id'],
            'aksi' => $validated['aksi'],
        ]);

        return redirect()->route('logs.index')->with('success', 'Log berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $log = Log::findOrFail($id);
        return view('logs.show', compact('log'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $log = Log::findOrFail($id);
        return view('logs.edit', compact('log'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'aksi' => 'required|string',
        ]);

        $log = Log::findOrFail($id);
        $log->update($validated);

        return redirect()->route('logs.index')->with('success', 'Log berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $log = Log::findOrFail($id);
        $log->delete();

        return redirect()->route('logs.index')->with('success', 'Log berhasil dihapus!');
    }
}
