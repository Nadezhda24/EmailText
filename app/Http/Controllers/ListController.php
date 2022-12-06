<?php

namespace App\Http\Controllers;

use App\Model\CheckList;
use App\Model\ListItem;

class ListController extends Controller{

    public function Account($id){
        $list = CheckList:: where(['user_id' => $id])->get();
        foreach ($list as $item){
            $item['products'] = ListItem::where(['check_list_id'=>$item->check_list_id])
                ->join('item', 'item.item_id', '=', 'list_item.item_id' )->get();
        }
        return view('account',  ['list' => $list]);
    }
}
