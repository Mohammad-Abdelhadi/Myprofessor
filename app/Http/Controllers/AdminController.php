<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
// نعرف المودلز الي عملناه ونستدعيه
use App\Models\Teachers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Cart;
use App\Http\Controllers\vendor\Chatify;


class AdminController extends Controller
{
    //
    public function redirect()
    {
        // اذا كنت ادمن واليوزر تايب 1 رح تدخل صفحة الادمن
        if(Auth::id()){
        if(auth::user()->usertype=='1' ){
            return view('admin.teachers');
        }
    // اذا كان الرول ايدي عندك
    // 1=طالب
    // رح يرجعلك صفحة الuser.home
        else if(auth::user()->role_id=='1'){
            $data = teachers::all();
        return view('user.home',compact('data'));}
        else {
            // اذا كان الرول ايدي 2 رح يدخلك على صفحة الاستاذ
        return view('teacher.home'); }}




    }

 public function uploadteachers(Request $request)
 {
// نعمل متغير اسمه داتا ونخزن فيه المعلومات الي  خزنناها في جدول المعلمين في الداتا بيز

    $data=new teachers; //اسم الجدول الموجود في الداتا بيز
    $image=$request->file;//بتعمل ريكويست للصورة وبتخزنها داخل متغير اسمه ايمج
    $imagename=time().'.'.$image->getClientOriginalExtension();
    $request->file->move('teacherimage',$imagename);
    $data->image=$imagename;
    $data-> teacher_Name = $request->teacher_Name;
    $data-> teacher_Major = $request->teacher_Major;
    $data->teacher_Description = $request->teacher_Description;
    $data->Phone = $request->Phone;
    $data->lesson_price = $request->lesson_price;
    $data->Study_Type = $request->Study_Type;
    $data->city = $request->city;
    $data->address = $request->address;
    $data->teaching_level = $request->teaching_level;
    $data->save(); //بعمل حفظ للداتا الي خزنها بالداتا بيز
    return redirect()->back()->with('message','Teacher Add Successfully');
    //بعمل مثل الريفرش وبرجعه لنفس الصفحة وبمسح البيانات الي عبيتها لتعبي غيرها
    //with= ببعطيك رسالة بعد ما تكبس سبميت

}
public function showteachers()
{
    $data=teachers::all();
    return view('admin.showteachers',compact('data'));

}
// بوتون حذف المعلم عن طريق الايدي
public function deleteteachers($id)
{
    $data=teachers::find($id);
    $data->delete();
// فنكشن ريترن ريدايركت باك برجعنا على نفس الصفحة بعد الحذف
    return redirect()->back()->with('message','Teacher Deleted');
}

public function updateview($id)
{
    $data=teachers::find($id);
    return view('admin.updateview',compact('data'));
}
public function updateteachers(Request $request, $id)
{
    $data=teachers::find($id);
    $image=$request->file;//بتعمل ريكويست للصورة وبتخزنها داخل متغير اسمه ايمج
    if($image)
    {
    $imagename=time().'.'.$image->getClientOriginalExtension();
    $request->file->move('teacherimage',$imagename);
    $data->image=$imagename;
    }
    $data-> teacher_Name = $request->teacher_Name;
    $data-> teacher_Major = $request->teacher_Major;
    $data->teacher_Description = $request->teacher_Description;
    $data->Phone = $request->Phone;
    $data->lesson_price = $request->lesson_price;
    $data->Study_Type = $request->Study_Type;
    $data->city = $request->city;
    $data->address = $request->address;
    $data->teaching_level = $request->teaching_level;

    $data->save(); //بعمل حفظ للداتا الي خزنها بالداتا بيز
    return redirect()->back()->with('message','Teacher Updated Successfully');//بعمل مثل الريفرش وبرجعه لنفس الصفحة وبمسح البيانات الي عبيتها لتعبي غيرها
    //with= ببعطيك رسالة بعد ما تكبس سبميت
}

public function addcarts(Request $request, $id){
    if(Auth::id())
    {
        $user=auth()->user();
        $teachers=teachers::find($id);
        $cart=new cart;
        // معلومات المعلم
        $cart->s_id=$user->id;
        $cart->t_id=$user->id;
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
        $cart->status='بإنتظار المراجعة';
        //student information
        $cart->stu_name=$user->name;
        $cart->stu_phone=$user->phone;
        $cart->stu_city=$user->city;
        $cart->stu_address=$user->address;
        //$cart->Phone=$teachers->Phone; جيبلي اي معلومة من جدول المعلمين وخزنها بجدول الكارت
        //$cart->Phone=$user->phone; جيبلي اي معلومة من جدول اليوزر وخزنها بجدول الكارت
        // $cart
        $cart->save();
    }}
// showcarts : في صفحة الامن لعرض الحجوزات جميعها

public function showcarts()
{
    if(auth::user()->usertype=='1' ){
        $user=auth()->user();
                $cart=cart::all();
                // $cart=cart::where('t_phone',$user->phone)->get();
                return view('admin.showcarts',compact('cart'));

        }


                 else
                 {
            return redirect()->back();
                }
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
public function remove_order($id){

    $data=cart::find($id);
    $data->delete();

    return redirect()->back()->with('message','تم حذف الطلب بنجاح');

}


// هذا الفنكشن والي بعده عشان نشوف المعلمين المسجلين بالموقع
public function showallteachers()
{


    $user = User::where('role_id','2',auth()->id())->get();
    return view('admin.showallusers',compact('user'));
}
public function showallstudents()
{


        $user = User::where('role_id','1',auth()->id())->get();

    // $user=User::all();
    // $user->status='بإنتظار المراجعة';

    return view('admin.showallstudents',compact('user'));

}
public function showall()
{



    $user=User::all();
    // $user->status='بإنتظار المراجعة';

    return view('admin.showall',compact('user'));

}

public function allusers($id)
{
    $user=auth()->user();
    $users=user::find($id);

    return view('admin.showallusers',compact('users'));
    $users->save();
}
// هدول الفنكشن عشان الادمن يقبل ويلغي المعلم
public function approve($id){
    $data=user::find($id);
    $data->status='مقبول';
    $data->save();
    return redirect()->back();

}
public function cancel($id){
    $data=user::find($id);
    $data->status='ملغي';
    $data->save();
    return redirect()->back();

}

//


        //student information


        //$cart->Phone=$teachers->Phone; جيبلي اي معلومة من جدول المعلمين وخزنها بجدول الكارت
        //$cart->Phone=$user->phone; جيبلي اي معلومة من جدول اليوزر وخزنها بجدول الكارت

        // $cart



public function search_user(Request $request )
{
            $search_user=$request->search_user;
            $user=user::where('name','Like','%'.$search_user.'%')->
            orwhere('city','Like','%'.$search_user.'%')
            ->orwhere('address','Like','%'.$search_user.'%')
            ->orwhere('email','Like','%'.$search_user.'%')

            ->orwhere('phone','Like','%'.$search_user.'%')->get();
            return view('admin.showall',compact('user'));


    }



public function search_request(Request $request )
{

    $search_request=$request->search_request;
    $cart=new cart;

    $cart=cart::where('lesson_price','Like','%'.$search_request.'%')->
    orwhere('city','Like','%'.$search_request.'%')->
    orwhere('stu_name','Like','%'.$search_request.'%')->
    orwhere('stu_phone','Like','%'.$search_request.'%')->
    orwhere('teacher_Major','Like','%'.$search_request.'%')->
    orwhere('name','Like','%'.$search_request.'%')->
    orwhere('t_phone','Like','%'.$search_request.'%')->
    orwhere('Study_Type','Like','%'.$search_request.'%')->
    orwhere('time','Like','%'.$search_request.'%')->
    orwhere('status','Like','%'.$search_request.'%')->

    get();
    return view('admin.showcarts',compact('cart'));
}




public function finsh_order($id){

    $data=cart::find($id);

    $data ->status='تم_التسليم';
    $data->save();

    return redirect()->back()->with('message','تم تسليم الطلب بنجاح');
}
}




