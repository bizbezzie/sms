<?php

namespace BizBezzie\SMS;

use Illuminate\Support\Facades\Http;

class SMS
{
    public function send($mobile, $message, $channel = null, $flash = null, $senderid = null, $dsc = null, $route = null)
    {
        /**
         * Initializing Veriables
         */
        $url = config('sms.url');
        $user = config('sms.username');
        $password = config('sms.password');

        if(is_null($channel))
        {
            $channel = config('sms.channel');
        }

        if(is_null($flash))
        {
            $flash = config('sms.flash');
        }

        if(is_null($flash))
        {
            $flash = config('sms.flash');
        }

        if(is_null($senderid))
        {
            $senderid = config('sms.senderid');
        }

        if(is_null($dsc))
        {
            $dsc = config('sms.dsc');
        }

        if(is_null($route))
        {
            $route = config('sms.route');
        }

        $url = 'http://' .$url. '/api/mt/SendSMS?user=' .$user. '&password=' .$password. '&senderid=' .$senderid. '&channel=' .$channel. '&DCS=' .$dsc. '&flashsms=' .$flash. '&number=' .$mobile. '&text=' .$message. '&route=' .$route;

        dd($url);

        $response = json_decode(Http::get($url));

        $success = $response['ErrorCode'] == '000' ? true : false ;

        if(! $success)
        {
        session()->flash('error', "SMS sending faild");
        }

        return $success;
    }
}