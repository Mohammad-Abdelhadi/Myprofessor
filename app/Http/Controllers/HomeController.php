<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Cart;
use App\Models\Teachers;
use App\Http\Controllers\vendor\Chatify;

class HomeController extends Controller
{
public function redirect()
{
    // اذا كنت ادمن واليوزر تايب 1 رح تدخل صفحة الادمن
    if(Auth::id()){
    if(auth::user()->usertype=='1' ){
        return view('admin.home');
    }
// اذا كان الرول ايدي عندك
// 1=طالب
// رح يرجعلك صفحة الuser.home
    else if(auth::user()->role_id=='1' )
    // if(auth::user()->status=='مقبول')
    {
        $data = teachers::paginate(6);
        $user=auth()->user();

        $count=cart::where('stu_phone',$user->phone)->count();
        return view('user.home',compact('data','count'));
        // ,'count
    }

    else if(auth::user()->role_id=='2') {

        // اذا كان الرول ايدي 2 رح يدخلك على صفحة الاستاذ
        $data = teachers::paginate(3);
        $user=auth()->user();
        $count=cart::where('t_phone',$user->phone)->count();
        return view('teacher.home',compact('data','count'));


    }

        else{
            return view('user.home');
        }
    }
}



    public function index (){
    if(Auth::id()) {
     return redirect('redirect');
    }

    else
    {
        $data = teachers::paginate(6);
        return view('user.home',compact('data'));
    }
}


public function teachers_Page()
{
    // اذا كنت ادمن واليوزر تايب 1 رح تدخل صفحة الادمن
    if(Auth::id()){

    if(auth::user()->usertype=='1' ){
        return view('admin.home');

    }
// اذا كان الرول ايدي عندك
// 1=طالب
// رح يرجعلك صفحة الuser.home
    else if(auth::user()->role_id=='1'){
        $data = teachers::paginate(6);
        $user=auth()->user();
        $count=cart::where('stu_phone',$user->phone)->count();
        return view('user.teachers_Page',compact('data','count'));
        // ,'count
    }

    else if(auth::user()->role_id=='2') {
        // اذا كان الرول ايدي 2 رح يدخلك على صفحة الاستاذ
        $data = teachers::paginate(3);
        $user=auth()->user();
        $count=cart::where('t_phone',$user->phone)->count();
        return view('teacher.teachers_Page',compact('data','count')); }


    }
    else
    {
       $data = teachers::paginate(6);
       return view('user.teachers_Page',compact('data'));
   }
}



    public function about(){
        // الكود شغال / للزائر والطالب والمعلم
             if( Auth::user()){
            if (auth::user()->role_id=='1'){

                {

                    $user=auth()->user();
                    $count=cart::where('stu_phone',$user->phone)->count();
                    $data = teachers::paginate(3);
                    return view('user.about',compact('data','count'));


                 }
                }
            }

                 if(auth::user())
                 {
                    if (auth::user()->role_id=='2')
                        {
                    $user=auth()->user();
                    $count=cart::where('t_phone',$user->phone)->count();
                    $data = teachers::paginate(3);
                    return view('teacher.about',compact('data','count'));
                }

                 }
                 else
                 {
                    return view('user.about');
                }
        }



    public function contact(){
        // الكود شغال / للزائر والطالب والمعلم
             if( Auth::user()){
            if (auth::user()->role_id=='1'){

                {

                    $user=auth()->user();
                    $count=cart::where('stu_phone',$user->phone)->count();
                    $data = teachers::paginate(3);
                    return view('user.contact',compact('data','count'));


                 }
                }
            }

                 if(auth::user())
                 {
                    if (auth::user()->role_id=='2')
                        {
                    $user=auth()->user();
                    $count=cart::where('t_phone',$user->phone)->count();
                    $data = teachers::paginate(3);
                    return view('teacher.contact',compact('data','count'));
                }

                 }
                 else
                 {
                    return view('user.contact');
                }
        }


public function addcart(Request $request, $id){
    if(Auth::id())
    {
        $user=auth()->user();
        $teachers=teachers::find($id);

        $cart=new cart;
        $users=new user;

        // معلومات المعلم

                   $cart->s_id=$user->id;

                   $cart->t_id=$user->id;

        // if($user->role_id == 2) {
        //     $cart=cart::where('t_phone',$user->phone)->get();
        //     $cart->t_id = $user->id;

        // }


        $cart->name=$teachers->teacher_Name;
        $cart->teacher_Major=$teachers->teacher_Major;
        $cart->teaching_level=$teachers->teaching_level;
        $cart->t_phone=$teachers->Phone;
        $cart->city=$teachers->city;
        $cart->address=$teachers->address;

        // وقت الحجز مطلوب من الطالب
        $cart->time=$request->time;

        // معلومات مشتركة للحجز بين الطرفين المعلم والطالب
        $cart->lesson_price=$teachers->lesson_price;
        $cart->Study_Type=$teachers->Study_Type;
        $cart->status='بإنتظار_المراجعة';
        // $users->status='بإنتظار المراجعة';

        //student information
        $cart->stu_name=$user->name;
        $cart->stu_phone=$user->phone;
        $cart->stu_city=$user->city;
        $cart->stu_address=$user->address;
        // $cart->created_at=$user->status;


        //$cart->Phone=$teachers->Phone; جيبلي اي معلومة من جدول المعلمين وخزنها بجدول الكارت
        //$cart->Phone=$user->phone; جيبلي اي معلومة من جدول اليوزر وخزنها بجدول الكارت

        // $cart
        $cart->save();

        return redirect()->back()->with('message','تم اضافة الحجز الى صفحة حجوزاتي ');

    }
    else
    {
        return redirect('register');

    }
}


// معلومات المعلم
// $user=auth()->user();
// $teachers=teachers::find($id);
// $cart=new cart;
// $cart->name=$teachers->teacher_Name	;
// $cart->teacher_Major=$teachers->teacher_Major;
// $cart->Phone=$teachers->Phone;
// $cart->time=$request->time;
// $cart->lesson_price=$teachers->lesson_price;
// $cart->Study_Type=$teachers->Study_Type;
// $cart->city=$teachers->city;
// $cart->address=$teachers->address;
// $cart->save();

// return redirect()->back();



// فنكنشن البحث عن معلم حسب الاسم او حسب اسم المادة
public function search(Request $request )
{
    // $search=$request->search;

$search=$request->search;

if( Auth::user()){
    if ($search=='' && auth::user()->role_id=='1'){

        {
// This line of code is typically used in web applications
// to retrieve information about the currently logged in user.
            $user=auth()->user();
            $count=cart::where('stu_phone',$user->phone)->count();
            $data = teachers::paginate(6);
            return view('user.teachers_Page',compact('data','count'));


         }
        }
    }
    if( Auth::user()){
        if ($search && auth::user()->role_id=='1'){

            {

                $user=auth()->user();
                $count=cart::where('stu_phone',$user->phone)->count();
                $data =Teachers::where('teacher_Major','Like','%'.$search.'%')->orwhere('teacher_Name','Like','%'.$search.'%')->get();
                return view('user.teachers_Page',compact('data','count'));


             }
            }
        }

        if( Auth::user()){
            if ($search=='' && auth::user()->role_id=='2'){

                {

                    $user=auth()->user();
                    $count=cart::where('t_phone',$user->phone)->count();
                    $data = teachers::paginate(6);
                    return view('teacher.teachers_Page',compact('data','count'));


                 }
                }
            }
            if( Auth::user()){
                if ($search && auth::user()->role_id=='2'){

                    {

                        $user=auth()->user();
                        $count=cart::where('t_phone',$user->phone)->count();
                        $data =Teachers::where('teacher_Major','Like','%'.$search.'%')->orwhere('teacher_Name','Like','%'.$search.'%')->get();
                        return view('teacher.teachers_Page',compact('data','count'));


                     }
                    }
                }
                else{

                    $data =Teachers::where('teacher_Major','Like','%'.$search.'%')
                    ->orwhere('teacher_Name','Like','%'.$search.'%')->get();
                    return view('user.home',compact('data'));}
}







public function showcart()
{
    if(Auth::id())
    {
        if(auth::user()->role_id=='1' )
        {
            $user=auth()->user();
            // $cart=cart::all();
            $cart=cart::where('stu_phone',$user->phone)->get();
            $count=cart::where('stu_phone',$user->phone)->count();
            return view('user.showcart',compact('cart','count'));

        }
        else {
            $user=auth()->user();
            // $cart=cart::all();
            $cart=cart::where('t_phone',$user->phone)->get();
            $count=cart::where('t_phone',$user->phone)->count();


            return view('teacher.showcart',compact('cart','count'));
        }

}
}


    // زر الغاء الحجز في صفحة حجوزات الطالب
    public function deletecart($id){
        $data=cart::find($id);
        $data->delete();
        return redirect()->back()->with('message','تم الغاء الحجز بنجاح');

    }

// الغاء الطلب بدون حذفه من صفحة الطالب
public function cancel_appoint($id){
    $data=cart::find($id);
    // $data->delete();
    $data->status='ملغي';
    $data->save();
    return redirect()->back()->with('message','تم الغاء الحجز بنجاح');
}


public function approved($id){
    $data=cart::find($id);
    $data->status='مقبول';
    $data->save();
    return redirect()->back()->with('message','تم قبول الحجز بنجاح');

}

public function canceled($id){
    $data=cart::find($id);

    $data ->status='ملغي';
    $data->save();
    return redirect()->back()->with('message','تم الغاء الحجز بنجاح');

}
// فنكشن للمعلم حتى ما تصير صفحته مليانة حجوزات ملغية , ضفنا زر حذف الطلب
public function finsh_order($id){
    if(auth::user()->role_id=='2' )
   {
    $data=cart::find($id);
    $data ->status='تم_التسليم';
    $data->save();
    return redirect()->back()->with('message','تم تسليم الطلب بنجاح');
}
else if (auth::user()->role_id=='1' ){
    $data=cart::find($id);
$data->save();
    }

}


public function test(){
    return view('user.test');
}

public function test2(){
    return view('user.test2');
}
public function testtt(){

    return view('user.testtt');


}

public function tregister(){
    return view('resources/views/auth/tregister');
}

}
