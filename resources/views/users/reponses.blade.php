@extends("layouts.user_structure")

@section('description')
    La page des reponses d'un utilisateur
@endsection

@section('title')
    Réponses
@endsection

@section('content')
    @extends("components.user_navbar")

    <div class="mt-4 p-2">

        <div class="card border-success border-3 bg-dark p-2 ">

            Consultez ci-dessous vos réponses respectives du questionnaire précédemment rempli


        </div>
        @foreach ( $reponses as $reponse)
        {{-- start loop for --}}
        <div class="card border-success bg-dark mt-2">
            <div class="card-body ">
                <h5 class="card-title ">Question {{$reponse->question['id']}}/ 20 </h5>
                <p class="card-text">{{$reponse->question['title']}}</p>


                <div >
                    <span class=" bg-dark text-info">{{$reponse->title}}</span>
                </div>



            </div>
        </div>
        {{-- end loop for --}}
        @endforeach

    </div>
@endsection
