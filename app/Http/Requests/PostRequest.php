<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
     
    /*public function authorize()
    {
        $post = Post::find($this->route('post')); // リクエスト内の投稿IDを取得
        return $post && $post->user_id === Auth::id(); // ユーザーが投稿の所有者かどうかをチェック
    }*/

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'post.title' => 'required|string|max:100',
            'post.body' => 'required|string|max:4000',
            'prefecture_id' => 'required',

            //
        ];
    }
}
