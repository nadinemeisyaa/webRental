<div class="h-full w-full">
    <div class="p-6 bg-white shadow rounded-lg w-full h-screen">
        <h2 class="text-xl font-bold mb-4 text-gray-900 ">Histori Transaksi</h2>
        @if ($histories->isEmpty())
            <p class="text-gray-500">Belum ada transaksi.</p>
        @else
            <div class="overflow-x-auto">
                <table class="min-w-full h-full border border-gray-200">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="border p-2 text-left text-gray-900">Tanggal</th>
                            <th class="border p-2 text-left text-gray-900">Barang</th>
                            <th class="border p-2 text-left text-gray-900">Durasi</th>
                            <th class="border p-2 text-left text-gray-900">Total Harga</th>
                            <th class="border p-2 text-left text-gray-900">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($histories as $history)
                            <tr class="border">
                                <td class="border p-2 text-gray-900">{{ $history->start_rent->format('d M Y H:i') }}</td>
                                <td class="border p-2 text-gray-900">{{ $history->item->name }}</td>
                                <td class="border p-2 text-gray-900">{{ $history->duration }} hari</td>
                                <td class="border p-2 text-gray-900">Rp {{ number_format($history->amount, 0, ',', '.') }}</td>
                                <td class="border p-2">
                                    <span class="px-2 py-1 rounded text-white {{ $history->status == 'selesai' ? 'bg-green-500' : 'bg-yellow-500 dark:bg-yellow-300' }}">
                                        {{ ucfirst($history->status) }}
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</div>
