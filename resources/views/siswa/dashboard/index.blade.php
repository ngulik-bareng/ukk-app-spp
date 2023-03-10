
@extends('layouts.admin_siswa')
@section('profilname')
<span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ \Auth::guard('siswa')->user()->username }}</span>
@endsection
@section('content')


        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Siswa</div>

                <div class="card-body">
                    <div class="table-responsive mt-3">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>NISN</th>
                                    <th>NIS</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($models as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->nisn }}</td>
                                        <td>{{ $item->nis }}</td>
                                    </tr>
                                @empty
                                <tr>
                                    <td colspan="4">Belum ada data</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {{-- {!! $models->links() !!} --}}
                    </div>
                </div>
            </div>
        </div>





@endsection

