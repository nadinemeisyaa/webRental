<div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
    // ... existing navigation items ...

    <x-nav-link :href="route('user.transaction.history')" :active="request()->routeIs('user.transaction.history')">
        {{ __('History Transaksi') }}
    </x-nav-link>
</div>