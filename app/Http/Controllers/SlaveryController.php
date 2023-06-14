<?php

namespace App\Http\Controllers;

use App\Models\Slavery;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class SlaveryController extends BaseController
{


    public function show($document)
    {
        $slavery = Slavery::where('document', $document)->first();
        return response()->json($slavery);
    }
}
