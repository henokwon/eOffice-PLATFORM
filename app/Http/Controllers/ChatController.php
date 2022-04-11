<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ChMessage;
use App\Models\ChFavorite;


class ChatController extends Controller
{
    //
    public function handlechat(){
        // select authenticated user
        $user = User::where('id','!=',Auth::user()->id);
        $user_id = User::where('id','=',Auth::user()->id);
        // select message when user is from_id or to_id
        $messages = ChMessage::where('from_id','=',$user_id)->orWhere('to_id','=',$user_id)->orderByDesc('created_at');
        // foreach($messages as $message){
        //     if(!in_array($message->message,$unique_messages)){
        //         array_push($unique_messages,$message->message);
        //     }
        // }

        
        return view('vendor.chatify.pages.app', compact('user','messages'));
       dd($user,$user_id,$messages);

    }
}
