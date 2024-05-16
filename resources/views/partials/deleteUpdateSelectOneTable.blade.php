
<select id="{{$id}}" name="{{$id}}" class="bg-light border border-light">
    <option value="0">{{$tableName}} for {{$operation}}...</option>
    @foreach($data as $d)
        <option value="{{$d->id}}">{{$d->name}}</option>
    @endforeach
</select>
