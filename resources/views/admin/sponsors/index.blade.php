@extends('layouts.admin')

@section('content')

<div class="container">
    <h1 class="text-center">Sponsorizza il tuo appartamento per metterlo in risalto</h1>

    <h4 class="text-center">A cosa serve la sponsorizzazione?</h4>

    <p class="pt-4"> La sponsorizzazione permetterà al tuo appartamento di:</p>
    <ul class="pb-5 list-unstyled">
        <li>
            <i class="fa-regular fa-hand-point-right fa-beat fa-lg me-2" style="color: #ff7b7f;"></i> Farlo apparire in Homepage nella sezione “Appartamenti in Evidenza”;
        </li>
        <li>
            <i class="fa-regular fa-hand-point-right fa-beat fa-lg me-2" style="color: #ff7b7f;"></i> Nella pagina di ricerca, verrà posizionato sempre prima di un appartamento non
            sponsorizzato che soddisfa le stesse caratteristiche di ricerca.
        </li>
    </ul>

    <div class="row justify-content-center row-cols-1 row-cols-md-2 row-cols-lg-3 g-3 ">
        @forelse ($sponsors as $sponsor)
        <div class="col">
            <div class="card card-sponsor">
                <div class="card-header">
                    <h4 class="card-title text-center">{{$sponsor->name}}</h4>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        Utilizza questo pacchetto per usufruire di <strong>{{$sponsor->duration}}</strong> ore di vantaggi!
                    </p>
                </div>

                <div class="card-footer">
                    <p class="card-text text-center">Prezzo: <strong class="price_sponsor text-center">{{$sponsor->price}} €</strong></p>
                </div>

            </div>
        </div>

        @empty
        <p>Sponsor attualmente non disponibili</p>
        @endforelse
    </div>

    <p class="pt-3">
        Per sponsorizzare un appartamento, vai su -> <a class="text-decoration-none text-black fw-bold" href="{{ route('admin.apartments.index') }}">Appartamenti</a> -> clicca sull'icona a forma di occhio per visualizzare l'appartamento che desideri sponsorizzare "<i class="fa-solid fa-eye"></i>" e clicca su -> <strong class="text-black ">Sponsorizzami</strong>. Da lì potrai scegliere uno dei tre tipi di sponsorizzazione sopra esposti e andare nella sezione dedicata al pagamento.
    </p>

    <p class="pt-3">
        <strong class="text-black">Puoi sponsorizzare più volte lo stesso appartamento</strong>, anche se l'attuale abbonamento non è ancora scaduto. L'abbonamento acquistato successivamente verrà inserito in coda.
    </p>

    <p class="py-3" id="conditions">
        <em>
            Terminato il periodo di sponsorizzazione, l’appartamento tornerà ad essere
            visualizzato normalmente. Potrai acquistare nuovamente il pacchetto promozionale quando vorrai.
        </em>
    </p>
</div>
@endsection