@extends('Template.template')

@section('Title')
    <h4>Update Data Siswa Alumni</h4>
@endsection

@section('Content')   
<div class="row">
    <div class="col-lg-12 mb-4 order-0">
        <div class="card">
        <div class="d-flex align-items-end row">
            <div class="card-body">
                <div class="text-center border border-2 border-dark rounded mb-2 text-dark fw-bold fs-large">FORM DATA ALUMNI SMK LETRIS INDONESIA 2</div>
                <form action="/product" method="POST">
                    @csrf
                    <div class="form-group mb-2">
                        <label>NIS/NISN</label>
                        <input type="number" class="form-control" name="price" placeholder="ex : 22102499188" required>
                        @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <label>Nama Siswa</label>
                        <input type="text" class="form-control" name="nama_product" required>
                        @error('nama_product')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <label>Jenis kelamin</label>
                        <select type="text" class="form-control" name="category" placeholder="Category Product"> 
                            <option>Laki-Laki / Perempuan</option>
                            <option value="1">Laki-Laki</option>
                            <option value="2">Perempuan</option>
                        </select>
                        @error('category')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <label>Alamat</label>
                        <textarea class="form-control" name="descripsi" rows="2" required></textarea>
                        @error('descripsi')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label>Foto Siswa</label>
                        <div class="input-group mb-2 border rounded">
                            <div class="custom-file">
                            <input type="file" class="custom-file-input" name="gambar" aria-describedby="inputGroupFileAddon01">
                            </div>
                        </div>
                        @error('gambar')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <div class="row">
                            <div class="col-6">
                                <label>Tahun Masuk</label>
                                <input type="number" class="form-control" name="stock" placeholder="ex : 2017" required>
                                @error('stock')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label>Tahun Lulus</label>
                                <input type="number" class="form-control" name="stock" placeholder="ex : 2020" required>
                                @error('stock')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="row">
                            <div class="col-6">  
                                <label>Melanjutkan</label>
                                <select type="text" class="form-control" name="category" placeholder="Category Product" required> 
                                    <option>Kuliah / Kerja</option>
                                    <option>Kuliah</option>
                                    <option>Kerja</option>
                                </select>
                                @error('category')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-6">  
                                <label>Dimana</label>
                                <input type="text" class="form-control" name="category" placeholder="ex : Universitas Pamulang / Tokopedia ">
                                @error('category')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="row">
                            <div class="col-6">  
                                <label>Email</label>
                                <input type="text" class="form-control" name="category" placeholder="smkletris2@gmail.com" required>
                                @error('category')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-6">  
                                <label>No Telp</label>
                                <input type="number" class="form-control" name="category" placeholder="ex : 082255200224" required>
                                @error('category')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <label>Catatan</label>
                        <textarea class="form-control" name="descripsi" rows="3" ></textarea>
                        @error('descripsi')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-2 mt-4">
                        <button class="w-100 btn btn-outline-primary rounded">Create Data Alumni</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>


    </div>
    </div>
@endsection