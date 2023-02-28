<?php

namespace App\Http\Controllers;

use App\Exports\UserExport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    public function exportUsers()
    {
        return Excel::download(new UserExport, 'users.xlsx');
    }
}
