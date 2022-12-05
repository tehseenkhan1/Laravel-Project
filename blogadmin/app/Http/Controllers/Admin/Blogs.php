<?php
  
namespace App\Http\Controllers\Admin;
  
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use App\Models\Post_table;
use App\Models\Likeblog;
use App\Models\Comments_blog;
use Hash;
use Validator;
use DB;

class Blogs extends Controller
{
    

    public function allblogs()
    {
        $userId = Auth::id(); 
        $data['data_blog'] = Post_table::select("*")
        ->where("status", "=", 1)
        ->get();

        
        $data['data_like'] = Likeblog::select("*")
        ->where("user_id", "=", $userId)
        ->get();

        return view('admin/blogpage',$data);
    }

    public function dislike($id)
    {
        $userId = Auth::id(); 

        $like = new Likeblog;
        $like->user_id = $userId;
        $like->blog_id = $id;
        $like->save();
        
        
        DB::table('likeblog')
        ->where('user_id', $userId)
        ->where('blog_id', $id)
        ->delete();

     
        return redirect('allblogs');
    }
    

    public function like($id)
    {
        $userId = Auth::id(); 

        $like = new Likeblog;
        $like->user_id = $userId;
        $like->blog_id = $id;
        $like->save();

    
        return redirect('allblogs');
    }

    public function blogform()
    {

     $id = $_POST["blog_id"];
     ?> <input type="hidden" name="blog_id" value="<?=$id;?>"> <?php
    }

    public function addcomment(Request $request){
        $userId = Auth::id(); 

        $comment = new Comments_blog;
        $comment->user_id = $userId;
        $comment->blog_id = $request->blog_id;
        $comment->comment = $request->comments;
        $comment->save();

        return redirect('allblogs');
    }
    public function alllike()
    {
        $userId = Auth::id();
       
        $alllike['alllikes'] = Post_table::select("post_table.post_name","post_table.post_image","likeblog.blog_id as like")
        ->join("likeblog","likeblog.blog_id","=","post_table.post_id")
        ->where('post_table.status', '=', 1)
        ->groupBy('like')
        ->get();

        $total = array();
        foreach($alllike['alllikes'] as $bid){ 
            $alllike['countlike'] = Likeblog::select("*")
            ->where('blog_id', '=', $bid->like)
            ->get();
            $total[] = count($alllike['countlike']);
        }
        
       $alllike['total'] = $total;
    //    echo "<pre>"; print_r ($alllike['total']); die();
      
       return view('admin/alllikes',$alllike);
    }

    public function mybloglikes()
    {
        $userId = Auth::id();
       
        $alllike['alllikes'] = Post_table::select("post_table.post_name","post_table.post_image","likeblog.blog_id as like")
        ->join("likeblog","likeblog.blog_id","=","post_table.post_id")
        ->where('post_table.status', '=', 1)
        ->where('post_table.user_id', $userId)
        ->groupBy('like')
        ->get();
        
        $total = array();
        foreach($alllike['alllikes'] as $bid){ 
            $alllike['countlike'] = Likeblog::select("*")
            ->where('blog_id', '=', $bid->like)
            ->get();
            $total[] = count($alllike['countlike']);
        }
        
       $alllike['total'] = $total;
    //    echo "<pre>"; print_r ($alllike['total']); die();
      
       return view('admin/mybloglikes',$alllike);
    }

    
    public function allcomments()
    {
        $userId = Auth::id();
        // \DB::enableQueryLog();
        $allcomment['allcomments'] = Post_table::select("post_table.post_name","post_table.post_image","comments_blog.blog_id as comments")
        ->join("comments_blog","comments_blog.blog_id","=","post_table.post_id")
        ->where('post_table.status', '=', 1)
        //->where('post_table.user_id', $userId)
        ->groupBy('comments')
        ->get();
        // dd(\DB::getQueryLog());
        
        $total = array();
        foreach($allcomment['allcomments'] as $bid){ 
            $allcomment['countcomment'] = Comments_blog::select("*")
            ->where('blog_id', '=', $bid->comments)
            ->get();
            $total[] = count($allcomment['countcomment']);
        }
        
       $allcomment['total'] = $total;
    //    echo "<pre>"; print_r ($alllike['total']); die();
      
       return view('admin/allcomments',$allcomment);
    }
    public function mycomments()
    {

        $userId = Auth::id();
        // \DB::enableQueryLog();
        $allcomment['allcomments'] = Post_table::select("post_table.post_name","post_table.post_image","comments_blog.blog_id as comments")
        ->join("comments_blog","comments_blog.blog_id","=","post_table.post_id")
        ->where('post_table.status', '=', 1)
        ->where('post_table.user_id', $userId)
        ->groupBy('comments')
        ->get();
        // dd(\DB::getQueryLog());
        
        $total = array();
        foreach($allcomment['allcomments'] as $bid){ 
            $allcomment['countcomment'] = Comments_blog::select("*")
            ->where('blog_id', '=', $bid->comments)
            ->get();
            $total[] = count($allcomment['countcomment']);
        }
        
       $allcomment['total'] = $total;
    //    echo "<pre>"; print_r ($alllike['total']); die();
      
       return view('admin/mycomments',$allcomment);
    }
    public function showcomments($id)
    {
        // $data = Comments_blog::select("*")
        // ->where("blog_id", "=", $id)
        // ->get();

        $allcomment['showcomments'] = User::select("users.name","users.email","comments_blog.comment")
        ->join("comments_blog","comments_blog.user_id","=","users.id")
        ->get();

        return view('admin/showcomments',$allcomment);
    }
    
}