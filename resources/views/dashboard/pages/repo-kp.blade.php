@extends('dashboard.main')

@section('isi')
<div class="row">
  <div class="col-sm-12">
    <div class="home-tab">
      <div class="d-sm-flex align-items-center justify-content-between border-bottom">

        <div>
          <div class="btn-wrapper">

            <a href="#" class="btn btn-otline-dark"><i class="icon-printer"></i> Print</a>
            <a href="#" class="btn btn-primary text-white me-0"><i class="icon-download"></i> Export</a>
          </div>
        </div>
      </div>
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Data Kerja Praktek</h4>
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Dosen Pembimbing</th>
                    <th>Judul</th>
                    <th>Link Project</th>
                    <th>Link github </th>
                    <th>Action</th>

                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Jacob</td>
                    <td>Photoshop</td>
                    <td>Photoshop</td>
                    <td>Photoshop</td>
                    <td>
                      <a href="" class="text-dark">photohop</a>
                    </td>
                    <td>
                      <a href="" class="text-dark">photohop</a>
                    </td>
                    <td>
                      <a href="#" class="btn btn-warning  text-white me-0"><i class="icon-pencil"></i>Edit</a>
                      <a href="#" class="btn btn-danger text-white me-0"><i class="icon-trash"></i> Hapus</a>

                    </td>
                  </tr>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection