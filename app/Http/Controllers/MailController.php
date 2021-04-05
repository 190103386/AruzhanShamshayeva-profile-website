<?php
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;

 
class MailController extends Controller
{
    public function send()
    {
        $objDemo = new \stdClass();
        $objDemo->demo_one = 'Demo One Value';
        $objDemo->demo_two = 'Demo Two Value';
        $objDemo->sender = 'aruzhan.shamshaeva';
        $objDemo->receiver = 'aruzhan.shamshaeva';
 
        Mail::to("aruzhan.shamshaeva@gmail.com")->send(new DemoEmail($objDemo));
    }
}