<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\File;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class FileController extends Controller
{
    //
    public function upload(Request $request)
    {
        if (auth()->user()->hasRole(['customer'])) {
            $uploadedFile = $request->file('file');
            $file = new File();
            $identifier = uniqid();
            $file->name = $request->file('file')->getClientOriginalName();
            $file->description = $request->description;
            $file->file = $identifier . '.' . $uploadedFile->getClientOriginalExtension();
            $file->client()->associate(Auth::user());
            $file->save();
            $uploadedFile->storeAs('uploads', $identifier . '.' . $uploadedFile->getClientOriginalExtension(), 'public');
            Alert::success('File uploaded successfully');
            return view('files');
            return redirect()->route('files');
            // return view('files')->with('message', 'File uploaded successfully');
        }
    }

    public function files()
    {
        $files = [];
        if (Auth::user()->hasRole('customer')) {
            $files = File::with('assignedTo')
                ->where('client_id', Auth::id())
                ->orderBy('updated_at', 'desc')
                ->get();
        }

        if (Auth::user()->hasRole('user')) {
            $files = File::with('client')
                ->where('assigned_to', Auth::id())
                ->orderBy('updated_at', 'desc')
                ->get();
        }

        if (Auth::user()->hasRole('admin')) {
            $files = File::with('client')->orderBy('updated_at', 'desc')->get();
        }
        return view('files')->with('files', $files);
    }

    public function file($id)
    {
        $file = null;
        $users = [];
        if (Auth::user()->hasRole('customer')) {
            $file = File::with('assignedTo', 'comments')
                ->where('client_id', Auth::id())
                ->where('id', $id)
                ->first();
        }

        if (Auth::user()->hasRole('user')) {
            $file = File::with('client', 'comments')
                ->where('assigned_to', Auth::id())
                ->where('id', $id)
                ->first();
        }

        if (Auth::user()->hasRole('admin')) {
            $file = File::with('client', 'assignedTo', 'comments')
                ->where('id', $id)
                ->first();
            $users = User::whereHas('roles', function ($q) {
                $q->where('name', 'user');
            })->get();
        }
        if (!$file) {
            return "Either file does not exist or does not belong to you";
        }
        return view('file')->with('file', $file)->with('users', $users);
    }

    public function approve($id)
    {
        File::where('id', $id)->update([
            'status' => 'approved'
        ]);
        Alert::success("File approved successfully");
        return redirect()->route('view-file', ['id' => $id]);
    }

    public function comment(Request $request, $id)
    {
        $comment = new Comment();
        $comment->comment = $request->comment;
        $comment->file_id = $id;
        $comment->commentator()->associate(Auth::user());
        $comment->save();
        return redirect()->route('view-file', ['id' => $id]);
    }

    public function assign(Request $request)
    {
        $file = File::where('id', $request->id)->first();
        $file->assigned_to = $request->user;
        $file->save();
        return redirect()->route('view-file', ['id' => $request->id]);
    }
}
