<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Complaint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ComplaintController extends Controller
{
    public function index()
    {
        if(isset($_GET['cat'])){
            $category = $_GET['cat'];
            $complaints = Complaint::where('category', $category)->with('user', 'comments')->latest()->get();

            $viewData['title'] = $category;
        }else{
            $complaints = Complaint::latest()->with('user', 'comments')->paginate(20);
            
            $viewData['title'] = 'Semua Pengaduan';
        }
        
        $viewData['user'] = Auth::user();
        $viewData['complaints'] = $complaints;
        return view('complaint.index')->with('data', $viewData);
    }
    public function make()
    {
        return view('complaint.make');
    }
    public function store(Request $request)
    {
        Complaint::validate($request);
        $user = Auth::user();

        $imageName = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $saveImage = $image->store('public/img');
            $fullPath = explode('/', $saveImage);
            $imageName = last($fullPath);
        }

        $complaint = Complaint::create([
            "title" => $request->input('title'),
            "category" => $request->input('category'),
            "content" => $request->input('content'),
            "location" => $request->input('location'),
            "user_id" => $user->id
        ]);
        $complaint->setImage($imageName);
        $complaint->save();

        
        return redirect('/complaints');
    }
    public function detail($id)
    {
        $complaint = Complaint::where('id', $id)->with('user', 'comments.user')->first();
        $user = Auth::user();

        $viewData['complaint'] = $complaint;
        $viewData['user'] = $user;
        return view('complaint.detail')->with('data', $viewData);
    }
    public function comment(Request $request)
    {
        Comment::create([
            'content' => $request['content'],
            'complaint_id' => $request['complaint_id'],
            'user_id' => $request['user_id']
        ]);
        return redirect()->to(url()->previous() . '#'.$request['complaint_id']);
    }
}
