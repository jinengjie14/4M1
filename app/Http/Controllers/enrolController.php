<?php

namespace App\Http\Controllers;

use App\enrol;
use App\User;
use Illuminate\Http\Request;
use Excel;
use Illuminate\Support\Facades\Hash;

class enrolController extends Controller
{

    public function enrol(Request $request)
    {
        $newEnrol = new enrol();
        $newEnrol->name = $request->get('name');
        $newEnrol->main = json_encode($request->get('main'));
        $user1 = $request->get('user1');
        $user2 = $request->get('user2');
        $user3 = $request->get('user3');
        $user = [];
        array_push($user,$user1, $user2, $user3);
        $users = json_encode($user);
        $newEnrol->user = $users;
        $newEnrol->state = 0;
        $newEnrol->save();
        return response()->json([
            'code' => 200,
            'msg' => '提交成功,我们将会与你取得联系'
        ]);
    }

    public function excel()
    {
        $enrol = enrol::orderBy('score', 'desc')->get();
        return view('excel',compact('enrol'));
    }
}
