@extends('layouts.app')
@section('title', 'Edit')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Halaman Edit Data
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Data Santri</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="{{url('admin/santri')}}">
                @csrf
                @method('PUT')
              <div class="box-body">
                  <input type="hidden" name="id" class="form-control" id="inputNama" value="{{$santri->id}}">
                <div class="form-group">
                  <label for="inputNama" class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" name="nama" class="form-control" id="inputNama" value="{{$santri->nama}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="input" class="col-sm-2 control-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="input" value="{{$santri->email}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" id="inputPassword3">
                  </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Gender</label>
                    <div class="radio col-sm-10">
                        <label for="optionsRadios1">
                            <input type="radio" name="gender" id="optionsRadios1" value="1" {{($santri->gender)?'checked':''}}>
                        Laki-laki
                    </label><br>
                        <label for="optionsRadios2">
                            <input type="radio" name="gender" id="optionsRadios2" value="0" {{($santri->gender)?'':'checked'}}>
                            Perempuan
                        </label>
                    </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="{{url('/admin/santri')}}" class="btn btn-default">Kembali</a>
                <button type="submit" class="btn btn-info pull-right">Edit</button>
              </div>
              <!-- /.box-footer -->
            </form>
        </div>
    </section>
@endsection
