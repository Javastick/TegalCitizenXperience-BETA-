<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $complaints = Complaint::latest()->with('user', 'comments')->paginate(3);

        $viewData['complaints'] = $complaints;
        $viewData['user'] = Auth::user();
        $viewData['title'] = "Pengaduan Terbaru";
        return view('home.index')->with('data', $viewData);
    }
}
