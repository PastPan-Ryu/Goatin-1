@extends('layouts.customer')

@section('title', 'Rekam Medis')

@section('content')
<div class="card">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem;">
        <h2 style="margin: 0;">Rekam Medis Ternak Anda</h2>
    </div>
    
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>ID Ternak</th>
                    <th>Nama/Jenis</th>
                    <th>Tanggal Periksa</th>
                    <th>Diagnosa</th>
                    <th>Tindakan/Vaksin</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($rekamMedis as $rm)
                <tr>
                    <td><strong>#{{ $rm['id_ternak'] }}</strong></td>
                    <td>{{ $rm['jenis'] }}</td>
                    <td>{{ $rm['tanggal'] }}</td>
                    <td>{{ $rm['diagnosa'] }}</td>
                    <td>{{ $rm['tindakan'] }}</td>
                    <td>
                        <span class="badge {{ $rm['status'] == 'Sehat' ? 'badge-success' : 'badge-warning' }}">
                            {{ $rm['status'] }}
                        </span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
