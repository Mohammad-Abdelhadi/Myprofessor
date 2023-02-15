<?php

namespace App\Http\Controllers;
use App\Models\Teachers;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    // Array of static Data برايفت داخل الكلاس فقط ، ولا يتم تعديله لانه ستاتيك
    private static function getData(){
        return [
            ['id' => 1,'name' => 'احمد بسام','major'=>'math'],
            ['id' => 2,'name' => ' بسام','major'=>'arabic'],
            ['id' => 3,'name' => ' احمد','major'=>'deen']

        ];

    }




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = teachers::paginate(6);
        // return view('teacherpage.index',compact('data'));
              return view('teacherpage.index',compact('data'),[
            'teachers'=>self::getData()]);
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = teachers::paginate(6);
                $teachers=self::getData();
        $index=array_search($id,array_column($teachers,'id'));
        return view('teacherpage.show',compact('data'),[
            'teacher'=>$teachers[$index]
        ]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
  

}
