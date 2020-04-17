<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\HostingKategori;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function __construct()
    {
       // $this->middleware('auth');
    }

    public function hosting(){

        return view('admin/hosting');
    }
    public function HostingKategori(){

        $HostingKategori = HostingKategori::latest('id','desc')->paginate(5);
        return view('admin/hosting_kategori',compact('HostingKategori'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

       
    }
    public function HostingKategoriAdd(){
        
        return view('admin/hosting_kategori_add');
    }

    public function HostingKategoriSave(Request $request){
        $request->validate([
            'kategori' => 'required',
        ]);
        
        HostingKategori::create($request->all());
   
        /* return redirect()->route('hosting.kategori.add')
                        ->with('success','Kategori created successfully.'); */
        return redirect()->route('hosting.kategori')
                        ->with('success','Kategori created successfully.');

    }

    public function HostingKategoriDdelete($id)
    {
        HostingKategori::find($id,'id')->delete();
  
        return redirect()->route('hosting.kategori')
                        ->with('success','Kategori deleted successfully');
    }

    public function HostingKategoriEdit($id)
    {   
       // $data=HostingKategori::whereId($id)->get();
       $data = DB::table('hosting_kategori')
                ->where('id', $id)
                ->first();
       
        return view('admin/hosting_kategori_edit',['data'=>$data]);
    }


    public function HostingKategoriUpdate(Request $request)
    {
        $request->validate([
            'kategori' => 'required',
        ]);
     /*        echo $request->id;
        echo '<pre>';
            print_r($request->all());
        echo '</pre>';
        exit(); */

        /* $param=array(
                'kategori' => $request->id
                );

        HostingKategori::update($param,array('id'=> $request->id)); */


        DB::table('hosting_kategori')
              ->where('id', $request->id)
              ->update(['kategori'=> $request->kategori]);

  
        return redirect()->route('hosting.kategori')
                        ->with('success','Kategori updated successfully');
    }




    public function HostingAdd(){

        return view('admin/hosting_add');
    }



}
