@extends("layouts.admin_structure")

@section("admin_description")
La page d'administration du sondage de BigScreen
@endsection

@section("admin_title")
Tableau de bord
@endsection

@section("admin_content")
    @extends("components.admin_sidebar")

    @section("sidebar")
        <h1>Réponses</h1>

        {{-- <h2>QUESTIONS</h2>
        @foreach ($questions as $question)
            <div>Questions {{ $question->id }}/20</div>
            <div>{{ $question->title }}</div>
            <br>
        @endforeach --}}
    @endsection
@endsection