<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Products;
use App\User;
use Auth;
use Session;
use App\Uploads;
use Purifier;
use Storage;
use Image;
use DB;
use Carbon\Carbon;
use Mapper;
use App\Comments;
use App\Replies;
use App\Feedbacks;
use App\Posts;
use App\Personal;
use App\Academic;
use App\Career;
use App\Religion;
use App\Favorite;
use App\Picks;
use App\Messages;
use App\MessagesReplies;

use Redirect;





class ProductsController extends Controller
{
        
    public function home(){

        $posts = Posts::orderBy('created_at','DESC')->get();

        $item = 'selfie';
        $people = Posts::where('tag1', 'LIKE', '%' . $item . '%')->orWhere('tag2', 'LIKE', '%' . $item. '%')->orWhere('tag3', 'LIKE', '%' . $item. '%')->orWhere('tag4', 'LIKE', '%' . $item. '%')->orWhere('tag5', 'LIKE', '%' . $item. '%')->orderBy('created_at', 'DESC')->get();

        $item = 'place';
        $place = Posts::where('tag1', 'LIKE', '%' . $item . '%')->orWhere('tag2', 'LIKE', '%' . $item. '%')->orWhere('tag3', 'LIKE', '%' . $item. '%')->orWhere('tag4', 'LIKE', '%' . $item. '%')->orWhere('tag5', 'LIKE', '%' . $item. '%')->orderBy('created_at', 'DESC')->get();

        $item = 'event';
        $event = Posts::where('tag1', 'LIKE', '%' . $item . '%')->orWhere('tag2', 'LIKE', '%' . $item. '%')->orWhere('tag3', 'LIKE', '%' . $item. '%')->orWhere('tag4', 'LIKE', '%' . $item. '%')->orWhere('tag5', 'LIKE', '%' . $item. '%')->orderBy('created_at', 'DESC')->get();

        $id  = Auth::user()->id;

        $comments = Comments::orderBy('created_at','DESC')->paginate(5);
        $personal = Personal::where('from_user', $id)->orderBy('created_at','DESC')->first();
        

        $other_personal = Personal::where('from_user', Auth::user()->id)->orderBy('created_at','DESC')->first();

        if ($personal) {
            
        $personal_fellows = Personal::where('name', 'LIKE', '%' . $personal->name . '%')->orWhere('description', 'LIKE', '%' . $personal->description . '%')->orWhere('hobby', 'LIKE', '%' . $personal->hobby . '%')->orWhere('neighbourhood', 'LIKE', '%' . $personal->neighbourhood . '%')->orWhere('town', 'LIKE', '%' . $personal->town . '%')->orWhere('home_town', 'LIKE', '%' . $personal->home_town . '%')->orWhere('state', 'LIKE', '%' . $personal->state . '%')->orWhere('continent', 'LIKE', '%' . $personal->continent . '%')->orWhere('country', 'LIKE', '%' . $personal->country . '%')->orWhere('clan', 'LIKE', '%' . $personal->clan . '%')->orWhere('skills', 'LIKE', '%' . $personal->skills . '%')->orderBy('created_at', 'DESC')->get();

        }
        else
            $personal_fellows = Personal::orderBy('created_at', 'DESC')->get();


        $academic = Academic::where('from_user', $id)->orderBy('created_at', 'DESC')->first();
        $other_academic = Academic::where('from_user', Auth::user()->id)->orderBy('created_at','DESC')->first();
        
        if ($academic) {
        
        $academic_fellows = Academic::where('university', 'LIKE', '%' . $academic->university . '%')->orWhere('uni_grad_year', 'LIKE', '%' . $academic->uni_grad_year . '%')->orWhere('college', 'LIKE', '%' . $academic->college . '%')->orWhere('col_grad_year', 'LIKE', '%' . $academic->col_grad_year . '%')->orWhere('high_school', 'LIKE', '%' . $academic->high_school . '%')->orWhere('high_grad_year', 'LIKE', '%' . $academic->high_grad_year . '%')->orWhere('other_school', 'LIKE', '%' . $academic->other_school. '%')->orWhere('other_grad_year', 'LIKE', '%' . $academic->other_grad_year . '%')->orWhere('program', 'LIKE', '%' . $academic->program . '%')->orWhere('level', 'LIKE', '%' . $academic->level . '%')->orderBy('created_at', 'DESC')->get();
        }
        else
            $academic_fellows = Academic::orderBy('created_at', 'DESC')->get();

        $career = Career::where('from_user', $id)->orderBy('created_at', 'DESC')->first();
        $other_career = Career::where('from_user', Auth::user()->id)->orderBy('created_at','DESC')->first();
        
        if ($career) {
            # code...
        
        $career_fellows =  Career::where('career', 'LIKE', '%' . $career->career . '%')->orWhere('occupation', 'LIKE', '%' . $career->occupational . '%')->orWhere('company', 'LIKE', '%' . $career->company . '%')->orWhere('position', 'LIKE', '%' . $career->position . '%')->get();
        }
        else
            $career_fellows = Career::orderBy('created_at', 'DESC')->get();

        $religion = Religion::where('from_user', $id)->orderBy('created_at', 'DESC')->first();
        
        $other_religion = Religion::where('from_user', Auth::user()->id)->orderBy('created_at','DESC')->first();
        if ($religion) {
            # code...
        
        $religion_fellows = Religion::where('religion', 'LIKE', '%' . $religion->religion . '%')->orWhere('sect', 'LIKE', '%' . $religion->sect . '%')->orWhere('denomination', 'LIKE', '%' . $religion->denomination . '%')->orWhere('worship_center', 'LIKE', '%' . $religion->worship_center . '%')->get();
        }
        else
            $religion_fellows = Religion::orderBy('created_at', 'DESC')->get();

        $favorite = Favorite::where('from_user', $id)->orderBy('created_at', 'DESC')->first();
        
        $other_favorite = Favorite::where('from_user', Auth::user()->id)->orderBy('created_at','DESC')->first();
        if ($favorite) {
            # code...
        
        $favorite_fellows = Favorite::where('brand', 'LIKE', '%' . $favorite->brand . '%')->orWhere('technology', 'LIKE', '%' . $favorite->technology. '%')->orWhere('car', 'LIKE', '%' . $favorite->car. '%')->orWhere('building', 'LIKE', '%' . $favorite->building. '%')->orWhere('book', 'LIKE', '%' . $favorite->book. '%')->orWhere('public_figure', 'LIKE', '%' . $favorite->public_figure. '%')->orWhere('tv_show', 'LIKE', '%' . $favorite->tv_show. '%')->orWhere('sport', 'LIKE', '%' . $favorite->sport. '%')->orWhere('meal', 'LIKE', '%' . $favorite->meal. '%')->orWhere('pet', 'LIKE', '%' . $favorite->pet. '%')->orWhere('city', 'LIKE', '%' . $favorite->city. '%')->orderBy('created_at', 'DESC')->get();
        }
        else
            $favorite_fellows = Favorite::orderBy('created_at', 'DESC')->get();
       
        $postings = Posts::where('author_id', Auth::user()->id)->orderBy('created_at', 'DESC')->get();
        $users = User::where('id',Auth::user()->id);

        $pickings = Picks::where('by_user', Auth::user()->id)->get();

        $remain_to_pick = 20 - $pickings->count();

    
        $post_sum = 0;

        $com_sum = 0;

        $every_people = $personal_fellows->count() + $academic_fellows->count() + $career_fellows->count() + $religion_fellows->count() + $favorite_fellows->count();
        
        $others = Comments::orderBy('created_at','DESC')->paginate(5);

        if ($postings->count()) {
            foreach ($postings as $key => $post) {
                
                     $post_sum = $post_sum + 1;
            }
        }

        foreach ($postings as $key => $posting) {
            foreach ($comments as $key => $com) {
                if ($com->on_post == $posting->id) {
                    $com_sum = $com_sum + 1;
                }
            }
            $others = Comments::where('on_post', $post->id);
            
        }

       
       
        $notify_sum = 0;
        foreach ($comments as $key => $comment) {
            if($comment->post->author_id ==  Auth::user()->id ) {
                $notify_sum + 1;
            }
        }
       
        
        $out2  = Posts::orderBy('created_at', 'DESC')->get();
        $sent_messages = Messages::where('to_user', Auth::user()->id)->orderBy('created_at', 'DESC')->get();

        $i_comments = Comments::where('from_user', Auth::user()->id)->orderBy('created_at', 'DESC');

        $remain_to_post = 5 - $postings->count();
        $remain_to_comment = 5 - $i_comments->count();

        
        $age = Carbon::parse(Auth::user()->DOB)->diffInYears(Carbon::now());


        return view('home')->withAge($age)->withRemainToComment($remain_to_comment)->withRemainToPost($remain_to_post)->withRemainToPick($remain_to_pick)->withIComments($i_comments)->withPosts($posts)->withComments($comments)->withOthers($others)->withPersonal($personal)->withPersonalFellows($personal_fellows)->withPostSum($post_sum)->withAcademic($academic)->withAcademicFellows($academic_fellows)->withCareer($career)->withCareerFellows($career_fellows)->withReligion($religion)->withReligionFellows($religion_fellows)->withFavorite($favorite)->withFavoriteFellows($favorite_fellows)->withComSum($com_sum)->withPickings($pickings)->withPeople($people)->withPlace($place)->withEvent($event)->withOut($out2)->withEveryPeople($every_people)->withSentMessages($sent_messages)->withPostings($postings)->withOtherPersonal($other_personal)->withOtherAcademic($other_academic)->withOtherCareer($other_career)->withOtherReligion($other_religion)->withOtherFavorite($other_favorite);

    }

    public function login(){
        $posts = Posts::orderBy('created_at','DESC')->paginate(5);
        $comments = Comments::orderBy('created_at','DESC')->paginate(5);
        $postings = Posts::all();
        $sent_messages = Messages::all();
        if (!Auth::guest()) {
            $postings = Posts::where('author_id', Auth::user()->id)->orderBy('created_at', 'DESC')->get();
            $sent_messages = Messages::where('to_user', Auth::user()->id)->orderBy('created_at', 'DESC')->get();
        }
    
        $post_sum = 0;
       $com_sum = 0;
       $others = Comments::orderBy('created_at','DESC')->paginate(5);
        foreach ($postings as $key => $posting) {
            foreach ($comments as $key => $com) {
                if ($com->on_post == $posting->id) {
                    $com_sum = $com_sum + 1;
                }
            }
            
            $others = Comments::where('on_post', $posting->id);
            $post_sum = $post_sum + 1;
        }
       
        
        return view('auth.login')->withPosts($posts)->withComments($comments)->withComSum($com_sum)->withSentMessages($sent_messages);
    }

   

    public function store(Request $request)
    {
       
        $input['author_id'] = $request->user()->id;
    
        $input['country'] = $request->user()->country;

        $input['body'] = $request->get('body');
    
        $input['location'] = $request->get('location');

        $input['tag1'] = $request->get('tag1');
    
        $input['tag2'] = $request->get('tag2');
        $input['tag3'] = $request->get('tag3');
    
        $input['tag4'] = $request->get('tag4');
        $input['tag5'] = $request->get('tag5');
    
        
        
        
    
        if ($request->hasFile('featured_image')){
             $featured_image = $request->file('featured_image');
            $filename = $featured_image->getClientOriginalName();
            Image::make($featured_image)->resize(100,100)->save(public_path('/uploads/images/' . $filename));
            $input['featured_image'] = $filename;
         }

    

        
        
        Posts::create( $input );
        return redirect()->back();
        
    }

     public function account()
    {
        
       $posts = Posts::where('author_id', Auth::user()->id)->orderBy('created_at', 'DESC')->paginate(5);
       $postings = Posts::where('author_id', Auth::user()->id)->orderBy('created_at', 'DESC')->paginate(5);
       $comments = Comments::orderBy('created_at','DESC')->paginate(5);
       $users = User::where('id',Auth::user()->id);
       $personal = Personal::where('from_user', Auth::user()->id)->orderBy('created_at','DESC')->first();
       $academic = Academic::where('from_user', Auth::user()->id)->orderBy('created_at', 'DESC')->first();
       $career = Career::where('from_user', Auth::user()->id)->orderBy('created_at', 'DESC')->first();
       $religion = Religion::where('from_user', Auth::user()->id)->orderBy('created_at', 'DESC')->first();
       $favorite = Favorite::where('from_user', Auth::user()->id)->orderBy('created_at', 'DESC')->first();

       $post_sum = 0;
       $com_sum = 0;
       $others = Comments::orderBy('created_at','DESC')->paginate(5);
        foreach ($postings as $key => $posting) {
            foreach ($comments as $key => $com) {
                if ($com->on_post == $posting->id) {
                    $com_sum = $com_sum + 1;
                }
            }
            $others = Comments::where('on_post', $posting->id);
            $post_sum = $post_sum + 1;
        }
       $sent_messages = Messages::where('to_user', Auth::user()->id)->orderBy('created_at', 'DESC')->get();

        if ($personal && $academic && $career && $religion && $favorite) {
            Session::flash('success','The product was successfully deleted');
            return redirect()->route('/home');
        }
        elseif ($personal && $academic && $career && $religion && !$favorite) {
            
            return view('favorite')->withPersonal($personal)->withPostSum($post_sum)->withPosts($posts)->withComments($comments)->withOthers($others)->withUsers($users)->withPersonal($personal)->withComSum($com_sum)->withSentMessages($sent_messages);
        }
        elseif ($personal && $academic && $career && !$religion) {
            
        return view('religion')->withPersonal($personal)->withPostSum($post_sum)->withOthers($others)->withPosts($posts)->withComments($comments)->withUsers($users)->withPersonal($personal)->withComSum($com_sum)->withSentMessages($sent_messages);
        }
        elseif ($personal && $academic && !$career) {
            return view('career')->withPersonal($personal)->withPostSum($post_sum)->withPosts($posts)->withComments($comments)->withOthers($others)->withUsers($users)->withPersonal($personal)->withComSum($com_sum)->withSentMessages($sent_messages);
        }
        elseif ($personal && !$academic) {
            
            return view('academia')->withPersonal($personal)->withPostSum($post_sum)->withPosts($posts)->withComments($comments)->withOthers($others)->withUsers($users)->withPersonal($personal)->withComSum($com_sum)->withSentMessages($sent_messages);
        }
        else 
            return view('personal')->withPostSum($post_sum)->withPosts($posts)->withComments($comments)->withOthers($others)->withUsers($users)->withPersonal($personal)->withComSum($com_sum)->withSentMessages($sent_messages);


       }


    



     public function personal(Request $request){

        $input['from_user'] = $request->user()->id;

        $input['name'] = $request->user()->firstname . ' ' . $request->user()->middlenames . ' ' . $request->user()->lastname;
    
        $input['DOB'] = $request->user()->DOB;

        $input['country'] = $request->user()->country;

        if (!$request->get('hobby')) {

          $input['hobby'] = 'hobby'; 
        }
        else
            $input['hobby'] = $request->get('hobby');

        if (!$request->get('neighbourhood')) {

          $input['neighbourhood'] = 'neighbourhood'; 
        }
        else
            $input['neighbourhood'] = $request->get('neighbourhood');
        
        if (!$request->get('town')) {

          $input['town'] = 'town'; 
        }
        else
            $input['town'] = $request->get('town');

        if (!$request->get('home_town')) {

          $input['home_town'] = 'home_town'; 
        }
        else
            $input['home_town'] = $request->get('home_town');
    
        if (!$request->get('state')) {

          $input['state'] = 'state'; 
        }
        else
            $input['state'] = $request->get('state');

        if (!$request->get('clan')) {

          $input['clan'] = 'clan'; 
        }
        else
            $input['clan'] = $request->get('clan');

        if (!$request->get('description')) {

          $input['description'] = 'description'; 
        }
        else
            $input['description'] = $request->get('description');

        if (!$request->get('skills')) {

          $input['skills'] = 'skills'; 
        }
        else
            $input['skills'] = $request->get('skills');
    
        if (!$request->get('continent')) {

          $input['continent'] = 'continent'; 
        }
        else
            $input['continent'] = $request->get('continent');


        $input['category'] = 1;



        Personal::create( $input );
        

        $in['by_user'] = $request->get('by_user');
        $in['picked_user'] = $request->get('picked_user');
        Picks::create($in);

        return redirect()->route('account');
        
    }

    public function academia() {

        $comments = Comments::orderBy('created_at','DESC')->paginate(5);
        $posting = Posts::where('author_id', Auth::user()->id)->orderBy('created_at', 'DESC')->paginate(5);
        $users = User::where('id',Auth::user()->id);
        $personal = Personal::where('from_user', Auth::user()->id)->orderBy('created_at', 'DESC');

        $others = $comments;
        $com_sum = 0;
        foreach ($posting as $key => $post) {
            foreach ($comments as $key => $com) {
                if ($com->on_post == $post->id) {
                    $com_sum = $com_sum + 1;
                }
            
            $comments = Comments::where('on_post', $post->id);
            $others = Comments::where('on_post', $post->id);
        
        }

        $sent_messages = Messages::where('to_user', Auth::user()->id)->orderBy('created_at', 'DESC')->get();

        return view('academia')->withPersonal($personal)->withPosts($posting)->withOthers($others)->withComments($comments)->withUsers($users)->withPersonal($personal)->withComSum($com_sum)->withSentMessages($sent_messages);
        }
    }
    
    public function search($input,$category)
    {

       $item = $input;
       $posts = Posts::orderBy('created_at','DESC')->paginate(5);
       $postings = Posts::where('author_id', Auth::user()->id)->orderBy('created_at', 'DESC')->get();
       $comments = Comments::orderBy('created_at','DESC')->paginate(5);

       $personal = Personal::where('from_user', Auth::user()->id)->orderBy('created_at','DESC')->first();
        $personal_fellows = Personal::where('continent', '%stupidsun%')->orderBy('created_at', 'DESC')->get();
        if ($personal) {
            
        $personal_fellows = Personal::where('name', 'LIKE', '%' . $item . '%')->orWhere('description', 'LIKE', '%' . $item . '%')->orWhere('hobby', 'LIKE', '%' . $item . '%')->orWhere('neighbourhood', 'LIKE', '%' . $item . '%')->orWhere('town', 'LIKE', '%' . $item . '%')->orWhere('home_town', 'LIKE', '%' . $item . '%')->orWhere('state', 'LIKE', '%' . $item . '%')->orWhere('continent', 'LIKE', '%' . $item . '%')->orWhere('country', 'LIKE', '%' . $item . '%')->orWhere('clan', 'LIKE', '%' . $item . '%')->orWhere('skills', 'LIKE', '%' . $item . '%')->orderBy('created_at', 'DESC')->get();

        }

        $academic = Academic::where('from_user', Auth::user()->id)->orderBy('created_at', 'DESC')->first();
        $academic_fellows = Academic::where('university', '%stupidsun%')->orderBy('created_at', 'DESC')->get();
        if ($academic) {
            # code...
        
        $academic_fellows = Academic::where('university', 'LIKE', '%' . $item . '%')->orWhere('uni_grad_year', 'LIKE', '%' . $item . '%')->orWhere('college', 'LIKE', '%' . $item . '%')->orWhere('col_grad_year', 'LIKE', '%' . $item . '%')->orWhere('high_school', 'LIKE', '%' . $item . '%')->orWhere('high_grad_year', 'LIKE', '%' . $item . '%')->orWhere('other_school', 'LIKE', '%' . $item. '%')->orWhere('other_grad_year', 'LIKE', '%' . $item . '%')->orWhere('program', 'LIKE', '%' . $item . '%')->orWhere('level', 'LIKE', '%' . $item . '%')->orderBy('created_at', 'DESC')->get();
        }

        $career = Career::where('from_user', Auth::user()->id)->orderBy('created_at', 'DESC')->first();
        $career_fellows = Career::where('career', '%stupidsun%')->orderBy('created_at', 'DESC')->get();
        if ($career) {
            # code...
        
        $career_fellows =  Career::where('career', 'LIKE', '%' . $item . '%')->orWhere('occupation', 'LIKE', '%' . $item . '%')->orWhere('company', 'LIKE', '%' . $item . '%')->orWhere('position', 'LIKE', '%' . $item . '%')->get();
        }

        $religion = Religion::where('from_user', Auth::user()->id)->orderBy('created_at', 'DESC')->first();
        $religion_fellows = Religion::where('religion', '%stupidsun%')->orderBy('created_at', 'DESC')->get();
        if ($religion) {
            # code...
        
        $religion_fellows = Religion::where('religion', 'LIKE', '%' . $item . '%')->orWhere('sect', 'LIKE', '%' . $item . '%')->orWhere('denomination', 'LIKE', '%' . $item . '%')->orWhere('worship_center', 'LIKE', '%' . $item . '%')->get();
        }

        $favorite = Favorite::where('from_user', Auth::user()->id)->orderBy('created_at', 'DESC')->first();
        $favorite_fellows = Favorite::where('sport', '%stupidsun%')->orderBy('created_at', 'DESC')->get();
        if ($favorite) {
            # code...
        
        $favorite_fellows = Favorite::where('brand', 'LIKE', '%' . $item . '%')->orWhere('technology', 'LIKE', '%' . $item. '%')->orWhere('car', 'LIKE', '%' . $item. '%')->orWhere('building', 'LIKE', '%' . $item. '%')->orWhere('book', 'LIKE', '%' . $item. '%')->orWhere('public_figure', 'LIKE', '%' . $item. '%')->orWhere('tv_show', 'LIKE', '%' . $item. '%')->orWhere('sport', 'LIKE', '%' . $item. '%')->orWhere('meal', 'LIKE', '%' . $item. '%')->orWhere('pet', 'LIKE', '%' . $item. '%')->orWhere('city', 'LIKE', '%' . $item. '%')->orderBy('created_at', 'DESC')->get();
        }

        $every_people = $personal_fellows->count() + $academic_fellows->count() + $career_fellows->count() + $religion_fellows->count() + $favorite_fellows->count()  - 1;
        
        $pickings = Picks::where('by_user', Auth::user()->id)->get();

       $post_sum = 0;
       $com_sum = 0;
       $others = Comments::orderBy('created_at','DESC')->paginate(5);
        foreach ($postings as $key => $posting) {
            foreach ($comments as $key => $com) {
                if ($com->on_post == $posting->id) {
                    $com_sum = $com_sum + 1;
                }
            }
            
            $others = Comments::where('on_post', $posting->id);
            $post_sum = $post_sum + 1;
        }
        
        $item1 = 'selfie';
        $people = Posts::where('tag1', 'LIKE', '%' . $item1 . '%')->orWhere('tag2', 'LIKE', '%' . $item1. '%')->orWhere('tag3', 'LIKE', '%' . $item1. '%')->orWhere('tag4', 'LIKE', '%' . $item1. '%')->orWhere('tag5', 'LIKE', '%' . $item1. '%')->get();

        $item1 = 'place';
        $place = Posts::where('tag1', 'LIKE', '%' . $item1 . '%')->orWhere('tag2', 'LIKE', '%' . $item1. '%')->orWhere('tag3', 'LIKE', '%' . $item1. '%')->orWhere('tag4', 'LIKE', '%' . $item1. '%')->orWhere('tag5', 'LIKE', '%' . $item1. '%')->get();

        $item1 = 'event';
        $event = Posts::where('tag1', 'LIKE', '%' . $item1 . '%')->orWhere('tag2', 'LIKE', '%' . $item1. '%')->orWhere('tag3', 'LIKE', '%' . $item1. '%')->orWhere('tag4', 'LIKE', '%' . $item1. '%')->orWhere('tag5', 'LIKE', '%' . $item1. '%')->get();

        $out1 = Posts::where('tag1', 'LIKE', '%' . $item . '%')->orWhere('tag2', 'LIKE', '%' . $item. '%')->orWhere('tag3', 'LIKE', '%' . $item. '%')->orWhere('tag4', 'LIKE', '%' . $item. '%')->orWhere('tag5', 'LIKE', '%' . $item. '%')->orWhere('body', 'LIKE', '%' . $item. '%')->orWhere('featured_image', 'LIKE', '%' . $item. '%')->orWhere('location', 'LIKE', '%' . $item. '%')->orWhere('country', 'LIKE', '%' . $item. '%')->get();

        if ($category == 1) {
            
        $fellows = Personal::where('name', 'LIKE', '%' . $item . '%')->orWhere('description', 'LIKE', '%' . $item. '%')->orWhere('hobby', 'LIKE', '%' . $item. '%')->orWhere('neighbourhood', 'LIKE', '%' . $item. '%')->orWhere('town', 'LIKE', '%' . $item. '%')->orWhere('home_town', 'LIKE', '%' . $item. '%')->orWhere('state', 'LIKE', '%' . $item. '%')->orWhere('continent', 'LIKE', '%' . $item. '%')->orWhere('country', 'LIKE', '%' . $item. '%')->orWhere('clan', 'LIKE', '%' . $item. '%')->orWhere('skills', 'LIKE', '%' . $item. '%')->orderBy('created_at', 'DESC')->get();
        }
        elseif ($category == 2) {
            
            $fellows = Academic::where('university', 'LIKE', '%' . $item . '%')->orWhere('uni_grad_year', 'LIKE', '%' . $item. '%')->orWhere('college', 'LIKE', '%' . $item. '%')->orWhere('col_grad_year', 'LIKE', '%' . $item. '%')->orWhere('high_school', 'LIKE', '%' . $item. '%')->orWhere('high_grad_year', 'LIKE', '%' . $item. '%')->orWhere('other_school', 'LIKE', '%' . $item. '%')->orWhere('other_grad_year', 'LIKE', '%' . $item. '%')->orWhere('program', 'LIKE', '%' . $item. '%')->orWhere('level', 'LIKE', '%' . $item. '%')->orderBy('created_at', 'DESC')->get();
        }
        elseif ($category == 3) {
            $fellows = Career::where('career', 'LIKE', '%' . $item. '%')->orWhere('occupation', 'LIKE', '%' . $item. '%')->orWhere('company', 'LIKE', '%' . $item. '%')->orWhere('position', 'LIKE', '%' . $item. '%')->get();
        }
        elseif ($category == 4) {
            $fellows = Religion::where('religion', 'LIKE', '%' . $item. '%')->orWhere('sect', 'LIKE', '%' . $item. '%')->orWhere('denomination', 'LIKE', '%' . $item. '%')->orWhere('worship_center', 'LIKE', '%' . $item. '%')->get();
        }
        else
            $fellows = Favorite::where('brand', 'LIKE', '%' . $item . '%')->orWhere('technology', 'LIKE', '%' . $item. '%')->orWhere('car', 'LIKE', '%' . $item. '%')->orWhere('building', 'LIKE', '%' . $item. '%')->orWhere('book', 'LIKE', '%' . $item. '%')->orWhere('public_figure', 'LIKE', '%' . $item. '%')->orWhere('tv_show', 'LIKE', '%' . $item. '%')->orWhere('sport', 'LIKE', '%' . $item. '%')->orWhere('meal', 'LIKE', '%' . $item. '%')->orWhere('pet', 'LIKE', '%' . $item. '%')->orWhere('city', 'LIKE', '%' . $item. '%')->orderBy('created_at', 'DESC')->get();
    
        
        $sent_messages = Messages::where('to_user', Auth::user()->id)->orderBy('created_at', 'DESC')->get();

        $i_comments = Comments::where('from_user', Auth::user()->id)->orderBy('created_at', 'DESC');

        $remain_to_post = 5 - $postings->count();
        $remain_to_comment = 5 - $i_comments->count();

        $remain_to_pick = 20 - $pickings->count();

        $age = Carbon::parse(Auth::user()->DOB)->diffInYears(Carbon::now());

        return view('fellows.search.options', compact('out1'))->withAge($age)->withRemainToComment($remain_to_comment)->withRemainToPost($remain_to_post)->withRemainToPick($remain_to_pick)->withIComments($i_comments)->withPosts($posts)->withPostings($postings)->withComments($comments)->withOthers($others)->withPersonal($personal)->withPersonalFellows($personal_fellows)->withPostSum($post_sum)->withAcademic($academic)->withAcademicFellows($academic_fellows)->withCareer($career)->withCareerFellows($career_fellows)->withReligion($religion)->withReligionFellows($religion_fellows)->withFavorite($favorite)->withFavoriteFellows($favorite_fellows)->withInput($item)->withComSum($com_sum)->withPickings($pickings)->withFellows($fellows)->withPeople($people)->withPlace($place)->withEvent($event)->withComSum($com_sum)->withEveryPeople($every_people)->withSentMessages($sent_messages);
    
    }

     

    public function addAcademic(Request $request)
    {
        $input['from_user'] = $request->user()->id;

        $input['university'] = $request->get('university');

        if ($request->get('uni_grad_year')) {

        $input['uni_grad_year'] = 'Class of ' . date('Y',strtotime($request->get('uni_grad_year')));

        }
    
        $input['college'] = $request->get('college');

        if ($request->get('col_grad_year')) {

        $input['col_grad_year'] = 'Class of ' . date('Y',strtotime($request->get('col_grad_year')));

        }
    
        

        $input['high_school'] = $request->get('high_school');

        if ($request->get('high_grad_year')) {

        $input['high_grad_year'] = 'Class of ' . date('Y',strtotime($request->get('high_grad_year')));

        }

        if ($request->get('high_grad_year')) {

        $input['high_grad_year'] = 'Class of ' . date('Y',strtotime($request->get('high_grad_year')));

        }

        
    
        $input['other_school'] = $request->get('other_school');

        if ($request->get('other_grad_year')) {

        $input['other_grad_year'] = 'Class of ' . date('Y',strtotime($request->get('other_grad_year')));

        }

        if ($request->get('program')) {

        $input['program'] = $request->get('program');

        }
        

        $input['degree'] = $request->get('degree');

        $input['class'] = $request->get('class');

        if ($request->get('level')) {

        $input['level'] = $request->get('class') . ' ' . $request->get('level');

        }
    
        $inpu['category'] = 2;

        Academic::create( $input );
        return redirect()->route('account');
          
    }
    
    public function career() {

        $comments = Comments::orderBy('created_at','DESC')->paginate(5);
         $posts = Posts::where('author_id', Auth::user()->id)->orderBy('created_at', 'DESC')->paginate(5);

        $users = User::where('id',Auth::user()->id);
        $personal = Personal::where('from_user', Auth::user()->id)->orderBy('created_at', 'DESC');

        $others = $comments;
        $com_sum = 0;
        foreach ($posts as $key => $posting) {
            foreach ($comments as $key => $com) {
                if ($com->on_post == $posting->id) {
                    $com_sum = $com_sum + 1;
                }
            
            $others = Comments::where('on_post', $posting->id);
        
        }

        $sent_messages = Messages::where('to_user', Auth::user()->id)->orderBy('created_at', 'DESC')->get();

        return view('career')->withPersonal($personal)->withOthers($others)->withPosts($posts)->withComments($comments)->withUsers($users)->withPersonal($personal)->withComSum($com_sum)->withSentMessages($sent_messages);
        }
    }

     public function addCareer(Request $request)
    {
        $input['from_user'] = $request->user()->id;

        $input['career'] = $request->get('career');
    
        $input['occupation'] = $request->get('occupation');

        $input['company'] = $request->get('company');
    
        $input['position'] = $request->get('position');

        $input['category'] = 3;

       
        Career::create( $input );
        return redirect()->route('account');
          
    }

    public function religion() {


         $posts = Posts::where('author_id', Auth::user()->id)->orderBy('created_at', 'DESC')->paginate(5);
        $users = User::where('id',Auth::user()->id);
        $personal = Personal::where('from_user', Auth::user()->id)->orderBy('created_at', 'DESC');
        $com_sum = 0;
        foreach ($posts as $key => $post) {
            foreach ($comments as $key => $com) {
                if ($com->on_post == $posting->id) {
                    $com_sum = $com_sum + 1;
                }
            
            $comments = Comments::where('on_post', $post->id);
        
        }

        $sent_messages = Messages::where('to_user', Auth::user()->id)->orderBy('created_at', 'DESC')->get();
        return view('religion')->withPersonal($personal)->withPosts($posts)->withComments($comments)->withUsers($users)->withPersonal($personal)->withComSum($com_sum)->withSentMessages($sent_messages);
         }
    }


    public function addReligion(Request $request)
    {
        $input['from_user'] = $request->user()->id;

        $input['religion'] = $request->get('religion');
    
        $input['sect'] = $request->get('sect');

        $input['denomination'] = $request->get('denomination');
    
        $input['worship_center'] = $request->get('worship_center');

        $input['category'] = 4;

       
        Religion::create( $input );
        return redirect()->route('account');
          
    }

    public function favorite() {

        $comments = Comments::orderBy('created_at','DESC')->paginate(5);
         $posts = Posts::where('author_id', Auth::user()->id)->orderBy('created_at', 'DESC')->paginate(5);
        $users = User::where('id',Auth::user()->id);
        $personal = Personal::where('from_user', Auth::user()->id)->orderBy('created_at', 'DESC');
        $com_sum = 0;
        foreach ($posts as $key => $post) {
            foreach ($comments as $key => $com) {
                if ($com->on_post == $posting->id) {
                    $com_sum = $com_sum + 1;
                }
            
            $comments = Comments::where('on_post', $post->id);
        
        }

        $sent_messages = Messages::where('to_user', Auth::user()->id)->orderBy('created_at', 'DESC')->get();
        return view('favorite')->withPersonal($personal)->withPosts($posts)->withComments($comments)->withUsers($users)->withPersonal($personal)->withComSum($com_sum)->withSentMessages($sent_messages);
        }
    }
    public function addFavorite(Request $request)
    {

        //Validate the data 
        $this->validate($request, array(
            'book' => 'sometimes|max:255',
            'brand' => 'sometimes|max:255',
            'technology' => 'sometimes|max:255',
            'sport' => 'sometimes|max:255',
            'car' => 'sometimes|max:255',
            'building' => 'sometimes|max:255',
            'tv_show' => 'sometimes|max:255',
            'pet' => 'sometimes|max:100',
            'public_figure' => 'sometimes|max:255',
            'city' => 'sometimes|max:255',
            'meal' => 'sometimes|max:255',

            ));

        $input['from_user'] = $request->user()->id;

        $input['book'] = $request->get('book');
    
        $input['brand'] = $request->get('brand');

        $input['technology'] = $request->get('technology');
    
        $input['sport'] = $request->get('sport');

        $input['car'] = $request->get('car');
    
        $input['building'] = $request->get('building');

        $input['tv_show'] = $request->get('tv_show');

        $input['pet'] = $request->get('pet');

        $input['public_figure'] = $request->get('public_figure');
    
        $input['city'] = $request->get('city');

        $input['meal'] = $request->get('meal');

        $input['category'] = 5;

        Favorite::create( $input );
        return redirect()->route('/home');
          
    }
    

    public function find(Request $request)
    {

        



        $key = $request->searchinput;




        $out1 = Posts::where('tag1', 'LIKE', '%' . $key . '%')->orWhere('tag2', 'LIKE', '%' . $key. '%')->orWhere('tag3', 'LIKE', '%' . $key. '%')->orWhere('tag4', 'LIKE', '%' . $key. '%')->orWhere('tag5', 'LIKE', '%' . $key. '%')->orWhere('body', 'LIKE', '%' . $key. '%')->orWhere('featured_image', 'LIKE', '%' . $key. '%')->orWhere('location', 'LIKE', '%' . $key. '%')->orWhere('country', 'LIKE', '%' . $key. '%')->get();

        $item = $request->searchinput;
        
        $personal = Personal::where('from_user', Auth::user()->id)->orderBy('created_at','DESC')->first();
        $personal_fellows = Personal::orderBy('created_at', 'DESC')->get();
        if ($personal) {
            
        $personal_fellows = Personal::where('name', 'LIKE', '%' . $item . '%')->orWhere('description', 'LIKE', '%' . $item . '%')->orWhere('hobby', 'LIKE', '%' . $item . '%')->orWhere('neighbourhood', 'LIKE', '%' . $item . '%')->orWhere('town', 'LIKE', '%' . $item . '%')->orWhere('home_town', 'LIKE', '%' . $item . '%')->orWhere('state', 'LIKE', '%' . $item . '%')->orWhere('continent', 'LIKE', '%' . $item . '%')->orWhere('country', 'LIKE', '%' . $item . '%')->orWhere('clan', 'LIKE', '%' . $item . '%')->orWhere('skills', 'LIKE', '%' . $item . '%')->orderBy('created_at', 'DESC')->get();

        }

        $academic = Academic::where('from_user', Auth::user()->id)->orderBy('created_at', 'DESC')->first();
        $academic_fellows = Academic::orderBy('created_at', 'DESC')->get();
        if ($academic) {
            # code...
        
        $academic_fellows = Academic::where('university', 'LIKE', '%' . $item . '%')->orWhere('uni_grad_year', 'LIKE', '%' . $item . '%')->orWhere('college', 'LIKE', '%' . $item . '%')->orWhere('col_grad_year', 'LIKE', '%' . $item . '%')->orWhere('high_school', 'LIKE', '%' . $item . '%')->orWhere('high_grad_year', 'LIKE', '%' . $item . '%')->orWhere('other_school', 'LIKE', '%' . $item. '%')->orWhere('other_grad_year', 'LIKE', '%' . $item . '%')->orWhere('program', 'LIKE', '%' . $item . '%')->orWhere('level', 'LIKE', '%' . $item . '%')->orderBy('created_at', 'DESC')->get();
        }

        $career = Career::where('from_user', Auth::user()->id)->orderBy('created_at', 'DESC')->first();
        $career_fellows = Career::orderBy('created_at', 'DESC')->get();
        if ($career) {
            # code...
        
        $career_fellows =  Career::where('career', 'LIKE', '%' . $item . '%')->orWhere('occupation', 'LIKE', '%' . $item . '%')->orWhere('company', 'LIKE', '%' . $item . '%')->orWhere('position', 'LIKE', '%' . $item . '%')->get();
        }

        $religion = Religion::where('from_user', Auth::user()->id)->orderBy('created_at', 'DESC')->first();
        $religion_fellows = Religion::orderBy('created_at', 'DESC')->get();
        if ($religion) {
            # code...
        
        $religion_fellows = Religion::where('religion', 'LIKE', '%' . $item . '%')->orWhere('sect', 'LIKE', '%' . $item . '%')->orWhere('denomination', 'LIKE', '%' . $item . '%')->orWhere('worship_center', 'LIKE', '%' . $item . '%')->get();
        }

        $favorite = Favorite::where('from_user', Auth::user()->id)->orderBy('created_at', 'DESC')->first();
        $favorite_fellows = Favorite::orderBy('created_at', 'DESC')->get();
        if ($favorite) {
            # code...
        
        $favorite_fellows = Favorite::where('brand', 'LIKE', '%' . $item . '%')->orWhere('technology', 'LIKE', '%' . $item. '%')->orWhere('car', 'LIKE', '%' . $item. '%')->orWhere('building', 'LIKE', '%' . $item. '%')->orWhere('book', 'LIKE', '%' . $item. '%')->orWhere('public_figure', 'LIKE', '%' . $item. '%')->orWhere('tv_show', 'LIKE', '%' . $item. '%')->orWhere('sport', 'LIKE', '%' . $item. '%')->orWhere('meal', 'LIKE', '%' . $item. '%')->orWhere('pet', 'LIKE', '%' . $item. '%')->orWhere('city', 'LIKE', '%' . $item. '%')->orderBy('created_at', 'DESC')->get();
        }



        $every_people = $personal_fellows->count() + $academic_fellows->count() + $career_fellows->count() + $religion_fellows->count() + $favorite_fellows->count();
        
        
       $posts = Posts::orderBy('created_at','DESC')->get();
       $postings = Posts::where('author_id', Auth::user()->id)->orderBy('created_at', 'DESC')->paginate(5);
       $comments = Comments::orderBy('created_at','DESC')->paginate(5);
       $pickings = Picks::where('by_user', Auth::user()->id)->get();

       $post_sum = 0;
       $com_sum = 0;
       $others = Comments::orderBy('created_at','DESC')->paginate(5);

        foreach ($postings as $key => $post) {
            foreach ($comments as $key => $com) {
                if ($com->on_post == $post->id) {
                    $com_sum = $com_sum + 1;
                }
            }
            
            $others = Comments::where('on_post', $post->id);
            $post_sum = $post_sum + 1;
        }
        
        $remain_to_pick = 20 - $pickings->count();
        $i_comments = Comments::where('from_user', Auth::user()->id)->orderBy('created_at', 'DESC');

        $remain_to_post = 5 - $postings->count();
        $remain_to_comment = 5 - $i_comments->count();

        $sent_messages = Messages::where('to_user', Auth::user()->id)->orderBy('created_at', 'DESC')->get();

        $age = Carbon::parse(Auth::user()->DOB)->diffInYears(Carbon::now());

        $item = 'selfie';
        $people = Posts::where('tag1', 'LIKE', '%' . $item . '%')->orWhere('tag2', 'LIKE', '%' . $item. '%')->orWhere('tag3', 'LIKE', '%' . $item. '%')->orWhere('tag4', 'LIKE', '%' . $item. '%')->orWhere('tag5', 'LIKE', '%' . $item. '%')->orderBy('created_at', 'DESC')->get();

        $item = 'place';
        $place = Posts::where('tag1', 'LIKE', '%' . $item . '%')->orWhere('tag2', 'LIKE', '%' . $item. '%')->orWhere('tag3', 'LIKE', '%' . $item. '%')->orWhere('tag4', 'LIKE', '%' . $item. '%')->orWhere('tag5', 'LIKE', '%' . $item. '%')->orderBy('created_at', 'DESC')->get();

        $item = 'event';
        $event = Posts::where('tag1', 'LIKE', '%' . $item . '%')->orWhere('tag2', 'LIKE', '%' . $item. '%')->orWhere('tag3', 'LIKE', '%' . $item. '%')->orWhere('tag4', 'LIKE', '%' . $item. '%')->orWhere('tag5', 'LIKE', '%' . $item. '%')->orderBy('created_at', 'DESC')->get();


        return view('fellows.search.options', compact('out1'))->withAge($age)->withRemainToPick($remain_to_pick)->withIComments($i_comments)->withRemainToPost($remain_to_post)->withRemainToComment($remain_to_comment)->withPosts($posts)->withComments($comments)->withOthers($others)->withPersonal($personal)->withPostSum($post_sum)->withPostings($postings)->withAcademic($academic)->withCareer($career)->withReligion($religion)->withFavorite($favorite)->withInput($item)->withComSum($com_sum)->withPickings($pickings)->withPeople($people)->withPlace($place)->withEvent($event)->withEveryPeople($every_people)->withPersonal($personal)->withPersonalFellows($personal_fellows)->withAcademic($academic)->withAcademicFellows($academic_fellows)->withCareer($career)->withCareerFellows($career_fellows)->withReligion($religion)->withReligionFellows($religion_fellows)->withFavorite($favorite)->withFavoriteFellows($favorite_fellows)->withSentMessages($sent_messages);
    
    }





    public function index()
    {
    	//fetch 9 products from database which are active and latest
        /*$products = Products::orderBy('created_at')->paginate(5);*/
        // page Heading
        
        //return to our view (welcome.blade.php)
        return view('welcome');
         
    }

    public function about()
    {
        //fetch 9 products from database which are active and latest
        /*$products = Products::orderBy('created_at')->paginate(5);*/
        // page Heading
        
        //return to our view (home.blade.php)
        return view('aboutus');
         
    }

    public function pickUsers($for_user, $picked) {

        $input['by_user'] = Auth::user()->id;
        $input['picked_user'] = $picked;

        Picks::create( $input);

        return redirect()->back();
    }


     public function getFeedback(Request $request)
    {
         $input['firstname'] = $request->get('firstname');
    
        $input['lastname'] = $request->get('lastname');

        $input['email'] = $request->get('email');
    
        $input['subject'] = $request->get('subject');

        $input['message'] = $request->get('message');

        Feedbacks::create( $input );
        return redirect()->route('/');
        
    
         
    }


     public function ownposts()
    {
        //fetch 9 products from database which are active and latest
        $comments = Comments::orderBy('created_at','DESC')->paginate(5);
        $posts = Posts::where('author_id', Auth::user()->id)->orderBy('created_at', 'DESC')->paginate(5);
        $postings = Posts::where('author_id', Auth::user()->id)->orderBy('created_at', 'DESC')->get();
        $users = User::where('id',Auth::user()->id);
        $personal = Personal::where('from_user', Auth::user()->id)->orderBy('created_at', 'DESC')->first();
        $pickings = Picks::where('by_user', Auth::user()->id)->get();
        $postSum = 0;
        $others = $comments;
        $com_sum = 0;
        foreach ($posts as $key => $post) {
            foreach ($comments as $key => $com) {
                if ($com->on_post == $post->id) {
                    $com_sum = $com_sum + 1;
                }
            }
            
            $others = Comments::where('on_post', $post->id);
            $postSum = $postSum + 1;
        }
        $personal = Personal::where('from_user', Auth::user()->id)->orderBy('created_at','DESC')->first();
        $personal_fellows = Personal::orderBy('created_at', 'DESC')->get();
        if ($personal) {
            
        $personal_fellows = Personal::where('name', 'LIKE', '%' . $personal->name . '%')->orWhere('description', 'LIKE', '%' . $personal->description . '%')->orWhere('hobby', 'LIKE', '%' . $personal->hobby . '%')->orWhere('neighbourhood', 'LIKE', '%' . $personal->neighbourhood . '%')->orWhere('town', 'LIKE', '%' . $personal->town . '%')->orWhere('home_town', 'LIKE', '%' . $personal->home_town . '%')->orWhere('state', 'LIKE', '%' . $personal->state . '%')->orWhere('continent', 'LIKE', '%' . $personal->continent . '%')->orWhere('country', 'LIKE', '%' . $personal->country . '%')->orWhere('clan', 'LIKE', '%' . $personal->clan . '%')->orWhere('skills', 'LIKE', '%' . $personal->skills . '%')->orderBy('created_at', 'DESC')->get();

        }

        $academic = Academic::where('from_user', Auth::user()->id)->orderBy('created_at', 'DESC')->first();
        $academic_fellows = Academic::orderBy('created_at', 'DESC')->get();
        if ($academic) {
        
        $academic_fellows = Academic::where('university', 'LIKE', '%' . $academic->university . '%')->orWhere('uni_grad_year', 'LIKE', '%' . $academic->uni_grad_year . '%')->orWhere('college', 'LIKE', '%' . $academic->college . '%')->orWhere('col_grad_year', 'LIKE', '%' . $academic->col_grad_year . '%')->orWhere('high_school', 'LIKE', '%' . $academic->high_school . '%')->orWhere('high_grad_year', 'LIKE', '%' . $academic->high_grad_year . '%')->orWhere('other_school', 'LIKE', '%' . $academic->other_school. '%')->orWhere('other_grad_year', 'LIKE', '%' . $academic->other_grad_year . '%')->orWhere('program', 'LIKE', '%' . $academic->program . '%')->orWhere('level', 'LIKE', '%' . $academic->level . '%')->orderBy('created_at', 'DESC')->get();
        }

        $career = Career::where('from_user', Auth::user()->id)->orderBy('created_at', 'DESC')->first();
        $career_fellows = Career::orderBy('created_at', 'DESC')->get();
        if ($career) {
            # code...
        
        $career_fellows =  Career::where('career', 'LIKE', '%' . $career->career . '%')->orWhere('occupation', 'LIKE', '%' . $career->occupational . '%')->orWhere('company', 'LIKE', '%' . $career->company . '%')->orWhere('position', 'LIKE', '%' . $career->position . '%')->get();
        }

        $religion = Religion::where('from_user', Auth::user()->id)->orderBy('created_at', 'DESC')->first();
        $religion_fellows = Religion::orderBy('created_at', 'DESC')->get();
        if ($religion) {
            # code...
        
        $religion_fellows = Religion::where('religion', 'LIKE', '%' . $religion->religion . '%')->orWhere('sect', 'LIKE', '%' . $religion->sect . '%')->orWhere('denomination', 'LIKE', '%' . $religion->denomination . '%')->orWhere('worship_center', 'LIKE', '%' . $religion->worship_center . '%')->get();
        }

        $favorite = Favorite::where('from_user', Auth::user()->id)->orderBy('created_at', 'DESC')->first();
        $favorite_fellows = Favorite::orderBy('created_at', 'DESC')->get();
        if ($favorite) {
            # code...
        
        $favorite_fellows = Favorite::where('brand', 'LIKE', '%' . $favorite->brand . '%')->orWhere('technology', 'LIKE', '%' . $favorite->technology. '%')->orWhere('car', 'LIKE', '%' . $favorite->car. '%')->orWhere('building', 'LIKE', '%' . $favorite->building. '%')->orWhere('book', 'LIKE', '%' . $favorite->book. '%')->orWhere('public_figure', 'LIKE', '%' . $favorite->public_figure. '%')->orWhere('tv_show', 'LIKE', '%' . $favorite->tv_show. '%')->orWhere('sport', 'LIKE', '%' . $favorite->sport. '%')->orWhere('meal', 'LIKE', '%' . $favorite->meal. '%')->orWhere('pet', 'LIKE', '%' . $favorite->pet. '%')->orWhere('city', 'LIKE', '%' . $favorite->city. '%')->orderBy('created_at', 'DESC')->get();
        }
        
        $every_people = $personal_fellows->count() + $academic_fellows->count() + $career_fellows->count() + $religion_fellows->count() + $favorite_fellows->count();
        $sent_messages = Messages::where('to_user', Auth::user()->id)->orderBy('created_at', 'DESC')->get();
        $i_comments = Comments::where('from_user', Auth::user()->id)->orderBy('created_at', 'DESC');

        $remain_to_post = 5 - $postings->count();
        $remain_to_comment = 5 - $i_comments->count();

        $remain_to_pick = 20 - $pickings->count();


        $age = Carbon::parse(Auth::user()->DOB)->diffInYears(Carbon::now());
        
        return view('content-options1')->withAge($age)->withRemainToPick($remain_to_pick)->withIComments($i_comments)->withRemainToPost($remain_to_post)->withRemainToComment($remain_to_comment)->withPosts($posts)->withPostings($postings)->withComments($comments)->withOthers($others)->withUsers($users)->withPersonal($personal)->withPostSum($postSum)->withAcademic($academic)->withCareer($career)->withReligion($religion)->withFavorite($favorite)->withPersonalFellows($personal_fellows)->withAcademicFellows($academic_fellows)->withCareerFellows($career_fellows)->withReligionFellows($religion_fellows)->withFavoriteFellows($favorite_fellows)->withComSum($com_sum)->withPickings($pickings)->withEveryPeople($every_people)->withSentMessages($sent_messages);
         
    }

    public function picks()
    {
        //fetch 9 products from database which are active and latest

        
        $comments = Comments::orderBy('created_at','DESC')->paginate(5);
        $postings = Posts::where('author_id', Auth::user()->id)->orderBy('created_at', 'DESC')->get();
        $posts = Posts::orderBy('created_at', 'DESC')->get();
        $myposts = Posts::where('author_id', Auth::user()->id)->orderBy('created_at', 'DESC')->get();
        $pickings = Picks::where('by_user', Auth::user()->id)->get();
        

        $users = User::where('id',Auth::user()->id);
        
        $postSum = 0;
        $others = $comments;
        $com_sum = 0;
        foreach ($myposts as $key => $mypost) {
            foreach ($comments as $key => $com) {
                if ($com->on_post == $mypost->id) {
                    
                    $com_sum  = $com_sum + 1;
                }
            }
            $others = Comments::where('on_post', $mypost->id);
            
        }

        foreach ($posts as $key => $post) {
            if ($post->author_id == Auth::user()->id) {
                $postSum = $postSum + 1;
            }
        }

        $personal = Personal::where('from_user', Auth::user()->id)->orderBy('created_at','DESC')->first();
        $personal_fellows = Personal::orderBy('created_at', 'DESC')->get();
        if ($personal) {
            
        $personal_fellows = Personal::where('name', 'LIKE', '%' . $personal->name . '%')->orWhere('description', 'LIKE', '%' . $personal->description . '%')->orWhere('hobby', 'LIKE', '%' . $personal->hobby . '%')->orWhere('neighbourhood', 'LIKE', '%' . $personal->neighbourhood . '%')->orWhere('town', 'LIKE', '%' . $personal->town . '%')->orWhere('home_town', 'LIKE', '%' . $personal->home_town . '%')->orWhere('state', 'LIKE', '%' . $personal->state . '%')->orWhere('continent', 'LIKE', '%' . $personal->continent . '%')->orWhere('country', 'LIKE', '%' . $personal->country . '%')->orWhere('clan', 'LIKE', '%' . $personal->clan . '%')->orWhere('skills', 'LIKE', '%' . $personal->skills . '%')->orderBy('created_at', 'DESC')->get();

        }

        $academic = Academic::where('from_user', Auth::user()->id)->orderBy('created_at', 'DESC')->first();
        $academic_fellows = Academic::orderBy('created_at', 'DESC')->get();
        if ($academic) {
        
        $academic_fellows = Academic::where('university', 'LIKE', '%' . $academic->university . '%')->orWhere('uni_grad_year', 'LIKE', '%' . $academic->uni_grad_year . '%')->orWhere('college', 'LIKE', '%' . $academic->college . '%')->orWhere('col_grad_year', 'LIKE', '%' . $academic->col_grad_year . '%')->orWhere('high_school', 'LIKE', '%' . $academic->high_school . '%')->orWhere('high_grad_year', 'LIKE', '%' . $academic->high_grad_year . '%')->orWhere('other_school', 'LIKE', '%' . $academic->other_school. '%')->orWhere('other_grad_year', 'LIKE', '%' . $academic->other_grad_year . '%')->orWhere('program', 'LIKE', '%' . $academic->program . '%')->orWhere('level', 'LIKE', '%' . $academic->level . '%')->orderBy('created_at', 'DESC')->get();
        }

        $career = Career::where('from_user', Auth::user()->id)->orderBy('created_at', 'DESC')->first();
        $career_fellows = Career::orderBy('created_at', 'DESC')->get();
        if ($career) {
            # code...
        
        $career_fellows =  Career::where('career', 'LIKE', '%' . $career->career . '%')->orWhere('occupation', 'LIKE', '%' . $career->occupational . '%')->orWhere('company', 'LIKE', '%' . $career->company . '%')->orWhere('position', 'LIKE', '%' . $career->position . '%')->get();
        }

        $religion = Religion::where('from_user', Auth::user()->id)->orderBy('created_at', 'DESC')->first();
        $religion_fellows = Religion::orderBy('created_at', 'DESC')->get();
        if ($religion) {
            # code...
        
        $religion_fellows = Religion::where('religion', 'LIKE', '%' . $religion->religion . '%')->orWhere('sect', 'LIKE', '%' . $religion->sect . '%')->orWhere('denomination', 'LIKE', '%' . $religion->denomination . '%')->orWhere('worship_center', 'LIKE', '%' . $religion->worship_center . '%')->get();
        }

        $favorite = Favorite::where('from_user', Auth::user()->id)->orderBy('created_at', 'DESC')->first();
        $favorite_fellows = Favorite::orderBy('created_at', 'DESC')->get();
        if ($favorite) {
            # code...
        
        $favorite_fellows = Favorite::where('brand', 'LIKE', '%' . $favorite->brand . '%')->orWhere('technology', 'LIKE', '%' . $favorite->technology. '%')->orWhere('car', 'LIKE', '%' . $favorite->car. '%')->orWhere('building', 'LIKE', '%' . $favorite->building. '%')->orWhere('book', 'LIKE', '%' . $favorite->book. '%')->orWhere('public_figure', 'LIKE', '%' . $favorite->public_figure. '%')->orWhere('tv_show', 'LIKE', '%' . $favorite->tv_show. '%')->orWhere('sport', 'LIKE', '%' . $favorite->sport. '%')->orWhere('meal', 'LIKE', '%' . $favorite->meal. '%')->orWhere('pet', 'LIKE', '%' . $favorite->pet. '%')->orWhere('city', 'LIKE', '%' . $favorite->city. '%')->orderBy('created_at', 'DESC')->get();
        }
        
        $sent_messages = Messages::where('to_user', Auth::user()->id)->orderBy('created_at', 'DESC')->get();

        $remain_to_pick = 20 - $pickings->count();
        $i_comments = Comments::where('from_user', Auth::user()->id)->orderBy('created_at', 'DESC');

        $remain_to_post = 5 - $postings->count();
        $remain_to_comment = 5 - $i_comments->count();

        $age = Carbon::parse(Auth::user()->DOB)->diffInYears(Carbon::now());
        
        $every_people = $personal_fellows->count() + $academic_fellows->count() + $career_fellows->count() + $religion_fellows->count() + $favorite_fellows->count();

        $age = Carbon::parse(Auth::user()->DOB)->diffInYears(Carbon::now());

        return view('content-options')->withAge($age)->withRemainToPick($remain_to_pick)->withIComments($i_comments)->withRemainToPost($remain_to_post)->withRemainToComment($remain_to_comment)->withAge($age)->withPosts($posts)->withPostings($postings)->withComments($comments)->withOthers($others)->withUsers($users)->withPersonal($personal)->withPostSum($postSum)->withAcademic($academic)->withCareer($career)->withReligion($religion)->withFavorite($favorite)->withPersonalFellows($personal_fellows)->withAcademicFellows($academic_fellows)->withCareerFellows($career_fellows)->withReligionFellows($religion_fellows)->withFavoriteFellows($favorite_fellows)->withPickings($pickings)->withComSum($com_sum)->withEveryPeople($every_people)->withSentMessages($sent_messages);
         
    }

    public function showProfile($id)
    {
        //finfd the user in the database and save as var
       $posts = Posts::where('author_id', Auth::user()->id)->orderBy('created_at', 'DESC')->paginate(5);
       $postings = Posts::where('author_id', Auth::user()->id)->orderBy('created_at', 'DESC')->paginate(5);
       $comments = Comments::orderBy('created_at','DESC')->paginate(5);
       $users = User::where('id',Auth::user()->id);
       $personal = Personal::where('from_user', Auth::user()->id)->orderBy('created_at','DESC')->paginate(1);
       $academic = Academic::where('from_user', Auth::user()->id)->orderBy('created_at', 'DESC')->paginate(1);
       $career = Career::where('from_user', Auth::user()->id)->orderBy('created_at', 'DESC')->paginate(1);
       $religion = Religion::where('from_user', Auth::user()->id)->orderBy('created_at', 'DESC')->paginate(1);
       $favorite = Favorite::where('from_user', Auth::user()->id)->orderBy('created_at', 'DESC')->paginate(1);

       $post_sum = 0;
       $com_sum = 0;
       $others = Comments::orderBy('created_at','DESC')->paginate(5);
        foreach ($postings as $key => $posting) {
            foreach ($comments as $key => $com) {
                if ($com->on_post == $posting->id) {
                    $com_sum = $com_sum + 1;
                }
            }
            
            $others = Comments::where('on_post', $posting->id);
            $post_sum = $post_sum + 1;
        }
       
       
        $sent_messages = Messages::where('to_user', Auth::user()->id)->orderBy('created_at', 'DESC')->get();
        $user = User::find($id);

        //return the view and pass in the var we previously created
        return view('edit')->withUser($user)->withPersonal($personal)->withPostSum($post_sum)->withPosts($posts)->withComments($comments)->withOthers($others)->withUsers($users)->withPersonal($personal)->withComSum($com_sum)->withOthers($others)->withSentMessages($sent_messages);
        
    }

     public function edit(Request $request, $id)
    {
        //Validate the data 
        $this->validate($request, array(
            'firstname' => 'sometimes|max:100',
            'middlenames' => 'sometimes|max:100',
            'lastname' => 'sometimes|max:100',
            'DOB' => 'sometimes|max:255',
            'telephone' => 'sometimes|max:20',
            'country' => 'sometimes|max:100',
            'email' => 'sometimes|email|max:255|unique:users',
            'gender' => 'sometimes|max:100',
            'featured_image' => 'sometimes|image',

            ));

        // Save the data to database
        $user = Auth::User()->where('id', $id)->first();

        $input['firstname'] = $request->get('firstname');
        $input['middlenames'] = $request->get('middlenames');
        $input['lastname'] = $request->get('lastname');
        $input['DOB'] = $request->get('DOB');
        $input['telephone'] = $request->get('telephone');
        $input['country'] = $request->get('country');
        $input['email'] = $request->get('email');
        $input['gender'] = $request->get('gender');

        if ($request->hasFile('featured_image')){
            $featured_image = $request->file('featured_image');
            $filename = $featured_image->getClientOriginalName();
            Image::make($featured_image)->save(public_path('/uploads/images/' . $filename));
            

            //$oldFilename = $user->featured_image;
            
            
            //update database
            $input['featured_image'] = $filename;

            //delete the old photo
            //Storage::delete($oldFilename);
        
        }

        /*$user->save();*/
        DB::table('Users')->where('id', $user->id)->update($input);

        //set flash data with success message
        Session::flash('success', 'Your profile has been successfull edited');



        // redirect with flash data to showProfile
        return redirect()->route('profile', $user->id);
          
    
    }

     public function showmyproducts()
    {
        
        $uploads = Uploads::where('from_user', Auth::user()->id);
        $products = Products::orderBy('created_at')->where('from_user', Auth::user()->id )->paginate(5);
     /*   if (!$products){
            return redirect('/')->withErrors('requested page not found');
        }*/

       
        
        return view('myproducts')->withUploads($uploads)->withProducts($products)->with('name', Auth::user()->name);
        return true;
    }


     

         public function editmyproduct(Request $request, $id)
    {

         //Validate the data 
        $this->validate($request, array(
            'vendor' => 'sometimes|max:100',
            'product_name' => 'sometimes|max:255',
            'category' => 'sometimes|max:255',
            'price' => 'sometimes|max:20',
            'description' => 'sometimes|max:300',
            'email' => 'sometimes|email|max:100|unique:users',
            'location' => 'sometimes|max:100',
            'working_hours' => 'sometimes|max:100',
            'telephone' => 'sometimes|max:40',
            'featured_image' => 'sometimes|image',
            
            ));

        // Save data to database
        $product = Products::where('id', $id)->first();

        
        $input['from_user'] = $request->user()->id;
    
        $input['vendor'] = $request->user()->name;

        $input['vendor'] = $request->get('vendor');
         $input['product_name'] = $request->get('product_name');
         $input['category'] = $request->get('category');
         $input['description'] = $request->get('description');
         $input['price'] = $request->get('price');
         $input['location'] = $request->get('location');
         $input['working_hours'] = $request->get('working_hours');
         $input['telephone'] = $request->get('telephone');
         $input['email'] = $request->get('email');
         $input['region'] = $request->get('region');

        //save our image
        if ($request->hasFile('featured_image')){
            

            //add the new photo

            
            $featured_image = $request->file('featured_image');
            $filename = $featured_image->getClientOriginalName();
            Image::make($featured_image)->resize(100,100)->save(public_path('/uploads/images/' . $filename));
            
            $oldFilename = $product->featured_image;
            
            
            //update database
            $input['featured_image'] = $filename;

            //delete the old photo
            Storage::delete($oldFilename);
        }
        
        /*$product->save();*/

        DB::table('Products')->where('id', $id)->update($input);

        

        Session::flash('success','Your product has been updated!');


       /* Products::create( $input );*/
        return redirect()->route('myproducts', Auth::user()->name);
    
    }

    public function deleteproduct($id)
    {
        //finfd the user in the database and save as var
        $product = Products::find($id);

        

    

        //return the view and pass in the var we previously created
        return view('product.deletethisproduct')->withProduct($product)->with('id', $product->id);
        return true;
    }

    public function unpickUsers( $picked) {

        $pick = Picks::where('picked_user', $picked)->get();
        foreach ($pick as $key => $pic) {
            if ($pic->by_user == Auth::user()->id) {
             $todelete = Picks::find($pic->id);
             $todelete->delete();
            }
        }
       
        

        return redirect()->back();

    }

    public function autocomplete(Request $request) {
        $data = User::select("firstname as name")->where("firstname", "LIKE", "%{$request->input('query')}%")->get();
        return response()->json($data);
    }


     public function deletemyproduct($id)
    {
        //finfd the user in the database and save as var
        $product = Products::find($id);

        $product->delete();

        Session::flash('success','The product was successfully deleted');

        //return the view and pass in the var we previously created
        return redirect()->route('myproducts', Auth::user()->name);
        return true;
    }

    public function addlocation($id) {


    }

    public function usersProfile($id) {

        $user = User::find($id);

        $name = $user->firstname;

       $posts = Posts::where('author_id', $id)->orderBy('created_at', 'DESC')->get();
       $postings = Posts::where('author_id', Auth::user()->id)->orderBy('created_at', 'DESC')->paginate(5);
       $pickings = Picks::where('by_user', $id)->get();
       $comments = Comments::orderBy('created_at','DESC')->paginate(5);
       $users = User::where('id', $id);
       $personal = Personal::where('from_user', $id)->orderBy('created_at','DESC')->first();
        

        $other_personal = Personal::where('from_user', Auth::user()->id)->orderBy('created_at','DESC')->first();

        if ($personal) {
            
        $personal_fellows = Personal::where('name', 'LIKE', '%' . $personal->name . '%')->orWhere('description', 'LIKE', '%' . $personal->description . '%')->orWhere('hobby', 'LIKE', '%' . $personal->hobby . '%')->orWhere('neighbourhood', 'LIKE', '%' . $personal->neighbourhood . '%')->orWhere('town', 'LIKE', '%' . $personal->town . '%')->orWhere('home_town', 'LIKE', '%' . $personal->home_town . '%')->orWhere('state', 'LIKE', '%' . $personal->state . '%')->orWhere('continent', 'LIKE', '%' . $personal->continent . '%')->orWhere('country', 'LIKE', '%' . $personal->country . '%')->orWhere('clan', 'LIKE', '%' . $personal->clan . '%')->orWhere('skills', 'LIKE', '%' . $personal->skills . '%')->orderBy('created_at', 'DESC')->get();

        }
        else
            $personal_fellows = Personal::orderBy('created_at', 'DESC')->get();


        $academic = Academic::where('from_user', $id)->orderBy('created_at', 'DESC')->first();
        $other_academic = Academic::where('from_user', Auth::user()->id)->orderBy('created_at','DESC')->first();
        
        if ($academic) {
        
        $academic_fellows = Academic::where('university', 'LIKE', '%' . $academic->university . '%')->orWhere('uni_grad_year', 'LIKE', '%' . $academic->uni_grad_year . '%')->orWhere('college', 'LIKE', '%' . $academic->college . '%')->orWhere('col_grad_year', 'LIKE', '%' . $academic->col_grad_year . '%')->orWhere('high_school', 'LIKE', '%' . $academic->high_school . '%')->orWhere('high_grad_year', 'LIKE', '%' . $academic->high_grad_year . '%')->orWhere('other_school', 'LIKE', '%' . $academic->other_school. '%')->orWhere('other_grad_year', 'LIKE', '%' . $academic->other_grad_year . '%')->orWhere('program', 'LIKE', '%' . $academic->program . '%')->orWhere('level', 'LIKE', '%' . $academic->level . '%')->orderBy('created_at', 'DESC')->get();
        }
        else
            $academic_fellows = Academic::orderBy('created_at', 'DESC')->get();

        $career = Career::where('from_user', $id)->orderBy('created_at', 'DESC')->first();
        $other_career = Career::where('from_user', Auth::user()->id)->orderBy('created_at','DESC')->first();
        
        if ($career) {
            # code...
        
        $career_fellows =  Career::where('career', 'LIKE', '%' . $career->career . '%')->orWhere('occupation', 'LIKE', '%' . $career->occupational . '%')->orWhere('company', 'LIKE', '%' . $career->company . '%')->orWhere('position', 'LIKE', '%' . $career->position . '%')->get();
        }
        else
            $career_fellows = Career::orderBy('created_at', 'DESC')->get();

        $religion = Religion::where('from_user', $id)->orderBy('created_at', 'DESC')->first();
        
        $other_religion = Religion::where('from_user', Auth::user()->id)->orderBy('created_at','DESC')->first();
        if ($religion) {
            # code...
        
        $religion_fellows = Religion::where('religion', 'LIKE', '%' . $religion->religion . '%')->orWhere('sect', 'LIKE', '%' . $religion->sect . '%')->orWhere('denomination', 'LIKE', '%' . $religion->denomination . '%')->orWhere('worship_center', 'LIKE', '%' . $religion->worship_center . '%')->get();
        }
        else
            $religion_fellows = Religion::orderBy('created_at', 'DESC')->get();

        $favorite = Favorite::where('from_user', $id)->orderBy('created_at', 'DESC')->first();
        
        $other_favorite = Favorite::where('from_user', Auth::user()->id)->orderBy('created_at','DESC')->first();
        if ($favorite) {
            # code...
        
        $favorite_fellows = Favorite::where('brand', 'LIKE', '%' . $favorite->brand . '%')->orWhere('technology', 'LIKE', '%' . $favorite->technology. '%')->orWhere('car', 'LIKE', '%' . $favorite->car. '%')->orWhere('building', 'LIKE', '%' . $favorite->building. '%')->orWhere('book', 'LIKE', '%' . $favorite->book. '%')->orWhere('public_figure', 'LIKE', '%' . $favorite->public_figure. '%')->orWhere('tv_show', 'LIKE', '%' . $favorite->tv_show. '%')->orWhere('sport', 'LIKE', '%' . $favorite->sport. '%')->orWhere('meal', 'LIKE', '%' . $favorite->meal. '%')->orWhere('pet', 'LIKE', '%' . $favorite->pet. '%')->orWhere('city', 'LIKE', '%' . $favorite->city. '%')->orderBy('created_at', 'DESC')->get();
        }
        else
            $favorite_fellows = Favorite::orderBy('created_at', 'DESC')->get();
        
       $post_sum = 0;
       $com_sum = 0;
       $others = Comments::orderBy('created_at','DESC')->paginate(5);
        foreach ($postings as $key => $posting) {
            foreach ($comments as $key => $com) {
                if ($com->on_post == $posting->id) {
                    $com_sum = $com_sum + 1;
                }
            }
            
            $others = Comments::where('on_post', $posting->id);
            $post_sum = $post_sum + 1;
        }

       $post_sum1 = 0;
       $com_sum1 = 0;
       $others1 = Comments::orderBy('created_at','DESC')->paginate(5);
       foreach ($posts as $key => $post) {
            foreach ($comments as $key => $com) {
                if ($com->on_post == $post->id) {
                    $com_sum1 = $com_sum1 + 1;
                }
            }
            
            $others = Comments::where('on_post', $post->id);
            $post_sum1 = $post_sum1 + 1;
        }
       $every_people = $personal_fellows->count() + $academic_fellows->count() + $career_fellows->count() + $religion_fellows->count() + $favorite_fellows->count();

        
        $age = Carbon::parse(Auth::user()->DOB)->diffInYears(Carbon::now());

        $remain_to_pick = 20 - $pickings->count();
        $i_comments = Comments::where('from_user', $id)->orderBy('created_at', 'DESC');

        $remain_to_post = 5 - $postings->count();
        $remain_to_comment = 5 - $i_comments->count();

        $sent_messages = Messages::where('to_user', Auth::user()->id)->orderBy('created_at', 'DESC')->get();

        //return the view and pass in the var we previously created
        return view('fellows.profile.profile')->withAge($age)->withRemainToPick($remain_to_pick)->withIComments($i_comments)->withRemainToPost($remain_to_post)->withRemainToComment($remain_to_comment)->withPersonal($personal)->withPostSum($post_sum)->withPosts($posts)->withPostings($postings)->withComments($comments)->withOthers($others)->withUsers($users)->withPersonal($personal)->withComSum($com_sum)->withOthers($others)->withPickings($pickings)->withEveryPeople($every_people)->withPersonal($personal)->withPersonalFellows($personal_fellows)->withAcademic($academic)->withAcademicFellows($academic_fellows)->withCareer($career)->withCareerFellows($career_fellows)->withReligion($religion)->withReligionFellows($religion_fellows)->withFavorite($favorite)->withFavoriteFellows($favorite_fellows)->with('name', $name)->with('id', $id)->withPostSum1($post_sum1)->withComSum1($com_sum1)->withOthers1($others1)->withOtherPersonal($other_personal)->withOtherAcademic($other_academic)->withOtherCareer($other_career)->withOtherReligion($other_religion)->withOtherFavorite($other_favorite)->withSentMessages($sent_messages)->withUser($user);
       
        
    }


    public function sendMessage(Request $request, $from_user, $to_user) {

            $input['author_id'] = Auth::user()->id;
            $input['to_user'] = $to_user;
            $input['message'] = $request->get('message');

            Messages::create( $input);

            return redirect()->back();
    }

    public function sendReply(Request $request, $on_comment) {

            $input['on_comment'] = $on_comment;
            $input['from_author'] = Auth::user()->id;
            $input['body'] = $request->get('body');

            Replies::create( $input);

            return redirect()->back();
    }


    public function seeMessages() {

       $posts = Posts::where('author_id', Auth::user()->id)->orderBy('created_at', 'DESC')->get();
       $postings = Posts::where('author_id', Auth::user()->id)->orderBy('created_at', 'DESC')->get();
       $pickings = Picks::where('by_user', Auth::user()->id)->get();
       $comments = Comments::orderBy('created_at','DESC')->paginate(5);
       $users = User::where('id', Auth::user()->id);
       $personal = Personal::where('from_user', Auth::user()->id)->orderBy('created_at','DESC')->first();
        $personal_fellows = Personal::orderBy('created_at', 'DESC')->get();

        $other_personal = Personal::where('from_user', Auth::user()->id)->orderBy('created_at','DESC')->first();
        if ($personal) {
            
        $personal_fellows = Personal::where('name', 'LIKE', '%' . $personal->name . '%')->orWhere('description', 'LIKE', '%' . $personal->description . '%')->orWhere('hobby', 'LIKE', '%' . $personal->hobby . '%')->orWhere('neighbourhood', 'LIKE', '%' . $personal->neighbourhood . '%')->orWhere('town', 'LIKE', '%' . $personal->town . '%')->orWhere('home_town', 'LIKE', '%' . $personal->home_town . '%')->orWhere('state', 'LIKE', '%' . $personal->state . '%')->orWhere('continent', 'LIKE', '%' . $personal->continent . '%')->orWhere('country', 'LIKE', '%' . $personal->country . '%')->orWhere('clan', 'LIKE', '%' . $personal->clan . '%')->orWhere('skills', 'LIKE', '%' . $personal->skills . '%')->orderBy('created_at', 'DESC')->get();

        }

        $academic = Academic::where('from_user', Auth::user()->id)->orderBy('created_at', 'DESC')->first();
        $other_academic = Academic::where('from_user', Auth::user()->id)->orderBy('created_at','DESC')->first();
        $academic_fellows = Academic::orderBy('created_at', 'DESC')->get();
        if ($academic) {
        
        $academic_fellows = Academic::where('university', 'LIKE', '%' . $academic->university . '%')->orWhere('uni_grad_year', 'LIKE', '%' . $academic->uni_grad_year . '%')->orWhere('college', 'LIKE', '%' . $academic->college . '%')->orWhere('col_grad_year', 'LIKE', '%' . $academic->col_grad_year . '%')->orWhere('high_school', 'LIKE', '%' . $academic->high_school . '%')->orWhere('high_grad_year', 'LIKE', '%' . $academic->high_grad_year . '%')->orWhere('other_school', 'LIKE', '%' . $academic->other_school. '%')->orWhere('other_grad_year', 'LIKE', '%' . $academic->other_grad_year . '%')->orWhere('program', 'LIKE', '%' . $academic->program . '%')->orWhere('level', 'LIKE', '%' . $academic->level . '%')->orderBy('created_at', 'DESC')->get();
        }

        $career = Career::where('from_user', Auth::user()->id)->orderBy('created_at', 'DESC')->first();
        $other_career = Career::where('from_user', Auth::user()->id)->orderBy('created_at','DESC')->first();
        $career_fellows = Career::orderBy('created_at', 'DESC')->get();
        if ($career) {
            # code...
        
        $career_fellows =  Career::where('career', 'LIKE', '%' . $career->career . '%')->orWhere('occupation', 'LIKE', '%' . $career->occupational . '%')->orWhere('company', 'LIKE', '%' . $career->company . '%')->orWhere('position', 'LIKE', '%' . $career->position . '%')->get();
        }

        $religion = Religion::where('from_user', Auth::user()->id)->orderBy('created_at', 'DESC')->first();
        $religion_fellows = Religion::orderBy('created_at', 'DESC')->get();
        $other_religion = Religion::where('from_user', Auth::user()->id)->orderBy('created_at','DESC')->first();
        if ($religion) {
            # code...
        
        $religion_fellows = Religion::where('religion', 'LIKE', '%' . $religion->religion . '%')->orWhere('sect', 'LIKE', '%' . $religion->sect . '%')->orWhere('denomination', 'LIKE', '%' . $religion->denomination . '%')->orWhere('worship_center', 'LIKE', '%' . $religion->worship_center . '%')->get();
        }

        $favorite = Favorite::where('from_user', Auth::user()->id)->orderBy('created_at', 'DESC')->first();
        $favorite_fellows = Favorite::orderBy('created_at', 'DESC')->get();
        $other_favorite = Favorite::where('from_user', Auth::user()->id)->orderBy('created_at','DESC')->first();
        if ($favorite) {
            # code...
        
        $favorite_fellows = Favorite::where('brand', 'LIKE', '%' . $favorite->brand . '%')->orWhere('technology', 'LIKE', '%' . $favorite->technology. '%')->orWhere('car', 'LIKE', '%' . $favorite->car. '%')->orWhere('building', 'LIKE', '%' . $favorite->building. '%')->orWhere('book', 'LIKE', '%' . $favorite->book. '%')->orWhere('public_figure', 'LIKE', '%' . $favorite->public_figure. '%')->orWhere('tv_show', 'LIKE', '%' . $favorite->tv_show. '%')->orWhere('sport', 'LIKE', '%' . $favorite->sport. '%')->orWhere('meal', 'LIKE', '%' . $favorite->meal. '%')->orWhere('pet', 'LIKE', '%' . $favorite->pet. '%')->orWhere('city', 'LIKE', '%' . $favorite->city. '%')->orderBy('created_at', 'DESC')->get();
        }
        
       $post_sum = 0;
       $com_sum = 0;
       $others = Comments::orderBy('created_at','DESC')->paginate(5);
        foreach ($postings as $key => $posting) {
            foreach ($comments as $key => $com) {
                if ($com->on_post == $posting->id) {
                    $com_sum = $com_sum + 1;
                }
            }
            
            $others = Comments::where('on_post', $posting->id);
            $post_sum = $post_sum + 1;
        }

       $post_sum1 = 0;
       $com_sum1 = 0;
       $others1 = Comments::orderBy('created_at','DESC')->paginate(5);
       foreach ($posts as $key => $post) {
            foreach ($comments as $key => $com) {
                if ($com->on_post == $post->id) {
                    $com_sum1 = $com_sum1 + 1;
                }
            }
            
            $others = Comments::where('on_post', $post->id);
            $post_sum1 = $post_sum1 + 1;
        }
       $every_people = $personal_fellows->count() + $academic_fellows->count() + $career_fellows->count() + $religion_fellows->count() + $favorite_fellows->count();

        $user = User::find(Auth::user()->id);

        $sent_messages = Messages::where('to_user', Auth::user()->id)->orderBy('created_at', 'DESC')->get();

         $i_comments = Comments::where('from_user', Auth::user()->id)->orderBy('created_at', 'DESC');

        $remain_to_post = 5 - $postings->count();
        $remain_to_comment = 5 - $i_comments->count();
        $remain_to_pick = 20 - $pickings->count();
        
        $age = Carbon::parse(Auth::user()->DOB)->diffInYears(Carbon::now());


        $age = Carbon::parse(Auth::user()->DOB)->diffInYears(Carbon::now());

        //return the view and pass in the var we previously created
        return view('fellows.profile.messages')->withAge($age)->withRemainToPick($remain_to_pick)->withIComments($i_comments)->withRemainToPost($remain_to_post)->withRemainToComment($remain_to_comment)->withUser($user)->withPersonal($personal)->withPostSum($post_sum)->withPosts($posts)->withComments($comments)->withOthers($others)->withUsers($users)->withPersonal($personal)->withComSum($com_sum)->withOthers($others)->withPickings($pickings)->withEveryPeople($every_people)->withPersonal($personal)->withPersonalFellows($personal_fellows)->withAcademic($academic)->withAcademicFellows($academic_fellows)->withCareer($career)->withPostings($postings)->withCareerFellows($career_fellows)->withReligion($religion)->withReligionFellows($religion_fellows)->withFavorite($favorite)->withFavoriteFellows($favorite_fellows)->withPostSum1($post_sum1)->withComSum1($com_sum1)->withOthers1($others1)->withOtherPersonal($other_personal)->withOtherAcademic($other_academic)->withOtherCareer($other_career)->withOtherReligion($other_religion)->withOtherFavorite($other_favorite)->withSentMessages($sent_messages);
       


    }

    public function seeComments() {

       $posts = Posts::where('author_id', Auth::user()->id)->orderBy('created_at', 'DESC')->paginate(5);
       $postings = Posts::where('author_id', Auth::user()->id)->orderBy('created_at', 'DESC')->paginate(5);
       $pickings = Picks::where('by_user', Auth::user()->id)->get();
       $comments = Comments::orderBy('created_at','DESC')->paginate(5);
       $users = User::where('id', Auth::user()->id);
       $personal = Personal::where('from_user', Auth::user()->id)->orderBy('created_at','DESC')->first();
        $personal_fellows = Personal::orderBy('created_at', 'DESC')->get();

        $other_personal = Personal::where('from_user', Auth::user()->id)->orderBy('created_at','DESC')->first();
        if ($personal) {
            
        $personal_fellows = Personal::where('name', 'LIKE', '%' . $personal->name . '%')->orWhere('description', 'LIKE', '%' . $personal->description . '%')->orWhere('hobby', 'LIKE', '%' . $personal->hobby . '%')->orWhere('neighbourhood', 'LIKE', '%' . $personal->neighbourhood . '%')->orWhere('town', 'LIKE', '%' . $personal->town . '%')->orWhere('home_town', 'LIKE', '%' . $personal->home_town . '%')->orWhere('state', 'LIKE', '%' . $personal->state . '%')->orWhere('continent', 'LIKE', '%' . $personal->continent . '%')->orWhere('country', 'LIKE', '%' . $personal->country . '%')->orWhere('clan', 'LIKE', '%' . $personal->clan . '%')->orWhere('skills', 'LIKE', '%' . $personal->skills . '%')->orderBy('created_at', 'DESC')->get();

        }

        $academic = Academic::where('from_user', Auth::user()->id)->orderBy('created_at', 'DESC')->first();
        $other_academic = Academic::where('from_user', Auth::user()->id)->orderBy('created_at','DESC')->first();
        $academic_fellows = Academic::orderBy('created_at', 'DESC')->get();
        if ($academic) {
        
        $academic_fellows = Academic::where('university', 'LIKE', '%' . $academic->university . '%')->orWhere('uni_grad_year', 'LIKE', '%' . $academic->uni_grad_year . '%')->orWhere('college', 'LIKE', '%' . $academic->college . '%')->orWhere('col_grad_year', 'LIKE', '%' . $academic->col_grad_year . '%')->orWhere('high_school', 'LIKE', '%' . $academic->high_school . '%')->orWhere('high_grad_year', 'LIKE', '%' . $academic->high_grad_year . '%')->orWhere('other_school', 'LIKE', '%' . $academic->other_school. '%')->orWhere('other_grad_year', 'LIKE', '%' . $academic->other_grad_year . '%')->orWhere('program', 'LIKE', '%' . $academic->program . '%')->orWhere('level', 'LIKE', '%' . $academic->level . '%')->orderBy('created_at', 'DESC')->get();
        }

        $career = Career::where('from_user', Auth::user()->id)->orderBy('created_at', 'DESC')->first();
        $other_career = Career::where('from_user', Auth::user()->id)->orderBy('created_at','DESC')->first();
        $career_fellows = Career::orderBy('created_at', 'DESC')->get();
        if ($career) {
            # code...
        
        $career_fellows =  Career::where('career', 'LIKE', '%' . $career->career . '%')->orWhere('occupation', 'LIKE', '%' . $career->occupational . '%')->orWhere('company', 'LIKE', '%' . $career->company . '%')->orWhere('position', 'LIKE', '%' . $career->position . '%')->get();
        }

        $religion = Religion::where('from_user', Auth::user()->id)->orderBy('created_at', 'DESC')->first();
        $religion_fellows = Religion::orderBy('created_at', 'DESC')->get();
        $other_religion = Religion::where('from_user', Auth::user()->id)->orderBy('created_at','DESC')->first();
        if ($religion) {
            # code...
        
        $religion_fellows = Religion::where('religion', 'LIKE', '%' . $religion->religion . '%')->orWhere('sect', 'LIKE', '%' . $religion->sect . '%')->orWhere('denomination', 'LIKE', '%' . $religion->denomination . '%')->orWhere('worship_center', 'LIKE', '%' . $religion->worship_center . '%')->get();
        }

        $favorite = Favorite::where('from_user', Auth::user()->id)->orderBy('created_at', 'DESC')->first();
        $favorite_fellows = Favorite::orderBy('created_at', 'DESC')->get();
        $other_favorite = Favorite::where('from_user', Auth::user()->id)->orderBy('created_at','DESC')->first();
        if ($favorite) {
            # code...
        
        $favorite_fellows = Favorite::where('brand', 'LIKE', '%' . $favorite->brand . '%')->orWhere('technology', 'LIKE', '%' . $favorite->technology. '%')->orWhere('car', 'LIKE', '%' . $favorite->car. '%')->orWhere('building', 'LIKE', '%' . $favorite->building. '%')->orWhere('book', 'LIKE', '%' . $favorite->book. '%')->orWhere('public_figure', 'LIKE', '%' . $favorite->public_figure. '%')->orWhere('tv_show', 'LIKE', '%' . $favorite->tv_show. '%')->orWhere('sport', 'LIKE', '%' . $favorite->sport. '%')->orWhere('meal', 'LIKE', '%' . $favorite->meal. '%')->orWhere('pet', 'LIKE', '%' . $favorite->pet. '%')->orWhere('city', 'LIKE', '%' . $favorite->city. '%')->orderBy('created_at', 'DESC')->get();
        }
        
       $post_sum = 0;
       $com_sum = 0;
       $others = Comments::orderBy('created_at','DESC')->paginate(5);
        foreach ($postings as $key => $posting) {
            foreach ($comments as $key => $com) {
                if ($com->on_post == $posting->id) {
                    $com_sum = $com_sum + 1;
                }
            }
            
            $others = Comments::where('on_post', $posting->id);
            $post_sum = $post_sum + 1;
        }

       $post_sum1 = 0;
       $com_sum1 = 0;
       $others1 = Comments::orderBy('created_at','DESC')->paginate(5);
       foreach ($posts as $key => $post) {
            foreach ($comments as $key => $com) {
                if ($com->on_post == $post->id) {
                    $com_sum1 = $com_sum1 + 1;
                }
            }
            
            $others = Comments::where('on_post', $post->id);
            $post_sum1 = $post_sum1 + 1;
        }
       $every_people = $personal_fellows->count() + $academic_fellows->count() + $career_fellows->count() + $religion_fellows->count() + $favorite_fellows->count();

        $user = User::find(Auth::user()->id);

        $sent_messages = Messages::where('to_user', Auth::user()->id)->orderBy('created_at', 'DESC')->get();

        $i_comments = Comments::where('from_user', Auth::user()->id)->orderBy('created_at', 'DESC');

        $remain_to_post = 5 - $postings->count();
        $remain_to_comment = 5 - $i_comments->count();
        $remain_to_pick = 20 - $pickings->count();

        $age = Carbon::parse(Auth::user()->DOB)->diffInYears(Carbon::now());

        //return the view and pass in the var we previously created
        return view('fellows.profile.comments')->withRemainToComment($remain_to_comment)->withRemainToPost($remain_to_post)->withRemainToPick($remain_to_pick)->withIComments($i_comments)->withAge($age)->withUser($user)->withPersonal($personal)->withPostSum($post_sum)->withPosts($posts)->withComments($comments)->withPostings($postings)->withUsers($users)->withPersonal($personal)->withComSum($com_sum)->withOthers($others)->withPickings($pickings)->withEveryPeople($every_people)->withPersonal($personal)->withPersonalFellows($personal_fellows)->withAcademic($academic)->withAcademicFellows($academic_fellows)->withCareer($career)->withCareerFellows($career_fellows)->withReligion($religion)->withReligionFellows($religion_fellows)->withFavorite($favorite)->withFavoriteFellows($favorite_fellows)->withPostSum1($post_sum1)->withComSum1($com_sum1)->withOthers1($others1)->withOtherPersonal($other_personal)->withOtherAcademic($other_academic)->withOtherCareer($other_career)->withOtherReligion($other_religion)->withOtherFavorite($other_favorite)->withSentMessages($sent_messages);
       


    }

    public function replyMessage(Request $request, $on_message, $to_user) {

            $input['author_id'] = Auth::user()->id;
            $input['on_message'] = $on_message;
            $input['body'] = $request->get('body');
            $input['to_user'] = $to_user;

            MessagesReplies::create( $input);

            return redirect()->back();
    }

    public function editPersonal(Request $request, $id)
    {
        //Validate the data 
        $this->validate($request, array(
            'name' => 'sometimes|max:100',
            'DOB' => 'sometimes|max:100',
            'description' => 'sometimes|max:255',
            'hobby' => 'sometimes|max:100',
            'neighbourhood' => 'sometimes|max:100',
            'town' => 'sometimes|max:100',
            'home_town' => 'sometimes|max:100',
            'state' => 'sometimes|max:100',
            'country' => 'sometimes|image',
            'continent' => 'sometimes|max:100',
            'clan' => 'sometimes|max:100',
            'skills' => 'sometimes|max:100',


            ));

        // Save the data to database


        $input['name'] = $request->get('name');
        $input['DOB'] = $request->get('DOB');
        $input['description'] = $request->get('description');
        $input['hobby'] = $request->get('hobby');
        $input['neighbourhood'] = $request->get('neighbourhood');
        $input['town'] = $request->get('town');
        $input['home_town'] = $request->get('home_town');
        $input['state'] = $request->get('state');
        $input['country'] = $request->get('country');
        $input['continent'] = $request->get('continent');
        $input['clan'] = $request->get('clan');
        $input['skills'] = $request->get('skills');

        

        /*$user->save();*/
        DB::table('Personal')->where('from_user', Auth::user()->id)->update($input);

        //set flash data with success message
        Session::flash('success', 'Your profile has been successfull edited');



        // redirect with flash data to showProfile
        return redirect()->back();
          
    
    }

    public function editAcademia(Request $request, $id)
    {
        //Validate the data 
        $this->validate($request, array(
            'university' => 'sometimes|max:200',
            'uni_grad_year' => 'sometimes|max:100',
            'college' => 'sometimes|max:100',
            'col_grad_year' => 'sometimes|max:255',
            'high_school' => 'sometimes|max:20',
            'high_grad_year' => 'sometimes|max:100',
            'other_school' => 'sometimes|email|max:100',
            'other_grad_year' => 'sometimes|max:100',
            'program' => 'sometimes|max:100',
            'level' => 'sometimes|max:100',

            ));

        // Save the data to database
        $user = Auth::User()->where('id', $id)->first();

        $input['university'] = $request->get('university');
        $input['uni_grad_year'] = $request->get('uni_grad_year');
        $input['college'] = $request->get('college');
        $input['col_grad_year'] = $request->get('col_grad_year');
        $input['high_school'] = $request->get('high_school');
        $input['high_grad_year'] = $request->get('high_grad_year');
        $input['other_school'] = $request->get('other_school');
        $input['other_grad_year'] = $request->get('other_grad_year');
        $input['program'] = $request->get('program');
        $input['level'] = $request->get('level');


        /*$user->save();*/
        DB::table('Academia')->where('from_user', Auth::user()->id)->update($input);

        //set flash data with success message
        Session::flash('success', 'Your profile has been successfull edited');



        // redirect with flash data to showProfile
        return redirect()->back();
          
    
    }

    public function editCareer(Request $request, $id)
    {
        //Validate the data 
        $this->validate($request, array(
            'career' => 'sometimes|max:100',
            'occupation' => 'sometimes|max:100',
            'company' => 'sometimes|max:100',
            'position' => 'sometimes|max:100',
            
            ));

        // Save the data to database
        

        $input['career'] = $request->get('career');
        $input['occupation'] = $request->get('occupation');
        $input['company'] = $request->get('company');
        $input['position'] = $request->get('position');
        
        
        /*$user->save();*/
        DB::table('Career')->where('from_user', Auth::user()->id)->update($input);

        //set flash data with success message
        Session::flash('success', 'Your profile has been successfull edited');



        // redirect with flash data to showProfile
        return redirect()->back();
          
    
    }

    public function editReligion(Request $request, $id)
    {
        //Validate the data 
        $this->validate($request, array(
            'religion' => 'sometimes|max:100',
            'sect' => 'sometimes|max:100',
            'denomination' => 'sometimes|max:100',
            'worship_center' => 'sometimes|max:100',
            
            ));

        // Save the data to database
    

        $input['religion'] = $request->get('religion');
        $input['sect'] = $request->get('sect');
        $input['denomination'] = $request->get('denomination');
        $input['worship_center'] = $request->get('worship_center');
        
        

        /*$user->save();*/
        DB::table('Religion')->where('from_user', Auth::user()->id)->update($input);

        //set flash data with success message
        Session::flash('success', 'Your profile has been successfull edited');



        // redirect with flash data to showProfile
        return redirect()->back();
          
    
    }

    public function editFavorite(Request $request, $id)
    {
        //Validate the data 
        $this->validate($request, array(
            'brand' => 'sometimes|max:100',
            'technology' => 'sometimes|max:100',
            'car' => 'sometimes|max:100',
            'building' => 'sometimes|max:100',
            'book' => 'sometimes|max:100',
            'public_figure' => 'sometimes|max:100',
            'tv_show' => 'sometimes|email|max:100',
            'sport' => 'sometimes|max:100',
            'meal' => 'sometimes|max:100',
            'pet' => 'sometimes|max:100',
            'city' => 'sometimes|max:100',

            ));

        // Save the data to database
        $favorite = Favorite::where('from_user', Auth::user()->id)->first();

        $input['brand'] = $request->get('brand');
        $input['technology'] = $request->get('technology');
        $input['car'] = $request->get('car');
        $input['building'] = $request->get('building');
        $input['book'] = $request->get('book');
        $input['public_figure'] = $request->get('public_figure');
        $input['tv_show'] = $request->get('tv_show');
        $input['sport'] = $request->get('sport');
        $input['meal'] = $request->get('meal');
        $input['pet'] = $request->get('pet');
        $input['city'] = $request->get('city');


        

        /*$user->save();*/
        DB::table('Favorite')->where('from_user', Auth::user()->id)->update($input);

        //set flash data with success message
        Session::flash('success', 'Your profile has been successfull edited');



        // redirect with flash data to showProfile
        return redirect()->back();
          
    
    }



}
