<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class BookController extends Controller
{

    //تنسيق شكل باستخدام accessors
    private function addBookAccessors($books)
{
    return $books->map(function ($book) {
        $book->title_upper = Str::upper($book->title);
        $book->auth_upper = Str::upper($book->auth);
        return $book;
    });
}

    //********* ***********************/

    //
    public function index(){

          $books=DB::table('books')->get();
          //تنسيق شكل باستخدام
          $books = $this->addBookAccessors($books);
          //************ */
          return view("books.index",compact('books'));
    }

    public function indexbook(){

          $books=DB::table('books')->get();
          return view("home",compact('books'));
    }

    public function show($id)
     {
    $book = DB::table('books')->where('id', $id)->first(); // جلب الكتاب من قاعدة البيانات
    return view('bookdetails', compact('book'));

     }

    public function create(){
         return view("books.create");
    }

    

     public function insert(Request $request)
    {
        // معالجة الصورة
        if ($request->hasFile('bookImage')) {
            $image = $request->file('bookImage');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('bookimages'), $imageName);
        } else {
            $imageName = null;
        }

        DB::table('books')->insert([
            'title' => $request->booktitle,
            'image' => $imageName,
            'auth'=>$request->bookauth,
            'desc'=>$request->bookdesc,
            'price'=>$request->bookprice,
        ]);

        return redirect('books/create');
    }
     public function edit( $id)
    {

       $book = DB::table('books')->where('id', $id)->first();
       return    view("books.edit",compact('book'));
    }


     public function update(Request $request, $id)
    {
        if ($request->hasFile('bookImage')) {
            $image = $request->file('bookImage');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('bookimages'), $imageName);
        } else {
            $imageName = null;
        }


       DB::table('books')->where('id', $id)->update(
        [
           'title' => $request->booktitle,
            'image' => $imageName,
            'auth'=>$request->bookauth,
            'desc'=>$request->bookdesc,
            'price'=>$request->bookprice,
        ]
        );
         return redirect('books');
    }



    public function delete($id){
          DB::table('books')->where('id', $id)->delete();

          return redirect('books');
    }
    public function deleteAll(Request $request){
          DB::table('books')->truncate();

          return redirect('books')->with('message', 'All books deleted successfully!');;
    }

}
