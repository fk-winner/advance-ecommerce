@extends('frontend.main_master')

@section('content')

<div class="body-content">

<div class="container">
    <div class="row">
        <div class="col-md-2"><br>
            <img src="{{ (!empty($user->profile_photo_path))? url('upload/user_images/'.$user->profile_photo_path):url('upload/profile.png') }}"
            alt="" class="card-img-top" style="border-radius: 50%" height="100%" width="100%"><br>
            <ul class="list-group list-group-flush">
                <a href="{{ route('dashboard') }}" class="btn btn-primary btn-sm btn-block">Accueil</a>
                <a href="{{ route('user.profile') }}" class="btn btn-primary btn-sm btn-block">Modifier le profil</a>
                <a href="{{ route('change.password') }}" class="btn btn-primary btn-sm btn-block">Changer le mot passe</a>
                <a href="{{ route('user.logout') }}" class="btn btn-danger btn-sm btn-block">Se deconnecter</a>

            </ul>
        </div>
        <div class="col-md-2">

        </div>
        <div class="col-md-6">
            <div class="card">
                <h3 class="text-center"><span class="text-danger">Salut... </span><strong>{{ Auth::user()->name }}</strong> Bienvenue sur WinShop</h3>
            </div>
        </div>
    </div>
</div>

</div>


@endsection
