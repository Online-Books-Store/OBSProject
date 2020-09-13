<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\User;
use App\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index($id){
        $profile = User::find($id);
        return view('Backend/admin/profile/index',compact('profile'));
    }

    public function update(Request $request, $id){
        $profile = User::find($id);

        if(! Hash::check($request->current , $profile->password) ){
            return back()->with('passerror','Your current password wrong!');
        }
            if(strcmp($request->current,$request->newpassword) == 0){
                return back()->with('passerror','Your new password is same old password!');
            }
                if(!strcmp($request->newpassword,$request->confirmpassword) == 0){
                    return back()->with('passerror','Your new password is not same confirm password!');
                }else{
                    if($request->hasFile('image')){
                        $image = $request->file('image');
                        $imageName = time().'_'.$image->getClientOriginalName();
                        $image->storeAs('uploads',$imageName);
                        $profile->update([
                            'name ' => $request->name,
                            'email' => $request->email,
                            'image' => $imageName,
                            'password' => bcrypt($request->newpassword),
                        ]);
                    }else{
                        $profile->update([
                            'name ' => $request->name,
                            'email' => $request->email,
                            'password' => bcrypt($request->newpassword),
                        ]);   
                    }
                }

        return redirect('admin/dashboard/post')->with('success','Success updte user!');
    }
}
