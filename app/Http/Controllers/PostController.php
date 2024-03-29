<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Http\Resources\Post\PostCollection;
use App\Http\Resources\Post\PostResource;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;

class PostController extends Controller
{

=======
use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\Post\PostResource;
use App\Http\Resources\Post\PostCollection;
use DB;


class PostController extends Controller
{
    // sebelum akses api_PostController, terlebih dahulu panggil api_token sebelum user akses
>>>>>>> feat/4364914
    public function __construct()
    {
        $this->middleware('auth:api');
    }
<<<<<<< HEAD

    public function index()
    {
        // DB::listen(function ($query) {
        //     var_dump($query->sql);
        // });

        $data = Post::with(['user', ])->paginate(4);
        return new PostCollection($data);
        // return response()->json(new PostCollection($data), 200);
    }

    public function show($id)
    {
        $data = Post::find($id);

        if (is_null($data)) {
            return response()->json([
                'message' => 'Resource not found!'
            ], 404);
        }

        // return $data;

        return response()->json(new PostResource($data), 200);
    }

=======
    
    public function index()
    {
        //cara mengetahui user token siapa yg kita pakai untuk akses endpoin api
        //return request()->user();

        // $data = Post::all();

        //secara manual terdapat banyak query request ke server dari masing2 post, sehingga dapat memberatkan kinerja server
        //mengecek proses kondisi relasional data yg telah kita buat ke server
        // DB::listen(function($query)
        // {
        //     var_dump($query->sql);
        // });

        //kita tambahkan eager load dengan method -->  with([method_relation]) agar relasi mengquery sekali saja
        $data = Post::with(['user'])->paginate(5); // membuat paginasi, membagi tampilan data per berapa data sehalaman
        return new PostCollection($data);

        //return response()->json($data,200);
    }
    public function show($id){
        $data = Post::find($id);

        // menampilkan custom response untuk user
        if (is_null($data))
        {
            return response()->
            json(
                [
                    'message' => 'Resource  not found',
                ],
                404
            );
        }

        //menampilkan  custome objek custome response baru dari Class PostResource
        return new PostResource($data);

        //return response()->json($data,200);
    }
>>>>>>> feat/4364914
    public function store(Request $request)
    {
        $data = $request->all();

<<<<<<< HEAD
        $validator = Validator::make($data, [
            'title' => ['required', 'min:5']
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()
            ], 400);
        }

        // $response = Post::create($data);
        $response = request()->user()->posts()->create($data);

        return response()->json($response, 201);
    }

    public function update(Request $request, Post $post)
    {
        $post->update($request->all());
        return response()->json($post, 200);
=======
        // membuat validator response sebelum create data
        $validator = Validator::make($data,
        [
            'title' => ['required','min:5']
        ]);
        if($validator->fails()){
            return response()->json(
                [
                    'error' => $validator->errors()
                ],400);
        }

        // $response = Post::create($data);

        // penggunaan api_token untuk membuat user_id saat create data memanfaatkan relasionalnya pada saat mengirimkan api_token nya
        //untuk mendapatkan data user gunakan helper request, panggi method user
        $response = request()->user()->posts()->create($data);

        return response()->json($response,201);
    }

    Public function update(Request $request, Post $post)
    //Post $post --> menggunakan primary key yg ada pada data sesuai id yg dimasuukan di route
    {
        $post->update($request->all());
        return response()->json($post,200);
>>>>>>> feat/4364914
    }

    public function destroy(Post $post)
    {
        $post->delete();
<<<<<<< HEAD
        return response()->json(null, 200);
=======
        return response()->json("data $post has been deleted",200);
>>>>>>> feat/4364914
    }
}
