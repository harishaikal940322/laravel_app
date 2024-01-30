<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use App\Rules\NoHtmlTags;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $q = Clients::all();
        return view('clients.index', compact('q'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('clients.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // Define validation rules
        $rules = [
            'name' => ['required', 'string', new NoHtmlTags()],
            'active' => 'required|boolean',
        ];

        // Run validation
        $validator = Validator::make($request->all(), $rules);

        // Check if validation fails
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        // validated data
        $validatedData = $validator->validated();

        //update data
        $q = new Clients();
        $q->name = $validatedData['name'];
        $q->active = $validatedData['active'];
        $q->save();

        // redirect to index
        return redirect()
            ->route('client.index')
            ->with('success', 'Data Saved');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $q = Clients::findOrFail($id); //
        return view('clients.form', compact('q'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        // Define validation rules
        $rules = [
            'name' => ['required', 'string', new NoHtmlTags()],
            'active' => 'required|boolean',
        ];

        // Run validation
        $validator = Validator::make($request->all(), $rules);

        // Check if validation fails
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        // validated data
        $validatedData = $validator->validated();

        //update data
        $q = Clients::findOrFail($id);
        $q->name = $validatedData['name'];
        $q->active = $validatedData['active'];
        $q->save();

        // redirect to index
        return redirect()
            ->route('client.index')
            ->with('success', 'Data Saved');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
