<?php

namespace App\Http\Controllers;

use App\Exports\UserExport;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    public function exportUsers()
    {
        return Excel::download(new UserExport(), 'users.xlsx');
    }
}
