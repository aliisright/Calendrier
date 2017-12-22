@extends('layouts.app')

@section('content')
    <style>
            @foreach($colors as $color)
                .color-{{$color->name}} {
                    color: {{ $color->code }};
                }
            @endforeach

            @foreach($colors as $color)

                .select-color-{{$color->name}} {
                  background-color: {{$color->code}};
                  border: 0.5px solid lightgrey;
                }
            @endforeach

            .color-card {
              height: 30px;
              width:30px;
              border-radius: 5px;
              display: flex;
              justify-content: center;
              margin: 5px;
            }

            .form-check {
              display: inline-flex;
            }

            .icon {
              display: flex;
              justify-content: center;
              align-items: center;
            }

            .icon span{
              position: absolute;
            }

            .message-body {
              font-size: 12px;
            }

            @foreach($colors as $color)
                .form-header-{{$color->name}} {
                    background-color: {{ $color->code }};
                }
            @endforeach


    </style>

    <div class="container" id="app">

      <input v-model="hey" type="text">
      <p>@{{hey}}</p>

        <h1 class="title2">Envie de créer votre calendrier personnalisé ? Faites l'essai !</h1>
        <div class="row">

            <div class="calendar envelope-animation">
                <p>Décembre</p>

                <div class="bloc-letter1 container-fluid" id="leave-letter">
                    <div class="row">

                      <div class="card-group">
                        @foreach($calendriers as $calendrier)
                              <div class="card col-md-2 col-sm-4 col-xs-6">
                                  <a href="{{$calendrier->jour}}" type="button" data-toggle="modal" data-target="#Modal{{$calendrier->jour}}" data-whatever="@mdo"><img src="{{$calendrier->icon->path}}" width="100px" alt="lettre {{$calendrier->jour}}" class="lettre animated">
                                  </a><br>
                                  <p>{{$calendrier->jour}}</p>
                              </div>
                        @endforeach
                      </div>
                    </div>
                </div>

            <!--MODAL-->

                    @foreach($calendriers as $calendrier)
                        <a href="{{ $calendrier->jour }}" type="button" data-toggle="modal" data-target="#Modal{{$calendrier->jour}}" data-whatever="@mdo">
                        </a>

                        <!--Form-->
                        <div class="modal fade" id="Modal{{$calendrier->jour}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header form-header-{{$calendrier->icon->color}}">
                                <h1 class="modal-title day-title" id="exampleModalLabel">Jour {{ $calendrier->jour }}</h1>
                                <h4 class="message-title">{{ $calendrier->title }}</h4>
                                <h4 class="message-title">@{{title}}</h4>
                                <p class="message-body">{{$calendrier->message}}</p>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>

                              <img src="{{isset($calendrier->image->path) ? $calendrier->image->path : ''}}" width="100%" class="">

                            <div class="modal-body modal-body-day-form">


                                <form class="" method="POST" action="{{ route('image.store') }}" enctype="multipart/form-data">

                                        <div class="form-group">
                                            <label for="title">Titre</label>
                                            <input v-model="title" class="form-control" type="text" name="title" id="title" placeholder="Ex: Manger des feuilles">
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <label for="message">Description</label>
                                            <textarea class="form-control" type="text" name="message" id="message" placeholder="Ex: Comment manger les feuilles?"></textarea>
                                        </div>
                                        <hr>
                                        <div class="form-check">
                                            <label for="color">Assigner une couleur</label>
                                            @foreach($colors as $color)
                                                <div class="card color-card select-color-{{$color->name}}"><input class="form-check-input" type="radio" name="icon" id="inlineRadio1" value="{{$color->id}}"></div>
                                            @endforeach
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <label for="image">Ajouter une image</label>
                                            <input class="form-control" type="file" name="image">
                                        </div>

                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="hidden" name="jour" value="{{ $calendrier->jour }}">

                                        <div class="form-group text-center">
                                            <button class="btn btn-success">Appliquer</button>
                                        </div>
                                </form>
                            </div>
                            </div>
                          </div>
                        </div>

                    @endforeach
        </div>
    </div>

    <footer class="footer">
        <p>&copy; Copyright 2017 calendrierzen.com</p>
    </footer>

@endsection
