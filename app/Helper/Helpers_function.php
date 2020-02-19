<?php

// static response

function responseJson($status , $msg , $data=null){

    $Response = [

        "status" =>$status ,
        "message" =>$msg,
        "data"   =>$data
    ];

    return response()->json($Response);


    }




//======================  active satus
// return active and btn-success if 0   &&  return de-active btn-danger  if 1

function activeStatus($status){
    $activeState = [];
    if($status != 0) {
        $activeState = ["btn-danger","اخفاء"];
    }
    else{
        $activeState = ["btn-success","نشر"];

    }
    return $activeState;
}


//========================================  save image
//=============================
    function saveImage($request) {
    if($request->hasfile('image'))
    {
        $file =$request->file('image');
        $ext = $file->getClientOriginalExtension();
        $filename = 'post_image'.time().'.'.$ext;
        Image::make($file)->save(public_path('images/'.$filename));
    }
    else{
        $filename = '';
    }
    return $filename;
    }


