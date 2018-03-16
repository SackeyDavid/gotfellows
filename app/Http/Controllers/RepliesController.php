<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comments;
use App\Replies;

class RepliesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //fetch 5 posts from database which are active and latest
        $comments = Comments::orderBy('created_at')->paginate(2);
        // page Heading
        $title = 'Latest Comments';
        //return to our view (home.blade.php)
        return view('replies')->withComments($comments)->withTitle($title);
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
        $input['from_user'] = $request->user()->id;
    
        $input['body'] = $request->input('body');
        
        Comments::create( $input );
        return redirect()->back()->with('message', 'Comment published');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
        $comments = Comments::orderBy('created_at')->paginate(7);
        if (!$comments){
            return redirect('/')->withErrors('requested page not found');
        }
        $title = 'Latest Comments';
        
        return view('posts.show')->withComments($comments)->withTitle($title);
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
