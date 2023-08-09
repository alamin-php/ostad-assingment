<?php

namespace App\Http\Controllers;

use App\Helper\JWTToken;
use App\Mail\OTPMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Mockery\Exception;

class UserController extends Controller
{

    function LoginPage()
    {
        return view('pages.auth.login-page');
    }

    function RegistrationPage()
    {
        return view('pages.auth.registration-page');
    }

    function SendOtpPage()
    {
        return view('pages.auth.send-otp-page');
    }

    function VerifyOTPPage()
    {
        return view('pages.auth.verify-otp-page');
    }

    function ResetPasswordPage()
    {
        return view('pages.auth.reset-pass-page');
    }

    function ProfilePage()
    {
        return view('pages.dashboard.profile-page');
    }

    public function UserRegistration(Request $request)
    {

        try {
            $count = User::where('email', '=', $request->input('email'))->count();
            if ($count === 1) {
                return response()->json([
                    'status' => 'failed',
                    'message' => 'Email Address Already Exists!'
                ]);
            } else {
                User::create([
                    'firstName' => $request->input('firstName'),
                    'lastName' => $request->input('lastName'),
                    'email' => $request->input('email'),
                    'mobile' => $request->input('mobile'),
                    'password' => $request->input('password')
                ]);
                return response()->json([
                    'status' => 'success',
                    'message' => 'User Registration Successfully'
                ], 200);
            }
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'failed',
                'message' => 'User Registration Failed!'
            ], 200);
        }
    }

    public function UserLogin(Request $request)
    {
        $count = User::where('email', $request->input('email'))
            ->where('password', $request->input('password'))
            ->select('id')->first();
        if ($count !== null) {
            $token = JWTToken::CreateToken($request->input('email'), $count->id);
            return response()->json([
                'status' => 'success',
                'message' => 'User Login Successful'
            ], 200)->cookie('token', $token, 60 * 24 * 30);
        } else {
            return response()->json([
                'status' => 'failed',
                'message' => 'Email or password not found!'
            ]);
        }
    }

    public function SendOTPCode(Request $request)
    {
        $email = $request->input('email');
        $otp = rand(1000, 9999);
        $count = User::where('email', '=', $email)->count();
        if ($count == 1) {
            // OTP Email Address
            Mail::to($email)->send(new OTPMail($otp));
            // OTP Code Table Update
            User::where('email', '=', $email)->update(['otp' => $otp]);
            return response()->json([
                'status' => 'success',
                'message' => '4 Digit OTP Code has been sent to your email'
            ], 200);
        } else {
            return response()->json([
                'status' => 'failed',
                'message' => 'unauthorized'
            ], 401);
        }
    }

    public function VerifyOTP(Request $request)
    {
        $email = $request->input('email');
        $otp = $request->input('otp');

        $count = User::where('email', '=', $email)
            ->where('otp', '=', $otp)->count();
        if ($count == 1) {
            // OTP Update from database
            User::where('email', '=', $email)->update(['otp' => '0']);
            // Pass Reset Token Issue
            $token = JWTToken::CreateTokenForSetPassword($request->input('email'));
            return response()->json([
                'status' => 'success',
                'message' => 'OTP Verification Successful',
                'token' => $token
            ], 200)->cookie('token', $token, 60 * 24 * 30);
        } else {
            return response()->json([
                'status' => 'failed',
                'message' => 'unauthorized'
            ], 401);
        }
    }

    public function ResetPassword(Request $request)
    {
        try {
            $email = $request->header('email');
            $password = $request->input('password');
            User::where('email', '=', $email)->update(['password' => $password]);
            return response()->json([
                'status' => 'success',
                'message' => 'Request Successful'
            ], 200);
        } catch (\Exception $exception) {
            return response()->json([
                'status' => 'failed',
                'message' => 'Something Went Wrong!'
            ]);
//            return $exception->getMessage();
        }
    }

    public function UserLogout()
    {
        return redirect('/userLogin')->cookie('token', '', -1);
    }

    public function UserProfile(Request $request)
    {
        $email = $request->header('email');
        $user = User::where('email', '=', $email)->first();
        return response()->json([
            'status' => 'success',
            'message' => 'Request Successful',
            'data' => $user
        ], 200);
    }

    public function UpdateProfile(Request $request)
    {
        try {
            $email = $request->header('email');
            $firstName = $request->input('firstName');
            $lastName = $request->input('lastName');
            $mobile = $request->input('mobile');
            $password = $request->input('password');
            User::where('email', '=', $email)->update([
                'firstName' => $firstName,
                'lastName' => $lastName,
                'mobile' => $mobile,
                'password' => $password
            ]);
            return response()->json([
                'status' => 'success',
                'message' => 'Profile Updated Successful',
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'failed',
                'message' => 'Something Went Wrong!'
            ]);
        }
    }
}
