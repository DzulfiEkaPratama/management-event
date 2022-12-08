@extends('adminlte::page')

@section('title', 'Narasumber Kegiatan')

@section('content_header')
<h1 class="m-0 text-dark">Narasumber Kegiatan</h1>
@stop

@section('content')
<form action="{{ route('users.store') }}" method="post">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary my-1" data-toggle="modal" data-target="#exampleModal">
                        Tambah Narasumber Kegiatan
                    </button>

                    <!-- Modal -->
                    <form method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Narasumber Kegiatan</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="exampleInputName">Nama Narasumber</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                id="exampleInputName" placeholder="Nama Narasumber" name="name"
                                                value="{{ old('name') }}" onkeypress="return /[a-z]/i.test(event.key)">
                                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputName">No Telephone</label>
                                            <input type="text" name="notel" class="form-control" id="notel"
                                                placeholder="No. Telephone" onkeypress="return onlyNumberKey(event)"
                                                maxlength="14" minlenght="11" required>
                                            @error('number') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>

                                        <!-- Provinsi/kota -->
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label for="exampleInputName">Provinsi</label>
                                                <select id="state" name="state" class="form-control">
                                                    <option value="" selected disabled>Pilih Provinsi</option>
                                                    @foreach ($states as $key => $state)
                                                    <option value="{{ $key }}"> {{ $state }}</option>
                                                    @endforeach
                                                </select>

                                                <div class="validate"></div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputName">Kota</label>
                                                <select name="city" id="city" class="form-control"></select>
                                                <div class="validate"></div>
                                            </div>
                                        </div>
                                        <!-- Akhir Provinsi/kota -->

                                        <div class="form-group">
                                            <label for="exampleInputKota">Pendidikan</label>
                                            <select class="form-control" name="kelamin" id="kelamin"
                                                placeholeder="Jenis Kelamin" required>
                                                <option value="" muted>Pendidikan</option>
                                                <option value="SD">SD / Sederajat</option>
                                                <option value="SMP">SMP / Sederajat</option>
                                                <option value="SMA">SMA / Sederajat</option>
                                                <option value="D1">D1</option>
                                                <option value="D2">D2</option>
                                                <option value="D3">D3</option>
                                                <option value="S1">S1</option>
                                                <option value="S2">S2</option>
                                                <option value="S3">S3</option>
                                            </select>

                                            <div class="validate"></div>
                                        </div>

                                        <!-- Pekerjaan -->
                                        <div class="form-group">
                                            <tr>
                                                <td>
                                                    <label for="exampleInputName">Pekerjaan</label>
                                                </td>
                                                <td><select class="form-control" name="pekerjaan" id="pekerjaan"
                                                        placeholeder="Pekerjaan" onchange="show()">
                                                        <option value="">Pekerjaan</option>
                                                        <option value="Pelajar">Pelajar</option>
                                                        <option value="Mahasiswa">Mahasiswa</option>
                                                        <option value="ASN/TNI/Polri">ASN/TNI/Polri</option>
                                                        <option value="Karyawan Swasta">Karyawan Swasta</option>
                                                        <option value="Wirausaha">Wirausaha</option>
                                                        <option value="Freelancer">Freelancer</option>
                                                        <option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
                                                        <option value="Lainnya">Lainnya</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            <div class="validate"></div>
                                        </div>

                                        <div class="form-group">

                                            <table class="form-group card-footer rounded-sm"
                                                style="display:none;    background-color: rgb(179 179 179 / 55%);"
                                                id="pekerjaan_lainnya">

                                                <td>
                                                    <h6>Pekerjaan Anda : </h6>
                                                </td>
                                                <td><input type="text" id="pekerjaan" name="pekerjaan"
                                                        class="form-control ml-3" placeholder="Pekerjaan"
                                                        onkeypress="return /[a-z, space]/i.test(event.key)"
                                                        maxlength="25" minlength="4" required></td>

                                                <div class="validate"></div>

                                            </table>
                                        </div>
                                        <!-- Akhir Pekerjaan -->

                                        <div class="form-group">
                                            <label for="exampleInputJeniskelamin">Jenis kelamin</label>
                                            <select class="form-control" name="kelamin"
                                                value="{{ old('jeniskelamin') }}" id="kelamin"
                                                placeholeder="Jenis Kelamin" required>
                                                <option value="" muted>Jenis Kelamin</option>
                                                <option value="1">Laki-Laki</option>
                                                <option value="2">Perempuan</option>
                                            </select>
                                            @error('jeniskelamin') <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail">Email address</label>
                                            <input type="email"
                                                class="form-control @error('email') is-invalid @enderror"
                                                id="exampleInputEmail" placeholder="Masukkan Email" name="email"
                                                value="{{ old('email') }}">
                                            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>

                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-success">Simpan</button>
                                        <a href="/narasumberkegiatan" class="btn btn-danger">
                                            Batal
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- Akhir Modal -->

                    <table class="table table-hover table-bordered table-stripped" id="example2">

                        <thead>

                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Aksi</th>
                            </tr>

                        </thead>

                        <tbody>
                            <!-- Modal Edit -->
                            <form method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="modal fade" id="exampleModalEdit" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Narasumber
                                                    Kegiatan</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="exampleInputName">Nama Narasumber</label>
                                                    <input type="text"
                                                        class="form-control @error('name') is-invalid @enderror"
                                                        id="exampleInputName" placeholder="Nama Narasumber" name="name"
                                                        value="{{ $user->name ?? old('name') }}"
                                                        onkeypress="return /[a-z]/i.test(event.key)">
                                                    @error('name') <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputName">No Telephone</label>
                                                    <input type="text" name="notel" class="form-control" id="notel"
                                                        placeholder="No. Telephone"
                                                        onkeypress="return onlyNumberKey(event)" maxlength="14"
                                                        minlenght="11" required>
                                                    @error('number') <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <!-- Provinsi/kota -->
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label for="exampleInputName">Provinsi</label>
                                                        <select id="state" name="state" class="form-control">
                                                            <option value="" selected disabled>Pilih Provinsi</option>
                                                            @foreach ($states as $key => $state)
                                                            <option value="{{ $key }}"> {{ $state }}</option>
                                                            @endforeach
                                                        </select>

                                                        <div class="validate"></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputName">Kota</label>
                                                        <select name="city" id="city" class="form-control"></select>
                                                        <div class="validate"></div>
                                                    </div>
                                                </div>
                                                <!-- Akhir Provinsi/kota -->

                                                <div class="form-group">
                                                    <label for="exampleInputKota">Pendidikan</label>
                                                    <select class="form-control" name="kelamin" id="kelamin"
                                                        placeholeder="Jenis Kelamin" required>
                                                        <option value="" muted> Pendidikan </option>
                                                        <option value="SD">SD / Sederajat</option>
                                                        <option value="SMP">SMP / Sederajat</option>
                                                        <option value="SMA">SMA / Sederajat</option>
                                                        <option value="D1">D1</option>
                                                        <option value="D2">D2</option>
                                                        <option value="D3">D3</option>
                                                        <option value="S1">S1</option>
                                                        <option value="S2">S2</option>
                                                        <option value="S3">S3</option>
                                                    </select>

                                                    <div class="validate"></div>

                                                </div>

                                                <!-- Pekerjaan -->
                                                <div class="form-group">

                                                    <label for="exampleInputName">Pekerjaan</label>
                                                    <select class="form-control" name="pekerjaan" id="pekerjaan"
                                                        placeholeder="Pekerjaan" onchange="show()">
                                                        <option value="">Pekerjaan</option>
                                                        <option value="Pelajar">Pelajar</option>
                                                        <option value="Mahasiswa">Mahasiswa</option>
                                                        <option value="ASN/TNI/Polri">ASN/TNI/Polri</option>
                                                        <option value="Karyawan Swasta">Karyawan Swasta</option>
                                                        <option value="Wirausaha">Wirausaha</option>
                                                        <option value="Freelancer">Freelancer</option>
                                                        <option value="Ibu Rumah Tangga">Ibu Rumah Tangga
                                                        </option>
                                                        <option value="Lainnya">Lainnya</option>
                                                    </select>

                                                    <div class="validate"></div>
                                                </div>

                                                <div class="form-group">

                                                    <div class="form-group card-footer rounded-sm"
                                                        style="display:none;    background-color: rgb(179 179 179 / 55%);"
                                                        id="pekerjaan_lainnya">


                                                        <h6>Pekerjaan Anda : </h6>
                                                        <input type="text" id="pekerjaan" name="pekerjaan"
                                                            class="form-control ml-3" placeholder="Pekerjaan"
                                                            onkeypress="return /[a-z, space]/i.test(event.key)"
                                                            maxlength="25" minlength="4" required>

                                                        <div class="validate"></div>

                                                    </div>
                                                </div>
                                                <!-- Akhir Pekerjaan -->

                                                <div class="form-group">
                                                    <label for="exampleInputJeniskelamin">Jenis kelamin</label>
                                                    <select class="form-control" name="kelamin"
                                                        value="{{ old('jeniskelamin') }}" id="kelamin"
                                                        placeholeder="Jenis Kelamin" required>
                                                        <option value="" muted> Jenis Kelamin </option>
                                                        <option value="1">Laki-Laki</option>
                                                        <option value="2">Perempuan</option>
                                                    </select>
                                                    @error('jeniskelamin') <span
                                                        class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputEmail">Email address</label>
                                                    <input type="email"
                                                        class="form-control @error('email') is-invalid @enderror"
                                                        id="exampleInputEmail" placeholder="Masukkan Email" name="email"
                                                        value="{{ old('email') }}">
                                                    @error('email') <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-success">Simpan</button>
                                                <a href="/narasumberkegiatan" class="btn btn-danger">
                                                    Batal
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- Akhir Modal -->

                            <!-- Modal Detail -->
                            {{-- <form method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="modal fade" id="exampleModalDetail" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Detail
                                                    Narasumber
                                                    Kegiatan</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="exampleInputName">Nama Narasumber</label>
                                                    <input type="text"
                                                        class="form-control @error('name') is-invalid @enderror"
                                                        id="exampleInputName" placeholder="Nama Narasumber" name="name"
                                                        disabled value="{{ old('name') }}"
                            onkeypress="return /[a-z]/i.test(event.key)">
                            @error('name') <span class="text-danger">{{ $message }}</span>
                            @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputName">No Telephone</label>
                    <input type="text" name="notel" class="form-control" id="notel" disabled placeholder="No. Telephone"
                        onkeypress="return onlyNumberKey(event)" maxlength="14" minlenght="11" required>
                    @error('number') <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Provinsi/kota -->
                <div class="form-group">
                    <div class="form-group">
                        <label for="exampleInputName">Provinsi</label>
                        <select id="state" disabled name="state" class="form-control">
                            <option value="" selected disabled>Pilih Provinsi</option>
                            @foreach ($states as $key => $state)
                            <option value="{{ $key }}"> {{ $state }}</option>
                            @endforeach
                        </select>

                        <div class="validate"></div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">Kota</label>
                        <select name="city" disabled id="city" class="form-control"></select>
                        <div class="validate"></div>
                    </div>
                </div>
                <!-- Akhir Provinsi/kota -->

                <div class="form-group">
                    <label for="exampleInputKota">Pendidikan</label>
                    <select class="form-control" name="kelamin" id="kelamin" disabled placeholeder="Jenis Kelamin"
                        required>
                        <option value="" muted>-- Pendidikan --</option>
                        <option value="SD">SD / Sederajat</option>
                        <option value="SMP">SMP / Sederajat</option>
                        <option value="SMA">SMA / Sederajat</option>
                        <option value="D1">D1</option>
                        <option value="D2">D2</option>
                        <option value="D3">D3</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                    </select>

                    <div class="validate"></div>
                </div>
                <div class="form-group">
                    <label for="exampleInputKota">Pekerjaan</label>
                    <select class="form-control" name="kelamin" id="kelamin" disabled placeholeder="Jenis Kelamin"
                        required>
                        <option value="" muted>-- Pekerjaan --</option>
                        <option value="Pelajar">Pelajar</option>
                        <option value="Mahasiswa">Mahasiswa</option>
                        <option value="ASN/TNI/Polri">ASN/TNI/Polri</option>
                        <option value="Karyawan Swasta">Karyawan Swasta</option>
                        <option value="Wirausaha">Wirausaha</option>
                        <option value="Freelancer">Freelancer</option>
                        <option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>

                    <div class="validate"></div>
                </div>
                <div class="form-group">
                    <label for="exampleInputJeniskelamin">Jenis kelamin</label>
                    <select class="form-control" name="kelamin" value="{{ old('jeniskelamin') }}" id="kelamin" disabled
                        placeholeder="Jenis Kelamin" required>
                        <option value="" muted>-- Jenis Kelamin --</option>
                        <option value="1">Laki-Laki</option>
                        <option value="2">Perempuan</option>
                    </select>
                    @error('jeniskelamin') <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail">Email address</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" disabled
                        id="exampleInputEmail" placeholder="Masukkan Email" name="email" value="{{ old('email') }}">
                    @error('email') <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

            </div>
            <div class="card-footer">
                <a href="/narasumberkegiatan" class="btn btn-danger">
                    Batal
                </a>
            </div>
        </div>
    </div>
    </div>
</form> --}}
<!-- Akhir Modal -->

<!-- Modal Delete-->
<form method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="exampleModalDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete
                        Narasumber
                        Kegiatan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <p>Apakah anda yakin akan menghapus data ?</p>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-danger">Hapus</button>
                    <a href="/narasumberkegiatan" class="btn btn-success">
                        Batal
                    </a>
                </div>
                <!-- Akhir Modal -->

                <tr>
                    <td>1.</td>
                    <td>Example</td>
                    <td>example@gmail.com</td>
                    <td>

                        <a href="/narasumberkegiatan/edit" class="btn bg-gradient-olive btn-xs" data-toggle="modal"
                            data-target="#exampleModalEdit">
                            Edit
                        </a>
                        <a href="/narasumberkegiatan/show" class="btn btn-info btn-xs">
                            Detail
                        </a>
                        <a href="/narasumberkegiatan/destroy" onclick="notificationBeforeDelete(event, this)"
                            class="btn btn-danger btn-xs" data-toggle="modal" data-target="#exampleModalDelete">
                            Delete
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>2.</td>
                    <td>Example</td>
                    <td>example@gmail.com</td>
                    <td>
                        <a href="/narasumberkegiatan/edit" class="btn bg-gradient-olive btn-xs" data-toggle="modal"
                            data-target="#exampleModalEdit">
                            Edit
                        </a>
                        <a href="/narasumberkegiatan/show" class="btn btn-info btn-xs" data-toggle="modal"
                            data-target="#exampleModalDetail">
                            Detail
                        </a>
                        <a href="/narasumberkegiatan/destroy" onclick="notificationBeforeDelete(event, this)"
                            class="btn btn-danger btn-xs" data-toggle="modal" data-target="#exampleModalDelete">
                            Delete
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>3.</td>
                    <td>Example</td>
                    <td>example@gmail.com</td>
                    <td>
                        <a href="/narasumberkegiatan/edit" class="btn bg-gradient-olive btn-xs" data-toggle="modal"
                            data-target="#exampleModalEdit">
                            Edit
                        </a>
                        <a href="/narasumberkegiatan/show" class="btn btn-info btn-xs" data-toggle="modal"
                            data-target="#exampleModalDetail">
                            Detail
                        </a>
                        <a href="/narasumberkegiatan/destroy" onclick="notificationBeforeDelete(event, this)"
                            class="btn btn-danger btn-xs" data-toggle="modal" data-target="#exampleModalDelete">
                            Delete
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>4.</td>
                    <td>Example</td>
                    <td>example@gmail.com</td>
                    <td>
                        <a href="/narasumberkegiatan/edit" class="btn bg-gradient-olive btn-xs" data-toggle="modal"
                            data-target="#exampleModalEdit">
                            Edit
                        </a>
                        <a href="/narasumberkegiatan/show" class="btn btn-info btn-xs" data-toggle="modal"
                            data-target="#exampleModalDetail">
                            Detail
                        </a>
                        <a href="/narasumberkegiatan/destroy" onclick="notificationBeforeDelete(event, this)"
                            class="btn btn-danger btn-xs" data-toggle="modal" data-target="#exampleModalDelete">
                            Delete
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>5.</td>
                    <td>Example</td>
                    <td>example@gmail.com</td>
                    <td>
                        <a href="/narasumberkegiatan/edit" class="btn bg-gradient-olive btn-xs" data-toggle="modal"
                            data-target="#exampleModalEdit">
                            Edit
                        </a>
                        <a href="/narasumberkegiatan/show" class="btn btn-info btn-xs" data-toggle="modal"
                            data-target="#exampleModalDetail">
                            Detail
                        </a>
                        <a href="/narasumberkegiatan/destroy" onclick="notificationBeforeDelete(event, this)"
                            class="btn btn-danger btn-xs" data-toggle="modal" data-target="#exampleModalDelete">
                            Delete
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>6.</td>
                    <td>Example</td>
                    <td>example@gmail.com</td>
                    <td>
                        <a href="/narasumberkegiatan/edit" class="btn bg-gradient-olive btn-xs" data-toggle="modal"
                            data-target="#exampleModalEdit">
                            Edit
                        </a>
                        <a href="/narasumberkegiatan/show" class="btn btn-info btn-xs" data-toggle="modal"
                            data-target="#exampleModalDetail">
                            Detail
                        </a>
                        <a href="/narasumberkegiatan/destroy" onclick="notificationBeforeDelete(event, this)"
                            class="btn btn-danger btn-xs" data-toggle="modal" data-target="#exampleModalDelete">
                            Delete
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>7.</td>
                    <td>Example</td>
                    <td>example@gmail.com</td>
                    <td>
                        <a href="/narasumberkegiatan/edit" class="btn bg-gradient-olive btn-xs" data-toggle="modal"
                            data-target="#exampleModalEdit">
                            Edit
                        </a>
                        <a href="/narasumberkegiatan/show" class="btn btn-info btn-xs" data-toggle="modal"
                            data-target="#exampleModalDetail">
                            Detail
                        </a>
                        <a href="/narasumberkegiatan/destroy" onclick="notificationBeforeDelete(event, this)"
                            class="btn btn-danger btn-xs" data-toggle="modal" data-target="#exampleModalDelete">
                            Delete
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>8.</td>
                    <td>Example</td>
                    <td>example@gmail.com</td>
                    <td>
                        <a href="/narasumberkegiatan/edit" class="btn bg-gradient-olive btn-xs" data-toggle="modal"
                            data-target="#exampleModalEdit">
                            Edit
                        </a>
                        <a href="/narasumberkegiatan/show" class="btn btn-info btn-xs" data-toggle="modal"
                            data-target="#exampleModalDetail">
                            Detail
                        </a>
                        <a href="/narasumberkegiatan/destroy" onclick="notificationBeforeDelete(event, this)"
                            class="btn btn-danger btn-xs" data-toggle="modal" data-target="#exampleModalDelete">
                            Delete
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>9.</td>
                    <td>Example</td>
                    <td>example@gmail.com</td>
                    <td>
                        <a href="/narasumberkegiatan/edit" class="btn bg-gradient-olive btn-xs" data-toggle="modal"
                            data-target="#exampleModalEdit">
                            Edit
                        </a>
                        <a href="/narasumberkegiatan/show" class="btn btn-info btn-xs" data-toggle="modal"
                            data-target="#exampleModalDetail">
                            Detail
                        </a>
                        <a href="/narasumberkegiatan/destroy" onclick="notificationBeforeDelete(event, this)"
                            class="btn btn-danger btn-xs" data-toggle="modal" data-target="#exampleModalDelete">
                            Delete
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>10.</td>
                    <td>Example</td>
                    <td>example@gmail.com</td>
                    <td>
                        <a href="/narasumberkegiatan/edit" class="btn bg-gradient-olive btn-xs" data-toggle="modal"
                            data-target="#exampleModalEdit">
                            Edit
                        </a>
                        <a href="/narasumberkegiatan/show" class="btn btn-info btn-xs" data-toggle="modal"
                            data-target="#exampleModalDetail">
                            Detail
                        </a>
                        <a href="/narasumberkegiatan/destroy" onclick="notificationBeforeDelete(event, this)"
                            class="btn btn-danger btn-xs" data-toggle="modal" data-target="#exampleModalDelete">
                            Delete
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>11.</td>
                    <td>Example</td>
                    <td>example@gmail.com</td>
                    <td>
                        <a href="/narasumberkegiatan/edit" class="btn bg-gradient-olive btn-xs" data-toggle="modal"
                            data-target="#exampleModalEdit">
                            Edit
                        </a>
                        <a href="/narasumberkegiatan/show" class="btn btn-info btn-xs" data-toggle="modal"
                            data-target="#exampleModalDetail">
                            Detail
                        </a>
                        <a href="/narasumberkegiatan/destroy" onclick="notificationBeforeDelete(event, this)"
                            class="btn btn-danger btn-xs" data-toggle="modal" data-target="#exampleModalDelete">
                            Delete
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>12.</td>
                    <td>Example</td>
                    <td>example@gmail.com</td>
                    <td>
                        <a href="/narasumberkegiatan/edit" class="btn bg-gradient-olive btn-xs" data-toggle="modal"
                            data-target="#exampleModalEdit">
                            Edit
                        </a>
                        <a href="/narasumberkegiatan/show" class="btn btn-info btn-xs" data-toggle="modal"
                            data-target="#exampleModalDetail">
                            Detail
                        </a>
                        <a href="/narasumberkegiatan/destroy" onclick="notificationBeforeDelete(event, this)"
                            class="btn btn-danger btn-xs" data-toggle="modal" data-target="#exampleModalDelete">
                            Delete
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>13.</td>
                    <td>Example</td>
                    <td>example@gmail.com</td>
                    <td>
                        <a href="/narasumberkegiatan/edit" class="btn bg-gradient-olive btn-xs" data-toggle="modal"
                            data-target="#exampleModalEdit">
                            Edit
                        </a>
                        <a href="/narasumberkegiatan/show" class="btn btn-info btn-xs" data-toggle="modal"
                            data-target="#exampleModalDetail">
                            Detail
                        </a>
                        <a href="/narasumberkegiatan/destroy" onclick="notificationBeforeDelete(event, this)"
                            class="btn btn-danger btn-xs" data-toggle="modal" data-target="#exampleModalDelete">
                            Delete
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>14.</td>
                    <td>Example</td>
                    <td>example@gmail.com</td>
                    <td>
                        <a href="/narasumberkegiatan/edit" class="btn bg-gradient-olive btn-xs" data-toggle="modal"
                            data-target="#exampleModalEdit">
                            Edit
                        </a>
                        <a href="/narasumberkegiatan/show" class="btn btn-info btn-xs" data-toggle="modal"
                            data-target="#exampleModalDetail">
                            Detail
                        </a>
                        <a href="/narasumberkegiatan/destroy" onclick="notificationBeforeDelete(event, this)"
                            class="btn btn-danger btn-xs" data-toggle="modal" data-target="#exampleModalDelete">
                            Delete
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>15.</td>
                    <td>Example</td>
                    <td>example@gmail.com</td>
                    <td>
                        <a href="/narasumberkegiatan/edit" class="btn bg-gradient-olive btn-xs" data-toggle="modal"
                            data-target="#exampleModalEdit">
                            Edit
                        </a>
                        <a href="/narasumberkegiatan/show" class="btn btn-info btn-xs" data-toggle="modal"
                            data-target="#exampleModalDetail">
                            Detail
                        </a>
                        <a href="/narasumberkegiatan/destroy" onclick="notificationBeforeDelete(event, this)"
                            class="btn btn-danger btn-xs" data-toggle="modal" data-target="#exampleModalDelete">
                            Delete
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>16.</td>
                    <td>Example</td>
                    <td>example@gmail.com</td>
                    <td>
                        <a href="/narasumberkegiatan/edit" class="btn bg-gradient-olive btn-xs" data-toggle="modal"
                            data-target="#exampleModalEdit">
                            Edit
                        </a>
                        <a href="/narasumberkegiatan/show" class="btn btn-info btn-xs" data-toggle="modal"
                            data-target="#exampleModalDetail">
                            Detail
                        </a>
                        <a href="/narasumberkegiatan/destroy" onclick="notificationBeforeDelete(event, this)"
                            class="btn btn-danger btn-xs" data-toggle="modal" data-target="#exampleModalDelete">
                            Delete
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>17.</td>
                    <td>Example</td>
                    <td>example@gmail.com</td>
                    <td>
                        <a href="/narasumberkegiatan/edit" class="btn bg-gradient-olive btn-xs" data-toggle="modal"
                            data-target="#exampleModalEdit">
                            Edit
                        </a>
                        <a href="/narasumberkegiatan/show" class="btn btn-info btn-xs" data-toggle="modal"
                            data-target="#exampleModalDetail">
                            Detail
                        </a>
                        <a href="/narasumberkegiatan/destroy" onclick="notificationBeforeDelete(event, this)"
                            class="btn btn-danger btn-xs" data-toggle="modal" data-target="#exampleModalDelete">
                            Delete
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>18.</td>
                    <td>Example</td>
                    <td>example@gmail.com</td>
                    <td>
                        <a href="/narasumberkegiatan/edit" class="btn bg-gradient-olive btn-xs" data-toggle="modal"
                            data-target="#exampleModalEdit">
                            Edit
                        </a>
                        <a href="/narasumberkegiatan/show" class="btn btn-info btn-xs" data-toggle="modal"
                            data-target="#exampleModalDetail">
                            Detail
                        </a>
                        <a href="/narasumberkegiatan/destroy" onclick="notificationBeforeDelete(event, this)"
                            class="btn btn-danger btn-xs" data-toggle="modal" data-target="#exampleModalDelete">
                            Delete
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>19.</td>
                    <td>Example</td>
                    <td>example@gmail.com</td>
                    <td>
                        <a href="/narasumberkegiatan/edit" class="btn bg-gradient-olive btn-xs" data-toggle="modal"
                            data-target="#exampleModalEdit">
                            Edit
                        </a>
                        <a href="/narasumberkegiatan/show" class="btn btn-info btn-xs" data-toggle="modal"
                            data-target="#exampleModalDetail">
                            Detail
                        </a>
                        <a href="/narasumberkegiatan/destroy" onclick="notificationBeforeDelete(event, this)"
                            class="btn btn-danger btn-xs" data-toggle="modal" data-target="#exampleModalDelete">
                            Delete
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>20.</td>
                    <td>Example</td>
                    <td>example@gmail.com</td>
                    <td>
                        <a href="/narasumberkegiatan/edit" class="btn bg-gradient-olive btn-xs" data-toggle="modal"
                            data-target="#exampleModalEdit">
                            Edit
                        </a>
                        <a href="/narasumberkegiatan/show" class="btn btn-info btn-xs" data-toggle="modal"
                            data-target="#exampleModalDetail">
                            Detail
                        </a>
                        <a href="/narasumberkegiatan/destroy" onclick="notificationBeforeDelete(event, this)"
                            class="btn btn-danger btn-xs" data-toggle="modal" data-target="#exampleModalDelete">
                            Delete
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>21.</td>
                    <td>Example</td>
                    <td>example@gmail.com</td>
                    <td>
                        <a href="/narasumberkegiatan/edit" class="btn bg-gradient-olive btn-xs" data-toggle="modal"
                            data-target="#exampleModalEdit">
                            Edit
                        </a>
                        <a href="/narasumberkegiatan/show" class="btn btn-info btn-xs" data-toggle="modal"
                            data-target="#exampleModalDetail">
                            Detail
                        </a>
                        <a href="/narasumberkegiatan/destroy" onclick="notificationBeforeDelete(event, this)"
                            class="btn btn-danger btn-xs" data-toggle="modal" data-target="#exampleModalDelete">
                            Delete
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>22.</td>
                    <td>Example</td>
                    <td>example@gmail.com</td>
                    <td>
                        <a href="/narasumberkegiatan/edit" class="btn bg-gradient-olive btn-xs" data-toggle="modal"
                            data-target="#exampleModalEdit">
                            Edit
                        </a>
                        <a href="/narasumberkegiatan/show" class="btn btn-info btn-xs" data-toggle="modal"
                            data-target="#exampleModalDetail">
                            Detail
                        </a>
                        <a href="/narasumberkegiatan/destroy" onclick="notificationBeforeDelete(event, this)"
                            class="btn btn-danger btn-xs" data-toggle="modal" data-target="#exampleModalDelete">
                            Delete
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>23.</td>
                    <td>Example</td>
                    <td>example@gmail.com</td>
                    <td>
                        <a href="/narasumberkegiatan/edit" class="btn bg-gradient-olive btn-xs" data-toggle="modal"
                            data-target="#exampleModalEdit">
                            Edit
                        </a>
                        <a href="/narasumberkegiatan/show" class="btn btn-info btn-xs" data-toggle="modal"
                            data-target="#exampleModalDetail">
                            Detail
                        </a>
                        <a href="/narasumberkegiatan/destroy" onclick="notificationBeforeDelete(event, this)"
                            class="btn btn-danger btn-xs" data-toggle="modal" data-target="#exampleModalDelete">
                            Delete
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>24.</td>
                    <td>Example</td>
                    <td>example@gmail.com</td>
                    <td>
                        <a href="/narasumberkegiatan/edit" class="btn bg-gradient-olive btn-xs" data-toggle="modal"
                            data-target="#exampleModalEdit">
                            Edit
                        </a>
                        <a href="/narasumberkegiatan/show" class="btn btn-info btn-xs" data-toggle="modal"
                            data-target="#exampleModalDetail">
                            Detail
                        </a>
                        <a href="/narasumberkegiatan/destroy" onclick="notificationBeforeDelete(event, this)"
                            class="btn btn-danger btn-xs" data-toggle="modal" data-target="#exampleModalDelete">
                            Delete
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>25.</td>
                    <td>Example</td>
                    <td>example@gmail.com</td>
                    <td>
                        <a href="/narasumberkegiatan/edit" class="btn bg-gradient-olive btn-xs" data-toggle="modal"
                            data-target="#exampleModalEdit">
                            Edit
                        </a>
                        <a href="/narasumberkegiatan/show" class="btn btn-info btn-xs" data-toggle="modal"
                            data-target="#exampleModalDetail">
                            Detail
                        </a>
                        <a href="/narasumberkegiatan/destroy" onclick="notificationBeforeDelete(event, this)"
                            class="btn btn-danger btn-xs" data-toggle="modal" data-target="#exampleModalDelete">
                            Delete
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>26.</td>
                    <td>Example</td>
                    <td>example@gmail.com</td>
                    <td>
                        <a href="/narasumberkegiatan/edit" class="btn bg-gradient-olive btn-xs" data-toggle="modal"
                            data-target="#exampleModalEdit">
                            Edit
                        </a>
                        <a href="/narasumberkegiatan/show" class="btn btn-info btn-xs" data-toggle="modal"
                            data-target="#exampleModalDetail">
                            Detail
                        </a>
                        <a href="/narasumberkegiatan/destroy" onclick="notificationBeforeDelete(event, this)"
                            class="btn btn-danger btn-xs" data-toggle="modal" data-target="#exampleModalDelete">
                            Delete
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>27.</td>
                    <td>Example</td>
                    <td>example@gmail.com</td>
                    <td>
                        <a href="/narasumberkegiatan/edit" class="btn bg-gradient-olive btn-xs" data-toggle="modal"
                            data-target="#exampleModalEdit">
                            Edit
                        </a>
                        <a href="/narasumberkegiatan/show" class="btn btn-info btn-xs" data-toggle="modal"
                            data-target="#exampleModalDetail">
                            Detail
                        </a>
                        <a href="/narasumberkegiatan/destroy" onclick="notificationBeforeDelete(event, this)"
                            class="btn btn-danger btn-xs" data-toggle="modal" data-target="#exampleModalDelete">
                            Delete
                        </a>
                    </td>
                </tr>

                </tbody>

                </table>

            </div>

        </div>

    </div>

    </div>

    @stop

    @push('js')
    <form action="" id="delete-form" method="post">
        @method('delete')
        @csrf
    </form>
    <script>
        $('#example2').DataTable({
            "responsive": true,
        });

    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    {{-- Script Pekerjaan Lainya --}}
    <script>
        function show() {
            var option = document.getElementById("pekerjaan").value;
            if (option == "") {
                document.getElementById("pekerjaan_lainnya").style.display = "none";
            }
            if (option == "Pelajar") {
                document.getElementById("pekerjaan_lainnya").style.display = "none";
            }
            if (option == "Mahasiswa") {
                document.getElementById("pekerjaan_lainnya").style.display = "none";
            }
            if (option == "ASN/TNI/Polri") {
                document.getElementById("pekerjaan_lainnya").style.display = "none";
            }
            if (option == "Karyawan Swasta") {
                document.getElementById("pekerjaan_lainnya").style.display = "none";
            }
            if (option == "Wirausaha") {
                document.getElementById("pekerjaan_lainnya").style.display = "none";
            }
            if (option == "Freelancer") {
                document.getElementById("pekerjaan_lainnya").style.display = "none";
            }
            if (option == "Ibu Rumah Tangga") {
                document.getElementById("pekerjaan_lainnya").style.display = "none";
            }
            if (option == "Lainnya") {
                document.getElementById("pekerjaan_lainnya").style.display = "block";
            }
        }

    </script>
    @endpush
