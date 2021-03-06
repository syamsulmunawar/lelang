<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="form-group">
                <input wire:model="search" type="text" class="form-control col-4 ml-auto" placeholder="Search Product">
            </div>
        </div>
    </div>

    <div class="row">
        @foreach ($products as $product)
        <div class="col-sm-12 col-xs-12 col-md-4 col-lg-3 mb-4">
            <div class="card h-80">
                <img class="card-img-top img-fluid" src="{{ $product->image ? asset('/storage/'.$product->image) : 'https://via.placeholder.com/150' }}" alt="">
                <div class="card-img-overlay" style="background-color: rgba(0,0,0,0.5);">
                    <h5 class="text-white">
                        <strong>
                            <a href="{{ route('shop.detail') }}">
                                {{ $product->nama_barang }}</strong>
                            </a>
                    </h5>
                    <h6 class="text-white">Rp{{ number_format($product->harga_awal,2,",",".") }}</h6>
                    <p class="text-white">
                        {{ $product->deskripsi }}
                    </p>
                    <button wire:click="ikutLelang({{ $product->id }})" type="button" class="btn btn-sm btn-block btn-outline-secondary text-white">Ikut Lelang</button>
                </div>
            </div>
        </div>
        @endforeach

    </div>
    {{ $products->links() }}
</div>
