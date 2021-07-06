<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index(){

return view('admin.team.add-team');
    }


    protected function Teamvalidation($request)
    {

        $this->validate($request,[

            'memberid'=>'required',
            'name'=>'required',
            'description'=>'required',
            'photo'=>'required',
            'publicationtstatus'=>'required'



        ]);

    }


    protected function ImageUpload($request){


        $teamMemberimg = $request->file('photo');
        $imgName=$teamMemberimg->getClientOriginalName();
        $directory='member-imges/';
        $imageUrl =$directory.$imgName;
        $teamMemberimg->move($directory, $imgName);
        return $imageUrl;



    }


    protected function TeammemeberInfo($request,$imageUrl){

        $team= new Team();
        $team->memberid = $request->memberid;
        $team->name = $request-> name;
        $team->description = $request-> description;
        $team->photo = $imageUrl;
        $team->publicationtstatus = $request-> publicationtstatus;
        $team->save();
        return redirect('team/add') ->with  ('message','Team Member save succesfully');






    }




    public function saveMember(Request $request){

        $this->Teamvalidation($request);
        $imgurl=$this->ImageUpload($request);
        $this->TeammemeberInfo($request,$imgurl);
        return redirect('team/add') ->with  ('message','Team Member save succesfully');




    }
    public function manageMember(){
        $teams = Team::all();
        return view('admin.teamMember.manage-teamdetails',['teams' => $teams]);



    }
    public function Unpublishmember($id){

        $teams= Team::find($id);
        $teams->publicationtstatus =0;
        $teams->save();
        return redirect('/team/manage');


/*     return $id;*/


    }
    public function Publishmember($id){


        $teams= Team::find($id);
        $teams->publicationtstatus =1;
        $teams->save();
        return redirect('/team/manage');

    }


    public function Editmember($id){
        $team = Team::find($id);


        return view('admin.team.edit-team',['team'=>$team ]);




    }

/*
    public function TeamupdateInfo($team,$request,$imgurl){

        $team->memberid = $request->memberid;
        $team->name =$request->name;
        $team->description =$request->description;
        $team->photo=$imgurl;
        $team->publicationtstatus =$request->publicationtstatus;
        $team->save();





    }*/


    public function Updatemember(Request $request ){


$TeamImage=$request->file('photo');

if($TeamImage){
    $teams=Team::find($request->id);
    if(file_exists(public_path($teams->photo))) {
        unlink($teams->photo);
    }
    $imgurl=$this->ImageUpload($request);
    $teams->memberid =$request->memberid;
    $teams->name =$request->name;
    $teams->description=$request->description;
    $teams->photo=$imgurl;
    $teams->publicationtstatus=$request->publicationtstatus;
    $teams->save();

    return redirect('/team/manage')->with('message','Updated Succesfully');

}

else{


    $teams=Team::find($request->id);
    $teams->memberid = $request->memberid;
    $teams->name = $request->name;
    $teams->description = $request->description;
    $teams->publicationtstatus = $request->publicationtstatus;
    $teams->save();
    return redirect('/team/manage')->with('message','Updated Succesfully');
}







    }
    public function Deletemember ($id){
        $teams=Team::find($id);
        $teams->delete();
        return redirect('/team/manage')->with('message',' Member deleted Succesfully');


    }


    public function autocomplete(Request $request){

        $teammembers=Team::select("name")
            ->where("name","LIKE","%{$request->terms}%")
            ->get();
        return response()->json($teammembers);
    }


}
