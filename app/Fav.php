<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
// use App\Events\FavDelete;

class Fav extends Model
{
    protected $fillable =[
        "article_id", "user_id",
    ];

    // protected $dispatchesEvents = [
    //     'deleted' => FavDelete::class
    // ];

    public function article(){
        return $this->belongsTo(Article::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
