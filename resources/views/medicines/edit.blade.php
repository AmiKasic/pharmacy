<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lijekovi-Uredi') }}
        </h2>
    </x-slot>

<div class="py-12">
    <div class="max-w-7yl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-2">
              @foreach ($medicines as $medicine )
        <form method="POST" action="{{ route('update_medicine') }}"> 
            @csrf
           <input type="hidden" name="id" value="{{$medicine->id}}"/>
            <div>
                <x-jet-label for="name" value="{{ __('Naziv') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{$medicine->name}}" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="year" value="{{ __('Godina') }}" />
                <x-jet-input id="year" class="block mt-1 w-full" type="date" name="year"  value="{{$medicine->year}}" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="price" value="{{ __('Cijena') }}" />
                <x-jet-input id="price" class="block mt-1 w-full" type="number" name="price" value="{{$medicine->price}}" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="category" value="{{ __('Kategorija') }}" />
                <x-jet-input id="category" class="block mt-1 w-full" type="number" name="category" value="{{$medicine->category}}" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="weight" value="{{ __('Težina') }}" />
                <x-jet-input id="weight" class="block mt-1 w-full" type="number" name="weight" value="{{$medicine->weight}}" required autofocus />
            </div>
            <div class="mt-4">
                <x-jet-label for="brand" value="{{ __('Brend') }}" />
                    <select id="brand" name="brand" class="form-select block w-full mt-1 border-gray-300 focus:border-indigo-300
                         focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                            <option selected="true" disabled="disabled">Odaberi</option>
                                @foreach($brands as $brand)
                            <option value="{{$brand->id}}"
                                @if($medicine->brand == $brand->id) selected
                                @endif>{{$brand->name}}</option>
                                @endforeach
                    </select>
            </div>


            <div class="flex items-center justify-end mt-4">
               

                <x-jet-button class="ml-4">
                    {{ __('Spremi') }}
                </x-jet-button>
            </div>
        </form>
        @endforeach
      </div>
        </div>
    </div>
</div>


    </x-app-layout>