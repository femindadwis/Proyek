@extends('template')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">



          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->



<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-10">

            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                      <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Data Rumah Sakit</h3>

                          <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                              <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                  <i class="fas fa-search"></i>
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0" style="height: 300px;">
                          <table class="table table-head-fixed text-nowrap">
                            <thead>
                              <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>RS.Bulan Satu</td>
                                <td>Indramayu</td>
                                <td>
                                    <a class="btn btn-sm btn-success-outline" href="/" title="Edit"><span class="fa fa-edit"></span> Edit</a>
                                    <a class="btn btn-sm btn-success-outline" href="/" title="Hapus"><span class="fa fa-trash"></span> Hapus</a>
                                          </td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>RS.Permata Indah</td>
                                <td>Jakarta</td>
                              </tr>
                              <tr>
                                <td>3</td>
                                <td>RS.Permata Kencana</td>
                                <td>Indramayu</td>
                              </tr>
                              <tr>
                                <td>4</td>
                                <td>RS.Lohbener</td>
                                <td>Indramayu</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
                    </div>
                  </div>
