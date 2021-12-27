<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DataTables;


class MessageController extends Controller
{
    public function MessageSave(Request $request)
    {
        Message::insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'subject'=>$request->subject,
            'describe'=>$request->describe,
            'created_at'=>Carbon::now(),
        ]);
        $notification = array(
            'message'=> 'Message has been send successfully',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }
    public function getMessage(Request $request)
    {
        if ($request->ajax()) {
            $data = Message::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<button class="btn btn-danger" data-id="'.$row['id'].'" style="background:red;border-radius:5px" id="deleteMessage">Delete</button>';
                        return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
    public function MessageDelete(Request $request)
    {
        $message_id = $request->message_id;

        $query = Message::findOrFail($message_id)->delete();
        if($query){
            return response()->json(['code'=>1, 'msg'=>'Message has been deleted']);
        }else{
            return response()->json(['code'=>0, 'msg'=>'Something went wrong']);

        }
    }
}
