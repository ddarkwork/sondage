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

    <style>
        /* BEGIN TABLE ADMIN CSS */
        table.GeneratedTable {
            width: 100%;
            background-color: transparent;
            border-collapse: collapse;
            border-width: 2px;
            border-color: #777E90;
            border-style: solid;
            color: white;
            margin-bottom: 5%;
        }
            
        table.GeneratedTable td, table.GeneratedTable th {
            border-width: 3px;
            border-color: #23262F;
            border-style: solid;
            padding: 10px;
        }
            
        table.GeneratedTable thead {
            background-color: #9757D7;
        }

        td>div {
            border-top: 1px solid #23262F;
            border-bottom: 1px solid #23262F;
            padding: 10px;
        }
        /* END TABLE ADMIN CSS */
        
        /* BEGIN BODY CSS */
        h2 {
            color: white;
            text-align: center;
            padding: 15px;
        }

        marquee {
            color: white
        }
        /* END BODY CSS */
    </style>
    <h2>Liste des réponses aux questions</h2>
      
    @foreach ($reponses as $reponse)

    <table class="GeneratedTable">
      <thead>
        <tr>
          <th>Numéro de la question ( . . . /20 )</th>
          <th>Intitulé de la question</th>
          <th>Réponse à la question</th>
        </tr>
      </thead>

      
      
      <tbody>
        <tr>
          <td>
            @foreach ($questions as $question)
                <div>Question {{ $question->id }}/20</div>
            @endforeach
          </td>
          <td>
            @foreach ($questions as $question)
                <div>{{ $question->title }}</div>
            @endforeach
          </td>
          <td>
                <div>{{ $reponse->email }}</div>
                <div>{{ $reponse->age }}</div>
                <div>{{ $reponse->sex }}</div>
                <div>{{ $reponse->family_members }}</div>
                <div>{{ $reponse->job }}</div>
                <div>{{ $reponse->used_vr }}</div>
                <div>{{ $reponse->vr_content_store }}</div>
                <div>{{ $reponse->futur_vr }}</div>
                <div>{{ $reponse->bs_users }}</div>
                <div>{{ $reponse->bs_use }}</div>
                <div>{{ $reponse->bs_pics_score }}</div>
                <div>{{ $reponse->bs_comfort_score }}</div>
                <div>{{ $reponse->bs_network_score }}</div>
                <div>{{ $reponse->bs_3d_score }}</div>
                <div>{{ $reponse->bs_audio_score }}</div>
                <div>{{ $reponse->bs_notif }}</div>
                <div>{{ $reponse->smartphone_use }}</div>
                <div>{{ $reponse->record_shows }}</div>
                <div>{{ $reponse->exclusive_games }}</div>
                <div>{{ $reponse->dream_features }}</div>
          </td>
        </tr>
      </tbody>
      
    </table>

    @endforeach
    
    @endsection
@endsection