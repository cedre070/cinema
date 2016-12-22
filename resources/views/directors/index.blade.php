@extends('layout')


@section('content')

    <section id="content">

    <div class="tray tray-center">
    <table class="table table-bordered table-striped">
        <thead>
        <tr class="primary">
            <th>#</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Photos</th>
            <th>Date de naissance</th>
            <th>Biographie</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach($directors as $director)
                    <tr>
                        <td>{{ $director['id'] }}</td>
                        <td><h3>{{ $director['lastname'] }}</h3></td>
                        <td><h4>{{ $director['firstname'] }}</h4></td>
                        <td>
                            <img class="col-md-6 img-responsive"
                                 src="{{  $director['image'] }}" />
                        </td>
                        <td>{{  str_limit(strip_tags($director['biography']), 200) }}</td>
                        <td>{{ Carbon\Carbon::parse($director['dob'])->format('d/m/Y') }}</td>




                        <td>
                            <a class="btn btn-sm btn-primary"><i class="fa fa-search"></i> Voir</a>
                            <a class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editer</a>
                            <a href="{{route('directors.remove', ['id'=>$director['id']])}}" class="btn btn-sm btn-danger"><i class="fa fa-times"></i> Supprimer</a>
                        </td>
                    </tr>
            @endforeach
        </tbody>
    </table>


    </div>
    </section>

@endsection
