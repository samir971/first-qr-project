<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class MealController extends Controller
{
    public function index(){
        $meals = Meal::all();
        return view('dashbord', compact('meals'));
    }
    public function create(){
        return view('create_meal');
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'price'=>'required|numeric'
        ]);
        $meal= new Meal;
        $meal->name=$request->input('name');
        $meal->description=$request->input('description');
        $meal->price=$request->input('price');
        if($request->hasFile('image')){
            $imageName=time().'.'. $request->image->extension();
            $request->image->move(public_path('images/meals'),$imageName);
            $meal->image=$imageName;
        }
        $meal->save();
        return redirect()->route('dashbord');
    }
    public function showQrCode(){
        $url=route('dashbord');
        $qrCode=QrCode::size(300)->generate($url);
        return view('qr_code',compact('qrCode'));
    }
}
