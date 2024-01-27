@extends('template')

@section('content')

<div class="col-md-12 grid-margin transparent">
    <div class="row">
      <div class="col-md-6 mb-4 stretch-card transparent">
        <div class="card card-tale">
          <div class="card-body">
            <p class="mb-4">Data Pengguna</p>
            <p class="fs-30 mb-2">{{$total_mahasiswa}}</p>

          </div>
        </div>
      </div>
      <div class="col-md-6 mb-4 stretch-card transparent">
        <div class="card card-dark-blue">
          <div class="card-body">
            <p class="mb-4">Data Admin</p>
            <p class="fs-30 mb-2">{{$total_admin}}</p>

          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
        <div class="card card-light-blue">
          <div class="card-body">
            <p class="mb-4">L/P</p>
            <p class="fs-30 mb-2">{{ $total_laki }}/{{ $total_perempuan }}</p>

          </div>
        </div>
      </div>
      <div class="col-md-6 stretch-card transparent">
        <div class="card card-light-danger">
          <div class="card-body">
            <p class="mb-4">Data Bank</p>
            <p class="fs-30 mb-2">{{$total_jurusan}}</p>

          </div>
        </div>
      </div>
    </div>

  </div>

@endsection

@section('strip')

    <div class="card position-relative">

      <div class="card-body">
        <div id="detailedReports" class="" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <h4 class="card-title">DATA PENGGUNA BANK</h4>
                <div class="col-md-12 col-xl-9">
                  <div class="row">
                    <div class="col-md-12 border-right">
                      <div class="table-responsive mb-3 mb-md-0 mt-3">
                        <table class="table table-borderless report-table">

                            @foreach ($array as $item)
                            <tr>
                                <td class="text-muted">{{ $item['nama_jurusan'] }}</td>
                                <td class="w-100 px-0">
                                  <div class="progress progress-md mx-4">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: {{ $item['jumlah_jurusan'] }}%"  aria-valuemin="0%" aria-valuemax="100%"></div>
                                  </div>
                                </td>
                                <td><h5 class="font-weight-bold mb-0">{{$item['jumlah_jurusan'] }}</h5></td>
                              </tr>
                            @endforeach
                        </table>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#detailedReports" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          </a>
          <a class="carousel-control-next" href="#detailedReports" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
          </a>
        </div>
      </div>
    </div>

@endsection
