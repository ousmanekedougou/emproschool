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
                  <th class="text-center">Status</th>
                  <th class="text-center">Nom Complet</th>
                  <th class="text-center">Email</th>
                  <th class="text-center">Phone</th>
                  <th class="text-center">Options</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($devis as $devi)
                  <tr>
                  <td class="text-center">{{ $loop->index +1 }}</td>
                  <td class="text-center">
                    @if($devi->genre == 1)
                      Particulier
                    @elseif($devi->genre == 2)
                      Entreprise
                    @endif
                  </td>
                  <td class="text-center">{{ $devi->nomcomplet }}</td>
                  <td class="text-center">{{ $devi->email }}</td>
                  <td class="text-center">{{ $devi->phone }}</td>
                  <td class="text-center"><a data-toggle="modal" data-id="{{$devi->id}}" data-name="{{$devi->name}}" data-target="#modal-default-update-devi-{{ $devi->id }}"><i class="glyphicon glyphicon-edit"></i></a>
              
                    <form id="delete-form-{{$devi->id}}" method="post" action="{{ route('admin.devi.destroy',$devi->id) }}" style="display:none">
                      {{csrf_field()}}
                      {{method_field('delete')}}
                    </form>
                  <a href="" onclick="
                    if(confirm('Etes Vous Sur De Supprimer Ce Candidat ?')){

                    event.preventDefault();document.getElementById('delete-form-{{$devi->id}}').submit();

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
                  <th class="text-center">Status</th>
                  <th class="text-center">Nom Complet</th>
                  <th class="text-center">Email</th>
                  <th class="text-center">Phone</th>
                  <th class="text-center">Options</th>
                </tr>
                </tfoot>
              </table>
              {{-- {{ $devis->links() }} --}}
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
        @foreach($devis as $devi)
          <div class="modal fade" id="modal-default-update-devi-{{ $devi->id }}">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Affichage du detail de la commande</h4>
                </div>
                @csrf
                <div class="modal-body">
                  <p>
                  <label for="category"> Status @if($devi->genre == 1)
                      Particulier
                    @elseif($devi->genre == 2)
                      Entreprise
                    @endif</label>
                  </p>

                  <p>
                  <label for="slug">{{$devi->nomcomplet}}</label>
                  </p>
                  <p>
                    {{$devi->description}}
                  </p>
                </div>
                <div class="modal-footer">
                  <button type="button"  class="btn btn-default pull-left" data-dismiss="modal">Fermer</button>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
        @endforeach
      <!-- Fin du modal Departement -->
      <!-- Fin du modal des ajouts -->

    <!-- Debut du modal des edition  -->

    <!-- Fin du modal des edtions -->
  
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