@extends('layouts.app')
@section('main')
    <div class="container py-5" style="margin-top:30px;">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    {{-- <div class="card-header">
                    <h4>{{ $cares->product }}</h4>
                </div> --}}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{ url('imagecare') }}/{{ $cares->image }}" width="600" alt=""
                                    srcset="">
                            </div>
                            <div class="col-md-6 mt-5">
                                <h3>{{ $cares->product }}</h3>
                                <p>{{ $cares->desk }}</p>
                                <br>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Price</td>
                                            <td> : </td>
                                            <td>Rp. {{ number_format($cares->price) }}</td>
                                        </tr>
                                        <tr>
                                            <td>Stock</td>
                                            <td> : </td>
                                            <td>{{ number_format($cares->stok) }}</td>
                                        </tr>
                                        <tr>
                                            <td>Content</td>
                                            <td> : </td>
                                            <td>{{ $cares->keterangan }}</td>
                                        </tr>
                                        <form action="" method="POST">
                                            <tr>
                                                <td>Quantity</td>
                                                <td> : </td>
                                                <td>
                                                    <input type="text" name="jumlah_pesanan" class="form-control" required="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <button type="submit" class="btn btn-primary">Add To cart</button>
                                                </td>
                                            </tr>
                                        </form>
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
