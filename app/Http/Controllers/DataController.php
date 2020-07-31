<?php

namespace App\Http\Controllers;

use App\Data;

use Illuminate\Http\Request;

class DataController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Data::allowed()->get();
        return view('employee.data.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.data.create');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Data $data)
    {
        $this->authorize('view', $data);
        $comments = $data->comments->reverse();
        return view('employee.data.show', compact('data','comments'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Data $data)
    {
        $this->authorize('delete', $data);
        $data->delete();
        return redirect()->route('employee.data.index')->withFlash('El Dato ha sido eliminada de forma exitosa!');
    }
}
