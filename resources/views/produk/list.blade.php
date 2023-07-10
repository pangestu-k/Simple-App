@extends('layout.layout-admin')

@section('content')
    <h1 class="h3 mb-2 text-gray-800">Halaman Produk</h1>

    <div class="card shadow mb-4 col">
        <div class="card-header py-3 row">
            <div class="col-6">
                <h6 class="m-0 font-weight-bold text-primary">Data Produk</h6>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                        </tr>
                    </tfoot>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    @endsection
