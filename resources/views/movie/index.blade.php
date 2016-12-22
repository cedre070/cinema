
@extends('layout')


@section('content')

    <section id="content">
<a href="{{route('movie.create')}}"><button  class="success" type="button" name="button">Ajouter un Film</button></a>
    <div class="tray tray-center">
    <table class="table table-bordered table-striped">
        <thead>
        <tr class="primary">
            <th>#</th>
            <th>Titre</th>
            <th>Synopsis</th>
            <th>Photos</th>
            <th>Date de sortie</th>
            <th>En couverture</th>
            <th>Visibilite</th>
            <th>Note de presse</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach($movies as $movie)
                    <tr>
                        <td>{{ $movie['id'] }}</td>
                        <td><h4>{{ $movie['title'] }}</h4></td>
                        <td>{{  str_limit(strip_tags($movie['synopsis']), 200) }}</td>
                        <td>
                            <img class="col-md-6 img-responsive"
                                 src="{{  $movie['image'] }}" />
                        </td>
                        <td>{{Carbon\Carbon::parse($movie['date_release'])->format('d/m/Y') }}</td>
                        <td>
                            @if($movie['cover'] == 1)
                                <i class="fa fa-check"></i>
                            @else
                                <i class="fa fa-times"></i>
                            @endif
                        </td>
                        <td>
                            @if($movie['visible'] == 1)
                                <i class="fa fa-check"></i>
                            @else
                                <i class="fa fa-times"></i>
                            @endif
                        </td>

                        <td>
                            {!!  str_repeat("<i class='fa fa-star'></i>",
                            $movie['note_presse']) !!}
                        </td>

                        <td>
                            <a href="{{route('movie.view', ['id'=>$movie['id']])}}" class="btn btn-sm btn-primary"><i class="fa fa-search"></i> Voir</a>
                            <a class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editer</a>
                            <a href="{{route('movie.remove', ['id'=>$movie['id']])}}" class="btn btn-sm btn-danger"><i class="fa fa-times"></i> Supprimer</a>
                        </td>
                    </tr>
            @endforeach
        </tbody>
    </table>


    </div>
    </section>

@endsection
