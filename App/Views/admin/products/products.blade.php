@extends('includes.base')
@section('content')
<style>
    /* temporal styling--> move to css */
    .btn.btn-md {
    padding: 0.5rem 1.6rem;
    font-size: 0.9rem;
    font-weight: 500;
    /* font-weight: bold; */
}
</style>
    <h1>Product Categories</h1>

  

    <form action="/admin/admin/createcategory" method="post">
        {{-- <div  class="form-row align-items-center">
            <div class="col col-md-3  my-1">
                <input type="text" class="form-control" placeholder="Buscar categoria">
            </div>
            <div class="col col-md-1">
                <button type="submit" class="btn btn-primary btn-md mt-1 blue-gradient">Buscar</button>
              </div> --}}
                       
            <div class="col col-md-5  my-1">
                <input type="text" class="form-control" name="category" placeholder="Crear categoria">

            </div>
            <div class="col-auto my-1">
              <button type="submit" class="btn btn-primary btn-md mt-1 blue-gradient">Crear</button>
            </div>
        </div>
    </form>

   
    <div class="table-responsive">
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

                            <td>{{ $item->name }}</td>
                            <td>{{ $item->short_name }}</td>
                            <td>{{ $item->created_at->toFormattedDateString() }}</td>
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
    </div>
@endsection
