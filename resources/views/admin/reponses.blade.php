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
      
    

    @foreach ($identifies as $identify)
      <table class="GeneratedTable">
          <thead>
              <th>Q°</th>
              <th>Question</th>
              <th>Réponse</th>
          </thead>
          <tbody>
              @foreach ($identify->answers as $answer)
                  <tr>
                      <td>{{$answer->question->id}}</td>
                      <td class="label">{{$answer->question->title}}</td>
                      <td>{{$answer->title}}</td>
                  </tr>
              @endforeach
          </tbody>
      </table>
  @endforeach

    
    @endsection
@endsection