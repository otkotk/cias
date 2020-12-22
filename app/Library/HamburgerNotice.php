<?php

namespace app\Library;

use App\Comment;
use App\Fav;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HamburgerNotice
{
    public static function callDB()
    {
        $user_id = Auth::id();

        $favUnion = Fav::select('article_id', 'user_id', DB::raw('null as type'), 'created_at')
            ->whereRaw('(SELECT id FROM articles WHERE user_id = ?)', [$user_id])
            ->whereNotIn('user_id', [$user_id]);

        // $query = Fav::query();
        // $query = $query->whereHas('user', function ($query) use ($department) { //ユーザーの学科をとってきて一致したユーザーの記事をとってくる処理
        //     $query->where('department_id', $department);
        // });
        //     dd($favUnion);

        $comUnionExe = Comment::select('article_id', 'user_id', 'detail', 'created_at')
            ->whereRaw('(SELECT id FROM articles WHERE user_id = ?)', [$user_id])
            ->whereNotIn('user_id', [$user_id])
            ->union($favUnion)
            ->orderByDesc('created_at')
            ->limit(10)->get();

        // dd($user_id, $comUnionExe);

        return $comUnionExe;
    }
}

?>
