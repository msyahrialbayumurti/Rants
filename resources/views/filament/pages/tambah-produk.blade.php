<x-filament::page>
    <form wire:submit.prevent="submit">
        <x-filament::card>
            <!-- Input Nama Produk -->
            <x-filament::field-wrapper label="Nama Produk">
                <x-filament::input wire:model="nama_produk" required />
            </x-filament::field-wrapper>

            <!-- Input Kategori -->
            <x-filament::field-wrapper label="Kategori">
                <x-filament::select wire:model="kategori" :options="['Kategori 1', 'Kategori 2']" required />
            </x-filament::field-wrapper>

            <!-- Input Harga -->
            <x-filament::field-wrapper label="Harga">
                <x-filament::input wire:model="harga" type="number" required />
            </x-filament::field-wrapper>

            <!-- Input Deskripsi -->
            <x-filament::field-wrapper label="Deskripsi">
                <x-filament::textarea wire:model="deskripsi" />
            </x-filament::field-wrapper>

            <!-- Tombol Submit -->
            <x-filament::button type="submit">Tambah Produk</x-filament::button>
        </x-filament::card>
    </form>
</x-filament::page>