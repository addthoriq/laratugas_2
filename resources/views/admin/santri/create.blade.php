@extends('layouts.app')
@section('title', 'Create')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Halaman Tambah Data
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
              <h3 class="box-title">Tambah Data Santri</h3>
            </div>
            <!-- /.box-header -->
            {{--=@if (count($errors)>0)
                <div class="box-body">
                    <div class="alert alert-danger" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif --}}
            <!-- form start -->
            <form class="form-horizontal" method="post" action="{{url('admin/santri')}}">
                @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="inputNama" class="col-sm-2 control-label"><span class="text-danger" id="bintang"></span>Nama</label>
                  <div class="col-sm-10">
                    <input type="text" name="nama" class="form-control" id="inputNama" placeholder="Nama" value="{{ old('nama') }}">
                    @if ($errors->has('nama'))
                        <span class="text-danger">
                            {{$errors->first('nama')}}
                        </span>
                    @endif
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail" class="col-sm-2 control-label"><span class="text-danger" id="bintang2"></span>Email</label>
                  <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email" value="{{old('email')}}">
                    <span class="text-danger" id="pesanEmail"></span>
                    @if ($errors->has('email'))
                        <span class="text-danger">
                            {{$errors->first('email')}}
                        </span>
                    @endif
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword" class="col-sm-2 control-label"><span class="text-danger" id="bintang3"></span>Password</label>
                  <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">
                    @if ($errors->has('password'))
                        <span class="text-danger">
                            {{$errors->first('password')}}
                        </span>
                    @endif
                  </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Gender</label>
                    <div class="radio col-sm-10">
                        <label for="optionsRadios1">
                            <input type="radio" name="gender" id="optionsRadios1" value="1">
                        Laki-laki
                    </label><br>
                        <label for="optionsRadios2">
                            <input type="radio" name="gender" id="optionsRadios2" value="0">
                            Perempuan
                        </label>
                    </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="{{url('/admin/santri')}}" class="btn btn-default">Kembali</a>
                <button type="submit" class="btn btn-info pull-right">Tambah</button>
              </div>
              <!-- /.box-footer -->
            </form>
        </div>
    </section>
@endsection
