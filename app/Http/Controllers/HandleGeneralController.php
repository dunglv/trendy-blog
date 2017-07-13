<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
class HandleGeneralController extends Controller
{
    public static function rand_string($len=20)
    {
    	$STR = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789_=$';
    	$RSTR = '';
    	if (!isset($len) || is_null($len) || empty($len) || $len === 0) {
    		$len = 20;
    	}
    	for ($i=0; $i < $len; $i++) { 
    		$RSTR .= $STR[rand(0, strlen($STR)-1)];
    	}

    	return $RSTR;
    }

    public function handdle_article(Request $request)
    {
        if ($request->has('r')) {
            if ($request->get('r') === 'req-l-t') {
                $source = array();
                $lt = Tag::where('status', 1)->get();
                foreach ($lt as $t) {
                    $source[] = array(
                        'label' => $t->title,
                        'desc' => $t->description,
                        'id' => $t->id
                        );
                }
                return array('lt'=> $lt, 'source' => $source);
            }
        }
    }
}
