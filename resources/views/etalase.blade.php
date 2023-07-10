@extends('layout.layout-etalase')

@section('content')
<div id="mainContent" style="margin-top: 150px">
    <div class="wrapperProduct line">
        <div class="container pb-5">
            <a href="#" class="header-line">
                <img src="./assets/img/icon/icons8-open-end-wrench-100.png" alt="" />
                <p>Semua Produk</p>
            </a>

            <div class="row">
                    <div class="col-6 col-lg-3">
                        <a href="" class="product">
                            <div class="imagesProduct">
                                <img src="{{ asset('assets/image/virtual.png') }}" width="250px"
                                    alt="">
                            </div>
                            <div class="infoProduct">
                                <p class="nameProduct">
                                </p>
                                <p class="price">Rp. 99999999</p>
                                <div class="discountDetail">
                                    <div class="discountValue"></div>
                                </div>
                            </div>
                        </a>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
