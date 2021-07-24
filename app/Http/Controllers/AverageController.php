<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class AverageController extends Controller
{
    public function average_point(){
        $subject = DB::table('tbl_subject')->get();
        $total_subject = $subject->count();
        
        $student = DB::table('tbl_point')->where('student_id',"BKC19180")->get();
            // foreach($student as $key => $point) {
    
            //         $score =  $point->skill_1st;
                    
            // }   
       
        $sum1 = $student->avg('skill_1st');
        $sum2 = $student->avg('final_1st');
        $avg_student = Collection::make([$sum1,$sum2])->avg();;
        //$student->avg('skill_1st','skill_2st','final_1st','final_2st')
    }
}
