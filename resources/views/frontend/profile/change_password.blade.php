@extends('frontend.main_master')

@section('content')

{{-- @php
    $user =  DB::table('users')->where('id', Auth::user()->id)->first();
@endphp --}}
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
                <h3 class="text-center"><span class="text-danger">Changer votre mot de passe  </span></h3>

                <div class="card-body">
                    <form method="post" action="{{ route('user.password.update') }}" >
                        @csrf
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Ancien mot de passe <span></span></label>
                            <input type="password" name="oldpassword" id="current_password" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Nouveau mot de passe <span></span></label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Confirmer le mot de passe <span></span></label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-danger">Mise à jour</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</div>


@endsection
