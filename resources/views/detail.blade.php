@extends('layout.layout-detail')

@section('content')
<div id="mainContent">
    <div class="container">
        <div class="row first-line">
            <div class="col-12 col-lg-8 col-xl-9">
                <a class="btn btn-outline-danger" href="/etalase"
                    style="width: 100px; margin: -20px 0 10px 0;">Kembali</a>
                <div class="card">
                    <div class="wrapperDetailProduct row">
                        <div class="col-12 col-lg-5">
                            <div class="wrapper-image-product">
                                <div class="view-Images">
                                    <div class="images-product">
                                        <img class="product-image"
                                            src="{{ asset('assets/image/virtual.png') }}"
                                            alt="">
                                    </div>
                                    <div class="images-product">
                                        <img src="{{ asset('assets/image/virtual.png') }}"
                                            alt="">
                                    </div>
                                    <div class="images-product">
                                        <img src="{{ asset('assets/image/virtual.png') }}"
                                            alt="">
                                    </div>
                                    <div class="images-product">
                                        <img src="{{ asset('assets/image/virtual.png') }}"
                                            alt="">
                                    </div>
                                    <div class="images-product">
                                        <img src="{{ asset('assets/image/virtual.png') }}"
                                            alt="">
                                    </div>
                                </div>
                                <div class="nav-images">
                                    <div class="images-nav">
                                        <img src="{{ asset('assets/image/virtual.png') }}"
                                            alt="">
                                    </div>
                                    <div class="images-nav">
                                        <img src="{{ asset('assets/image/virtual.png') }}"
                                            alt="">
                                    </div>
                                    <div class="images-nav">
                                        <img src="{{ asset('assets/image/virtual.png') }}"
                                            alt="">
                                    </div>
                                    <div class="images-nav">
                                        <img src="{{ asset('assets/image/virtual.png') }}"
                                            alt="">
                                    </div>
                                    <div class="images-nav">
                                        <img src="{{ asset('assets/image/virtual.png') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-7">
                            <div class="wrapper-detail-product">
                                <h3 class="name" data-name="">
                                    </h3>
                                <div class="price-product">
                                    <p id="price">Rp. 9999999
                                        <span>/Produk</span>
                                    </p>
                                </div>
                                {{-- <div class="wrapper-quantity-product">
                                    <p>Jumlah Order Barang</p>
                                    <div class="quantity-product">
                                        <button class="quantity-count quantity-count--minus"
                                            data-action="minus" type="button">-</button>
                                        <input class="product-quantity" type="number"
                                            name="product-quantity" min="0" max="10"
                                            value="1">
                                        <button class="quantity-count quantity-count--add" data-action="add"
                                            type="button">+</button>
                                    </div>
                                    <p class="info">Min. order : 1 Produk</p>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="descripsi-product">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-detail-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-detail" type="button" role="tab"
                                aria-controls="nav-detail" aria-selected="true">Detail</button>
                        </div>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-detail" role="tabpanel"
                                aria-labelledby="nav-detail-tab">
                                <p>Nama Produk : Gergaji Piring<span class="primary-text"></span></p>
                                <p>Kategori : Mesin Gorok<span class="primary-text"></span>
                                </p>
                                <div class="desc-section">
                                    <p>Deskripsi : ini adalah mesin yang sangat bermanfaat untuk kehidupan sehari"</p>
                                    <p class="text-desc">

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-12 col-lg-4 col-xl-3">
                <div class="wrapper-summary">
                    <div class="card">
                        <h4>Total Order</h4>
                        <div class="detail-summary">
                            <div class="total-order">
                                <p>Jumlah Order</p>
                                <p><span>1</span> Produk</p>
                            </div>
                            <div class="total-price">
                                <p>Harga</p>
                                <p>Rp. <span>0</span></p>
                            </div>
                        </div>
                        <button id="add-to-cart" class="button button-primary w-100">
                            <img src="../../assets/img/icon/shopping-cart-white.svg" alt="">
                            Tambah ke Keranjang
                        </button>
                    </div>
                </div>
            </div> --}}
        </div>
</div>
@endsection
