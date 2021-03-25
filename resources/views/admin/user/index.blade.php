@extends('admin.layouts.app')

@section('headsection')
<link rel="stylesheet" href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection


@section('main-content')

          <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      @include('admin.layouts.pagehead')
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <a class="col-lg-offset-5 btn btn-success" data-toggle="modal" data-target="#modal-default-add" href="">Ajoutre un membre</a>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
            <!-- debut de la table -->
          <div class="">
            <div class="">
              <h3 class="box-title">Les membres de empro</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.No</th>
                  <th>User Name</th>
                  <th>Email</th>
                  <th>Telepone</th>
                  <th>Status</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($membre as $user)
                  <tr>
                  <td>{{ $loop->index +1 }}</td>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->phone }}</td>
                  <td>{{ $user->status? 'Active' : 'Not Active' }}</td>
                  <td>
                    <a data-toggle="modal" data-id="{{$user->id}}" data-name="{{$user->name}}" data-target="#modal-default-update-user-{{ $user->id }}"><i class="glyphicon glyphicon-edit"></i></a>
                    <form id="delete-form-{{$user->id}}" method="post" action="{{ route('admin.membre.destroy',$user->id) }}" style="display:none">
                    {{csrf_field()}}
                    {{method_field('delete')}}
                    </form>
                  <a href="" onclick="
                    if(confirm('Etes vous sur de supprimere ce membre')){

                    event.preventDefault();document.getElementById('delete-form-{{$user->id}}').submit();

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
                  <th>S.No</th>
                  <th>User Name</th>
                  <th>Email</th>
                  <th>Telepone</th>
                  <th>Status</th>
                  <th>Delete</th>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
            <!-- fin de la table -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection

@section('footersection')
<script src="admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    $('#example1').DataTable()
  })
</script>

        <div class="modal fade" id="modal-default-add">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Modification des informations</h4>
              </div>
              <form action="{{ route('admin.membre.store') }}" method="post">
              @csrf
              <div class="modal-body">
                <div class="register-box-body">
                  <p class="login-box-msg">Ajouter un membre</p>
                    <div class="form-group has-feedback">
                      <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Full name">
                      <span class="glyphicon glyphicon-user form-control-feedback"></span>
                      @error('name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                    <div class="form-group has-feedback">
                      <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                      <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                      @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                    <div class="form-group has-feedback">
                      <input type="number" id="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" placeholder="phone">
                      <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                      @error('phone')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                    <div class="form-group has-feedback">
                      <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                    <div class="form-group has-feedback">
                      <input type="password" id="password_confirmation" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Retype password">
                      <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                    </div>

                    <div class="row" style="margin-left: 5px;">
                      <div class="col-xs-8">
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" value="1" name="status"> Status
                          </label>
                        </div>
                      </div>
                    </div>

                  <!-- <a href="login.html" class="text-center">I already have a membership</a> -->
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


      @foreach($membre as $user)
        <div class="modal fade" id="modal-default-update-user-{{ $user->id }}">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Modification des informations</h4>
              </div>
              <form action="{{ route('admin.membre.update',$user->id) }}" method="post">
              @csrf
              {{ method_field('PUT') }}
              <div class="modal-body">
                 
                <div class="register-box-body">
                  <p class="login-box-msg">Modifier ces information</p>
                    <div class="form-group has-feedback">
                      <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') ?? $user->name }}" required autocomplete="name" autofocus placeholder="Full name">
                      <span class="glyphicon glyphicon-user form-control-feedback"></span>
                      @error('name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                    <div class="form-group has-feedback">
                      <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') ?? $user->email }}" required autocomplete="email" placeholder="Email">
                      <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                      @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                    <div class="form-group has-feedback">
                      <input type="number" id="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') ?? $user->phone }}" required autocomplete="phone" placeholder="phone">
                      <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                      @error('phone')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                    <div class="form-group has-feedback">
                      <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password" placeholder="Password">
                      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                    <div class="form-group has-feedback">
                      <input type="password" id="password_confirmation" class="form-control" name="password_confirmation"  autocomplete="new-password" placeholder="Retype password">
                      <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                    </div>
                    <div class="row">
                      <div class="col-xs-8">
                        <div class="checkbox icheck" style="margin-left:20px;">
                          <label>
                            <input type="checkbox" value="1" name="status" @if($user->status == 1) checked @endif>Status
                          </label>
                        </div>
                      </div>
                    </div>

                  <!-- <a href="login.html" class="text-center">I already have a membership</a> -->
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

@endsection
