<?php

namespace App\Http\Controllers;

use App\DataTables\CompanyDetailsDataTable;
use App\Models\CompanyDetail;
use App\Models\CountryInformation;
use App\Notifications\PaymentCancelled;
use App\Notifications\SanctionRequestCancel;
use App\Notifications\TransactionEmail;
use App\Notifications\SendAttachment;
use App\Models\SancImages;
use App\User;
use App\Utils\EmailStatus;
use App\Utils\SanctionRequestStatus;
use App\Utils\UserStatus;
use App\Utils\UserType;
use Carbon\Carbon;
use Faker\Provider\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Psy\Util\Str;
use Yajra\DataTables\Facades\DataTables;
use Yajra\DataTables\Html\Button;
use function Symfony\Component\String\u;
use function Symfony\Component\Translation\t;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
         return view('auth.login');
    }

}
