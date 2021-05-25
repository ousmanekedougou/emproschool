@extends('admin.layouts.app')

@section('headsection')
<link rel="stylesheet" href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection

@section('main-content')

          <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="">
        <div class="">
      <section class="content-header">
        <h1>
          Multimedia
          <small></small>
        </h1>
        <ol class="breadcrumb">
          <li class="btn btn-info btn-xs"><a href="#"><i class="fa fa-user"></i> {{count($multimediat_initial)}} etudiants</a>  </li>
          <li class="btn btn-primary btn-xs">Prix unique : 20000 f</li>
          <li class="btn btn-success btn-xs">Prix total : {{ 20000 * count($multimediat_price)}} f</li>
        </ol>
      </section>
        </div>
        <div class="box-body">
                    <!-- debut de la table -->
        <div class="nav-tabs-custom">
          <div class="tab-content">
            <div class="active tab-pane" id="activity">
              <table id="example1" class="table text-center table-bordered table-striped">
                <thead>
                <tr>
                <th class="text-center">N</th>
                  <th class="text-center">Civilite</th>
                  <th class="text-center">Nom</th>
                  <th class="text-center">Email</th>
                  <th class="text-center">Phone</th>
                  <th class="text-center">Niveau</th>
                  <th class="text-center">Disponible</th>
                  <th class="text-center">Ordinateur</th>
                  <th class="text-center">Options</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($multimediat_initial as $multimediat)
                  <tr>
                  <td class="text-center">{{ $loop->index +1 }}</td>
                  <td class="text-center">
                    @if ($multimediat->genre == 1)
                       Femme
                    @elseif($multimediat->genre == 2)
                       Homme
                    @endif
                  </td>
                  <td class="text-center">{{ $multimediat->nomcomplet }}</td>
                  <td class="text-center">{{ $multimediat->email }}</td>
                  <td class="text-center">{{ $multimediat->phone }}</td>
                  <td class="text-center">{{ $multimediat->niveau }}</td>
                  <td class="text-center">{{ $multimediat->fonction }}</td>
                  <td class="text-center">{{ $multimediat->abandon }}</td>
                     <td class="text-center">
                      @if($multimediat->price == 0)
                        <a class="btn btn-danger btn-xs text-bold" data-toggle="modal" data-id="{{$multimediat->id}}" data-name="{{$multimediat->name}}" data-target="#modal-default-payment-multimediat-{{ $multimediat->id }}">Non Payer</a>
                      @elseif($multimediat->price > 0)
                        <span class="btn btn-success btn-xs text-bold" data-toggle="modal" data-id="{{$multimediat->id}}" data-name="{{$multimediat->name}}" data-target="#modal-default-payment-multimediat-{{ $multimediat->id }}">Payer</span>
                      @endif
                    </td>
                  <td class="text-center"><a data-toggle="modal" data-id="{{$multimediat->id}}" data-name="{{$multimediat->name}}" data-target="#modal-default-update-multimediat-{{ $multimediat->id }}"><i class="glyphicon glyphicon-edit"></i></a>
              
                    <form id="delete-form-{{$multimediat->id}}" method="post" action="{{ route('web.destroy',$multimediat->id) }}" style="display:none">
                    {{csrf_field()}}
                    {{method_field('delete')}}
                    </form>
                  <a href="" onclick="
                    if(confirm('Etes Vous Sur De Supprimer Ce Candidat ?')){

                    event.preventDefault();document.getElementById('delete-form-{{$multimediat->id}}').submit();

                    }else{

                      event.preventDefault();

                    }
                    
                    "><i class="glyphicon glyphicon-trash text-danger"></i></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                <th class="text-center">N</th>
                  <th class="text-center">Civilite</th>
                  <th class="text-center">Nom</th>
                  <th class="text-center">Email</th>
                  <th class="text-center">Phone</th>
                  <th class="text-center">Niveau</th>
                  <th class="text-center">Disponible</th>
                  <th class="text-center">Ordinateur</th>
                  <th class="text-center">Options</th>
                </tr>
                </tfoot>
              </table>
              {{-- {{ $multimediats->links() }} --}}
            </div>
            <!-- /.box-body -->
          </div>
            <!-- fin de la table -->
        </div>
        <!-- /.box-body -->
       
      </div>
      <!-- /.box -->

      <!-- LA PARTIE DES MODAL -->

    

    <!-- Debut du modal des edition  -->

    <!-- Fin du modal des edtions -->
      @foreach($multimediat_initial as $modal_multimediat)
        <div class="modal fade" id="modal-default-update-multimediat-{{ $modal_multimediat->id }}">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Modification des informations</h4>
              </div>
              <form action="{{ route('web.update',$modal_multimediat->id) }}" method="post">
              @csrf
              {{ method_field('PUT') }}
              <div class="modal-body">
                  <div class="row">
                    <div class="col-sm-6">
                      <p>Genre</p>
                      <p>
                        <label for="femme" style="margin-right: 10px;"><input type="radio" value="1" name="genre" class=" @error('genre') is-invalid @enderror" id="femme" @if($modal_multimediat->genre == 1) checked @endif> Femme</label>
                        <label for="homme" style="margin-left:10px;"> <input type="radio" value="2" name="genre" class="  @error('genre') is-invalid @enderror" id="homme" @if($modal_multimediat->genre == 2) checked @endif> homme</label>
                        @error('genre')
                        <span class="invalid-feedback" role="alert">
                            <strong class="message_error">{{ $message }}</strong>
                        </span>
                      @enderror
                      </p>
                      <p>
                        <label for="category">Prenom et Nom</label>
                        <input type="text"  value="{{ $modal_multimediat->nomcomplet ?? old('name')  }}" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="">
                          @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong class="message_error">{{ $message }}</strong>
                            </span>
                          @enderror
                      </p>
      
                      <p>
                        <label for="slug">Adresse Email</label>
                        <input type="email"  value="{{ $modal_multimediat->email ?? old('email')  }}" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="">
                          @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong class="message_error">{{ $message }}</strong>
                            </span>
                          @enderror
                      </p>
                      <p>
                        <label for="slug">Telephone</label>
                        <input type="number"  value="{{ $modal_multimediat->phone ?? old('phone')  }}" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="">
                          @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong class="message_error">{{ $message }}</strong>
                            </span>
                          @enderror
                      </p>
                    </div>
                    <div class="col-sm-6">
                      <p>
                        <label for="adresse">Adresse Physiaque</label>
                        <input type="text"  value="{{ $modal_multimediat->adresse ?? old('adresse')  }}" class="form-control @error('adresse') is-invalid @enderror" id="adresse" name="adresse" placeholder="">
                          @error('adresse')
                            <span class="invalid-feedback" role="alert">
                                <strong class="message_error">{{ $message }}</strong>
                            </span>
                          @enderror
                      </p>
      
                      <p>
                        <label for="slug">Date De Naissance</label>
                        <input type="date"  value="{{ $modal_multimediat->date_naissance ?? old('date')  }}" class="form-control @error('date') is-invalid @enderror" id="date" name="date" placeholder="">
                          @error('date')
                            <span class="invalid-feedback" role="alert">
                                <strong class="message_error">{{ $message }}</strong>
                            </span>
                          @enderror
                      </p>
                      <p>
                        <label for="slug">Lieu De Naissance</label>
                        <input type="text"  value="{{ $modal_multimediat->lieu_naissance ?? old('lieu')  }}" class="form-control @error('lieu') is-invalid @enderror" id="lieu" name="lieu" placeholder="">
                          @error('lieu')
                            <span class="invalid-feedback" role="alert">
                                <strong class="message_error">{{ $message }}</strong>
                            </span>
                          @enderror
                      </p>
                      <p>
                        <label for="slug">Domaine</label>
                          <select value="{{ old('formation')  }}" class="form-control @error('formation') is-invalid @enderror" id="formation" name="formation" placeholder="">
                            <option value="1" @if($modal_multimediat->domaine == 1) selected @endif>Bureautique</option>
                            <option value="2" @if($modal_multimediat->domaine == 2) selected @endif >Developpement web</option>
                            <option value="3" @if($modal_multimediat->domaine == 3) selected @endif >Base de donnee</option>
                            <option value="4" @if($modal_multimediat->domaine == 4) selected @endif >Maintenance</option>
                            <option value="5" @if($modal_multimediat->domaine == 5) selected @endif >Multimedia</option>
                            <option value="6" @if($modal_multimediat->domaine == 6) selected @endif >Cablage & Reseau</option>
                            <option value="7" @if($modal_multimediat->domaine == 7) selected @endif >Wordpress</option>
                          </select>
                          @error('formation')
                            <span class="invalid-feedback" role="alert"  class="form-control @error('module') is-invalid @enderror" id="module" name="module">
                                <strong class="message_error">{{ $message }}</strong>
                            </span>
                          @enderror
                      </p>
                    </div>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button"  class="btn btn-default pull-left" data-dismiss="modal">Fermer</button>
                <button type="submit" class="btn btn-primary">Modifier</button>
              </div>
            </div>
            </form>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
      @endforeach
      <!-- FIN DE LA PARTIE DES MODAL -->


       <!-- Fin du modal des edtions -->
      @foreach($multimediat_initial as $modal_initial)
        <div class="modal fade" id="modal-default-payment-multimediat-{{ $modal_initial->id }}">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Payer pour valider l'inscription</h4>
              </div>
              <form action="{{ route('multimediat.payment',$modal_initial->id) }}" method="post">
              @csrf
              {{ method_field('PUT') }}
              <div class="modal-body">
                  <div class="row">
                    <div class="col-sm-12">
                      <p>
                        <label for="slug">Prix de l'inscription</label>
                        <input type="number"  value="{{ $modal_initial->price ?? old('price')  }}" class="form-control @error('price') is-invalid @enderror" id="price" name="price" placeholder="">
                          @error('price')
                            <span class="invalid-feedback" role="alert">
                                <strong class="message_error">{{ $message }}</strong>
                            </span>
                          @enderror
                      </p>
                    </div>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button"  class="btn btn-default pull-left" data-dismiss="modal">Fermer</button>
                <button type="submit" class="btn btn-primary">Modifier</button>
              </div>
            </div>
            </form>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
      @endforeach
      <!-- FIN DE LA PARTIE DES MODAL -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection


@section('footersection')
<script src="{{ asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script>
 $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

@endsection