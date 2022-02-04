<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kontakt') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- <x-jet-welcome /> -->
                <div class="p-2">
                    <div class="align:center">
                        <img src="picture/slika6.png" class="rounded mx-auto d-block" alt="..." >  
                        <br>
                        <h1><b>KONTAKTIRAJTE NAS</b></h1>
                        <br>
                        <p style="text-align: justify; p-2">Ukoliko imate bilo kakvih pitanja o našim proizvodima i uslugama koje nudimo, korištenju online kupovine, poteškoća koje ne možete riješiti ili želite uspostaviti poslovni odnos sa Grupacijom Europharm, kontaktirajte nas putem web forme popunjavanjem dole navedenih polja. </p>
                        <br><br>
                        <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Korisničko ime</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <br><br>
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Šifra</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
    <br><br>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Zapamti me</label>
    <br><br>
  </div>
  <x-jet-button class="ml-4">
                    {{ __('Spremi') }}
                </x-jet-button>
</form>

                    </div>  
                </div>
            </div>
        </div>
    </div>


    </x-app-layout>