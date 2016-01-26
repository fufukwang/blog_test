<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class GameController extends Controller
{

    /**
     *列表
     */
    public function index(){
        return view('game.index');
    }

    /**
     *新增
     */
    public function create(){
        $title = 'New Game';
        return View('game.create', compact('title'));
    }

    /**
     *儲存資料
     */
    public function store(Request $request){
        $input = $request->all();
        $game = new Game; //game 是model 名稱
        $game->title = $input['title'];
        $game->content = $input['content'];
        $game->save();

        Game::create(['title'=> $input['title']],['content'=> $input['content']]);
    }

    /**
     * 顯示
     * @param $id
     */
    public function show($id){

    }

    /**
     * 修改
     * @param $id
     */
    public function edit($id){

    }

    /**
     *更新資料
     */
    public function update(){

    }

    /**
     *刪除
     */
    public function delete(){

    }
}
