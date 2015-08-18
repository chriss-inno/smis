<table id="datatables-4" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th>SNO</th>
        <th>Class name</th>
        <th>Descriptions</th>
        <th>Remarks</th>
        <th>Status</th>

    </thead>

    <tfoot>
    <tr>
        <th>SNO</th>
        <th>Class name</th>
        <th>Descriptions</th>
        <th>Remarks</th>
        <th>Status</th>

    </tfoot>

    <tbody>
    <?php $c=1;?>
    @if(count($el) >0 )
        @foreach($el->classes as $sc)
            <tr>
                <td>{{$c}}</td>
                <td>{{$sc->class_name}}</td>
                <td><?php echo $sc->class_descriptions; ?></td>
                <td>{{$sc->remarks}}</td>
                <td>{{$sc->status}}</td>
            </tr>
            <?php $c++;;?>
        @endforeach
    @endif
    </tbody>
</table>