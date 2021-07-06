<?php

namespace App\Http\Controllers;

use App\Album;
use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.album.add-album');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected function Imgupload($request){

        $Albumimg = $request->file('photo');
        $imgename= $Albumimg->getClientOriginalName();
        $directory='album-images/';
        $imageUrl =$directory.$imgename;
        $Albumimg ->move($directory,$imgename);
      /*  Image::make($Albumimg)->save($imageUrl);*/

        return $imageUrl;


    }

protected function saveAlbuminfo($request,$imgUrl){

        $album= new Album();
        $album->albumid  = $request->albumid;
        $album->name  = $request->name;
        $album->date  = $request->date;
        $album->photo =$imgUrl;
        $album->publicationtstatus = $request->publicationtstatus;
        $album->save();




}




    public function saveAlbum(Request $request)
    {
        $imgUrl= $this->Imgupload($request);
        $this->saveAlbuminfo($request,$imgUrl);


        return redirect('/album/add')->with ('message','Album save Succesfully');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function manageAlbum()
    {
        $albums=Album::all();
        return view('admin.album.manage-Albumdetails',['albums'=> $albums]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function EditAlbum($id){
        $albums=Album::find($id);
        return view('admin.album.edit-album',['album'=>$albums]);







    }

    public function UpdateAlbum(Request $request)  {
     $Albumimage=$request->file('photo');

        if($Albumimage){
            $album=Album::find($request->id);
            if(file_exists(public_path($album->photo))) {
                unlink($album->photo);
            }
            $imgurl=$this->Imgupload($request);
            $album->albumid  = $request->albumid;
            $album->name  = $request->name;
            $album->date  = $request->date;
            $album->photo =$imgurl;
            $album->publicationtstatus = $request->publicationtstatus;
            $album->save();
            return redirect('/album/manage')->with('message','Album Upadated Details Succesfully');

        }



   else{

       $album = Album::find($request->id);
       $album->albumid = $request->albumid;
       $album->name = $request->name;
       $album->date =$request->date;
       $album->publicationtstatus =$request->publicationtstatus;
       $album->save();
       return redirect('/album/manage')->with('message','Album Upadated Details Succesfully');
   }





}

    public function UnpublishAlbum($id)
    {
       $albums=Album::find($id);
       $albums->publicationtstatus =0;
       $albums->save();
       return redirect('/album/manage');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function PublishAlbum($id)
    {
        $albums=Album::find($id);
        $albums->publicationtstatus =1;
        $albums->save();
        return redirect('/album/manage');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Deletealbum($id)
    {
        $album=Album::find($id);
        $album->delete();
        return redirect('/album/manage')->with('message','Album Deleted Sucessfully');
    }
}
