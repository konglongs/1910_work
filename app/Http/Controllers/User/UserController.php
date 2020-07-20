<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Model\User;
use Illuminate\Support\Facades\Redis;
use Validator;
use Illuminate\Support\Facades\Cookie;

class UserController extends Controller
{
    public function reg(){
        return view('user.reg');
    }
    public function regs(){
        $post=request()->except(['_token']);
        $validator = Validator::make($post, [
            'u_name' => 'required|max:20',
            'u_email' => 'required',
            'u_pwd' => 'required|between:6,20',
            'u_pwds'=>'required|same:u_pwd',
        ],[
            'u_name.required'=>'账号必填',
            'u_name.max'=>'账号名称不能超20位',
            'u_email.required'=>'账号必填',
            'u_pwd.required'=>'密码必填',
            'u_pwd.between'=>'密码必须是6到20位',
            'u_pwds.required'=>'确认密码必填',
            'u_pwds.same'=>'确认密码与密码不一致',
        ]);
        if ($validator->fails()) {
            return redirect('/user/reg') ->withErrors($validator) ->withInput();die;
        }

        $post=request()->except(['_token','u_pwds']);
        $pwd=password_hash($post['u_pwd'],PASSWORD_BCRYPT);
        $post['u_pwd']=$pwd;
        $post['u_time']=time();
        $res=User::insert($post);
        if($res){
            return redirect('/user/login');
        }






    }

    public function login(){
        return view('user.login');
    }

    public function logins(){
        $post=request()->except(['_token']);
        $validator = Validator::make($post, [
            'u_name' => 'required',
            'u_pwd' => 'required',

        ],[
            'u_name.required'=>'账号必填',
            'u_pwd.required'=>'密码必填',

        ]);
        if ($validator->fails()) {
            return redirect('/user/login') ->withErrors($validator) ->withInput();die;
        }
        $res=User::where('u_name',$post['u_name'])->first();
        if($res==""){
            return redirect('/user/login')->with('msg','账号或密码错误');
        }else{
            $pwd=password_verify($post['u_pwd'],$res['u_pwd']);
            if($pwd=="true"){
                $data=[
                    'name'=>$post['u_name'],
                    'time'=>time()
                ];
                Cookie('userinfo');
                session(['userinfo'=>$data]);

                return redirect('/user/list');
            }else{
                return redirect('/user/login')->with('msg','账号或密码错误');
            }
        }




    }


    public function list(){
        $session=session('userinfo');
        if($session==""){
            die('请登录');
        }else{
            echo "欢迎".$session['name']."登录";
        }
    }

    public function test(){

        Redis::set("name","kwl");

        echo "123";
    }

}
