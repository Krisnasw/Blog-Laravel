<?

namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Admin;

/**
 *
 */
class AdminController extends Controller
{

    function getLogin()
    {
        if (Auth::user()) {
            return redirect()->route('admin.logout');
        }
        return view('Admin.Auth.login');
    }
    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('admin');
    }
    public function getDashboard()
    {
        $authors = Admin::all();
        return view('Admin.dashboard',['authors'=>$authors]);
    }
    public function postLogin(Request $request)
    {
        # code...
        $this->validate($request, [
            'username' => 'required|max:100',
            'password' => 'required|max:100'
        ]);

        if (!Auth::attempt(['username' => $request['username'] , 'password' => $request['password']])) {
            # code...
            return redirect()->back()->with(['fail'=>'Could not log you in']);
        }

        return redirect()->route('admin.dashboard');
    }


}
