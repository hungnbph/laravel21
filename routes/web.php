<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\postController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\commentController;
use App\Http\Controllers\userController;


Route::get('/post', function () {
    $post = \App\Models\Post::find(2);
    $comment = \App\Models\Comment::find(1);
    dd($comment->post);
});


Route::get('/admin', function () {
    return view('test-admin');
});

// tao route resource cho student controoler
Route::resource('/', StudentController::class);
Route::resource('students', StudentController::class);
// ->only(['index]); khi chi dung ham so nao do
// ->except(['create', ])
Route::get('subjects', [SubjectController::class, 'index'])->name('subjects.index');
Route::resource('posts', postController::class);
Route::resource('comments', commentController::class);
Route::resource('categories', categoryController::class);
Route::resource('users', userController::class);

// Route::get('/students', function(){
//     //sử dụng query builder
//     //lấy mảng students
//    $student = DB::table('students')->get();
//    // lấy riêng 1 studen
// //    $student = DB::table('students')->where('id','=', 1)->first(); 
// //    $student = DB::table('students')->where('id','=', 1)->first();



// //truyên vào mảng [tên biến nhận được => giá trị]
//     return view('students.detail', ['studentValue'=>$student]);

// });
// // giá trị truyền vào url sẽ tương ứng vị trí tham số của function
// Route::get('/student/{id}', function ($id, $number){
//     dd('giá trị truyền vào trên url:'.$id . ' ' . $number );
// });

// Route::get('/students/detail', function(){
//     return view('students/detail');
// });
// //cách 2
// Route::view('/students/detail-2', 'students.detail');


// Route::get('/student-list', function () {
//     // Truy van lay danh sach student bang query builder
//     $students = DB::table('students')->orderBy('id', 'desc')->get();

//     return view('students.list', [
//         'students' => $students,
//         'error' => null,
//     ]);
// })->name('student-list');

// Route::get('/login', function() {
//     return view('login');
// })->name('get-login');


// Route::post('/post-login', function(Request $request) {
//     // su dung $request->all() hoac $request->input name
//     $username = $request->username;


//     // Thuc hien truy van theo gia tri vua gui len
//     $student = DB::table('students')
//         ->where('name', 'like', "%$username%")
//         ->first();

//         if ($student) {
//             return redirect()->route('student-list');
//         }
//         // Neu khong thi quay lai man login
//         return redirect()->route('get-login');
    
//     })->name('post-login');
Route::get('login',[LoginController::class, 'index'])->name('get-login');
Route::get('post-login',[LoginController::class, 'postLogin'])->name('post-login');

