<?php

namespace App\Http\Controllers;
use App\Models\Landingpages;
use App\Models\Video;
use Illuminate\Http\Request;

class LandingpageController extends Controller
{
    // index (in ra dữ liệu)
    //create (form tạo);
    //store (xử lý khi form tạo submit và thêm vào db);

    /*
    3. THằng này truyền vào id bảng
    function edit($id){

        $news = News::find($id); //trả một phần tử duy nhất do mình yêu cầu
        return view nơi_chứa_view , compact('news');
        [
            'tile' => 'asdasdasdas'
        ]
    }
        *view $news->title
select *: Hiện tất cả bảng
Select * from news 
        $newsAll = News::all(); //lấy toàn bộ dữ liệu bảng
        $newsAll  = News::orderBy(id ,asc)->get();
         =>  {
            [
                title => 'asdassss'
            ],
            [
                title => 'asdasssssss'
            ]
        }
          =>  forea newsAll as news
            $news->title
            => 1.asdassss
            => 2. asdasssssss

    //edit ('lấy ra bảng cần sửa vào form)
    //update xử lý khi đã sửa xong và submit
    //delete
     */
    public function index()
    {
        $landingpage = Landingpages::where('status', 1)->orderBy('order','asc')->get(); 
        // dd($landingpage); function debug của laravel php echo ($langdingpage);
        //die(); //dừng code đến đây
        $video = Video::orderBy('id','asc')->get();
        return view('user.index', compact('landingpage','video'));
    }
    public function create()
    {
       //TRả về form thêm mới
    }
    //view của form
    // <form action="{{ route('landingpage.store') }}" method="POST">
    // @csrf //token người gửi
    //  <input type="text" name="title" class="form-control" value="{{ old('title') }}">
//     @error('title')
//     <span class="" role="alert">
//         <label class="error" id="name_error" style="color: red" for="name">{{ $message }}</label>
//     </span>
// @enderror
    //  <input type="text" name="stauts" class="form-control" value="{{ old('stauts') }}">
    //submit tile => request

    public function store(Request $request)
    {
        //Tiêu đề là bắt buộc nếu không có title tron requesst mà form gửi lên thì trả
        // về một messenger thông báo (check phía backend thường sẽ check ở hai đầu backend và fornend)

        // $document.redy(
        //     $(#title).value == '';
        //     alert('Vui lòng nhập tiêu đề');
        // );

        // $request->validate([
        //     'title' => 'required',
            
        // ],[
        //     'title.required' => 'Vui lòng nhập tiêu đề',
        // ]);

    //    $title = $request->title;
    //    $status = $request->status;

    // $news = News::create([
    //     'title' => $request->title,
    //     'status' => $request->status
    // ]);
    // return redirect()->route('landingpage')->with('success', 'Câu hỏi và câu trả lời đã thêm mới thành công!');;

    }
}