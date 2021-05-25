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
      <div class="row">
 
        <!-- /.col -->
        <div class="  col-md-offset-3 col-md-7 ">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Envoyer un mail groupe </h3>
            </div>
            <form action="{{ route('admin.contact.groupe') }}" method="post">
            @csrf
              <!-- /.box-header -->
              <div class="box-body">
                <div class="form-group">
                <div class="form-group">
                <label for="">Objet</label>
                  <input class="form-control @error('subject') is-invalid @enderror"  value="{{old('subject')  }}" name="subject" id="subject" placeholder="Subject:">
                    @error('subject')
                      <div class="invalid-feedback" role="alert">
                          <strong class="message_error">{{ $message }}</strong>
                      </div>
                    @enderror
                </div>
                <div class="form-group">
                <label for="">Message</label>
                      <textarea  value="{{old('msg')  }}" class="form-control @error('msg') is-invalid @enderror" id="phone" name="msg"  style="height: 300px">
                      </textarea>
                     @error('msg')
                            <div class="invalid-feedback" role="alert">
                                <strong class="message_error">{{ $message }}</strong>
                            </div>
                      @enderror
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <div class="pull-right">
                  <button type="reset" class="btn btn-default"><i class="fa fa-pencil"></i> Annuller</button>
                  <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Envoyer</button>
                </div>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
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