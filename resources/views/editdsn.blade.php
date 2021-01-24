@extends('adminLayout/index')
@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Edit Data Dosen</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="/list/update/{{$dosen->slug}}">
                @method('patch')
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">NIP</label>
                    <input type="text" class="form-control" id="nip" name="nip" value="{{$dosen->nip}}" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$dosen->name}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="{{$dosen->alamat}}">
                  </div>
                  <div class="form-group">
                        <label>Pilih Mata Kuliah</label>
                        <select class="custom-select" id="matkul_id" name="matkul_id">
                          <option value="1" {{$dosen->matkul_id == "1" ? 'selected' : ' '}}>PWEB</option>
                          <option value="2" {{$dosen->matkul_id == "2" ? 'selected' : ' '}}>KI</option>
                          <option value="3" {{$dosen->matkul_id == "3" ? 'selected' : ' '}}>SISTER</option>
                        </select>
                      </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
@endsection