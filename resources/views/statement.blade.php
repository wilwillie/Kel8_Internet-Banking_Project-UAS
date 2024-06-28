<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Statement') }}
        </h2>
    </x-slot>

    <style>
/* Mengatur gaya untuk header */
.header h2 {
    font-family: 'Arial', sans-serif;
    font-weight: bold;
    color: #1a202c; /* teks abu-abu */
    margin-bottom: 20px;
    text-align: center;
    font-size: 32px; /* memperbesar ukuran font */
}

/* Mengatur container utama */
.container {
    background-color: #ffffff; /* warna latar belakang putih */
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* efek bayangan */
    margin-top: 20px;
}

/* Mengatur gaya untuk pesan sukses dan kesalahan */
.alert-success {
    background-color: #d4edda;
    color: #155724;
    border-color: #c3e6cb;
    border-radius: 5px;
}

.alert-danger {
    background-color: #f8d7da;
    color: #721c24;
    border-color: #f5c6cb;
    border-radius: 5px;
}

/* Mengatur tombol close */
.alert .close {
    color: #000;
    text-shadow: none;
    opacity: 0.5;
}

/* Mengatur gaya untuk kartu statement */
.card {
    margin-top: 20px;
    border: 1px solid #e3e6f0;
    border-radius: 0.35rem;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
}

.card-header {
    background-color: #4e73df;
    color: #fff;
    padding: 0.75rem 1.25rem;
    border-bottom: 1px solid #e3e6f0;
    font-size: 1.25rem;
    font-weight: bold;
    text-align: center;
}

.card-body {
    padding: 1.25rem;
}

/* Mengatur gaya untuk tabel */
.table {
    width: 100%;
    margin-bottom: 1rem;
    color: #212529;
}

.table th,
.table td {
    padding: 0.75rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
}

.table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #dee2e6;
    background-color: #f8f9fc;
}

.table tbody + tbody {
    border-top: 2px solid #dee2e6;
}

.table-hover tbody tr:hover {
    background-color: #f8f9fc;
}

.table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(0, 0, 0, 0.05);
}

.table-dark {
    color: #fff;
    background-color: #343a40;
}

.table-dark th,
.table-dark td,
.table-dark thead th {
    border-color: #454d55;
}

.table-dark.table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(255, 255, 255, 0.05);
}

.table-dark.table-hover tbody tr:hover {
    background-color: rgba(255, 255, 255, 0.075);
}

/* Mengatur media query untuk tampilan responsif */ 
@media (max-width: 576px) {
    .col-md-7 {
        flex: 0 0 100%;
        max-width: 100%;
    }

    .form-group label {
        display: block;
        margin-bottom: 0.5rem;
    }

    .form-group .col-md-12 {
        padding-left: 0;
        padding-right: 0;
    }
}
</style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-7">
                                @if ($message = Session::get('success'))
                                <div class="alert alert-success alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ $message }}</strong>
                                </div>
                                @endif
                                @if ($message = Session::get('error'))
                                <div class="alert alert-danger alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ $message }}</strong>
                                </div>
                                @endif
                                <div class="card" id="statement">
                                    <div class="card-header">
                                        <h6 class="m-0 font-weight-bold">Statement of Account</h6>
                                    </div>
                                    <div class="card-body p-0">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">NO.</th>
                                                    <th scope="col">DATE & TIME</th>
                                                    <th scope="col">AMOUNT</th>
                                                    <th scope="col">TYPE</th>
                                                    <th scope="col">DETAILS</th>
                                                    <th scope="col">BALANCE</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php($i=1)
                                                @foreach($statement as $k => $s)
                                                <tr>
                                                    <th scope="row">{{ $i }}</th>
                                                    <td>{{ date('d-m-Y h:i A', strtotime($s['datetime'])) }}</td>
                                                    <td>{{ $s['amount'] }}$</td>
                                                    <td>{{ $s['type'] }}</td>
                                                    <td>{{ $s['details'] }}</td>
                                                    <td>{{ $s['balence'] }}$</td>
                                                </tr>
                                                @php($i++)
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
