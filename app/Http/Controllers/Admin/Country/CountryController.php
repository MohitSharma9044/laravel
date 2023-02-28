<?php

namespace App\Http\Controllers\Admin\Country;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Country\Country;
use Carbon\Carbon;

class CountryController extends Controller
{
    
    public function index()
    {
        $data['country_list'] = Country::paginate(5);
        $data['select_country_list'] = Country::paginate(80);
        return view('admin.country.country', $data);
    }

    public function countryCreate(Request $request)
    {
        $request->validate([
            'country_name' => 'required|unique:countries,country_name',
        ]);

        $country = new Country();

        $country->parent_id = $request->parent_id;
        $country->country_name = $request->country_name;
        $country->country_slug =  strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->country_name)));
        $country->created_at = Carbon::now();
       $inserted = $country->save();
       if($inserted)
       {
        return back()->with('success', 'Country Has Been Inseted successfully.');
       }else{
        return back()->with('error', 'Insertion Failed.');
       }
        
    }

    public function countryHide(Request $request, $id)
    {
        if(!empty($id))
        {
            $country = Country::where(['id' => $id]);
            $country->status = "Disabled";
            $updated = $country->save();
            if($updated)
            {
                return back()->with('success', 'Status Has Been Changed.');
            }else{
                return back()->with('error', 'Updation Failed.');
            }
        }
    }

    public function countryShow(Request $request, $id)
    {
        if(!empty($id))
        {
            $country = Country::where(['id' => $id])->first();
            $country->status = "Enabled";
            $updated = $country->save();
            if($updated)
            {
                return back()->with('success', 'Status Has Been Changed.');
            }else{
                return back()->with('error', 'Updation Failed.');
            }
        }
    }

    public function countryEdit(Request $request, $id)
    {
        $data['country_list'] = Country::paginate(80);
        $data['edit_list'] = Country::where(['id' => $id])->first();
        return view('admin.country.edit-country', $data);
    }

    public function countryUpdate(Request $request, $id)
    {
        $request->validate([
            'country_name' => 'required|unique:countries,country_name',
        ]);
        $country = Country::where(['id' => $id])->first();
        $country->parent_id = $request->parent_id;
        $country->country_name = $request->country_name;
        $country->country_slug =  strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->country_name)));
        $country->updated_at = Carbon::now();
       $updated = $country->save();
       if($updated)
       {
        return back()->with('success', 'Country Has Been Updated successfully.');
       }else{
        return back()->with('error', 'Updation Failed.');
       }

    }

    public function countryDelete(Request $request, $id)
    {
        if(!empty($id))
        {
            $country = Country::find($id);
            $deleted = $country->delete();
            if($deleted)
            {
                return back()->with('success', 'Country Has Been Deleted successfully.');
            }else{
                return back()->with('error', 'Deletion Failed.');
            }
        }
    }
}
