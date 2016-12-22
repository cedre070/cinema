@extends('layout')


@section('content')


<div class="col-md-12">

            <!-- Input Fields -->
            <div class="panel">
              <div class="panel-heading">
                <span class="panel-title">Crée un film</span>
              </div>
              <div class="panel-body">

                <form class="form-horizontal" action="{{ route('movie.create') }}" method="post">

{{ csrf_field() }}
                  <div class="form-group">
                    <label for="inputStandard" class="col-lg-3 control-label">Titre</label>
                    <div class="col-lg-8">
                      <div class="bs-component">
                        <input name="title" type="text" id="inputStandard" class="form-control" placeholder="Titre du film">
                      </div>
                    </div>
                  </div>

                  <!--le faire pour tout les composant-->
                  @if ($errors->has('title'))
                          <p class="help-block text-danger">
                              {{ $errors->first('title') }}
                          </p>
                            @endif




                  <div class="form-group">
                    <label for="inputSelect" class="col-lg-3 control-label">Type</label>
                    <div class="col-lg-8">
                      <div class="bs-component">
                        <select name="type" class="form-control">
                          <option> </option>
                          <option>Long-métrage</option>
                          <option>Court-métrage</option>
                          <option>Option 3</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="maskedDate" class="col-lg-3 control-label">Date</label>
                      <div class="col-lg-8">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                              </span>
                          <input name="date_release" type="text" id="maskedDate" class="form-control date" maxlength="10" autocomplete="off" placeholder="11/11/1111">
                        </div>
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-lg-3 control-label" for="exampleInputFile">Affiche du Film</label>
                      <input name="image" class="col-lg-8" capture="capture" accept="image/jpg" type="file" id="exampleInputFile">
                  </div>


                  <div class="form-group">
                    <label class="col-lg-3 control-label" for="textArea1">Trailer du Film</label>
                    <div class="col-lg-8">
                      <div class="bs-component">
                        <textarea name="trailer" class="form-control textarea-grow" id="textArea1" rows="4"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-3 control-label" for="textArea1">Description</label>
                    <div class="col-lg-8">
                      <div class="bs-component">
                        <textarea name="description" class="form-control textarea-grow" id="textArea1" rows="4"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-3 control-label" for="textArea2">Synopsis</label>
                    <div class="col-lg-8">
                      <div class="bs-component">
                        <textarea name="synopsis" class="form-control" id="textArea2" rows="3"></textarea>
                      </div>
                    </div>
                  </div>


                  <div class="form-group">
             <label class="col-lg-3 control-label" for="note">Note presse</label>
             <div class="col-lg-8">
             <input name="note_presse" type="radio" form="createMovie" name="note" value="1" checked> <i class="fa fa-star" aria-hidden="true"></i>
             <input name="note_presse" type="radio" form="createMovie" name="note" value="2"> <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
             <input name="note_presse" type="radio" form="createMovie" name="note" value="3"> <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
             <input name="note_presse" type="radio" form="createMovie" name="note" value="4"> <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
             <input name="note_presse" type="radio" form="createMovie" name="note" value="5"> <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
         </div>
         </div>

                  <div class="form-group">
                    <label for="inputSelect" class="col-lg-3 control-label">Langue</label>
                    <div class="col-lg-8">
                      <div class="bs-component">
                        <select name="languages" class="form-control">
                          <option> </option>
                          <option value="fr" >Français</option>
                          <option value="en" >English</option>
                          <option value="jp" >Jap</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputSelect" class="col-lg-3 control-label">Bande Original</label>
                    <div class="col-lg-8">
                      <div class="bs-component">
                        <select name="bo" class="form-control">
                          <option value=""> </option>
                          <option value="VF">VF</option>
                          <option value="VO">VO</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputStandard" class="col-lg-3 control-label">Distributeur</label>
                    <div class="col-lg-8">
                      <div class="bs-component">
                        <input name="distributeur" type="text" id="inputStandard" class="form-control" placeholder="Distributeur">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputStandard" class="col-lg-3 control-label">Budget en (€)</label>
                    <div class="col-lg-8">
                      <div class="bs-component">
                        <input name="budget" type="text" id="inputStandard" class="form-control" placeholder="ex.500 000€">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="maskedDate" class="col-lg-3 control-label">Date</label>
                      <div class="col-lg-8">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                              </span>
                          <input name="annee" type="text" id="maskedDate" class="form-control date" maxlength="10" autocomplete="off" placeholder="11/11/1111">
                        </div>
                      </div>
                  </div>

                  <div class="form-group">
                    <label for="inputStandard" class="col-lg-3 control-label">Durée</label>
                    <div class="col-lg-8">
                      <div class="bs-component">
                        <input name="duree" type="text" id="inputStandard" class="form-control" placeholder="ex.120 en minute">
                      </div>
                    </div>
                  </div>
<button type="submit" name="button">Envoyer</button>

                </form>
              </div>
            </div>



                      <!-- Summernote Editor -->





@endsection
