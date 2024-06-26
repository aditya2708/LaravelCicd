@extends('layouts.master')

@section('content')
<div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Data Produk</h4>
                <p class="card-title-desc">
                    <a class="btn btn-primary waves-effect waves-light" href="javascript:void(0)" @click="tambahProdukAtc()">
                        <i class="mdi mdi-plus-box-multiple-outline"></i>
                        Tambah Produk Baru
                    </a>&nbsp;
                    <a class="btn btn-primary waves-effect waves-light" href="javascript:void(0)" @click="importProdukAtc()">
                        <i class="mdi mdi-plus-box-multiple-outline"></i>
                        Import Produk
                    </a>
                </p>

                <div class="table-responsive">
                    <table class="table mb-0 table-hover" id="myTable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Produk</th>
                                <th>Harga</th>
                                <th>Kategori</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                        <tr>
                            <th scope="row"></th>
                            <td></td>
                            <td>Rp.</td>
                            <td></td>
                            <td>
                            <a class="btn btn-primary btn-sm waves-effect waves-light" href="">
                                <i class="mdi mdi-folder-edit-outline"></i>
                                Edit
                            </a>&nbsp;
                            <a class="btn btn-warning btn-sm waves-effect waves-light" href="">
                                <i class="mdi mdi-folder-edit-outline"></i>
                                Hapus
                            </a>
                            </td>
                        </tr>
                        
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>


@endsection