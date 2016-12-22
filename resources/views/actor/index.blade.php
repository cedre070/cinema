
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
            @foreach($actors as $actor)
                    <tr>
                        <td>{{ $actor['id'] }}</td>
                        <td><h3>{{ $actor['lastname'] }}</h3></td>
                        <td><h4>{{ $actor['firstname'] }}</h4></td>
                        <td>
                            <img class="col-md-6 img-responsive"
                                 src="{{  $actor['image'] }}" />
                        </td>
                        <td>{{ Carbon\Carbon::parse($actor['dob'])->format('d/m/Y') }}</td>
                        <td>{{  str_limit(strip_tags($actor['biography']), 200) }}</td>




                        <td>
                            <a class="btn btn-sm btn-primary"><i class="fa fa-search"></i> Voir</a>
                            <a class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editer</a>
                            <a href="{{route('actors.remove', ['id'=>$actor['id']])}}" class="btn btn-sm btn-danger"><i class="fa fa-times"></i> Supprimer</a>
                        </td>
                    </tr>
            @endforeach
        </tbody>
    </table>


    </div>
    </section>

@endsection
