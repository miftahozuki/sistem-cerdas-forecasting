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
                        <h5 class="card-header-text">Peramalan Jumlah Siswa</h5>
                    </div>

                    <div class="card-block">
                        <form>
                            <div class="form-group">
                                <label for="exampleSelect1" class="form-control-label">Tahun Periode</label>
                                <select class="form-control " id="exampleSelect1">
                                    <option>2019</option>
                                    <option>2020</option>
                                    <option>2021</option>
                                    <option>2022</option>
                                    <option>2023</option>
                                    <option>2024</option>
                                </select>
                            </div>

                            <div class="row">
                                <div class="col-md-9">
                                    <button type="submit" class="btn btn-outline-primary m-r-30"><i
                                            class="ti-bar-chart"></i> Hitung</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--Horizontal Form ends-->

            <div class="col-sm-12">
                <!-- Basic Table starts -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-header-text">Data Jumlah Siswa</h5>
                        {{-- <p>Basic example <code>without any additional modification</code> classes</p> --}}
                    </div>
                    <div class="card-block">
                        <div class="row">
                            <div class="col-sm-12 table-responsive">
                                <table class="table" style="font-family:'Times New Roman'">
                                    <thead style="background-color:dimgrey">
                                        <tr style="color:white">
                                            <th>No.</th>
                                            <th>Tahun</th>
                                            <th>x</th>
                                            <th>y</th>
                                            <th>x*y</th>
                                            <th>x^2</th>
                                            <th>y'</th>
                                            <th>y-y'</th>
                                        </tr>
                                    </thead>
                                    <tbody style="background-color:wheat">
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($data as $d)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $d->tahun }}</td>
                                                <td>{{ $d->x }}</td>
                                                <td>{{ $d->y }}</td>
                                                <td>{{ $d->z }}</td>
                                                <td>{{ $d->a }}</td>
                                                <td>{{ $d->b }}</td>
                                                <td>{{ $d->c }}</td>
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <td></td>
                                            <td>Jumlah</td>
                                            <td>{{ $x }}</td>
                                            <td>{{ $y }}</td>
                                            <td>{{ $z }}</td>
                                            <td>{{ $a }}</td>
                                            <td></td>
                                            <td>{{ $c }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Basic Table ends -->

            </div>

            <!-- 1-3-block row start -->

            {{-- <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-header-text"></h5>
                        </div>
                        <div class="card-block">
                            <div id="barchart" style="min-width: 250px; height: 330px; margin: 0 auto"></div>
                        </div>
                    </div>
                </div> --}}
            <!-- Line Chart start -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-header-text">Grafik Data Siswa</h5>
                    </div>
                    <div class="card-block">
                        <div id="line-example"></div>
                    </div>
                </div>
            </div>
            <!-- Line Chart end -->
            <!-- 1-3-block row end -->
        </div>

        <!-- Main content ends -->
    </div>
    <!-- Container-fluid ends -->
@endsection('content')
