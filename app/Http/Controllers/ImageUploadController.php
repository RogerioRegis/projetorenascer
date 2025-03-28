<?php
   
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Reeducating;

class ImageUploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function imageUpload()
    {
        return view('imageUpload')
        ->with('reeducandos', Reeducating::orderBy('nome', 'ASC')->get());
    }
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function imageUploadPost(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        //$imageName = time().'.'.$request->image->extension();  
        $imageName = $request->nome . '.' . $request->image->extension();
   
        $request->image->move(public_path('images'), $imageName);
   
        return back()
            ->with('success','Você carregou a imagem com sucesso.')
            ->with('image',$imageName);
   
    }
}