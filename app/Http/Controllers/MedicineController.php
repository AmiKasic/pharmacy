<?php

namespace App\Http\Controllers;
use DB;

use App\Models\Medicine;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        // ispis svih lijekova, njihovih cijena i kategorija
        $most_common_medicines = DB::table('medicines')
            ->select('medicines.name', 'medicines.price', 'medicines.category') 
            ->join('categories', 'medicines.category', '=', 'categories.id')
            ->get();

        
        // ispis svih lijekova od 1.12.2021 do 31.12.2021
        $from = '2021-12-01 00:00:00';
        $to = '2021-12-31 23:59:59';

        $number_of_medicines = DB::table('medicines')
        ->whereBetween('year', [$from, $to])
        ->count();

        
        
        // ispis lijekova koji pocinju sa A
        $names = DB::table('medicines')
        ->select('medicines.name', 'medicines.price', 'medicines.category', 'medicines.weight')
        ->from('medicines')
        ->where('medicines.name', 'like', 'A%')
        ->get();

        // ispis naziva kategorija i njihovog zastitnog imena, te datuma tog lijeka na osnovu kategorija.id za koje je cijena manja od 25
        $categories = DB::table('medicines')
        ->select('medicines.name', 'medicines.year', 'categories.name', 'categories.protected_medicine_name')
        ->join('categories', 'medicines.category', '=', 'categories.id')
        ->where('medicines.price', '<', '25')
        ->get();
        
        // ispis svih lijekova određene marke(brenda)
        $brands = DB::table('medicines')
        ->select('medicines.name', 'medicines.price', 'brands.name', 'brands.description')
        ->leftjoin('brands', 'medicines.brand', '=', 'brands.id')
        ->get();

        // ispis svih marki lijekova iz BiH
        $name_categories = DB::table('categories')
        ->select('categories.name', 'categories.country')
        ->from('categories')
        ->where('categories.country', 'like', 'Bosna i Hercegovina')
        ->get();

        

        $medicine = DB::table('medicines')
        ->get();

        
       

            return view('medicines.index',
            [
                'most_common_medicines' => $most_common_medicines,
                'number_of_medicines' => $number_of_medicines,
                
                'names' => $names,
                'categories' => $categories,
                'brands' => $brands,
                'name_categories' => $name_categories,
                'medicines' => $medicine,
            ]); 

        

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = DB::table('brands')
            ->get();

        return view('medicines.add', ['brands' => $brands]); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        DB::table('medicines')->insert([
            'name' => $request->name,
            'year' => $request->year,
            'price' => $request->price,
            'category' => $request->category,
            'weight' => $request->weight,
            'brand' => $request->brand, 
        ]);

        return redirect()->route('medicines');

    }

    public function delete(Request $request){
        $id=$request->id;

        Medicine::destroy($id);

        return redirect()->route('medicines');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function show(Medicine $medicine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $id = $request->id;

        $medicines = DB::table('medicines')
        ->where('id', $id)
        ->get();

        $brands = DB::table('brands')
        ->get();

        return view('medicines.edit', ['medicines' => $medicines , 'brands' => $brands]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;

        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|integer',
        ]);

        $update_query = DB::table('medicines')
        ->where('id', $id)
        ->update([
            'name' => $request->name,
            'year' => $request->year,
            'price' => $request->price,
            'category' => $request->category,
            'weight' => $request->weight,
            'brand' => $request->brand,
        ]);

        return redirect()->route('medicines');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicine $medicine)
    {
        //
    }
}
