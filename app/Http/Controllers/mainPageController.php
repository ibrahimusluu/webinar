<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\stdClass;
use App\Models\webinar_list;
use DateTime;

//use Mail;

use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;

class mainPageController extends Controller
{
    public function index() {
        return view('index');
    }
    
    public function index2($id) {
        $getid=webinar_list::query()->where('token',$id)->first();
        $getdate= $getid->START_DATE;
        if(now()<$getdate){
            return view('index2',['some'=>$getdate]);
        }
        else {
            // $gettoken=$getid->token;
            // $gettoken=null;
            return view('index')->with('warning','Zamanında giriş yapmadınız');
        }
        // dd($getdate);
        // $date=new DateTime();
        // $date->setTimestamp( $request->webinarDate);
        // $data=DB::table('webinar_lists')
        //     ->getInsertID(
        //         ['START_DATE'=> $date]
        //     );
        // $getWebinar=webinar_list::query()->find($data);
        // $getWebinar->setTimestamp(strtotime($data));
        // $now=new DateTime();
        // if($now < $getWebinar){
        //     return view('index2',['abc'=>webinar_list::query()->where('START_DATE',$request)->first()]);
        // }
        // else if( $now >= $getWebinar && $now <= $getWebinar->modify('+5 minute')){
        //     return ;
        // }
        // else {
        //     return back()->with('warning','Zamanında giriş yapmadınız');

        // }

        // return view('index2');
    }


    // public function create() {
        
    // }

    public function sendMail(Request $request) {
        // dd($request); 
        $emailArray=explode("@",$request->email);
        $emailNameWithSlahs=bcrypt($emailArray[0]);
        $emailName=str_replace("/","",$emailNameWithSlahs);
        $date = new DateTime();
        $date->setTimestamp( $request->webinarDate);
        $data=DB::table('webinar_lists')
            ->insertGetId([
                'NAME'=>$request->name,
                'SURNAME'=>$request->surname,
                'EMAIL'=>$request->email,
                'token'=>$emailName,
                'START_DATE'=> $date
            ]);
            $getWebinar=webinar_list::query()->find($data);
        // $timeNow=Carbon::now();
        $mailData=$request->all();
        $mailData['webinarURL']='http://localhost:8000/t/'.$getWebinar->token;
        // $data=$request->only(['name','email']);
        $sendMailData=new SendMail($mailData,'webinar kayıt');
        Mail::to($request->email)
            ->send($sendMailData); 
        
        return back()->with('success','Mail Başarıyla Gönderildi');
    }


























    








    // $webinar=webinar_list::query()->where('token',$wid)->first();
        // if(now() < $webinar->START_DATE){
        //     return view('index2',['webids'=>$webinar]);
        // }
        // else if(now() >= $webinar->START_DATE && now() <= $webinar->START_DATE->modify('+5 minute')) {
        //     return view('create');
        // }
        // else{
        //     return back()->with('failure','5 dakika içinde girmeniz gerekiyordu');
        // }

        // $id=app('request')->input('wid'); 
		// 			$data=DB::table('webinar_list')
        // 				->where('ID',$id) 
        // 				->value('START_DATE');
		// 			$now= new DateTime();
					
		// 			$webinarDate=new DateTime();
		// 			$webinarDate->setTimestamp(strtotime($data));
		// 			if($now < $webinarDate){
		// 				echo 'geri sayım başladı';
		// 			}
		// 			else if( $now >= $webinarDate && $now <= $webinarDate->modify('+5 minute')){
		// 				echo 'başarılı';
		// 			}
		// 			else {
		// 				echo 'zamanında giriş yapmadınız!';

		// 			}

        // 			echo ' '.$data;	




    



    // public function saveWebinar(Request $request) {

    // dd($request); 
    // $name=$request->input('webinar_name');
    // $surname=$request->input('webinar_surname');
    // $email=$request->input('webinar_email');

    // $data=DB::table('webinar_list')
    //     ->where('ID',1) //->orwhere, whereBetween, whereNotBetween, whereIn, whereNotIn, whereNull, whereNotNull, whereDate, whereMonth, whereDay, whereTime, whereColumn
    //     ->value('SURNAME'); //->value, find(intval(1))    
    //     // ->first();        
    // // dd($data);
    // echo $data;

    //     $data=DB::table('webinar_list')->insert([
    //         'NAME'=>$request->webinar_name,
    //         'SURNAME'=>$request->webinar_surname,
    //         'EMAIL'=>$request->webinar_email,
    //         'START_DATE'=>now()
    //     ]);

    //     $timeNow=Carbon::now();
        
    // echo "Sayın ".$request->webinar_name.' '.$request->webinar_surname.' '.$timeNow." tarihinde online oturum rezarvasyonunuz oluşturulmuştur. 5 dakika içinde girmeniz gerekmektedir. Aksi takdirde giriş yapamazsınız";
    //  return view('/create');
        

    // $sql="insert into webinar_list (name,surname,email) VALUES ('$name','$surname','$email')";

    
    //     }


}
