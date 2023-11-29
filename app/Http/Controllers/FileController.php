<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Storage;

class FileController extends Controller
{
    public function index()
    {
        return view("admin.shareholders.file_reference");
    }
    public function viewFile($id)
    {
        $basename = basename(File::find($id)->link);
        $path = storage_path("app/public/files/$basename");
        if (Storage::exists("public/files/$basename")) {
            return response()->file($path);
        } else {
            return 'PDF file not found.';
        }
    }
    public function downloadFile($id)
    {
        $file = File::find($id);

        if (!$file) {
            return 'File not found.';
        }

        $basename = basename($file->link);
        $path = storage_path("app/public/files/$basename");

        if (Storage::exists("public/files/$basename")) {
            return response()->download($path, $basename);
        } else {
            return 'File not found in storage.';
        }
    }
}
