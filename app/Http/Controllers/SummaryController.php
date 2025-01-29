<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

use App\Models\Summary;
use App\Models\User;

use App\http\Requests\SummaryRequest;
use Illuminate\Support\Facades\Auth;

use Str;

class SummaryController extends Controller
{


    public function __construct(){
        $this->middleware('auth')->except('index','show');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $summaries = Summary::orderBydesc('id')->paginate(5);
        $data=[
            'title'=> $description = 'Liste Synopsis',
            'description' => $description,
            'summaries'=>$summaries
        ];
        return view('summaries.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get();
        $data=[
            'title'=> $description = 'Crée Synopsis',
            'description' => $description,
            'categories' => $categories
        ];
        return view('summaries.create',$data);
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(SummaryRequest $summaryRequest)
    {
        $validateData = $summaryRequest->validated();

        Auth::user()->summaries()->create($validateData);

        return back()->withInfo('synopsis crée');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Summary $summary)
    {
         $data=[
            'title'=> $summary->title,
            'description' => $summary->title,
            'summary'=>$summary

         ];
         return view('summaries.show',$data);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Summary $summary)
    {

        $categories = Category::get();
        $data=[
            'title'=> $summary->title,
            'description' => $summary->title,
            'summary'=>$summary,
            'categories'=>$categories

         ];
         return view('summaries.edit',$data);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SummaryRequest $summaryRequest, Summary $summary)
    {
        
        $validateData = $summaryRequest->validated();
        $summary->update($validateData);
    
        return redirect()->route('summaries.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Summary $summary)
    {
        $summary->delete(); 
    
        return redirect()->route('summaries.index');
    }
}
