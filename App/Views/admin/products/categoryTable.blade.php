
    <div class="table-responsive" id="loaded">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Slug name</th>
                    <th scope="col">Created at</th>
                    <th scope="col">Actions</th>

                </tr>
            </thead>
            <tbody>
                @if (count($categories))
                    @foreach ($categories as $item)
                        <tr>

                            <td>{{ $item['name']}}</td>
                            <td>{{ $item['format_name'] }}</td>
                            <td>{{ $item['added'] }}</td> 
                            
                            {{-- <td>{{ $item->name }}</td>
                            <td>{{ $item->format_name }}</td>
                            <td>{{ $item->created_at->toFormattedDateString() }}</td> --}}
                            <td>
                                <a href=""> <i class="fas fa-edit    "></i></a>
                                <a href=""> <i class="fa fa-times" aria-hidden="true"></i></a>
                            </td>
                        <tr>

                    @endforeach
                @else
                    <p>no products found</p>

                @endif

            </tbody>
        </table>
        
<h3> {!!$links!!}</h3>
    </div>