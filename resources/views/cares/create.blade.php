@extends('layouts.app')
@section('main')
    <div class="container" style="margin-top: 100px">
    <form action="{{ url('/care') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- Name input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="form4Example1">Product</label>
            <input type="text" name="product" id="form4Example1" class="form-control" value="{{ old('product') }}"/>
            @error('product')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
        </div>

        <div class="form-outline mb-4">
            <label class="form-label" for="form4Example1">Description Product</label>
            <input type="text" name="desk" id="form4Example1" class="form-control" value="{{ old('desk') }}"/>
            @error('desk')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
        </div>

        <div class="form-outline mb-4">
            <label class="form-label" for="form4Example1">Price</label>
            <input type="text" name="price" id="form4Example1" class="form-control" value="{{ old('price') }}" />
            @error('price')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
        </div>

        <div class="form-outline mb-4">
            <label class="form-label" for="form4Example1">Stock</label>
            <input type="number" name="stok" id="form4Example1" class="form-control" value="{{ old('stok') }}"/>
            @error('stok')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
        </div>

        <label class="form-label" for="customFile">Default file input example</label>
        <input type="file" name="image" class="form-control" value="{{ old('image') }}"/>
        @error('image')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
        <!-- Submit button -->
        <br><br>
        <button type="submit" class="btn btn-primary btn-block mb-4">Send</button>
    </form>
    </div>
@endsection
    