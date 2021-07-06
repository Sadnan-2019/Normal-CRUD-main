<?php

namespace App\Http\Controllers;

use App\Song;
use function GuzzleHttp\Promise\all;
use Illuminate\Http\Request;
use App\Album;
use PharIo\Manifest\Extension;
use DB;


class SongController extends Controller
{
    public function index(){
         $albums = Album::where('publicationtstatus',1)->get();
        return view('admin.song.add-song',[


            'albums' => $albums

        ]);

    }



   /* public function SongUpload($request){
        $songs =$request->file('song');
        $Uploadsong=$songs->getClientOriginalName|Extension();
        return $Uploadsong;




    }*/


   protected  function SongValidate($request){
       $this->validate($request,[


           'artist' =>'required|regex:/^[a-z ,.\-]+$/i|max:10|min:3',
           'writer'=>'required|max:10|min:3',
           'description'=>'required',
           'song'=>'required',
           'publicationtstatus'=>'required'



       ]);




   }



   protected function SongUpload($request){
       $AudioSong =$request->file('song');
       $SongName = $AudioSong->getClientOriginalName();
       $extension=$AudioSong->getClientOriginalExtension();
       $nameExt = $SongName.'.'.$extension;
       $UploadFolder='SongFolder/';
       $SongUrl= $UploadFolder.$SongName;
       $AudioSong->move($UploadFolder,$nameExt,$extension);

       return $SongUrl;
   }




   protected function SongInfo($request, $SongUrl){

       $songs= new Song();
       $songs->albumID= $request->albumID;
       $songs->artist= $request->artist;
       $songs->writer= $request->writer;
       $songs->description= $request->description;
       $songs->song =$SongUrl;
       $songs->publicationtstatus =$request->publicationtstatus;
       $songs->save();


   }

    public function saveSong(Request $request){
       $this->SongValidate($request);
       $SongsUrl=$this->SongUpload($request);
       $this->SongInfo($request,$SongsUrl);

       return redirect('/song/add')->with('message','Save Song Details Succesfully');



    }



    public function manageSong(){

       $songs= DB:: table('songs')
       ->join('albums','songs.albumID','=','albums.id')
       ->select('songs.*','albums.name')
       ->get();

       return view('admin.song.manage-song',['songs'=>$songs]);


    }




    public function editSong($id){
        $songs =Song::find($id);
        $albums = Album::where('publicationtstatus',1)->get();



       return view('admin.song.edit-song', [
           'songs'=>$songs,
           'albums'=>$albums






       ]);


    }


    public function deleteSong($id){

       $songs= Song::find($id);
       $songs->delete();
       return redirect('/manage-songdetails');


    }


    public function unpublishedSong($id){
       $songs= Song::find($id);
       $songs->publicationtstatus =0;
       $songs->save();

       return redirect('/manage-songdetails')->with('message','Success');



    }



    public function publisheSong ($id){

       $songs= Song::find($id);
       $songs->publicationtstatus =1;
       $songs->save();

       return redirect('/manage-songdetails')->with('message','Success');





    }






}
