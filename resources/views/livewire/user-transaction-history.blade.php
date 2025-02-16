<!-- <div>
    <div class="p-6 bg-white shadow rounded-lg">
        <h2 class="text-xl font-bold mb-4">Histori Transaksi</h2>
        @if ($userTransactionsHistory->isEmpty())
            <p class="text-gray-500">Belum ada transaksi.</p>
        @else
            <div class="overflow-x-auto">
                <table class="min-w-full border border-gray-200">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="border p-2 text-left">Tanggal</th>
                            <th class="border p-2 text-left">Barang</th>
                            <th class="border p-2 text-left">Durasi</th>
                            <th class="border p-2 text-left">Total Harga</th>
                            <th class="border p-2 text-left">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($userTransactionsHistorys as $$userTransactionsHistory)
                            <tr class="border">
                                <td class="border p-2">{{ $userTransactionsHistory->created_at->format('d M Y H:i') }}</td>
                                <td class="border p-2">{{ $userTransactionsHistory->item->name }}</td>
                                <td class="border p-2">{{ $userTransactionsHistory->duration }} hari</td>
                                <td class="border p-2">Rp {{ number_format($userTransactionsHistory->total_price, 0, ',', '.') }}</td>
                                <td class="border p-2">
                                    <span>
                                        class="px-2 py-1 rounded text-white {{ $userTransactionsHistory->status == 'selesai' ? 'bg-green-500' : 'bg-yellow-500' }}">
                                        {{ ucfirst($userTransactionsHistory->status) }}
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
    @extends('layouts.app')

    <div class="max-w-4xl mx-auto">
        @if ($rentals->isEmpty())
            <p class="text-gray-500">Belum ada transaksi.</p>
        @else
            <div class="overflow-x-auto">
                <table class="min-w-full border border-gray-200">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="border p-2 text-left">Tanggal</th>
                            <th class="border p-2 text-left">Barang</th>
                            <th class="border p-2 text-left">Durasi</th>
                            <th class="border p-2 text-left">Total Harga</th>
                            <th class="border p-2 text-left">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rentals as $rental)
                            <tr class="border">
                                <td class="border p-2">{{ $rental->created_at->format('d M Y H:i') }}</td>
                                <td class="border p-2">{{ $rental->item->name }}</td>
                                <td class="border p-2">{{ $rental->total_days }} hari</td>
                                <td class="border p-2">Rp {{ number_format($rental->amount, 0, ',', '.') }}</td>
                                <td class="border p-2">
                                    <span class="px-2 py-1 rounded text-white bg-green-500">
                                        {{ $rental->payment_date ? 'Selesai' : 'Pending' }}
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>

</div> -->
