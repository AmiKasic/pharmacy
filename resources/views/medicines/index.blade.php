<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Početna-Lijekovi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="\add_medicine" class="m-2 p-2 text-xl flex items-center justify-end">Dodaj lijek</a>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                    <h1 class="font-xl mb-4 text-center">Ovdje ce biti izlistani lijekovi</h1>
                    <hr/>

                    <div class="grid grid-cols-4 gap-4 p-4 justify-items-center">

                        
                    @foreach ($medicines as $medicine)

                    

<div class="flex space-x-4">
    <div class="flex-1"><p class="p-2"> {{ $medicine->name }} - {{ $medicine->year }} </div>
    <div class="flex-1">
        <form method="POST" action="{{ route('delete_medicine') }}">
            @csrf
            <input type="hidden" name="id" value="{{$medicine->id}}">
            <div class="p-2">
                <button class="ml-4 inline-flex items-center px-4 py-2 bg-red-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase ml-4" style="color:black; background-color:green;">
                    {{ __('Obrisi') }}
                </button>
            </div>
        </form>
    </div>
    <div class="flex-1">
        <form method="POST" action="{{ route('edit_medicine') }}">
            @csrf
            <input type="hidden" name="id" value="{{$medicine->id}}">
            <div class="p-2">
                <button class="ml-4 inline-flex items-center px-4 py-2 bg-red-700 border border-transparent rounded-ml font-semibold text-xs text-white uppercase">
                    {{ __('Uredi') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endforeach




                        <div>
                            <h1>Upit 1.</h1>
                            <hr/>
                            @foreach($most_common_medicines as $most_common_medicine)
                            <p>{{$loop->iteration}}. {{$most_common_medicine->name}} - {{$most_common_medicine->price}} - {{$most_common_medicine->category}}</p> 
                            @endforeach
                        </div>
                        <div>
                            <h1>Upit 2.</h1>
                            <hr/>
                            <p>{{$number_of_medicines}}</p> 
                        </div>
                        
                        <div>
                            <h1>Upit 3.</h1>
                            <hr/>
                            @foreach($names as $name)
                            <p>{{$loop->iteration}}. {{$name->name}} - {{$name->price}} - {{$name->category}} - {{$name->weight}}</p> 
                            @endforeach
                        </div>
                        <div>
                            <h1>Upit 4.</h1>
                            <hr/>
                            @foreach($categories as $category)
                            <p>{{$loop->iteration}}. {{$category->name}} - {{$category->year}} - {{$category->protected_medicine_name}}</p> 
                            @endforeach
                        </div>
                        <div>
                            <h1>Upit 5.</h1>
                            <hr/>
                            @foreach($brands as $brand)
                            <p>{{$loop->iteration}}. {{$brand->name}} - {{$brand->description}}</p> 
                            @endforeach
                        </div>
                        <div>
                            <h1>Upit 6.</h1>
                            <hr/>
                            @foreach($name_categories as $name_category)
                            <p>{{$loop->iteration}}. {{$name_category->name}} - {{$name_category->country}}</p> 
                            @endforeach
                        </div>

                        


                        



                    </div>
                    
                        
                       

                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>