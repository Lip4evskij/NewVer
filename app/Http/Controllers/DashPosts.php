<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;

class DashPosts extends Controller
{
    public function translit($s) {
        //$s = (string) $s; // преобразуем в строковое значение
        $s = strip_tags($s); // убираем HTML-теги
        $s = str_replace(array("\n", "\r"), " ", $s); // убираем перевод каретки
        $s = preg_replace("/\s+/", ' ', $s); // удаляем повторяющие пробелы
        $s = trim($s); // убираем пробелы в начале и конце строки
        $s = function_exists('mb_strtolower') ? mb_strtolower($s) : strtolower($s); // переводим строку в нижний регистр (иногда надо задать локаль)
        $s = strtr($s, array('а'=>'a','б'=>'b','в'=>'v','г'=>'g','д'=>'d','е'=>'e','ё'=>'e','ж'=>'j','з'=>'z','и'=>'i','й'=>'y','к'=>'k','л'=>'l','м'=>'m','н'=>'n','о'=>'o','п'=>'p','р'=>'r','с'=>'s','т'=>'t','у'=>'u','ф'=>'f','х'=>'h','ц'=>'c','ч'=>'ch','ш'=>'sh','щ'=>'shch','ы'=>'y','э'=>'e','ю'=>'yu','я'=>'ya','ъ'=>'','ь'=>''));
        $s = preg_replace("/[^0-9a-z-_ ]/i", "", $s); // очищаем строку от недопустимых символов
        $s = str_replace(" ", "-", $s); // заменяем пробелы знаком минус
        return $s; // возвращаем результат
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post= Posts::orderby('created_at', 'desc')->paginate(2);
        return view('admin.index')->withPost($post);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $post = Posts::all();
        return view('admin.create')->withPost($post);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post= new Posts();
        $post->title=$request->title;
       $post->slug=$this->translit($post->title);

        $post->content=$request->content;
        $post->categories=$request->categories;
        $post->tags=$request->tags;
        //-------------Загрузка изображения----------------------------------

        $target_image="uploads/";
        $target_image=$target_image.basename($_FILES['image']['name']);
        $load=move_uploaded_file($_FILES['image']['tmp_name'],$target_image);
        $post->image='../'.$target_image;

        //--------------Конец--------------------------------------------
        $post->tag_en_name=$this->translit($post->tags);
        $post->save();
        $request->session()->flash('success', 'Запись опубликована!');
        return redirect()->route('admin-panel.show',$post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post=Posts::find($id);

        return view('admin.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=Posts::find($id);
        return view('admin.edit')->withPost($post);
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
        $post= Posts::find($id);
        $post->title=$request->title;
        $post->slug=$this->translit($post->title);
        $post->content=$request->content;
        $post->categories=$request->categories;
        $post->tags=$request->tags;
        $target_image="uploads/";
        $target_image=$target_image.basename($_FILES['image']['name']);
        $load=move_uploaded_file($_FILES['image']['tmp_name'],$target_image);
        $post->image='../'.$target_image;
        $post->tag_en_name=$this->translit($post->tags);
        $post->save();
        $request->session()->flash('success', 'Успешное редактирование!');
        return redirect()->route('admin-panel.show',$post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post= Posts::find($id);
        $post->delete();
        return redirect('/admin-panel');
    }


}
