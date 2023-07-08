@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card p-3">
                <h1 class="text-center"></h1>
                <ul class="list-unstyled">
                    <li class="py-2"><strong>Messaggio per l' appartamento:</strong> {{$apartment->title}}</li>
                    <li>
                        @if ($apartment->image)
                        <img class="img-fluid" style="height: 100px" src=" {{ asset('storage/' . $apartment->image[0]) }}">
                        @else
                        <img class="img-fluid" src=" {{ asset('storage/' . 'uploads/placeholder.png') }}">
                        @endif
                    </li>
                    <li><strong>Messaggio numero:</strong> {{$message->id}}</li>
                    <li><strong>Da:</strong> {{$message->name}} {{$message->surname}}</li>
                    <li><strong>e-mail:</strong> {{$message->email}}</li>
                    <li><strong>Messaggio:</strong> {{$message->message}}</li>
                </ul>
            </div>
        </div>
    </div>
    <a class="btn btn-primary my-3" href="{{ route('admin.apartments.index') }}" role="button">Return</a>
</div>
@endsection