<?php

namespace App\Http\Controllers\Api\V1;

use App\Exports\UserExport;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        // Log::alert("Atenção: obrigado pela atenção", [
        //     'class' => self::class,
        //     'name'  => 'Paulo', 'email' => 'maie@maie.com'
        // ]);
        // Log::critical("critical");
        // Log::debug("debug");
        // Log::emergency("emergency");
        // Log::error("error");
        // Log::info("info");
        // Log::notice("notice");

        return response(User::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): Response
    {
        $user = User::factory(1)->create();

        return response($user, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user): Response
    {
        return response($user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $user->update($request->all());

        return response($user);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user): Response
    {
        $user->delete();

        return response('deletado');
    }

    public function exportUsers()
    {
        return Excel::download(new UserExport(), 'users.xlsx');
    }
}
