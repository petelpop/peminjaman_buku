<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $data = Book::paginate(10);
        return view('tasks.index', compact('data'));
    }

    public function create(){
        return view('tasks.create');
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'book_name' => 'required',
            'status' => 'required',
        ]);

        $data = [
            'name' => $request->name,
            'book_name' => $request->book_name,
            'status' => $request->status,
        ];

        book::create($data);
        return redirect('/pinjam');
    }

    public function show($id){
        $data = Book::find($id);
        return $data;
    }

    public function edit($id){
        $data = Book::find($id);
        return view('tasks.edit', compact('data'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => ['required'],
            'book_name' => ['required'],
            'status' => ['required'],
        ],[
            'name.required' => 'nama harus diisi!',
            'book_name.required' => 'nama buku harus diisi!',
            'status.required' => 'status harus diisi!',
        ]);

        $data = Book::find($id);
        $data->update([
            'name' => $request->name,
            'book_name' => $request->book_name,
            'status' => $request->status
        ]);
        return redirect('/pinjam');
    }

    public function delete($id){
        $data = Book::find($id)->delete();
        return redirect('/pinjam');
    }

}
