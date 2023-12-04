@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="contactbutton"><h1>Formulaire de contact</h1></div>
        <hr>
        <form action="{{ route('contact') }}" method="GET">
            @csrf
            <div class="form-group">
                <label for="sujet">Sujet</label>
                <input type="text" class="form-control @error('sujet') is-invalid @enderror"
                       name="sujet" id="sujet">
                @error('sujet')
                <div class="invalid-feedback">{{$errors->first('sujet')}}</div>
                @enderror

            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror"
                       name="email" id="email">
                @error('email')
                <div class="invalid-feedback">{{$errors->first('email')}}</div>
                @enderror

            </div>
            <div class="form-group">
                <label for="content">Message</label>
                <textarea name="content" id="content" class="form-control @error('content')
                    is-invalid @enderror" rows="7"></textarea>
                @error('content')
                <div class="invalid-feedback">{{$errors->first('content')}}</div>
                @enderror
            </div>
            <div class="contactbutton"><button type="submit" class="btn btn-primary">Envoyer</button></div>
        </form>

    </div>



@endsection
