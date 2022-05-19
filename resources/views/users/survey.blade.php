@extends("layouts.user_structure")

@section("description")
La page d'accueil du sondage de BigScreen
@endsection

@section("title")
Sondage
@endsection

@section("content")
    @extends("components.user_navbar")
    <div class="mt-4 p-2">
        <form action="{{route('questionnaire.store')}}" method='post'>
            @csrf
        {{-- start loop for --}}
        @foreach ( $questions as $question)


        <div class="card border-info bg-dark mt-2">

            <div class="card-body ">

                <h5 class="card-title ">Question {{$question->id}}/ 20 </h5>
                <p class="card-text">{{$question->title}}</p>

                {{-- if type==A --}}
                @if ($question->type == 'A')
                @foreach ( $question->propositions as $proposition )
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="reponse[{{$question->id}}]" id="flexRadioDefault1" value="{{$proposition}}">
                    <label class="form-check-label" for="flexRadioDefault1">
                        {{$proposition}}
                    </label>
                </div>
                @endforeach
                @endif

                {{-- if type==B --}}
                @if ($question->type == 'B')
                <div>
                    <input type="text" class="form-control bg-dark text-light" name="reponse[{{$question->id}}]" maxlength="255" required>
                </div>
                @endif
                {{-- if type==C --}}
                @if ($question->type == 'C')
                <div>
                    <input type="number" class="form-control bg-dark text-light" name="reponse[{{$question->id}}]" min=1  required>
                </div>
                @endif

            </div>

        </div>
        @endforeach
        {{-- end loop for --}}
        <button type="submit">fin</button>
        </form>
    </div>
@endsection
