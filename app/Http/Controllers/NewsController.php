<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\News;
use App\Transformers\NewsTransformers;
use Storage;

// sudo apt-get install php-gd php-mysql

class NewsController extends Controller
{
  public function create()
  {
    return view('news/create');
  }

  public function store(Request $request)
  {
    $file = $request->file('image')->store('uploads');
    // $filename = $file->getClientOriginalName()

    $news = new News;
    $news->title = $request->title;
    $news->description = $request->description;
    $news->image = $file;
    $news->save();

    return redirect()->to('viewnews');
  }

  public function view()
  {
    $show = DB::table('news')->get();

    return view('news/view', ['showall' => $show]);
  }

  public function destroy($id)
  {
    $del = News::find($id);
    Storage::delete($del->image);
    $del->delete();
    return redirect('viewnews');
  }

  public function update($id)
  {
    $update = News::find($id);

    return view('news/update', ['news' => $update]);
  }

  public function edit(Request $request, $id)
  {
    $update = News::find($id);
    $update->title = $request->title;
    $update->description = $request->description;
    if($request->hasfile('image')){
      Storage::delete($update->image);
      $file = $request->file('image')->store('uploads');
      $update->image = $file;
    }
    // $filename = $file->getClientOriginalName()
    $update->save();

    return redirect()->to('viewnews');
  }

  public function news(News $news)
  {
    $newss = $news->all();

    return fractal()
      ->collection($newss)
      ->transformWith(new NewsTransformers)
      ->includeCharacters()
      ->toArray();
  }
}
