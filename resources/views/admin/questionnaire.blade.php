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
    <h2>Liste des questions</h2>
    
    <table class="GeneratedTable">
      <thead>
        <tr>
          <th>Numéro de la question ( . . . /20 )</th>
          <th>Intitulé de la question</th>
          <th>Type de la question</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            @foreach ($questions as $question)
                <div>Questions {{ $question->id }}/20</div>
            @endforeach
          </td>
          <td>
            @foreach ($questions as $question)
                <div>{{ $question->title }}</div>
            @endforeach
          </td>
          <td>
            @foreach ($questions as $question)
                <div>{{ $question->type }}</div>
            @endforeach
          </td>
        </tr>
      </tbody>
    </table>

    @endsection
@endsection