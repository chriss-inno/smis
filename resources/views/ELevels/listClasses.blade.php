
    <?php $c=1;?>
    @if(count($el) >0 )
        @foreach($el->classes as $sc)
            <tr>
                <td>{{$c}}</td>
                <td>{{$sc->class_name}}</td>
                <td><?php echo $sc->class_descriptions; ?></td>
                <td>{{$sc->remarks}}</td>
                <td>{{$sc->status}}</td>
                <td id="{{$sc->id}}"><a class="addClassStreams" href="#">Add/View/Update</a></td>
            </tr>
            <?php $c++;;?>
        @endforeach
    @endif
