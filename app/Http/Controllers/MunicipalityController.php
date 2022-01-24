<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prefecture;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\SerchMunicipalityForm;

class MunicipalityController extends Controller
{

  public function serch(SerchMunicipalityForm $request) {

    $keywords = $request->input('keyword');

    // キーワードから該当する該当する路線のIDを取得
    $query = DB::table('municipalities'); 
    $query->join('prefectures', 'municipalities.prefecture_id', '=', 'prefectures.id');
    $query->select('prefectures.id as prefecture_id', 'municipalities.id as municipality_id', 'prefecture_name', 'municipality_name');

    if(!empty($keywords)) {
      foreach ($keywords as $keyword) {
        $query->orwhere('municipality_name','like','%'.$keyword.'%');
      }
    }          

    // SQLログ
    // dump($query->toSql(), $query->getBindings());

    $municipalities = $query->get();    

    return view('result.municipality', compact('municipalities'));


   
      
  
  }
}
