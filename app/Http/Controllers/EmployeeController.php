<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Exports\EmployeeExport;
use App\Exports\FilterUserExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\EmployeeController;


class EmployeeController extends Controller
{
    public function index(Request $request){

        if($request->has('search')){
            $data = Employee::where('nama', 'LIKE','%' .$request->search.'%')
            ->orWhere('provinsi', 'like', '%' . $request->search . '%')
            ->orWhere('kota', 'like', '%' . $request->search . '%')->paginate(10);
        }else{
            $data = Employee::paginate(10);
        }
      
        return view('datapegawai',compact('data'));
    }

    public function tambahpegawai(){
        return view('tambahdata');
    }
    public function insertdata(Request $request){
       $data = Employee::create($request->all());
       if($request->hasFile('foto')){
            $request->file('foto')->move('fotopegawai/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
       }
        return redirect()->route('pegawai')->with('success','Data Berhasil Di Tambahkan');
    }
    
    public function tampilkandata($id){
        $data = Employee::find($id);

        return view('tampilkandata', compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Employee::find($id);
        $data->update($request->all());
        return redirect()->route('pegawai')->with('success', 'Data Berhasil Di Update');
    }

    public function delete($id){
        $data = Employee::find($id);
        $data->delete();
        return redirect()->route('pegawai')->with('success', 'Data Berhasil Di Hapus');
    }

    public function exportexcel(){
        
        return Excel::download(new EmployeeExport, 'datapegawai.xlsx');
    }

    public function lihatdata($id){
        $data = Employee::find($id);

        return view('lihatdata', compact('data'));
    }

    public function provinsijakarta(Request $request){
        if($request->has('search')){
            $data = Employee::where('nama', 'LIKE','%' .$request->search.'%')
            ->orWhere('provinsi', 'like', '%' . $request->search . '%')
            ->orWhere('kota', 'like', '%' . $request->search . '%')->paginate(10);
        }else{
            $data = Employee::paginate(10);
        }

        return view('provinsijakarta', compact('data'));
    }

    public function exportfilter()
    {
        $data = app(Employee::class)->newQuery();

        if ( request()->has('search') && !empty(request()->get('search')) ) {
            $search = request()->query('search');
            $data->where(function ($query) use($search) {
                $query->where('nama', 'LIKE', "%{$search}%")
                    ->orWhere('provinsi', 'LIKE', "%{$search}%")
                    ->orWhere('kota', 'LIKE', "%{$search}%");
            });
        }
    
        return Excel::download(new FilterUserExport($data), 'filter.xlsx');
    }
}
