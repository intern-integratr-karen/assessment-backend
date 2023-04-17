<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $branch = Branch::all();

        return response ()->json($branch,200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $payload = $this->payload($request);

        $branch = Branch::create($payload);

        return response()->json($branch,200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $branch = Branch::where ('id',$id)->first();
        return response()->json($branch,200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $payload = $this->payload($request);

        $branch = Branch::where ('id',$id)->first();

        $branch->update($payload);

        return response()->json($branch,200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $branch = Branch::where ('id',$id)->first();
        $branch->delete();
        return response('',200);
    }

    public function payload($request){
        return $this->validate($request,[
            'product_name' => ['required'],
            'quantity'=>['required']
        ]);
    }
}
