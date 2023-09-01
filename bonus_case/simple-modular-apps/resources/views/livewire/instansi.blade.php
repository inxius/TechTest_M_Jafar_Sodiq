<div class="py-12">
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
      <div class="p-6 text-gray-900 dark:text-gray-100">
        <div class="flex flex-col">
          <label for="" class="italic text-sm">Cari Nama Instansi</label>
          <form wire:submit.prevent='searchInstansi' class="w-full flex flex-row">
            <input wire:model='search' type="text" class="text-black">
            <button type="submit" class="bg-orange-500 px-2 py-1 text-stone-800 hover:bg-orange-400 hover:text-stone-900">Cari</button>
          </form>
          <div class="w-full flex flex-row">
          </div>
        </div>

        @livewire('store-instansi')

        <div class="w-full">
          <table class="table-auto border border-collapse">
            <thead class="border">
              <th class="border p-1">No</th>
              <th class="border p-1">Nama Instansi</th>
              <th class="border p-1">Deskripsi</th>
              <th class="border p-1">Aksi</th>
            </thead>
            <tbody class="border">
              @foreach ($listInstansi as $key => $instansi)
                <tr>
                  <td class="border p-1">{{ $key + 1 }}</td>
                  <td class="border p-1">{{ $instansi->nama }}</td>
                  <td class="border p-1">{{ $instansi->deskripsi }}</td>
                  <td class="border p-1">
                    <div class="flex flex-row gap-1">
                      @livewire('update-instansi', ['id' => $instansi->id, 'namaInstansi' => $instansi->nama, 'deskripsiInstansi' => $instansi->deskripsi], key($instansi->id))
                      <button wire:click='removeInstansi({{ $instansi->id }})' class="bg-red-500 px-2 py-1 text-stone-800 hover:bg-red-400 hover:text-stone-900 rounded-sm">Delete</button>
                    </div>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>