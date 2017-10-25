<?php
/**
 * Created by PhpStorm.
 * User: leeeeee
 * Date: 2017/10/11
 * Time: 9:49
 */

namespace App\Http\Controllers;


use App\Enrol;
use App\User;
use Illuminate\Http\Request;

class adminController extends Controller
{

    public function __construct()
    {
        $this->middleware('isAdmin');
    }

    public function admin()
    {
        return view('admin.component.base');
    }

    public function score()
    {
        $username = session('name');
        $user = User::where('name', $username)->first();
        $state = json_decode($user->state, true);
        return view('admin.score', compact('state'));
    }

    public function result()
    {
        $team = Enrol::all();
        return view('admin.result', compact('team'));
    }

    public function scoring(Request $request, $type)
    {
        $user = User::where('name', session('name'))->first();
        $state = json_decode($user->state, true);
        $state[$type] = 1;
        $user->state = json_encode($state);
        $user->save();
        //
        $team = Enrol::where('name', $type)->first();
        if(empty($team->score_json)){
            $transform = array();
        }else{
            $transform = explode(",", $team->score_json);
        }
        $scoreData = $request->get('design') + $request->get('layout') + $request->get('code') + $request->get('func') + $request->get('show');
        array_push($transform, $scoreData);
        $team->score_json = implode(",", $transform);
        $team->save();
        if(sizeof($transform) == 6){
            $maxscore = array_search(max($transform), $transform);
            $minscore = array_search(min($transform), $transform);
            unset($transform[$maxscore]);
            unset($transform[$minscore]);
            $countScore = null;
            foreach ($transform as $value) {
                $countScore += $value;
            }
            $currentScore = $countScore / 4;
            $team->score = $currentScore;
            $team->state = 1;
            $team->save();

        }
//        $currentScore = $team->score;
//        if($currentScore == null || $currentScore == 0){
//            $team->score = $score[$type];
//        }else{
//            $team->score = ($currentScore + $score[$type]) / 2;
//        }
//        $team->state = 1;
//        $team->save();

        return response()->json([
            'code' => 301,
            'url' => url('/admin')
        ]);
    }

    public function scoringPage($type)
    {
        $user = User::where('name', session('name'))->first();
        $state = json_decode($user->state, true);
        if($state[$type] == 1){
            return view('admin.score', compact('state'));
        }
        return view('admin.scoring', compact('type'));
    }

}