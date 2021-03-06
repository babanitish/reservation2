<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Show;
use App\Models\Category;

class ShowController extends Controller
{

public function search(){
    $searchText = $_GET['search'];
    $shows = Show::where('title','like','%' .$searchText. '%')->get();
    $categories = Category::all();
    //dd($shows);
    return view('show.search',[
        'shows' => $shows,
        'categories' => $categories
    ]);
}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $shows = Show::all();
        // $show = Show::where('category_id', $request->id)->get();
        $categories = Category::all();
        return view('show.index', [
            'shows' => $shows,
            'resource' => 'spectacles',
            'categories' => $categories,
        ]);
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
        $show = Show::find($id);

        //Récupérer les artistes du spectacle et les grouper par type
        $collaborateurs = [];

        foreach ($show->artistTypes as $at) {
            $collaborateurs[$at->type->type][] = $at->artist;
        }

        return view('show.show', [
            'show' => $show,
            'collaborateurs' => $collaborateurs,
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
