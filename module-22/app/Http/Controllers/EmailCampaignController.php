<?php

namespace App\Http\Controllers;

use App\Mail\EmailCampaignMail;
use App\Models\Customer;
use App\Models\EmailCampaign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailCampaignController extends Controller
{
    public function SendEmailCampaign(Request $request)
    {
        // $email = $request->input('email');
        // $offerBody = "Test";
        // $count = EmailCampaign::where('email', '=', $email)->count();
        // if ($count == 1) {
        //     // OTP Email Address
        //     // Mail::to($email)->send(new OTPMail($otp));
        //     // OTP Code Table Update
        //     User::where('email', '=', $email)->update(['otp' => $otp]);
        //     return response()->json([
        //         'status' => 'success',
        //         'message' => '4 Digit OTP Code has been sent to your email'
        //     ], 200);
        // } else {
        //     return response()->json([
        //         'status' => 'failed',
        //         'message' => 'unauthorized'
        //     ], 401);
        // }
        $offerBody = $request->input('offerBody');
        $user_id = $request->header('id');
        $emails = Customer::where('user_id', $user_id)->pluck('email');
        foreach ($emails as $email) {
            EmailCampaign::create([
                'offerBody' => $offerBody,
                'email' => $email,
            ]);
            // OTP Email Address
            Mail::to($email)->send(new EmailCampaignMail($offerBody));
        }
        return response()->json([
            'status' => 'success',
            'message' => 'Offer send success'
        ], 200);
    }
}
