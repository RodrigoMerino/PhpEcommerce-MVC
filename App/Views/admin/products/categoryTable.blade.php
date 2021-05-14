
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
                                <a href="" data-toggle="modal" data-target="#basicExampleModal" > <i class="fas fa-edit    "></i></a>
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

<!-- Modal -->
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn" data-dismiss="modal" >Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>