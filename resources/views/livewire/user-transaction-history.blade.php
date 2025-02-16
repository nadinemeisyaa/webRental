<div>
<div class="p-6 bg-white shadow rounded-lg">
    <h2 class="text-xl font-bold mb-4">Histori Transaksi</h2>
    @if ($transactions->isEmpty())
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
                    @foreach ($transactions as $transaction)
                        <tr class="border">
                            <td class="border p-2">{{ $transaction->created_at->format('d M Y H:i') }}</td>
                            <td class="border p-2">{{ $transaction->item->name }}</td>
                            <td class="border p-2">{{ $transaction->duration }} hari</td>
                            <td class="border p-2">Rp {{ number_format($transaction->total_price, 0, ',', '.') }}</td>
                            <td class="border p-2">
                                <span
                                    class="px-2 py-1 rounded text-white {{ $transaction->status == 'selesai' ? 'bg-green-500' : 'bg-yellow-500' }}">
                                    {{ ucfirst($transaction->status) }}
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

@section('content')
    <div class="max-w-4xl mx-auto">
        <livewire:user-transaction-history />
    </div>
@endsection

</div>
