<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use DB;

class AdminController extends Controller
{
    public function dashboard() {
        return view('admin.dashboard');
    }
    public function clients() {
        return view('admin.dashboard');
    }

    public function TodaysBooking() {
        return view('admin.dashboard');
    }

    public function TotalBookings() {
        return view('admin.dashboard');
    } 
    public function Discount() {

        $coupons = DB::table('Coupons')->orderby('updated_at', 'DESC' )->paginate(12);

        dd($coupons);
    }
    public function FetchBlogs(request $request){

        if($request->isMethod('get')){
            $blogs = DB::table('Blogs')->get();
            return view('admin.WebsiteSettings.addBlogs', compact('blogs'));
        }else{
            dd('hmm acha tikke');
           $blogName = $request->blogname; $content = $request->content; $blogPicture = $request->blogPicture; 
            $blogs = DB::table('Blogs')->create([ 'blog_name' => $blogName,'content' => $content, 'picture' => $blogPicture, ]);
        }     

       
    }

    public function aboutus(request $request) {
        if($request->isMethod('get')){
            $blogs = DB::table('Blogs')->get();
            dd($blogs);
            return view('admin.WebsiteSettings.aboutUs');
        }else{
        dd('free me bhatra he');
    }
}

    public function terms(request $request) {
        if($request->isMethod('get')){
            $blogs = DB::table('Blogs')->get();
            dd($blogs);
            return view('admin.WebsiteSettings.t&c');
        }else{
    }

        dd('free me bhatra he');
    }

    public function EditBlogs(request $request){
        if($request->isMethod('get')){
            $blogs = DB::table('Blogs')->get();
            dd($blogs);
            return view('admin.WebsiteSettings.policies');
        }else{
        }
    }

    public function Discounts(request $request){
        if($request->isMethod('get')){
            $blogs = DB::table('Blogs')->get();
            dd($blogs);
            return view('admin.WebsiteSettings.policies');
        }else{
    }
}

    public function policies(request $request){

            if($request->isMethod('get')){
                $policies = DB::table('Policies')->first();
                // dd($policies);
                return view('admin.WebsiteSettings.policies', compact('policies'));
            }else{
                $blogName = $request->policiesName; 
                $content1 = $request->IntroContent; 
                $content2 = $request->maincontents;
                $content3 = $request->Othercontents ;
                $blogPicture1 = $request->blogPicture1; 
                $blogPicture2 = $request->blogPicture2; 
                $blogs = DB::table('Policies')->update([ 
                'policies' => $blogName,'IntroContent' => $content1, 'maincontents' => $content2,
                'Othercontents' => $content3,'picture1' => $blogPicture1, 'picture2' => $blogPicture2, ]);

                return redirect()->route('admin.dashboard');
            } 
    }

    public function customerList(){
        $customerUsers = User::where('userType', 'customer')->orderBy('createdAt', 'desc')->paginate(20);
        return view('admin.customer-list', compact('customerUsers'));
    }
}




