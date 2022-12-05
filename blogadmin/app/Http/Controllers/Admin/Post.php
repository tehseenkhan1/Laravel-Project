<?php
  
namespace App\Http\Controllers\Admin;
  
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use App\Models\Post_table;
use Hash;
use Validator;
use DB;

class Post extends Controller
{
    public function index()
    {
        return view('Admin.addpost');
    }

    public function savepost(Request $request)
    {
        $userId = Auth::id(); 
        $validator = Validator::make($request->all(),[
            'post_name' => 'required',
            'post_description' => 'required',
        ]);


        $result_img1="";
        
        if(!empty($request->image))
        {
            // $result_img1 = $request->file('image')->store('/images');

                $driver_license_file = time() . '_' . $request->file('image')->getClientOriginalName();
                //            $product_image_first_path = $request->file('product_image_first')->storeAs('products', $product_image_first);
                $request->file('image')->move(public_path() . '/uploads/apifileregistration/', $driver_license_file);
               
          
            
        }

            $post = new Post_table;
            $post->user_id = $userId;
            $post->post_name = $request->post_name;
            $post->post_description = $request->post_description;
            $post->post_image = $driver_license_file;
            $post->status = 1;
            $post->save();

         return redirect('postlist')->with('status', 'Post data has been inserted');
        
    }

    public function postlist()
    {
        $userId = Auth::id(); 
        $data = Post_table::select("*")
        ->where("status", "=", 1)
        ->where("user_id", "=", $userId)
        ->get();

        return view('admin/postlist',['data'=>$data]);
    }

    public function post_delete($id)
    {
        $data=DB::table('post_table')->where('post_id', $id)->delete();
        return redirect('postlist')->with('status', 'Post Has been deleted successfully');
    }

    public function post_edit($id)
    {
        
        $data = Post_table::select("*")
        ->where("post_id", "=", $id)
        ->get();

        return view('admin/postedit',['data'=>$data]);
    }
    public function postupdate(Request $request)
    {
        $id = $request->id;

        if(!empty($request->image))
        {

                $driver_license_file = time() . '_' . $request->file('image')->getClientOriginalName();
                $request->file('image')->move(public_path() . '/uploads/apifileregistration/', $driver_license_file);
               

                $data = array(
                    'post_name'=> $request->post_name,
                    'post_description'=> $request->post_description,
                    'post_image'=> $driver_license_file,
                );

                $update = \DB::table('post_table') 
                ->where('post_id', $id)
                ->update($data);

            
        }else{
                $data = array(
                    'post_name'=> $request->post_name,
                    'post_description'=> $request->post_description,
                );

                $update = \DB::table('post_table') 
                    ->where('post_id', $id)
                    ->update($data);
        }

        return redirect('postlist')->with('status', 'Post Has been Updated successfully');

    }

    public function allpostlist()
    {
        $data = Post_table::select("*")
        ->get();

        return view('admin/allpost',['data'=>$data]);
    }
    public function disapproved($id)
    {
        $data = array(
            'status'=> 0
        );

        $update = \DB::table('post_table') 
            ->where('post_id', $id)
            ->update($data);

        return redirect('allpostlist')->with('status', 'Post Disapproved successfully');
    }

    public function approved($id)
    {
        $data = array(
            'status'=> 1
        );

        $update = \DB::table('post_table') 
            ->where('post_id', $id)
            ->update($data);

        return redirect('allpostlist')->with('status', 'Post Approved successfully');
    }
}