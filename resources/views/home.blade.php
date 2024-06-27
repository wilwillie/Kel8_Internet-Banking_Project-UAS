<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <style>
        .list-group-item {
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .list-group-item:hover {
            transform: translateY(-5px);
        }

        .list-group-item h5 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: #333;
        }

        .list-group-item p {
            margin: 0;
            color: #666;
        }

        .list-group-item .text-muted {
            color: #999;
        }

        .col-4, .col-8 {
            padding: 0 15px;
        }

        .col-4 {
            flex: 0 0 30%;
            max-width: 30%;
        }

        .col-8 {
            flex: 0 0 70%;
            max-width: 70%;
        }

        .col-md-7 {
            flex: 0 0 58.333333%;
            max-width: 58.333333%;
            padding-right: 15px;
            padding-left: 15px;
        }

        .p-6 {
            padding: 1.5rem;
        }

        .m-0 {
            margin: 0;
        }

        .bank-icon {
            font-size: 3rem;
            color: #3490dc;
            margin-right: 15px;
        }
    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="col-md-7">
                        <ul class="list-group list-unstyled">
                            <li class="list-group-item">
                                <h5 class="m-0">Welcome, {{ ucfirst(Auth::user()->name) }}! </h5>
                                    <div class="col-4">
                                        <p class="m-0 text-muted">YOUR BALANCE</p>
                                    </div>
                                    <div class="col-8">
                                        <p class="m-0">{{ number_format($balence, 2) }}$</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
