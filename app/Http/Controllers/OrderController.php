<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orders;
use App\Imports\OrderImport;
use Maatwebsite\Excel\Facades\Excel;
use Storage;
use File;

class OrderController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $orders = Orders::paginate(10);
        return view('orders', compact('orders'));
    }


    public function uploadScreen()
    {
        return view('orders_upload');
    }


    public function postUpload(Request $request)
    {
        $path = $request->file('orders');
        $filename = $path->getClientOriginalName();
        $uploads = storage_path() . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR;
        if (!file_exists($uploads)) {
            mkdir($uploads, 0777, true);
        }
        Storage::disk('uploads')->put($filename, File::get($path));
        $filemove = storage_path() . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . $filename;
        Excel::import(new OrderImport, $filemove);
        return redirect('orders');
    }

}
