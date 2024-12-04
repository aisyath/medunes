<?php

namespace App\Http\Controllers\backend;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UsermanagementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // public function show($id)
    // {
    //     $show = Admin::findOrFail($id);
    //     return view('backend.admin.view_admin', compact('admin'));
    // }
  
        	
    public function UserList(Request $request)
    {
        $akun = DB::table('users')->get();
        return view('backendadmin.akun.list_akun', ['akun' => $akun]);
    }


    public function UserAdd()
    {
    $all = DB::table('users')->get();
    return view('backendadmin.user.create_User',compact('all'));
    }

    

//     public function UserInsert(Request $request)
//     {
// $data = array();
// $data['role'] = $request->role;

// $insert = DB::table('users')->insert($data);
       
// if ($insert) 
// {
   
//                 return Redirect()->route('user.index')->with('success','User created successfully!');
                 
//         }
// else
//         {
//         $notification=array
//         (
//         'messege'=>'error ',
//         'alert-type'=>'error'
//         );
//         return Redirect()->route('User.index')->with($notification);
//         }
           
// }

      public function UserEdit ($id)
    {
        $edit=DB::table('users')
             ->where('id',$id)
             ->first();
        return view('backend.user.edit_User', compact('edit'));     
    }

        public function UserUpdate(Request $request,$id)
    {
      
        DB::table('users')->where('id', $id)->first();        
        $data = array();
        $data['role'] = $request->role;
        $update = DB::table('users')->where('id', $id)->update($data);

        if ($update) 
    {
            
            return Redirect()->route('user.index')->with('success','User Updated successfully!');                     
    }
        else
    {
        
        return Redirect()->route('user.index')->with('error','Somthing is Wrong!');    
    }
     
    }

public function UserDelete ($id)
    {
    
        $delete = DB::table('users')->where('id', $id)->delete();
        if ($delete)
                            {
                                return Redirect()->route('user.index')->with('success','User Deleted successfully!');                  
                            }
             else
                  {
                    return Redirect()->route('user.index')->with('error','Somthing is Wrong!');  
                  }

      }
}
