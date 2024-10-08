<?php

namespace App\Http\Controllers;

use Session;
use App\Mail\MailSend;
use App\Models\Country;
use App\Models\Auth\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\RegisterRequest;
use Illuminate\Auth\Events\Registered;
use App\Helpers\Frontend\Auth\Socialite;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Arcanedev\NoCaptcha\Rules\CaptchaRule;
use App\Mail\Frontend\Auth\AdminRegistered;
use App\Events\Frontend\Auth\UserRegistered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Validation\ClosureValidationRule;
use App\Repositories\Frontend\Auth\UserRepository;


class NewRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function regis()
    {
        return view('frontend.auth.regisbaru');
    }
    //regisnext
    public function regis2()
    {
        return view('frontend.auth.regisbaru2');
    }


    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
        
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $validator = Validator::make($request->all(), [
            // 'first_name' => 'required|max:255',
            // 'last_name' => 'required|max:255',
            // 'email' => 'required|email|max:255|unique:users',
            // 'password' => 'required|min:8|confirmed',
            'tmp_lahir' => 'required|regex:/^[a-zA-Z]+$/u',
            'kota' =>'required|regex:/^[a-zA-Z]+$/u',
            'g-recaptcha-response' => (config('access.captcha.registration') ? ['required',new CaptchaRule] : ''),
        ],[
            'g-recaptcha-response.required' => __('validation.attributes.frontend.captcha'),
        ]);


        $details = [
            'first_name' => $request->first_name,
            'datetime' => date('Y-m-d H:i:s'),
            'url' => request()->getHttpHost().'/register/verify/'.$request->verify_key
        ];

        if ($validator->passes()) {
            // Store your user in database
            event(new Registered($user = $this->create($request->all())));
            Mail::to($request->email)->send(new MailSend($details));

            // return view('frontend.auth.regisbaru2',['hasil' => true]);
            Session::flash('hasil','berhasil');
            return Redirect::back();

        }

        // return response(['errors' => $validator->errors()]);
        // return view('frontend.auth.regisbaru2',[
        //     'errors' => $validator->errors(),
        //     'first_name' => $request->first_name,
        //     'last_name' =>$request->last_name,
        //     'email' =>$request->email,
        //     'password' => $request-> password,
        //     'password_confirmation' => $request->password_confirmation
        //     // 'country' => $country->value
        // ]);
        
        // return Redirect::back()->withInput()->withErrors($validator->errors());
        return Redirect::back()->withInput()->with([
            'errors'=>$validator->errors(),
            'first_name' => $request->first_name,
            'last_name' =>$request->last_name,
            'email' =>$request->email,
            'password' => $request-> password,
            'password_confirmation' => $request->password_confirmation
        ]);

        

    }

    public function verify($verify_key)
    {
        $keyCheck = User::select('verify_key')
                    ->where('verify_key', $verify_key)
                    ->exists();
        
        if ($keyCheck) {
            $user = User::where('verify_key', $verify_key)
            ->update([
                'active' => 1
            ]);
            
            return "Verifikasi Berhasil. Akun Anda sudah aktif.   <a href='/newlogin'>login</a>
            ";
        }else{
            return "Key tidak valid!";
        }
    }
    

    public static function datapindah(Request $request){
        $validator = Validator::make($request->all(), [
                'first_name' => 'required|max:255|string|regex:/^[a-zA-Z]+$/u',
                'last_name' => 'required|max:255|string|regex:/^[a-zA-Z]+$/u',
                'email' => 'required|email:dns|max:255|unique:users',
                'password' => [
                    'required',
                    'string',
                    'min:8',             // must be at least 10 characters in length
                    'regex:/[a-z]/',      // must contain at least one lowercase letter
                    'regex:/[A-Z]/',      // must contain at least one uppercase letter
                    'regex:/[0-9]/',      // must contain at least one digit
                    'regex:/[@$!%*#?&]/', // must contain a special character
                ],
                'password_confirmation' => 'required|same:password',
                'g-recaptcha-response' => (config('access.captcha.registration') ? ['required',new CaptchaRule] : ''),
            ],
            [
                'email.email' => 'Please enter valid email or email has been registered',
                'password.regex' => 'Your password need include lower, uppercase,number or symbol and  8 char long',
                'password_confirmation.same' => 'The password you entered is not the same'
            ],
            [
                'g-recaptcha-response.required' => __('validation.attributes.frontend.captcha'),
            ]);    

        if ($validator->passes()) {
            // Store your user in database     
            return redirect('/newregis2')->with([
                'first_name' => $request->first_name,
                'last_name' =>$request->last_name,
                'email' =>$request->email,
                'password' => $request-> password,
                'password_confirmation' => $request->password_confirmation
            ]);
            
        };

        return Redirect::back()->withInput()->withErrors($validator->errors());
    }

   protected function create(array $data)
   {
       $user = User::create([
           'first_name' => $data['first_name'],
           'last_name' => $data['last_name'],
           'email' => $data['email'],
           'password' => Hash::make($data['password']),
       ]);
               $user->tgl_lahir = isset($data['tgl_lahir']) ? $data['tgl_lahir'] : NULL ;
               $user->phone = isset($data['phone']) ? $data['phone'] : NULL ;
               $user->gender = isset($data['gender']) ? $data['gender'] : NULL;
               $user->tmp_lahir = isset($data['tmp_lahir']) ? $data['tmp_lahir'] : NULL;
               $user->kota =  isset($data['kota']) ? $data['kota'] : NULL;
               $user->negara = isset($data['negara']) ? $data['negara'] : NULL;
               $nonegara = DB::table('countries')->where('phone', $data['negara_phone'])->value('value');
               $data['negara_phone'] = $nonegara;
               $user->negara_phone = isset($data['negara_phone']) ? $data['negara_phone'] : NULL;
               $user->verify_key = isset($data['verify_key']) ? $data['verify_key'] : NULL;
               $user->save();

       $userForRole = User::find($user->id);
       $userForRole->confirmed = 1;
       $userForRole->save();
        $userForRole->assignRole('user');

       if(config('access.users.registration_mail')) {
           $this->sendAdminMail($user);
       }

       return $user;
   }
}