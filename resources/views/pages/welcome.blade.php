@extends('layout')


@section('content')
    <i class='fa fa-dashboard'></i> Homepage
<div class="row">

<div class="col-md-3">
  <div class="panel panel-tile text-center br-a br-light">
    <div class="panel-body bg-light">
      <i class="fa fa-film text-muted fs45 br64 bg-light dark p15 ph20 mt10"></i>
      <h1 class="fs35 mbn">{{$nbMovies}}</h1>
      <h6 class="text-system">FILMS VISIBLE</h6>
    </div>
  </div>
</div>
<div class="col-md-3">
  <div class="panel panel-tile text-center">
  <div class="panel-body bg-primary light">
    <i class="fa fa-comments text-muted fs45 br64 bg-primary p15 ph20 mt10"></i>
    <h1 class="fs35 mbn">{{$nbComments}}</h1>
    <h6 class="text-white">COMMENTAIRES TOTAL</h6>
  </div>
</div>
</div>

<div class="col-md-3">
  <div class="panel panel-tile text-center">
    <div class="panel-body bg-info light">
      <i class="fa fa-money text-muted fs45 br64 bg-info p15 ph20 mt10"></i>
      <h1 class="fs35 mbn">{{$sumBudgetMovies}}$</h1>
      <h6 class="text-white">BUDGET TOTAL FILMS</h6>
    </div>
  </div>
</div>

<div class="col-md-3">
  <div class="panel panel-tile text-center">
    <div class="panel-body bg-success light">
      <i class="fa fa-clock-o text-muted fs45 br64 bg-success p15 ph20 mt10"></i>
      <h1 class="fs35 mbn">{{round($moyDureeMovies)}}h</h1>
      <h6 class="text-white">MOYENNE DUREE FILMS</h6>
    </div>
  </div>
</div>
</div>
<div class="row">


<div class="col-md-6">

                <!-- User Group Widget -->
                <div class="panel user-group-widget">
                  <div class="panel-heading">
                    <span class="panel-icon">
                      <i class="fa fa-users"></i>
                    </span>
                    <span class="panel-title"> Recent User Activity</span>
                  </div>
                  <div class="panel-menu">
                    <div class="input-group ">
                      <span class="input-group-addon">
                        <i class="fa fa-search"></i>
                      </span>
                      <input type="text" class="form-control" placeholder="Search user...">
                    </div>
                  </div>

              <div class="panel-body panel-scroller pn scroller scroller-active" style="max-height: 513px;"><div class="scroller-bar" style="height: 512px;"><div class="scroller-track" style="height: 502px; margin-bottom: 5px; margin-top: 5px;"><div class="scroller-handle" style="height: 400.642px; top: 91.8284px;"></div></div></div><div class="scroller-content">
<div class="row">
@foreach ($getDernierUsers as $getDernierUser)

                      <div class="col-md-3">
                        <img src="{!!asset($getDernierUser->avatar)!!}" class="user-avatar">
                        <div class="caption">
                          <h5>{{$getDernierUser->username}}
                            <br>
                            <small>User</small>
                          </h5>
                        </div>
                      </div>

@endforeach
</div>
                  </div></div>
                </div>

              </div>


<div class="col-md-6">


<div class="panel tagcloud-widget">
  <div class="panel-heading">
    <span class="panel-icon">
      <i class="fa fa-pencil"></i>
    </span>
    <span class="panel-title"> Tag Cloud</span>
  </div>
  <div class="panel-body">
@foreach ($tags as $tag)
  <span class="label label-primary">{{$tag->word}}</span>

@endforeach

  </div>

</div>
</div>
</div>





@endsection
