@extends('adminlte::page')

@section('title', 'Narasumber Kategori')

@section('content_header')
<h1 class="m-0 text-dark">Narasumber Kategori</h1>
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
                        Kategori Narasumber
                    </button>

                    <!-- Modal -->
                    <form method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Management Kategori Narasumber
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    {{-- <div class="modal-body">
                                        <label for="exampleDataList" class="form-label">Kategori</label>
                                        <input class="form-control" type="text" list="datalistOptions" id="exampleDataList"
                                            placeholder="Lainnya...">
                                        <datalist id="datalistOptions">
                                            <option value="Narasumber Lokal">
                                            <option value="Narasumber Nasional">
                                            <option value="MC">
                                            <option value="Moderator">
                                        </datalist>
                                    </div> --}}

                                    {{-- <div class="modal-body">
                                        <select class="form-select form-select-lg mb-3 form-control form-control-lg"
                                            aria-label=".form-select-lg example">
                                            <option selected></option>
                                            <option value="1">Narasumber Lokal</option>
                                            <option value="2">Narasumber Nasional</option>
                                            <option value="3">MC</option>
                                            <option value="4">Moderator</option>
                                        </select>
                                        <input class="form-control form-control-lg" type="text" placeholder="Lainnya"
                                            aria-label="Lainnya example">
                                    </div> --}}

                                    <div class="col-md-6 form-group">
                                        <tr>
                                            <td>
                                                <h6 class="ml-3">Kategori</h6>
                                            </td>
                                            <td><select class="form-control" name="pekerjaan" id="pekerjaan"
                                                    placeholeder="Pekerjaan" onchange="show()">
                                                    <option value="">Pilih Kategori</option>
                                                    <option value="Pelajar">Narasumber Lokal</option>
                                                    <option value="Mahasiswa">Narasumber Nasional</option>
                                                    <option value="ASN/TNI/Polri">MC</option>
                                                    <option value="Karyawan Swasta">Moderator</option>
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
                                                <h6>Kategori Lainnya : </h6>
                                            </td>
                                            <td><input type="text" id="pekerjaan" name="pekerjaan"
                                                    class="form-control ml-3" placeholder="Kategori"
                                                    onkeypress="return /[a-z, space]/i.test(event.key)" maxlength="25"
                                                    minlength="4" required></td>

                                            <div class="validate"></div>

                                        </table>

                                    </div>

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-success">Simpan</button>
                                        <a href="/narasumberkategori" class="btn btn-danger">
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
                                <th>Kategori</th>
                                <th>Aksi</th>
                            </tr>

                        </thead>

                        <tbody>

                            <!-- Modal Detail -->
                            <form method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="modal fade" id="exampleModalDetail" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Detail
                                                    Narasumber
                                                    kategori</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="exampleInputName">Narasumber Lokal</label>
                                                    <input type="text" class="form-control @error('name') @enderror"
                                                        id="exampleInputName" placeholder="Narasumber Lokal" name="name"
                                                        disabled value="{{ old('name') }}"
                                                        onkeypress="return /[a-z]/i.test(event.key)">
                                                    @error('name')
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputName">Narasumber Nasional</label>
                                                    <input type="text" name="notel" class="form-control" id="notel"
                                                        disabled placeholder="Narasumber Nasional"
                                                        onkeypress="return onlyNumberKey(event)" maxlength="14"
                                                        minlenght="11" required>
                                                    @error('number') <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputName">MC</label>
                                                    <input type="text" name="notel" class="form-control" id="notel"
                                                        disabled placeholder="MC"
                                                        onkeypress="return onlyNumberKey(event)" maxlength="14"
                                                        minlenght="11" required>
                                                    @error('number') <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputName">Moderator</label>
                                                    <input type="text" name="notel" class="form-control" id="notel"
                                                        disabled placeholder="Moderator"
                                                        onkeypress="return onlyNumberKey(event)" maxlength="14"
                                                        minlenght="11" required>
                                                    @error('number') <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputName">Lainnya</label>
                                                    <input type="text" class="form-control @error('name') @enderror"
                                                        id="exampleInputName" placeholder="Lainnya" name="name" disabled
                                                        value="{{ old('name') }}"
                                                        onkeypress="return /[a-z]/i.test(event.key)">
                                                    @error('name')
                                                    @enderror
                                                </div>

                                            </div>
                                            <div class="card-footer">
                                                <a href="/narasumberkategori" class="btn btn-danger">
                                                    Batal
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- Akhir Modal -->

                            <!-- Modal Delete-->
                            <form method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="modal fade" id="exampleModalDelete" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Delete
                                                    Narasumber
                                                    kategori</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <div class="modal-body">
                                                <p>Apakah anda yakin akan menghapus data ?</p>
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                                <a href="/narasumberkategori" class="btn btn-success">
                                                    Batal
                                                </a>
                                            </div>
                                            <!-- Akhir Modal -->

                                            <tr>
                                                <td>1.</td>
                                                <td>Example</td>
                                                <td class="w-25">
                                                    <a href="/narasumberkategori/show" class="btn btn-info btn-xs"
                                                        data-toggle="modal" data-target="#exampleModalDetail">
                                                        Detail
                                                    </a>
                                                    <a href="/narasumberkategori" class="btn btn-danger btn-xs"
                                                        data-toggle="modal" data-target="#exampleModalDelete">
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>2.</td>
                                                <td>Example</td>
                                                <td>
                                                    <a href="/narasumberkategori/show" class="btn btn-info btn-xs"
                                                        data-toggle="modal" data-target="#exampleModalDetail">
                                                        Detail
                                                    </a>
                                                    <a href="/narasumberkategori/destroy"
                                                        onclick="notificationBeforeDelete(event, this)"
                                                        class="btn btn-danger btn-xs" data-toggle="modal"
                                                        data-target="#exampleModalDelete">
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>3.</td>
                                                <td>Example</td>
                                                <td>
                                                    <a href="/narasumberkategori/show" class="btn btn-info btn-xs"
                                                        data-toggle="modal" data-target="#exampleModalDetail">
                                                        Detail
                                                    </a>
                                                    <a href="/narasumberkategori/destroy"
                                                        onclick="notificationBeforeDelete(event, this)"
                                                        class="btn btn-danger btn-xs" data-toggle="modal"
                                                        data-target="#exampleModalDelete">
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>4.</td>
                                                <td>Example</td>
                                                <td>
                                                    <a href="/narasumberkategori/show" class="btn btn-info btn-xs"
                                                        data-toggle="modal" data-target="#exampleModalDetail">
                                                        Detail
                                                    </a>
                                                    <a href="/narasumberkategori/destroy"
                                                        onclick="notificationBeforeDelete(event, this)"
                                                        class="btn btn-danger btn-xs" data-toggle="modal"
                                                        data-target="#exampleModalDelete">
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>5.</td>
                                                <td>Example</td>
                                                <td>
                                                    <a href="/narasumberkategori/show" class="btn btn-info btn-xs"
                                                        data-toggle="modal" data-target="#exampleModalDetail">
                                                        Detail
                                                    </a>
                                                    <a href="/narasumberkategori/destroy"
                                                        onclick="notificationBeforeDelete(event, this)"
                                                        class="btn btn-danger btn-xs" data-toggle="modal"
                                                        data-target="#exampleModalDelete">
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>6.</td>
                                                <td>Example</td>
                                                <td>
                                                    <a href="/narasumberkategori/show" class="btn btn-info btn-xs"
                                                        data-toggle="modal" data-target="#exampleModalDetail">
                                                        Detail
                                                    </a>
                                                    <a href="/narasumberkategori/destroy"
                                                        onclick="notificationBeforeDelete(event, this)"
                                                        class="btn btn-danger btn-xs" data-toggle="modal"
                                                        data-target="#exampleModalDelete">
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>7.</td>
                                                <td>Example</td>
                                                <td>
                                                    <a href="/narasumberkategori/show" class="btn btn-info btn-xs"
                                                        data-toggle="modal" data-target="#exampleModalDetail">
                                                        Detail
                                                    </a>
                                                    <a href="/narasumberkategori/destroy"
                                                        onclick="notificationBeforeDelete(event, this)"
                                                        class="btn btn-danger btn-xs" data-toggle="modal"
                                                        data-target="#exampleModalDelete">
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>8.</td>
                                                <td>Example</td>
                                                <td>
                                                    <a href="/narasumberkategori/show" class="btn btn-info btn-xs"
                                                        data-toggle="modal" data-target="#exampleModalDetail">
                                                        Detail
                                                    </a>
                                                    <a href="/narasumberkategori/destroy"
                                                        onclick="notificationBeforeDelete(event, this)"
                                                        class="btn btn-danger btn-xs" data-toggle="modal"
                                                        data-target="#exampleModalDelete">
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>9.</td>
                                                <td>Example</td>
                                                <td>
                                                    <a href="/narasumberkategori/show" class="btn btn-info btn-xs"
                                                        data-toggle="modal" data-target="#exampleModalDetail">
                                                        Detail
                                                    </a>
                                                    <a href="/narasumberkategori/destroy"
                                                        onclick="notificationBeforeDelete(event, this)"
                                                        class="btn btn-danger btn-xs" data-toggle="modal"
                                                        data-target="#exampleModalDelete">
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>10.</td>
                                                <td>Example</td>
                                                <td>
                                                    <a href="/narasumberkategori/show" class="btn btn-info btn-xs"
                                                        data-toggle="modal" data-target="#exampleModalDetail">
                                                        Detail
                                                    </a>
                                                    <a href="/narasumberkategori/destroy"
                                                        onclick="notificationBeforeDelete(event, this)"
                                                        class="btn btn-danger btn-xs" data-toggle="modal"
                                                        data-target="#exampleModalDelete">
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>11.</td>
                                                <td>Example</td>
                                                <td>
                                                    <a href="/narasumberkategori/show" class="btn btn-info btn-xs"
                                                        data-toggle="modal" data-target="#exampleModalDetail">
                                                        Detail
                                                    </a>
                                                    <a href="/narasumberkategori/destroy"
                                                        onclick="notificationBeforeDelete(event, this)"
                                                        class="btn btn-danger btn-xs" data-toggle="modal"
                                                        data-target="#exampleModalDelete">
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>12.</td>
                                                <td>Example</td>
                                                <td>
                                                    <a href="/narasumberkategori/show" class="btn btn-info btn-xs"
                                                        data-toggle="modal" data-target="#exampleModalDetail">
                                                        Detail
                                                    </a>
                                                    <a href="/narasumberkategori/destroy"
                                                        onclick="notificationBeforeDelete(event, this)"
                                                        class="btn btn-danger btn-xs" data-toggle="modal"
                                                        data-target="#exampleModalDelete">
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>13.</td>
                                                <td>Example</td>
                                                <td>
                                                    <a href="/narasumberkategori/show" class="btn btn-info btn-xs"
                                                        data-toggle="modal" data-target="#exampleModalDetail">
                                                        Detail
                                                    </a>
                                                    <a href="/narasumberkategori/destroy"
                                                        onclick="notificationBeforeDelete(event, this)"
                                                        class="btn btn-danger btn-xs" data-toggle="modal"
                                                        data-target="#exampleModalDelete">
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>14.</td>
                                                <td>Example</td>
                                                <td>
                                                    <a href="/narasumberkategori/show" class="btn btn-info btn-xs"
                                                        data-toggle="modal" data-target="#exampleModalDetail">
                                                        Detail
                                                    </a>
                                                    <a href="/narasumberkategori/destroy"
                                                        onclick="notificationBeforeDelete(event, this)"
                                                        class="btn btn-danger btn-xs" data-toggle="modal"
                                                        data-target="#exampleModalDelete">
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>15.</td>
                                                <td>Example</td>
                                                <td>
                                                    <a href="/narasumberkategori/show" class="btn btn-info btn-xs"
                                                        data-toggle="modal" data-target="#exampleModalDetail">
                                                        Detail
                                                    </a>
                                                    <a href="/narasumberkategori/destroy"
                                                        onclick="notificationBeforeDelete(event, this)"
                                                        class="btn btn-danger btn-xs" data-toggle="modal"
                                                        data-target="#exampleModalDelete">
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>16.</td>
                                                <td>Example</td>
                                                <td>
                                                    <a href="/narasumberkategori/show" class="btn btn-info btn-xs"
                                                        data-toggle="modal" data-target="#exampleModalDetail">
                                                        Detail
                                                    </a>
                                                    <a href="/narasumberkategori/destroy"
                                                        onclick="notificationBeforeDelete(event, this)"
                                                        class="btn btn-danger btn-xs" data-toggle="modal"
                                                        data-target="#exampleModalDelete">
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>17.</td>
                                                <td>Example</td>
                                                <td>
                                                    <a href="/narasumberkategori/show" class="btn btn-info btn-xs"
                                                        data-toggle="modal" data-target="#exampleModalDetail">
                                                        Detail
                                                    </a>
                                                    <a href="/narasumberkategori/destroy"
                                                        onclick="notificationBeforeDelete(event, this)"
                                                        class="btn btn-danger btn-xs" data-toggle="modal"
                                                        data-target="#exampleModalDelete">
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>18.</td>
                                                <td>Example</td>
                                                <td>
                                                    <a href="/narasumberkategori/show" class="btn btn-info btn-xs"
                                                        data-toggle="modal" data-target="#exampleModalDetail">
                                                        Detail
                                                    </a>
                                                    <a href="/narasumberkategori/destroy"
                                                        onclick="notificationBeforeDelete(event, this)"
                                                        class="btn btn-danger btn-xs" data-toggle="modal"
                                                        data-target="#exampleModalDelete">
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>19.</td>
                                                <td>Example</td>
                                                <td>
                                                    <a href="/narasumberkategori/show" class="btn btn-info btn-xs"
                                                        data-toggle="modal" data-target="#exampleModalDetail">
                                                        Detail
                                                    </a>
                                                    <a href="/narasumberkategori/destroy"
                                                        onclick="notificationBeforeDelete(event, this)"
                                                        class="btn btn-danger btn-xs" data-toggle="modal"
                                                        data-target="#exampleModalDelete">
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>20.</td>
                                                <td>Example</td>
                                                <td>
                                                    <a href="/narasumberkategori/show" class="btn btn-info btn-xs"
                                                        data-toggle="modal" data-target="#exampleModalDetail">
                                                        Detail
                                                    </a>
                                                    <a href="/narasumberkategori/destroy"
                                                        onclick="notificationBeforeDelete(event, this)"
                                                        class="btn btn-danger btn-xs" data-toggle="modal"
                                                        data-target="#exampleModalDelete">
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>21.</td>
                                                <td>Example</td>
                                                <td>
                                                    <a href="/narasumberkategori/show" class="btn btn-info btn-xs"
                                                        data-toggle="modal" data-target="#exampleModalDetail">
                                                        Detail
                                                    </a>
                                                    <a href="/narasumberkategori/destroy"
                                                        onclick="notificationBeforeDelete(event, this)"
                                                        class="btn btn-danger btn-xs" data-toggle="modal"
                                                        data-target="#exampleModalDelete">
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>22.</td>
                                                <td>Example</td>
                                                <td>
                                                    <a href="/narasumberkategori/show" class="btn btn-info btn-xs"
                                                        data-toggle="modal" data-target="#exampleModalDetail">
                                                        Detail
                                                    </a>
                                                    <a href="/narasumberkategori/destroy"
                                                        onclick="notificationBeforeDelete(event, this)"
                                                        class="btn btn-danger btn-xs" data-toggle="modal"
                                                        data-target="#exampleModalDelete">
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>23.</td>
                                                <td>Example</td>
                                                <td>
                                                    <a href="/narasumberkategori/show" class="btn btn-info btn-xs"
                                                        data-toggle="modal" data-target="#exampleModalDetail">
                                                        Detail
                                                    </a>
                                                    <a href="/narasumberkategori/destroy"
                                                        onclick="notificationBeforeDelete(event, this)"
                                                        class="btn btn-danger btn-xs" data-toggle="modal"
                                                        data-target="#exampleModalDelete">
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>24.</td>
                                                <td>Example</td>
                                                <td>
                                                    <a href="/narasumberkategori/show" class="btn btn-info btn-xs"
                                                        data-toggle="modal" data-target="#exampleModalDetail">
                                                        Detail
                                                    </a>
                                                    <a href="/narasumberkategori/destroy"
                                                        onclick="notificationBeforeDelete(event, this)"
                                                        class="btn btn-danger btn-xs" data-toggle="modal"
                                                        data-target="#exampleModalDelete">
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>25.</td>
                                                <td>Example</td>
                                                <td>
                                                    <a href="/narasumberkategori/show" class="btn btn-info btn-xs"
                                                        data-toggle="modal" data-target="#exampleModalDetail">
                                                        Detail
                                                    </a>
                                                    <a href="/narasumberkategori/destroy"
                                                        onclick="notificationBeforeDelete(event, this)"
                                                        class="btn btn-danger btn-xs" data-toggle="modal"
                                                        data-target="#exampleModalDelete">
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>26.</td>
                                                <td>Example</td>
                                                <td>
                                                    <a href="/narasumberkategori/show" class="btn btn-info btn-xs"
                                                        data-toggle="modal" data-target="#exampleModalDetail">
                                                        Detail
                                                    </a>
                                                    <a href="/narasumberkategori/destroy"
                                                        onclick="notificationBeforeDelete(event, this)"
                                                        class="btn btn-danger btn-xs" data-toggle="modal"
                                                        data-target="#exampleModalDelete">
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>27.</td>
                                                <td>Example</td>
                                                <td>
                                                    <a href="/narasumberkategori/show" class="btn btn-info btn-xs"
                                                        data-toggle="modal" data-target="#exampleModalDetail">
                                                        Detail
                                                    </a>
                                                    <a href="/narasumberkategori/destroy"
                                                        onclick="notificationBeforeDelete(event, this)"
                                                        class="btn btn-danger btn-xs" data-toggle="modal"
                                                        data-target="#exampleModalDelete">
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
