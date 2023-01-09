
    <div style="align-content: center">
    
        <table border="1" width="80%">
        <tr>
        
            <td>id</td>
            <td>nce</td>
            <td>prenom</td>
            <td>nom</td>
        </tr>
        
        @foreach($data as $data)
        <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->montant}}</td>
         
        </tr>
        @endforeach
        </table>
        
    </div>
