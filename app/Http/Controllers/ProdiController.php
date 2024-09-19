<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function index()
    {
        $prodi = Prodi::with('fakultas')->get();
        $data['message'] = true;
        $data['result'] = $prodi;
        return response()->json($data, Response::HTTP_OK);
    }

}
