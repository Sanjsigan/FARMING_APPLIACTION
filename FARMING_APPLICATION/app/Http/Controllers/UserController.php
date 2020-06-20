<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

class UserController extends Controller 
{

    public function store(request $request){
     
      //  print_r($request ->input());
        echo  $name =$request ->input('name');
        echo  $email =$request ->input('email');
        echo  $gender =$request ->input('gender');
        echo  $mobile =$request ->input('mobile');
        echo  $password =$request ->input('password');
        echo  $address =$request ->input('address');

        echo DB:: insert ('insert into user (id, name,address,email,gender,mobile,password)values (?,?,?,?,?,?,?)',[null,$name,$address,$email,$gender,$mobile,$address]);
    }
    

public function logs(request $request){
 
   $name=$request->input('username');
    $password=$request->input('password');
  $data= DB::select('select id from user where name=? and password=?',[null,$name, $password]);
echo $data;

if(count ($data)){
  echo "hey man your login success";
}
}
}