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
          <h3 class="box-title">Initiation a l'informatique</h3>
          {{-- <a  data-toggle="modal" data-id="#category" data-name="category" data-target="#modal-category-add" class="col-lg-offset-5 btn btn-success" href="">Ajouter Un Etudiant</a> --}}
         
        </div>
        <div class="box-body">
                    <!-- debut de la table -->
        <div class="nav-tabs-custom">
          <div class="tab-content">
            <div class="active tab-pane" id="activity">
              <table id="example1" class="table text-center table-bordered table-striped">
                <thead>
                <tr>
                  <th class="text-center">Num</th>
                  <th class="text-center">Civilite</th>
                  <th class="text-center">Nom Complet</th>
                  <th class="text-center">Email</th>
                  <th class="text-center">Phone</th>
                  <th class="text-center">Adresse</th>
                  <th class="text-center">Date Naissance</th>
                  <th class="text-center">Lieu de Naissance</th>
                  <th class="text-center">Options</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($initials as $initial)
                  <tr>
                  <td class="text-center">{{ $loop->index +1 }}</td>
                  <td class="text-center">
                    @if ($initial->genre == 1)
                       Femme
                    @elseif($initial->genre == 2)
                       Homme
                    @endif
                  </td>
                  <td class="text-center">{{ $initial->nomcomplet }}</td>
                  <td class="text-center">{{ $initial->email }}</td>
                  <td class="text-center">{{ $initial->phone }}</td>
                  <td class="text-center">{{ $initial->adresse }}</td>
                  <td class="text-center">{{ $initial->date_naissance }}</td>
                  <td class="text-center">{{ $initial->lieu_naissance }}</td>
                  <td class="text-center"><a data-toggle="modal" data-id="{{$initial->id}}" data-name="{{$initial->name}}" data-target="#modal-default-update-initial-{{ $initial->id }}"><i class="glyphicon glyphicon-edit"></i></a>
              
                    <form id="delete-form-{{$initial->id}}" method="post" action="{{ route('admin.initial.destroy',$initial->id) }}" style="display:none">
                    {{csrf_field()}}
                    {{method_field('delete')}}
                    </form>
                  <a href="" onclick="
                    if(confirm('Etes Vous Sur De Supprimer Ce Candidat ?')){

                    event.preventDefault();document.getElementById('delete-form-{{$initial->id}}').submit();

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
                  <th class="text-center">Num</th>
                  <th class="text-center">Civilite</th>
                  <th class="text-center">Nom Complet</th>
                  <th class="text-center">Email</th>
                  <th class="text-center">Phone</th>
                  <th class="text-center">Adresse</th>
                  <th class="text-center">Naissance</th>
                  <th class="text-center">Lieu de Naissance</th>
                  <th class="text-center">Options</th>
                </tr>
                </tfoot>
              </table>
              {{-- {{ $initials->links() }} --}}
            </div>
            <!-- /.box-body -->
          </div>
            <!-- fin de la table -->
        </div>
        <!-- /.box-body -->
       
      </div>
      <!-- /.box -->

      <!-- LA PARTIE DES MODAL -->

      <!-- Debut du modal des ajouts -->
        <!-- Modal Departement -->
        <div class="modal fade" id="modal-category-add">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Ajouter une categorie</h4>
              </div>
              <form action="" method="post">
              @csrf
              <div class="modal-body">
                <p>
                <label for="category">Nom de la Categorie</label>
                <input type="text"  value="{{ old('name')  }}" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="">
                  @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong class="message_error">{{ $message }}</strong>
                    </span>
                  @enderror
                </p>

                <p>
                <label for="slug">Slug de la Categorie</label>
                <input type="text"  value="{{ old('slug')  }}" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" placeholder="">
                  @error('slug')
                    <span class="invalid-feedback" role="alert">
                        <strong class="message_error">{{ $message }}</strong>
                    </span>
                  @enderror
                </p>
              </div>
              <div class="modal-footer">
                <button type="button"  class="btn btn-default pull-left" data-dismiss="modal">Fermer</button>
                <button type="submit" class="btn btn-primary">Enregistre</button>
              </div>
            </div>
            </form>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
      <!-- Fin du modal Departement -->
      <!-- Fin du modal des ajouts -->

    <!-- Debut du modal des edition  -->

    <!-- Fin du modal des edtions -->
      @foreach($initials as $modal_initial)
        <div class="modal fade" id="modal-default-update-initial-{{ $modal_initial->id }}">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Modification des informations</h4>
              </div>
              <form action="{{ route('admin.initial.update',$modal_initial->id) }}" method="post">
              @csrf
              {{ method_field('PUT') }}
              <div class="modal-body">
                  <div class="row">
                    <div class="col-sm-6">
                      <p>Genre</p>
                      <p>
                        <label for="femme" style="margin-right: 10px;"><input type="radio" value="1" name="genre" class=" @error('genre') is-invalid @enderror" id="femme" @if($modal_initial->genre == 1) checked @endif> Femme</label>
                        <label for="homme" style="margin-left:10px;"> <input type="radio" value="2" name="genre" class="  @error('genre') is-invalid @enderror" id="homme" @if($modal_initial->genre == 2) checked @endif> homme</label>
                        @error('genre')
                        <span class="invalid-feedback" role="alert">
                            <strong class="message_error">{{ $message }}</strong>
                        </span>
                      @enderror
                      </p>
                      <p>
                        <label for="category">Prenom et Nom</label>
                        <input type="text"  value="{{ $modal_initial->nomcomplet ?? old('name')  }}" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="">
                          @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong class="message_error">{{ $message }}</strong>
                            </span>
                          @enderror
                      </p>
      
                      <p>
                        <label for="slug">Adresse Email</label>
                        <input type="email"  value="{{ $modal_initial->email ?? old('email')  }}" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="">
                          @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong class="message_error">{{ $message }}</strong>
                            </span>
                          @enderror
                      </p>
                      <p>
                        <label for="slug">Telephone</label>
                        <input type="number"  value="{{ $modal_initial->phone ?? old('phone')  }}" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="">
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
                        <input type="text"  value="{{ $modal_initial->adresse ?? old('adresse')  }}" class="form-control @error('adresse') is-invalid @enderror" id="adresse" name="adresse" placeholder="">
                          @error('adresse')
                            <span class="invalid-feedback" role="alert">
                                <strong class="message_error">{{ $message }}</strong>
                            </span>
                          @enderror
                      </p>
      
                      <p>
                        <label for="slug">Date De Naissance</label>
                        <input type="date"  value="{{ $modal_initial->date_naissance ?? old('date')  }}" class="form-control @error('date') is-invalid @enderror" id="date" name="date" placeholder="">
                          @error('date')
                            <span class="invalid-feedback" role="alert">
                                <strong class="message_error">{{ $message }}</strong>
                            </span>
                          @enderror
                      </p>
                      <p>
                        <label for="slug">Lieu De Naissance</label>
                        <input type="text"  value="{{ $modal_initial->lieu_naissance ?? old('lieu')  }}" class="form-control @error('lieu') is-invalid @enderror" id="lieu" name="lieu" placeholder="">
                          @error('lieu')
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