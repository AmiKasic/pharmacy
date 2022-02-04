<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Proizvođači lijekova') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- <x-jet-welcome /> -->
                <div class="p-2">
                    <h1 class="font-xl text-center"><b>Proizvođači lijekova upozoravaju: Neki lijekovi će nestati s tržišta jer se zbog ograničenja cijena ne isplati njihova proizvodnja</b></h1>
                    <hr/>
                    <br><br>
                    <div class="align:center">
                        <img src="picture/slika4.png" class="rounded mx-auto d-block" alt="..." >  
                    </div>  
                    <br><br>
                    <b><i><u>Predstavnici Udruge proizvođača lijekova pri Hrvatskoj udruzi poslodavaca (HUP UPL) na druženju s novinarima predstavili su trendove u farmaceutskoj industriji u kontekstu pandemije koronavirusa i nove farmaceutske strategije Europske unije. </u></i></b>
                    <br><br>
                    <p style="text-align: justify; p-2">Pandemija koronavirusa dovela je do značajnih poremećaja u proizvodnji i prodaji lijekova. Jedan od glavnih izazova koji je pogodio farmaceutsku industriju bile su poteškoće s pristupom zdravstvenoj zaštiti, s čime su se suočili građani Hrvatske i drugih europskih zemalja.

'Procjenjuje se da tokom pandemije u Europi nije obavljeno 100 miliona pregleda za rano otkrivanje raka te da gotovo milionn slučajeva raka nije dijagnosticirano', rekao je Jerko Jakšić, predsjednik HUP UPL-a i predsjednik Uprave PharmaSa.
Zbog nedostupnosti liječničke skrbi prvi put je došlo do pada prodaje lijekova na recept. 'Primjerice, prodaja citostatika smanjena je u prosjeku za 20 posto', otkrio je Jakšić.

Pandemija je dovela i do nestašica lijekova zbog problema u opskrbnim lancima. No za razliku od drugih europskih zemalja, Hrvatska je izbjegla nestašice zahvaljujući snažnoj domaćoj proizvodnji. 'Pokazalo se da je farmaceutska industrija jedan od najvažnijih faktora u osiguravanju stabilnosti zdravstvenog sustava', naglasio je Jakšić.

Kako bi se u budućnosti osigurala stabilna isporuka lijekova, farmaceutska strategija za Europu predviđa povećanje proizvodnje i ulaganja u Europi, uz jačanje opskrbnih lanaca. U tom kontekstu naša farmaceutska industrija ima velik potencijal za širenje kapaciteta jer spadamo u red rijetkih zemalja u svijetu koje imaju sve segmente farmaceutske proizvodnje – od istraživanja i razvoja, preko proizvodnje aktivnih farmaceutskih supstancija, do gotovih farmaceutskih proizvoda.</p>
                    <br><br>
                    <p style="text-align: justify; p-2">Kada je riječ o cijenama lijekova, Jakšić je naglasio da su one kod nas visoko regulirane te da je zato udio troškova lijekova u bolničkom sustavu znatno niži nego u drugim europskim državama. Upozorio je da je Hrvatska jedna od rijetkih europskih zemalja u kojima je još uvijek na snazi ograničenje cijena bezreceptnih lijekova, uvedeno u početku pandemije. 'Cijene tih lijekova su 30 posto ispod prosjeka EU-a, a s obzirom na porast troškova proizvodnje, neki lijekovi će nestati s tržišta jer se proizvođačima neće isplatiti proizvodnja', rekao je Jakšić. </p>
                    <br><br>
                    <div class="align:center">
                        <img src="picture/slika5.png" class="rounded mx-auto d-block" alt="..." >  
                    </div> 
                    <br>
                    <p style="text-align: justify; p-2">Proizvođači lijekova veliku priliku za rast prodaje i postizanje ušteda u zdravstvenom sustavu vide u povećanju udjela generičkih i biosličnih lijekova. Osobito velik prostor vide u uvođenju biosličnih lijekova, a koji trenutno pokrivaju samo 13 posto tržišta bioloških lijekova.

Govoreći o položaju farmaceutske industrije u Hrvatskoj, Jakšić je naglasio da je ona jedan od najsnažnijih industrijskih sektora i vodećih izvoznika, o čemu svjedoče impresivni pokazatelji rasta. U zadnjih deset godina prihodi sektora povećani su za 61 posto, na 7,42 milijarde kuna, pri čemu je rast izvoza bio ključni faktor uspjeha. U 2020. godini izvoz je dosegnuo 5,5 milijardi kuna i čini oko 73 posto ukupnih prihoda. Farmaceutska industrija u Hrvatskoj svoje proizvode izvozi u 60-ak zemalja svijeta, a ključna tržišta su SAD i EU.

Rast prihoda pratio je i rast zaposlenosti te je u promatranom razdoblju broj zaposlenih povećan s 3500 na gotovo 6000.</p>
                    <br>

                        <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Country</th>
      <th scope="col">Level</th>
      <th scope="col">Protected medicine name</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row">1</td>
      <td>Bosnalijek</td>
      <td>Bosna i Hercegovina</td>
      <td>10</td>
      <td>ULCOSAN</td>
    </tr>
    <tr>
      <td scope="row">2</td>
      <td>AVENE</td>
      <td>Hrvatska</td>
      <td>9</td>
      <td>OMEZOL</td>
    </tr>
    <tr>
    <td scope="row">3</td>
      <td>Naturapharm</td>
      <td>Bosna i Hercegovina</td>
      <td>3</td>
      <td>OMEPRAZID</td>
    </tr>
    <tr>
    <td scope="row">4</td>
      <td>Alkaloid</td>
      <td>Slovenija</td>
      <td>2</td>
      <td>OMEZOL</td>
    </tr>
    <tr>
    <td scope="row">5</td>
      <td>Farmavita</td>
      <td>Bosna i Hercegovina</td>
      <td>4</td>
      <td>ULTOP</td>
    </tr>
    <tr>
    <td scope="row">6</td>
      <td>Solgar</td>
      <td>Srbija</td>
      <td>5</td>
      <td>DEMEPRAZOL</td>
    </tr>
  </tbody>
</table>


                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>