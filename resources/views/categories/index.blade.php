
@extends('layout')


@section('content')

    <section id="content">

    <div class="tray tray-center">
    <table class="table table-bordered table-striped">
        <thead>
        <tr class="primary">
            <th>#</th>
            <th>Titre</th>
            <th>Description</th>
            <th>Photos</th>
            <th>Action</th>

        </tr>
        </thead>
        <tbody>
            @foreach($categories as $categorie)
                    <tr>
                        <td>{{ $categorie['id'] }}</td>
                        <td><h4>{{ $categorie['title'] }}</h4></td>
                        <td>{{  str_limit(strip_tags($categorie['description']), 200) }}</td>
                        <td>
                            <img class="col-md-6 img-responsive"
                                 src="{{  $categorie['image'] }}" />
                        </td>


                        <td>
                            <a class="btn btn-sm btn-primary"><i class="fa fa-search"></i> Voir</a>
                            <a class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editer</a>
                            <a href="{{route('categories.remove', ['id'=>$categorie['id']])}}" class="btn btn-sm btn-danger"><i class="fa fa-times"></i> Supprimer</a>
                        </td>
                    </tr>
            @endforeach
        </tbody>
    </table>


    </div>
    </section>

@endsection
