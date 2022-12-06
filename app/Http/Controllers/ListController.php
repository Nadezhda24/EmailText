<?php

namespace App\Http\Controllers;

use App\Model\CheckList;
use App\Model\Item;
use App\Model\ListItem;
use Illuminate\Http\Request;

class ListController extends Controller{

    /*public function Account(){
        $id = $_COOKIE["id"];
        $list = CheckList:: where(['user_id' => $id])->get();
        foreach ($list as $item){
            $item['products'] = ListItem::where(['check_list_id'=>$item->check_list_id])
                ->join('item', 'item.item_id', '=', 'list_item.item_id' )->get();
        }
        return view('account',  ['list' => $list]);
    }*/

    public function Account($id){
        $list = CheckList:: where(['user_id' => $id])->get();
        foreach ($list as $item){
            $item['products'] = ListItem::where(['check_list_id'=>$item->check_list_id])
                ->join('item', 'item.item_id', '=', 'list_item.item_id' )->get();
        }
        return view('account',  ['list' => $list]);
    }

    public function sendProduct(Request $request){
        $item = Item::create([
            'name' => $request->name,
            'price' => $request->price,
        ]);

        $listItem = ListItem::create([
            'item_id' => $item->item_id,
            'check_list_id' => $request->id_list,
            'is_bought' => 0,
        ]);

        return view('account');
    }


}
