<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\WhoWeAre;
class FrontController extends Controller
{
    public function index(){


        return view('front-end.home.home');
    }



    public function team(){



         $TeamMember=Team::where('publicationtstatus',1)
             ->take(6)
             ->get();
$TeamDescriptions=WhoWeAre::where('publicationtstatus',1)
             ->get();


         /*return $TeamMemberImage;
         exit();*/
        return view ('front-end.team.team-font',[

            'TeamMember'=>$TeamMember,
            'TeamDescriptions'=>$TeamDescriptions
        ]);
    }
}
