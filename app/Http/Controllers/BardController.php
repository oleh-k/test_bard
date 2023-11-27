<?php

namespace App\Http\Controllers;

use App\Services\Bard;
use Illuminate\Http\Request;

class BardController extends Controller
{
    public function search(Request $request)
    {
        return Bard::search($request->all());
    }
}
