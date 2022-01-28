<?php

namespace App\Http\Controllers;

use App\DeliveryBoy;
use App\Models\Country;
use Illuminate\Http\Request;

class DeliveryBoyController extends Controller
{
    public function index(Request $request)
    {
        $col_name = null;
        $query = null;
        $sort_search = null;

        $delivery_boys = DeliveryBoy::paginate(15);
        if ($request->search != null) {
            $delivery_boys = DeliveryBoy::where('first_name', 'like', '%' . $request->search . '%')
            ->orWhere('middle_name', 'like', '%'. $request->search. '%')
            ->orWhere('last_name', 'like', '%'. $request->search. '%')
            ->paginate(15);
            $sort_search = $request->search;
        }

        

        return view('delivery_boy.index', compact('delivery_boys', 'col_name', 'query', 'sort_search'));
    }


    public function create()
    {
        $countries = Country::all();
        return view('deliver_boy.create', compact('countries'));
    }

    public function getStates(Request $request)
    {
        
    }
}
