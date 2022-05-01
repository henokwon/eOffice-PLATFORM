<?php
namespace App\Http\Controllers;
use App\Models\LegacyFile;
use Illuminate\Http\Request;

class LegacyFileController extends Controller
{
    //
    public function uploadFile()
    {
        return view('legacy.file');
    }
    public function submitForm(Request $request)
    {
        // dd($request);
        $data = new LegacyFile();
        $file = $request->file;
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $request->file->move('assets', $fileName);
        $data->file = $fileName;
        $data->file_name = $request->name;
        $data->description = $request->description;
        //   dd($data);
        $data->save();
        return redirect()->back();
    }
    public function showfile()
    {
        $data = legacyfile::all();
        return view('legacy.showFile', compact('data'));
    }
    public function  downloadFile(Request $request, $file){
    return response()->download(public_path('assets/'.$file));

    }
    public function viewFile($id)
    {
        $data=legacyfile::find($id);
        return view('legacy.readFile', compact('data'));
    }
}
