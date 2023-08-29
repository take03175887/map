<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Photo;
use App\Models\Tag;
use App\Models\Prefecture;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Cloudinary;
use App\Http\Controllers\Card;
use Illuminate\Support\Facades\DB;

class PrefectureController extends Controller
{
    public function up(Request $request, $card_id)
    {
        return $this->show($card_id, $request->input('page', 0) + 1);
    }
    
    public function down(Request $request, $card_id)
    {
        return $this->show($card_id, $request->input('page', 0) - 1);
    }
    
}
