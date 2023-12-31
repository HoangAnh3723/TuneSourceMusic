<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MusicsController extends Controller
{
    public function index()
    {
        $title = '';

        $musics = DB::select('SELECT * FROM musics');
      //   $top100 = DB::select('SELECT * FROM top100');

        return view('admin', compact('title', 'musics'));
    }

    public function add()
    {
        $title = "add music";
        return view('add', compact('title'));
    }

    public function postAdd(Request $request)
    {

        $dataInsert = [
            $request->name,
            $request->singer,
            "$request->path",
            "$request->image"
        ];
        DB::insert('INSERT INTO musics (name,singer,path,image) values (?,?,?,?)', $dataInsert);

        return redirect()->route('admin.index')->with('msg', 'them thanh cong');
    }

    public function getEdit(Request $request, $id = 0)
    {
        $title = "edit music";



        if (!empty($id)) {
            $userDetail = DB::select('SELECT * FROM musics WHERE id = ?', [$id]);
            if (!empty($userDetail[0])) {
                $request->session()->put('id', $id);
                $userDetail = $userDetail[0];
            } else {
                return redirect()->route('admin.index')->with('msg', 'music doesnt exist');
            }
        } else {
            return redirect()->route('admin.index')->with('msg', 'path doesnt exist');
        }
        return view('edit', compact('title', 'userDetail'));
    }

    public function postEdit(Request $request)
    {

        $id = session('id');
        if(empty($id)){
            return back()->with('msg', 'path doesnt exist');
        }
        $dataUpdate = [
            $request->name,
            $request->singer,
            "$request->path",
            "$request->image"
        ];
        $data = array_merge($dataUpdate,[$id]);
        // dd($dataUpdate);
        //UPDATE Customers SET ContactName = 'Alfred Schmidt', City = 'Frankfurt' WHERE CustomerID = 1;
        DB::insert('UPDATE musics SET name=?, singer = ?, path = ?, image = ? WHERE id = ?',$data);

        return redirect()->route('admin.index')->with('msg', 'Deleted Completed');
    }

    public function delete($id=0) {
        $title = "edit music";

        DB::delete("DELETE FROM musics WHERE id = ?",[$id]);

        return redirect()->route('admin.index')->with('msg', 'Deleted Completed');
    }
}
