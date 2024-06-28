<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Transfer') }}
        </h2>
    </x-slot>

    <style>
/* Mengatur gaya header */
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
    background-color: #ffffff; /* untuk warna latar belakang putih */
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

/* Mengatur gaya untuk list-group */
.list-group-item {
    background-color: transparent;
    border: none;
}

/* Mengatur gaya untuk form-group */
.form-group {
    margin-bottom: 1.5rem;
}

/* Mengatur input dan button */
.form-control {
    border-radius: 4px;
    padding: 0.75rem;
    font-size: 1rem;
    border: 1px solid #ced4da;
    transition: border-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    width: 100%; /* memperpanjang kotak input */
}

.form-control:focus {
    border-color: #80bdff;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.25);
}

.btn-primary {
    background-color: #4a5568; /* warna biru gelap */
    border-color: #4a5568;
    color: #fff;
    font-size: 1rem;
    padding: 0.75rem;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out, border-color 0.3s ease-in-out;
}

.btn-primary:hover {
    background-color: #2d3748; /* warna biru lebih gelap */
    border-color: #2d3748;
}

.invalid-feedback {
    color: #e3342f; /* warna merah */
    font-size: 0.875rem;
}

/* Mengatur gaya untuk list item */
.list-group-item h5 {
    margin-bottom: 10px;
    color: #2d3748;
    font-weight: bold;
    font-size: 1.5rem; /* memperbesar ukuran font */
}

/* Menambahkan efek hover pada input dan button */
.form-control:hover {
    border-color: #80bdff;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.15);
}

.btn-primary:active {
    background-color: #1a202c; /* warna biru lebih gelap */
    border-color: #1a202c;
}

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
                                    <button type="button" class="close" data-dismiss="alert"></button>
                                    <strong>{{ $message }}</strong>
                                </div>
                                @endif          
                                @if ($message = Session::get('error'))
                                <div class="alert alert-danger alert-block">
                                    <button type="button" class="close" data-dismiss="alert"></button>
                                    <strong>{{ $message }}</strong>
                                </div>
                                @endif          
                                <ul class="list-group list-unstyled">
                                    <li class="list-group-item">
                                        <h5 class="m-0">Transfer Money</h5>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-12">
                                                <form method="POST" action="{{ route('saveTransfer') }}">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="" class="col-form-label text-md-right font-weight-bold mx-3">Email address</label>
                                                        <div class="col-md-12">
                                                            <input id="email" placeholder="Enter email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                            @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="" class="col-form-label text-md-right font-weight-bold mx-3">Amount</label>
                                                        <div class="col-md-12">
                                                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                                            <input id="amount" min="1" step="0.1" placeholder="Enter amount to deposit" type="number" class="form-control @error('amount') is-invalid @enderror" name="amount" value="{{ old('amount') }}" required autocomplete="amount" autofocus>

                                                            @error('amount')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <button type="submit" class="btn btn-block btn-primary">Transfer</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
