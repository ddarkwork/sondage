@extends("layouts.user_structure")

@section("description")
    Page de finalisation
@endsection

@section("title")
    Finalisation
@endsection

@section("content")
    @extends("components.user_navbar")
    <div class="card border-primary bg-dark mt-4" >
        <div class="card-body ">
          <h5 class="card-title text-success">Votre formulaire a bien été envoyé !</h5>
          <p class="card-text">Toute l’équipe de <strong>Bigscreen</strong> vous remercie pour votre engagement. Grâce à votre investissement, nous vous préparons une application toujours plus facile à utiliser, seul ou en famille.
            Si vous désirez consulter vos réponse ultérieurement, vous pouvez consultez cette adresse
            <a href="{{ route("reponse",$token) }}" ><i>{{ route("reponse",$token) }}</i></a> </p>
        </div>
    </div>
@endsection
