<?php

namespace App\Http\Controllers;

use App\Models\Planet;
use App\Http\Requests\PlanetRequest;

class PlanetController extends Controller
{
    // indexページへ移動
    public function index()
    {
        $planets = planet::all();
        return view('planets.index', ['planets' => $planets]);
    }

    public function show($id)
    {
        $planet = Planet::find($id);
        return view('planets.show', ['planet' => $planet]);
    }
    
    public function edit($id)
    {
        $planet = planet::find($id);
        return view('planets.edit', ['planet' => $planet]);
    }
    
    public function create()
    {
        return view('planets.create');
    }
    
    public function store(planetRequest $request)
    {
        // インスタンスの作成
        $planet = new planet;
        // 値の用意
        $planet->name = $request->name;
        $planet->english = $request->english;
        $planet->radius = $request->radius;
        $planet->weight = $request->weight;
        // インスタンスに値を設定して保存
        $planet->save();
        // 登録したらindexに戻る
        return redirect('/planets');
    }

    public function update(planetRequest $request, $id) 
    {
        // ここはidで探して持ってくる以外はstoreと同じ
        $planet = planet::find($id);
        // 値の用意
        $planet->name = $request->name;
        $planet->english = $request->english;
        $planet->radius = $request->radius;
        $planet->weight = $request->weight;

        // 保存
        $planet->save();
        // 登録したらindexに戻る
        return redirect('/planets');
    }
    public function destroy($id)
    {
        $item = planet::find($id);
        $item->delete();
        return redirect('/planets');
    }
}
