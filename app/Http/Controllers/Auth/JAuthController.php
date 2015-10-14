<?php

namespace App\Http\Controllers\Auth;

include 'clsJAccount.php';

use Input;
use JaHelper;
use Session;
use Hash;
use Illuminate\Http\Request;
use Auth;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Jaccount;
use App\User;
use App\Student;

class JAuthController extends Controller
{
    /**
     *Redirect to the jaccount site
     */
    public function login()
    {
        $jatkt = Input::get('jatkt');
        $ht = JaHelper::jalogin($jatkt,'/jaccount');
        // $ht = JaHelper::jalogin($jatkt,'/');
        isset($ht['uid']) ? ($jaccount_id = $ht['uid']) : exit;

        Session::put('true_name', $ht['chinesename']);
        Session::put('student_id', $ht['id']);

        if(Jaccount::where('account_name', '=', $ht['uid'])->count() == 0){
            $realName = array_key_exists('chinesename',$ht)?$ht['chinesename']:'';
            $snum = array_key_exists('id',$ht)?$ht['id']:'';
            $isStudent = array_key_exists('student',$ht) ? (($ht['student'] == 'yes') ? 1 : 0) : 0;
            $dept = array_key_exists('dept',$ht)?$ht['dept']:'';
            $tel = array_key_exists('tel',$ht)?$ht['tel']:'';
            $realName=mb_convert_encoding($realName,'UTF-8','GBK');
            $dept=mb_convert_encoding($dept,'UTF-8','GBK');
            $email = $ht['uid']."@sjtu.edu.cn";
            
            $user = new User;
            $user->name = 'jaccount.'.$ht['uid'];
            $user->password = Hash::make('jaccount.password');
            $user->email = $email;
            $user->type = ($isStudent) ? 1 : 0;
            $user->save();

            if ($isStudent) {
                $student = new Student;
                $student->student_id = $snum;
                $student->name = $realName;
                $student->save();
            }
            
            $jaccount = new Jaccount;
            $jaccount->user_id = $user->id;
            $jaccount->account_name = $ht['uid'];
            $jaccount->real_name = $realName;
            $jaccount->department = $dept;
            $jaccount->student_number = $snum;
            $jaccount->is_student = $isStudent;
            $jaccount->save();
        }
        $credentials = array('name' => ('jaccount.'.$ht['uid']), 'password' => 'jaccount.password');

        Auth::attempt($credentials);
        
        return Redirect::to('/');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        JaHelper::jalogout($request->query('redirect', ''));
    }
}
