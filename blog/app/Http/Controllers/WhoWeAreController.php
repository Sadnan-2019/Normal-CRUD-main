<?php

namespace App\Http\Controllers;

use App\WhoWeAre;
use Illuminate\Http\Request;

class WhoWeAreController extends Controller
{


    public function index(){


        return view('admin.whoweare.add-whoweare');
    }

public function SaveWhoweare(Request $request){

        $this->validate($request,[

            'textone'=>'required',
            'texttwo'=>'required',
            'textthree'=>'required',
            'publicationtstatus'=>'required'


        ]);

        $Whoweare= new WhoWeAre();
        $Whoweare->textone=$request->textone;
        $Whoweare->texttwo=$request->texttwo;
        $Whoweare->textthree=$request->textthree;
        $Whoweare->publicationtstatus=$request->publicationtstatus;
        $Whoweare->save();
        return redirect('/who-weare')->with('message','Add whoweare Succesfully');





}


public function ManageWhoweare(){


    $Whoweares = WhoWeAre::all();
    return view('admin.whoweare.manage-whoweare',['Whoweares'=> $Whoweares]);


}




public function DeleteWhoweare($id){
    $Whoweare = WhoWeAre::find($id);
    $Whoweare->delete();
    return redirect('/manage-whoweare')->with('message','WhoWeAre Delated Sucesfully');







}



public function UnpublishedWhoweare($id){

        $Whoweare= WhoWeAre::find($id);
        $Whoweare->publicationtstatus =0;
        $Whoweare->save();
    return redirect('/manage-whoweare');


}


public function PublishedWhoweare($id){

        $Whoweare =WhoWeAre::find($id);
        $Whoweare->publicationtstatus =1;
        $Whoweare->save();
    return redirect('/manage-whoweare');







}



}
