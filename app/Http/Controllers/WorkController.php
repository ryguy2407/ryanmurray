<?php

namespace App\Http\Controllers;

use App\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $works = Work::paginate(9);
        return view('works.index')->with('works', $works);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', Work::class);

        return view('works.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create', Work::class);

        $work = Work::create($request->all());

        if ($request->hasFile('featured_image')) {
            $path = $request->featured_image->store( 'images' );
            $work->update( [
                'featured_image' => $path
            ] );

            $work->save();
        }
        return redirect(route('work.show', $work->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(is_numeric($id)) {
            $work = Work::find($id);
        } else {
            $work = Work::where('slug', $id )->first();
        }
        return view('works.show')->with('work', $work);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $work = Work::find($id);
        $this->authorize('update', $work);
        return view('works.edit')->with('work', $work);
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
        $this->authorize('update', Work::class);

        $work = Work::find($id);
        $work->update($request->all());

        if ($request->hasFile('featured_image')) {
            $path = $request->featured_image->store( 'images' );
            $work->update( [
                'featured_image' => $path
            ] );
        }

        $work->save();

        return redirect(route('work.show', $id));

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
