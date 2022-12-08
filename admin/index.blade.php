@extends('adminlte::page')

@section('title', 'Management Admin')

@section('content_header')
<h1 class="m-0 text-dark">Management Admin</h1>
@stop

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <a href="/admin/create" class="btn btn-primary mb-2">
                    Tambah
                </a>

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

                        <tr>
                            <td>1.</td>
                            <td>Example</td>
                            <td>example@gmail.com</td>
                            <td>
                                <a href="/admin/edit" class="btn bg-gradient-olive btn-xs">
                                    Edit
                                </a>
                                <a href="/admin/show" class="btn btn-info btn-xs">
                                    Detail
                                </a>
                                <a href="/admin/destroy" onclick="notificationBeforeDelete(event, this)"
                                    class="btn btn-danger btn-xs">
                                    Delete
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>2.</td>
                            <td>Example</td>
                            <td>example@gmail.com</td>
                            <td>
                                <a href="/admin/edit" class="btn bg-gradient-olive btn-xs">
                                    Edit
                                </a>
                                <a href="/admin/show" class="btn btn-info btn-xs">
                                    Detail
                                </a>
                                <a href="/admin/destroy" onclick="notificationBeforeDelete(event, this)"
                                    class="btn btn-danger btn-xs">
                                    Delete
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>3.</td>
                            <td>Example</td>
                            <td>example@gmail.com</td>
                            <td>
                                <a href="/admin/edit" class="btn bg-gradient-olive btn-xs">
                                    Edit
                                </a>
                                <a href="/admin/show" class="btn btn-info btn-xs">
                                    Detail
                                </a>
                                <a href="/admin/destroy" onclick="notificationBeforeDelete(event, this)"
                                    class="btn btn-danger btn-xs">
                                    Delete
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>4.</td>
                            <td>Example</td>
                            <td>example@gmail.com</td>
                            <td>
                                <a href="/admin/edit" class="btn bg-gradient-olive btn-xs">
                                    Edit
                                </a>
                                <a href="/admin/show" class="btn btn-info btn-xs">
                                    Detail
                                </a>
                                <a href="/admin/destroy" onclick="notificationBeforeDelete(event, this)"
                                    class="btn btn-danger btn-xs">
                                    Delete
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>5.</td>
                            <td>Example</td>
                            <td>example@gmail.com</td>
                            <td>
                                <a href="/admin/edit" class="btn bg-gradient-olive btn-xs">
                                    Edit
                                </a>
                                <a href="/admin/show" class="btn btn-info btn-xs">
                                    Detail
                                </a>
                                <a href="/admin/destroy" onclick="notificationBeforeDelete(event, this)"
                                    class="btn btn-danger btn-xs">
                                    Delete
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>6.</td>
                            <td>Example</td>
                            <td>example@gmail.com</td>
                            <td>
                                <a href="/admin/edit" class="btn bg-gradient-olive btn-xs">
                                    Edit
                                </a>
                                <a href="/admin/show" class="btn btn-info btn-xs">
                                    Detail
                                </a>
                                <a href="/admin/destroy" onclick="notificationBeforeDelete(event, this)"
                                    class="btn btn-danger btn-xs">
                                    Delete
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>7.</td>
                            <td>Example</td>
                            <td>example@gmail.com</td>
                            <td>
                                <a href="/admin/edit" class="btn bg-gradient-olive btn-xs">
                                    Edit
                                </a>
                                <a href="/admin/show" class="btn btn-info btn-xs">
                                    Detail
                                </a>
                                <a href="/admin/destroy" onclick="notificationBeforeDelete(event, this)"
                                    class="btn btn-danger btn-xs">
                                    Delete
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>8.</td>
                            <td>Example</td>
                            <td>example@gmail.com</td>
                            <td>
                                <a href="/admin/edit" class="btn bg-gradient-olive btn-xs">
                                    Edit
                                </a>
                                <a href="/admin/show" class="btn btn-info btn-xs">
                                    Detail
                                </a>
                                <a href="/admin/destroy" onclick="notificationBeforeDelete(event, this)"
                                    class="btn btn-danger btn-xs">
                                    Delete
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>9.</td>
                            <td>Example</td>
                            <td>example@gmail.com</td>
                            <td>
                                <a href="/admin/edit" class="btn bg-gradient-olive btn-xs">
                                    Edit
                                </a>
                                <a href="/admin/show" class="btn btn-info btn-xs">
                                    Detail
                                </a>
                                <a href="/admin/destroy" onclick="notificationBeforeDelete(event, this)"
                                    class="btn btn-danger btn-xs">
                                    Delete
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>10.</td>
                            <td>Example</td>
                            <td>example@gmail.com</td>
                            <td>
                                <a href="/admin/edit" class="btn bg-gradient-olive btn-xs">
                                    Edit
                                </a>
                                <a href="/admin/show" class="btn btn-info btn-xs">
                                    Detail
                                </a>
                                <a href="/admin/destroy" onclick="notificationBeforeDelete(event, this)"
                                    class="btn btn-danger btn-xs">
                                    Delete
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>11.</td>
                            <td>Example</td>
                            <td>example@gmail.com</td>
                            <td>
                                <a href="/admin/edit" class="btn bg-gradient-olive btn-xs">
                                    Edit
                                </a>
                                <a href="/admin/show" class="btn btn-info btn-xs">
                                    Detail
                                </a>
                                <a href="/admin/destroy" onclick="notificationBeforeDelete(event, this)"
                                    class="btn btn-danger btn-xs">
                                    Delete
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>12.</td>
                            <td>Example</td>
                            <td>example@gmail.com</td>
                            <td>
                                <a href="/admin/edit" class="btn bg-gradient-olive btn-xs">
                                    Edit
                                </a>
                                <a href="/admin/show" class="btn btn-info btn-xs">
                                    Detail
                                </a>
                                <a href="/admin/destroy" onclick="notificationBeforeDelete(event, this)"
                                    class="btn btn-danger btn-xs">
                                    Delete
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>13.</td>
                            <td>Example</td>
                            <td>example@gmail.com</td>
                            <td>
                                <a href="/admin/edit" class="btn bg-gradient-olive btn-xs">
                                    Edit
                                </a>
                                <a href="/admin/show" class="btn btn-info btn-xs">
                                    Detail
                                </a>
                                <a href="/admin/destroy" onclick="notificationBeforeDelete(event, this)"
                                    class="btn btn-danger btn-xs">
                                    Delete
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>14.</td>
                            <td>Example</td>
                            <td>example@gmail.com</td>
                            <td>
                                <a href="/admin/edit" class="btn bg-gradient-olive btn-xs">
                                    Edit
                                </a>
                                <a href="/admin/show" class="btn btn-info btn-xs">
                                    Detail
                                </a>
                                <a href="/admin/destroy" onclick="notificationBeforeDelete(event, this)"
                                    class="btn btn-danger btn-xs">
                                    Delete
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>15.</td>
                            <td>Example</td>
                            <td>example@gmail.com</td>
                            <td>
                                <a href="/admin/edit" class="btn bg-gradient-olive btn-xs">
                                    Edit
                                </a>
                                <a href="/admin/show" class="btn btn-info btn-xs">
                                    Detail
                                </a>
                                <a href="/admin/destroy" onclick="notificationBeforeDelete(event, this)"
                                    class="btn btn-danger btn-xs">
                                    Delete
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>16.</td>
                            <td>Example</td>
                            <td>example@gmail.com</td>
                            <td>
                                <a href="/admin/edit" class="btn bg-gradient-olive btn-xs">
                                    Edit
                                </a>
                                <a href="/admin/show" class="btn btn-info btn-xs">
                                    Detail
                                </a>
                                <a href="/admin/destroy" onclick="notificationBeforeDelete(event, this)"
                                    class="btn btn-danger btn-xs">
                                    Delete
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>17.</td>
                            <td>Example</td>
                            <td>example@gmail.com</td>
                            <td>
                                <a href="/admin/edit" class="btn bg-gradient-olive btn-xs">
                                    Edit
                                </a>
                                <a href="/admin/show" class="btn btn-info btn-xs">
                                    Detail
                                </a>
                                <a href="/admin/destroy" onclick="notificationBeforeDelete(event, this)"
                                    class="btn btn-danger btn-xs">
                                    Delete
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>18.</td>
                            <td>Example</td>
                            <td>example@gmail.com</td>
                            <td>
                                <a href="/admin/edit" class="btn bg-gradient-olive btn-xs">
                                    Edit
                                </a>
                                <a href="/admin/show" class="btn btn-info btn-xs">
                                    Detail
                                </a>
                                <a href="/admin/destroy" onclick="notificationBeforeDelete(event, this)"
                                    class="btn btn-danger btn-xs">
                                    Delete
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>19.</td>
                            <td>Example</td>
                            <td>example@gmail.com</td>
                            <td>
                                <a href="/admin/edit" class="btn bg-gradient-olive btn-xs">
                                    Edit
                                </a>
                                <a href="/admin/show" class="btn btn-info btn-xs">
                                    Detail
                                </a>
                                <a href="/admin/destroy" onclick="notificationBeforeDelete(event, this)"
                                    class="btn btn-danger btn-xs">
                                    Delete
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>20.</td>
                            <td>Example</td>
                            <td>example@gmail.com</td>
                            <td>
                                <a href="/admin/edit" class="btn bg-gradient-olive btn-xs">
                                    Edit
                                </a>
                                <a href="/admin/show" class="btn btn-info btn-xs">
                                    Detail
                                </a>
                                <a href="/admin/destroy" onclick="notificationBeforeDelete(event, this)"
                                    class="btn btn-danger btn-xs">
                                    Delete
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>21.</td>
                            <td>Example</td>
                            <td>example@gmail.com</td>
                            <td>
                                <a href="/admin/edit" class="btn bg-gradient-olive btn-xs">
                                    Edit
                                </a>
                                <a href="/admin/show" class="btn btn-info btn-xs">
                                    Detail
                                </a>
                                <a href="/admin/destroy" onclick="notificationBeforeDelete(event, this)"
                                    class="btn btn-danger btn-xs">
                                    Delete
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>22.</td>
                            <td>Example</td>
                            <td>example@gmail.com</td>
                            <td>
                                <a href="/admin/edit" class="btn bg-gradient-olive btn-xs">
                                    Edit
                                </a>
                                <a href="/admin/show" class="btn btn-info btn-xs">
                                    Detail
                                </a>
                                <a href="/admin/destroy" onclick="notificationBeforeDelete(event, this)"
                                    class="btn btn-danger btn-xs">
                                    Delete
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>23.</td>
                            <td>Example</td>
                            <td>example@gmail.com</td>
                            <td>
                                <a href="/admin/edit" class="btn bg-gradient-olive btn-xs">
                                    Edit
                                </a>
                                <a href="/admin/show" class="btn btn-info btn-xs">
                                    Detail
                                </a>
                                <a href="/admin/destroy" onclick="notificationBeforeDelete(event, this)"
                                    class="btn btn-danger btn-xs">
                                    Delete
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>24.</td>
                            <td>Example</td>
                            <td>example@gmail.com</td>
                            <td>
                                <a href="/admin/edit" class="btn bg-gradient-olive btn-xs">
                                    Edit
                                </a>
                                <a href="/admin/show" class="btn btn-info btn-xs">
                                    Detail
                                </a>
                                <a href="/admin/destroy" onclick="notificationBeforeDelete(event, this)"
                                    class="btn btn-danger btn-xs">
                                    Delete
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>25.</td>
                            <td>Example</td>
                            <td>example@gmail.com</td>
                            <td>
                                <a href="/admin/edit" class="btn bg-gradient-olive btn-xs">
                                    Edit
                                </a>
                                <a href="/admin/show" class="btn btn-info btn-xs">
                                    Detail
                                </a>
                                <a href="/admin/destroy" onclick="notificationBeforeDelete(event, this)"
                                    class="btn btn-danger btn-xs">
                                    Delete
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>26.</td>
                            <td>Example</td>
                            <td>example@gmail.com</td>
                            <td>
                                <a href="/admin/edit" class="btn bg-gradient-olive btn-xs">
                                    Edit
                                </a>
                                <a href="/admin/show" class="btn btn-info btn-xs">
                                    Detail
                                </a>
                                <a href="/admin/destroy" onclick="notificationBeforeDelete(event, this)"
                                    class="btn btn-danger btn-xs">
                                    Delete
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>27.</td>
                            <td>Example</td>
                            <td>example@gmail.com</td>
                            <td>
                                <a href="/admin/edit" class="btn bg-gradient-olive btn-xs">
                                    Edit
                                </a>
                                <a href="/admin/show" class="btn btn-info btn-xs">
                                    Detail
                                </a>
                                <a href="/admin/destroy" onclick="notificationBeforeDelete(event, this)"
                                    class="btn btn-danger btn-xs">
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

    function notificationBeforeDelete(event, el) {
        event.preventDefault();
        if (confirm('Apakah anda yakin akan menghapus data ? ')) {
            $("#delete-form").attr('action', $(el).attr('href'));
            $("#delete-form").submit();
        }
    }

</script>
@endpush
