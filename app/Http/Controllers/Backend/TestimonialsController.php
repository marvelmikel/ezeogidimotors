<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonials;
use Image;


class TestimonialsController extends Controller
{
    public function AllTestimonials(){
        $testimonials = Testimonials::latest()->get();
        return view('backend.testimonials.testimonials_all',compact('testimonials'));
    } // End Method
   

    public function AddTestimonials(){
        return view('backend.testimonials.testimonials_add');
}// End Method 




public function StoreTestimonials(Request $request){

    if($request->hasFile('testi_image')) {
    $image = $request->file('testi_image');
    $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    Image::make($image)->resize(150,150)->save('upload/testimonials/'.$name_gen);
    $save_url = 'upload/testimonials/'.$name_gen;

    Testimonials::insert([
        'testi_name' => $request->testi_name,
        'testi_title' => $request->testi_title,
        'long_descp' => $request->long_descp,
        'testi_image' => $save_url, 
    ]);

   $notification = array(
        'message' => 'Testimonial Inserted Successfully',
        'alert-type' => 'info'
    );

    return redirect()->route('all.testimonials')->with($notification); 
    }
}// End Method


public function EditTestimonials($id){
    $testimonials = Testimonials::findOrFail($id);
    return view('backend.testimonials.testimonials_edit',compact('testimonials'));
}// End Method 


public function UpdateTestimonials(Request $request){

    $testimonials_id = $request->id;
    $old_img = $request->old_image;

    if ($request->file('testi_image')) {

    $image = $request->file('testi_image');
     $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    Image::make($image)->resize(768,450)->save('upload/testimonials/'.$name_gen);
    $save_url = 'upload/testimonials/'.$name_gen;

    if (file_exists($old_img)) {
       unlink($old_img);
    }

    Testimonials::findOrFail($testimonials_id)->update([
        'testi_name' => $request->testi_name,
        'testi_title' => $request->testi_title,
        'long_descp' => $request->long_descp,
        'testi_image' => $save_url, 
    ]);

   $notification = array(
        'message' => 'Testimonials Updated with image Successfully',
        'alert-type' => 'success'
    );

    return redirect()->route('all.testimonials')->with($notification); 

    } else {

        Testimonials::findOrFail($testimonials_id)->update([
            'testi_name' => $request->testi_name,
            'testi_title' => $request->testi_title,
            'long_descp' => $request->long_descp,
    ]);

   $notification = array(
        'message' => 'Testimonials Updated without image Successfully',
        'alert-type' => 'success'
    );

    return redirect()->route('all.testimonials')->with($notification); 

    } // end else

}// End Method 




public function DeleteTestimonials($id){

    $testimonials = Testimonials::findOrFail($id);
    $img = $testimonials->testi_image;
    unlink($img ); 

    Testimonials::findOrFail($id)->delete();

    $notification = array(
        'message' => 'Testimonials Deleted Successfully',
        'alert-type' => 'success'
    );

    return redirect()->back()->with($notification); 

}// End Method 


}
