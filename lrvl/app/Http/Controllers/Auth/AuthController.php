<?php namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Controller;
//use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use App\Code;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\CodeController;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */
//    use \Illuminate\Foundation\Auth\RegistersUsers;
    use \Illuminate\Foundation\Auth\AuthenticatesUsers;

//    use AuthenticatesAndRegistersUsers;

    protected $redirectTo = '/guestbook';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function getRegister()
    {
        return view('auth.register');
    }

    public function getLogin()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password,'activated' => 1])){
            redirect()->to('/user');
        }
        return redirect()->to('auth/login');
    }

    public function postRegister(Request $request)
    {
        $this->validator($request->all())->validate();
        $user = $this->create($request->all());
        //создаем код и записываем код
        $code = CodeController::generateCode(8);
        Code::create([
            'user_id' => $user->id,
            'code' => $code,
        ]);
        //Генерируем ссылку и отправляем письмо на указанный адрес
        $url = url('/').'/auth/activate?id='.$user->id.'&code='.$code;
        Mail::send('emails.registration', array('url' => $url), function($message) use ($request)
        {
            $message->to($request->email)->subject('Registration');
        });

        return 'Регистрация прошла успешно, на Ваш email отправлено письмо со ссылкой для активации аккаунта';
    }

    public function activate(Request $request)
    {
        $res = Code::where('user_id',$request->id)
            ->where('code',$request->code)
            ->first();
        if($res) {
            //Удаляем использованный код
            $res->delete();
            //активируем аккаунт пользователя
            User::find($request->id)
                ->update([
                    'activated'=>1,
                ]);
            //редиректим на страницу авторизации с сообщением об активации
            return redirect()->to('auth/login')->with(['message' => 'ok']);
        }
        return abort(404);
    }
}