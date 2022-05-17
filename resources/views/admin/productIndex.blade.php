@extends('admin.main')

@section('content')
    <h1 class="mt-4">Dashboard</h1>
    {{-- Table Data --}}
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Tabel Name
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>XXXX</td>
                        <td>XXXX</td>
                        <td>XXXX</td>
                        <td>XXXX</td>
                        <td>XXXX</td>
                        <td>XXXX</td>
                    </tr>
                    <tr>
                        <td>YYYY</td>
                        <td>YYYY</td>
                        <td>YYYY</td>
                        <td>YYYY</td>
                        <td>YYYY</td>
                        <td>YYYY</td>
                    </tr>
                    <tr>
                        <td>ZZZZ</td>
                        <td>ZZZZ</td>
                        <td>ZZZZ</td>
                        <td>ZZZZ</td>
                        <td>ZZZZ</td>
                        <td>ZZZZ</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
