<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLabelRequest;
use App\Http\Requests\UpdateLabelRequest;
use App\Models\Label;

class LabelController extends Controller
{
    /**
     * Display a listing of the resource...
     */
    public function index()
    {
        return response(Label::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLabelRequest $request)
    {
        return response(Label::factory(1)->create(), 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Label $label)
    {
        return $label;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLabelRequest $request, Label $label)
    {
        dump('ss');
        $label->update($request->validated());

        return $label;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Label $label)
    {
        return $label->delete();
    }
}
