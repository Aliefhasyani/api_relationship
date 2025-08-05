<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        $profile = Profile::with('comments')->withCount('comments')->get();
       
        if($profile->isEmpty()){
            return response()->json([
                "message" => "failed to fetch data"
            ]);
        }
        
        
        return response()->json([
            "profile_data" => $profile
        ]);
        
       
    }

    public function show($id){
        $profile = Profile::with('comments')->find($id);


        if(!$profile){
            return response()->json([
                "message"=> "invalid data"
            ]);
        }
        
        return response()->json([
            "profile" => $profile
        ]);

    }

    public function destroy($id){
        $profile = Profile::find($id);

        $profile->delete();
        
        return response()->json([
            "message"=>"data deleted"
        ]);
    }
}
