@extends('layouts.master')
@section('content')
    <!-- Container-fluid starts -->
    <div class="container-fluid">
        <!-- Main content starts -->

        <!-- Row Starts -->
        <div class="row">
            <div class="col-sm-12 p-0">
                <h6 class="text" style="font-size:8px;color:transparent">hh</h6>
            </div>
        </div>
        <!-- Row end -->

        <!-- Row start -->
        <div class="row">
            <!--Horizontal Form starts-->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-header-text">Tambah Data Siswa</h5>
                    </div>

                    <div class="card-block">
                        <form action="{{route('datasiswa.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleSelect1" class="form-control-label">Tahun</label>
                                <select class="form-control " id="exampleSelect1" name="tahun" required>
                                    <option value>Pilih Tahun</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                </select>
                                @if ($errors->has('tahun'))
                                    <span class="text-danger small">
                                        <p>{{$errors->first('tahun')}}</p>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Jumlah Siswa</label>
                                <input type="text" class="form-control" aria-describedby="jumlahsiswa" name="jumlahsiswa" placeholder="Jumlah Siswa" required>
                                @if ($errors->has('jumlahsiswa'))
                                    <span class="text-danger small">
                                        <p>{{$errors->first('jumlahsiswa')}}</p>
                                    </span>
                                @endif
                                {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                             </div>

                            <div class="row">
                                <div class="col-md-9">
                                    <button type="submit" class="btn btn-inverse-primary waves-effect m-r-30">Save</button>
                                    <a onclick="goBack()" class="btn btn-secondary waves-effect">Back</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--Horizontal Form ends-->

        </div>

        <!-- Main content ends -->
    </div>
    <!-- Container-fluid ends -->
@endsection('content')
