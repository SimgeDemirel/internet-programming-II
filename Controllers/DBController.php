<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DBController extends Controller
{
    public function select()
    {
        $news= DB::select('SELECT * from news');
        return view('db.select', [
            'news' =>$news,
        ]);
    }
    public function detail(Request $request, int $id)
    {
        $newsDetail = DB::select('SELECT * FROM news where id=:id', ['id' =>$id]);

        return view('db.detail' , [
            'newsDetail' => $newsDetail[0],
        ]);


    }
    public function add()
    {

        return view('db.add');
    }

    public function insert(Request $request)
    {
        DB::insert('insert into news(tittle,summary,content, created_at, updated_at) values (?,?,?,?,?)', [
            $request->get('tittle') ,
            $request->get('summary'),
            $request->get('content') ,
            Carbon::now()->format('Y-m-d H:i:s'),
            Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        return response()->redirectTo('/db/select');
    }
    public function delete(Request $request, int $id)
    {
       DB::delete('select from news where id=?', [$id]);
       return response()->redirectTo('/db/select');
    }
}
