<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Transfer Dana') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- Lihat Saldo dan Mutasi -->
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold">Saldo Anda</h3>
                        <div class="flex justify-between items-center mt-2">
                            <span class="text-sm">Saldo saat ini:</span>
                            <span class="text-lg font-bold text-gray-900">Rp 1.000.000</span>
                        </div>
                    </div>
                    

                    <!-- Form Transfer Dana -->
                    <div class="mt-8">
                        <h3 class="text-lg font-semibold mb-4">Transfer Dana</h3>
                        <form action="{{ route('transfer.process') }}" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label for="recipient" class="block text-sm font-medium text-gray-700">Penerima</label>
                                <input type="text" id="recipient" name="recipient" class="form-input mt-1 block w-full" placeholder="Nama penerima">
                            </div>
                            <div class="mb-4">
                                <label for="amount" class="block text-sm font-medium text-gray-700">Jumlah</label>
                                <input type="number" id="amount" name="amount" class="form-input mt-1 block w-full" placeholder="Jumlah yang akan ditransfer">
                            </div>
                            <div class="flex justify-end">
                                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Transfer Sekarang</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
