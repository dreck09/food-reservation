<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\{Reservation,FoodPackage,Food,ReservationPackage,User};

class ReservationController extends Controller
{
    
    public function index()
    {
        $package = FoodPackage::get();
        $package->map(function ($item){
            $assign_food_package = $item->assign_food_package;
            $assign_food_package->map(function ($listFood){
                $item_food_name = Food::findorfail($listFood->food_id);
                $listFood->food_title = $item_food_name->food_title;
            });
        });
        return view('reservation',compact('package'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'special_req'  => 'nullable',
        ]);

        $venue          = $request->venue;
        $motif          = $request->motif;
        $guest          = $request->guest;
        $r_date_time    = $request->r_date_time;
        $r_type         = $request->r_type;
        $s_req          = $request->s_req;
        $package_id        = $request->package;

        $food_package = FoodPackage::where('id', $request->package)->get();
        $food_package->map(function ($item){
            $assign_food_package = $item->assign_food_package;
            $assign_food_package->map(function ($listFood){
                $item_food_name = Food::findorfail($listFood->food_id);
                $listFood->food_title = $item_food_name->food_title;
            });
        });
        foreach($food_package as $data){
            foreach($data->assign_food_package as $sub_data){
                $food_array[] = $sub_data->food_title;
            }
        }

        $f_pack = FoodPackage::where('id', $request->package)->first();
        $package_name = $f_pack['package_name'];
        $package_price = $f_pack['price'];
        $total = $f_pack['price'] * $guest;
        $halfpayment = $total / 2;

        $reservation[] = array($venue, $motif, $guest, $r_date_time, $r_type, $s_req, $package_id, $package_name, $package_price, $total);
        return view('transaction',compact('reservation', 'food_array', 'halfpayment'));
    }

    public function transaction(Request $request)
    {
        $amount_desire = $request->total / 2;
        if($amount_desire <= $request->h_payment)
        {
            $validated = $request->validate([
                'image'         => 'nullable|image|file|max:5000',
                'special_req'   => 'nullable',
                'foods'         => 'required|array',
            ]);
            if($request->hasFile('upload_receipt'))
            {
                $filenameWithExt = $request->file('upload_receipt')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('upload_receipt')->getClientOriginalExtension();
                $fileNameToStore = $filename.'_'.time().'.'.$extension;
                $path = $request->file('upload_receipt')->storeAs('public/upload_receipt',$fileNameToStore);
            }
            else
            {
                $fileNameToStore = 'noimage.png';
            }
            $reservation = Reservation::create([
                'user_id'         => auth()->user()->id,
                'venue'           => $request->venue,
                'motif'           => $request->motif,
                'guests_no'       => $request->guest,
                'r_date'          => $request->r_date_time,
                'r_type'          => $request->r_type,
                'special_req'     => $request->s_req,
                'total_payment'   => $request->total,
                'downpayment'     => $request->h_payment,
                'gcash_name'      => $request->gcash_name,
                'upload_image'    => $fileNameToStore,
                'dp_date_time'    => $request->pay_date,
            ]);
            ReservationPackage::create([
                'user_id'           => auth()->user()->id,
                'reservation_id'    => $reservation->id,
                'food_package_id'   => $request->package_id,
                'package_name'      => $request->package_name,
                'price'             => $request->package_price,
                'foods'             => $validated['foods'],
            ]);
            
            return $reservation;
        }else {
            return "Your half-payment must be higher or equal to amount desire!";

        }

    }

    public function pendingList()
    {
        $pending_list = Reservation::where('status', 'pending')->get();
        $pending_list->map(function ($item){
            $user_name = User::findorfail($item->user_id);
            $item->name = $user_name->name;
        });
        return view('admin-pending-transaction',compact('pending_list'));
    }
}
