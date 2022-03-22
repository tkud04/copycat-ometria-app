<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Helpers\Contracts\HelperContract; 
use Illuminate\Support\Facades\Auth;
use Session; 
use Validator; 
use Carbon\Carbon; 

class MainController extends Controller {

	protected $helpers; //Helpers implementation
    
    public function __construct(HelperContract $h)
    {
    	$this->helpers = $h;                     
    }

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getIndex()
    {
       $user = null; $ret = ['status' => "ok", 'message' => "Copycat Fragrances Ometria API"];

		if(Auth::check())
		{
			$user = Auth::user();
		}

		
		$signals = $this->helpers->signals;
       // $courses = $this->helpers->getClasses();
        #dd($user);
    	//return view('index',compact(['user','courses','signals']));
        return json_encode($ret);
    }
	

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
    public function getDashboard(Request $request)
    {
		$user = null;
		
    	if(Auth::check())
		{
			$user = Auth::user();
		}
        else
        {
            return redirect()->intended('/');
        }
        
        $req = $request->all();
	    $v = "";
        
         
         if($user->role == "teacher")
         {
             $classes = $this->helpers->getClasses();
             $compact = ['user','classes'];
             $v = "teacher-dashboard";
         }
         
         else
         {
            $subjects = $this->helpers->getSubjects($user->class);
            $compact = ['user','subjects'];
            $v = "student-dashboard";
         } 	  
         return view($v,compact($compact));
    }

    /**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getProfile()
    {
       $user = null;

		if(Auth::check())
		{
			$user = Auth::user();
		}
        else
        {
            return redirect()->intended('/');
        }

		
		$signals = $this->helpers->signals;
        #dd($user);
    	return view('profile',compact(['user','signals']));
    }

    /**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
    public function postProfile(Request $request)
    {
    	if(Auth::check())
		{
			$user = Auth::user();
		}
		else
        {
        	return redirect()->intended('login');
        }
        
        $req = $request->all();
		#dd($req);
        $validator = Validator::make($req, [
                             'fname' => 'required',
                             'lname' => 'required',
                             'email' => 'required',
         ]);
         
         if($validator->fails())
         {
             $messages = $validator->messages();
             return redirect()->back()->withInput()->with('errors',$messages);
             //dd($messages);
         }
         
         else
         {
            $ret = $this->helpers->updateUser($req);
	        session()->flash("update-profile-status","ok");
			return redirect()->intended('profile');
         } 	  
           
    }

    /**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getCustomerIds()
    {
       $user = null; $ret = ['status' => "error", 'message' => "nothing happened"];

		if(Auth::check())
		{
			$user = Auth::user();
		}

		$customerIds = $this->helpers->getCustomerIds();
        #dd($classes);
        $ret = ['status' => "ok", 'data' => $customerIds]; 
    	return json_encode($ret);
    }

    /**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getCustomerId(Request $request)
    {
       $user = null;  $ret = ['status' => "error", 'message' => "nothing happened"];
       $req = $request->all();
		if(Auth::check())
		{
			$user = Auth::user();
		}

        if(isset($req['email'])){
           $customerId = $this->helpers->getCustomerId($req['xf']);
           $ret = ['status' => "ok", 'data' => $customerId]; 
        }
        else{
            $ret['error'] = "Email not specified";
        }
        return json_encode($ret);
    }

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
    public function postAddCustomerId(Request $request)
    {
        $usr = null;
    	if(Auth::check())
		{
			$user = Auth::user();
		}
       
        $req = $request->all();
		#dd($req);
        $validator = Validator::make($req, [
                             'customer_id' => 'required',
                             'email' => 'required|email',
         ]);
         
         if($validator->fails())
         {
            $messages = $validator->messages();
            $ret['error'] = $messages;
         }
         
         else
         {
            $ret = $this->helpers->addCustomerId($req);
			$ret = ['status' => "ok", 'data' => "Customer ID added"]; 
         }  
    }

	
    
    /**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getZoho()
    {
        $ret = "1535561942737";
    	return $ret;
    }
    
    
    /**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getPractice()
    {
		$url = "http://www.kloudtransact.com/cobra-deals";
	    $msg = "<h2 style='color: green;'>A new deal has been uploaded!</h2><p>Name: <b>My deal</b></p><br><p>Uploaded by: <b>A Store owner</b></p><br><p>Visit $url for more details.</><br><br><small>KloudTransact Admin</small>";
		$dt = [
		   'sn' => "Tee",
		   'em' => "kudayisitobi@gmail.com",
		   'sa' => "KloudTransact",
		   'subject' => "A new deal was just uploaded. (read this)",
		   'message' => $msg,
		];
    	return $this->helpers->bomb($dt);
    }   


}