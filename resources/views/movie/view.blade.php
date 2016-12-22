@extends('layout')


@section('content')



<main style="text-align:center">


<h1>{{ $movie['title'] }}</h1>
<p>{{Carbon\Carbon::parse($movie['date_release'])->format('d/m/Y') }}</p>

<p>{!!  str_repeat("<i class='fa fa-star'></i>", $movie['note_presse']) !!}</p>
<div class="col-md-12 affiche" style="display:flex;align-items:center;justify-content:center;margin-bottom:20px;">
  <img class="col-md-6 img-responsive"src="{{  $movie['image'] }}" style="width:20%;" />
</div>

<div class="" style='margin-bottom:20px;'>{!!$movie['trailer']!!}

</div>
{!!$movie['synopsis']!!}

</main>















@endsection
