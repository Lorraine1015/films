<h1>{{$catalog->name}}</h1>
<p>Editar lista</p>
    <form method="POST"  action="{{route('films.catalogs.update',['catalog'=>$catalog])}}">
        @csrf 
        {{method_field('PUT')}}
        <ul>
        @foreach($films as $item)
            <li>
                <input type="checkbox" name="catalogs[]" value="{{$item->id}}">
                {{$item->name}}         
            </li>
        @endforeach    
        
        </ul>
        <input type="submit" value="Guardar">
    </form>