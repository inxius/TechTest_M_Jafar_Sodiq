<div 
  class="py-4 relative"
  x-data="{
    openModal: @entangle('showModal'),
    toogleModal() {
      this.openModal = !this.openModal;
    },
  }"
>
  <button @click="toogleModal()" class="bg-orange-500 px-2 py-1 text-stone-800 hover:bg-orange-400 hover:text-stone-900 rounded-sm">
    Tambah Instansi
  </button>

  <div x-show="openModal" x-transition class="fixed left-0 top-0 w-full min-h-screen z-20 pt-20 bg-custom-black/20 flex flex-col justify-start items-center">
    <div class="w-3/4 md:w-2/6 bg-slate-600 rounded-md">
      <div class="bg-slate-800 flex flex-row justify-between">
        <p class="pl-2">Add Instansi</p>
        <button @click="toogleModal()" class="bg-orange-500 text-stone-800 rounded-tr-md">
          <svg class="w-4 md:w-6 fill-custom-white group-hover:fill-custom-dark-blue" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M18.8,16l5.5-5.5c0.8-0.8,0.8-2,0-2.8l0,0C24,7.3,23.5,7,23,7c-0.5,0-1,0.2-1.4,0.6L16,13.2l-5.5-5.5 c-0.8-0.8-2.1-0.8-2.8,0C7.3,8,7,8.5,7,9.1s0.2,1,0.6,1.4l5.5,5.5l-5.5,5.5C7.3,21.9,7,22.4,7,23c0,0.5,0.2,1,0.6,1.4 C8,24.8,8.5,25,9,25c0.5,0,1-0.2,1.4-0.6l5.5-5.5l5.5,5.5c0.8,0.8,2.1,0.8,2.8,0c0.8-0.8,0.8-2.1,0-2.8L18.8,16z"></path> </g></svg>
        </button>
      </div>
      <div>
        <form wire:submit.prevent='storeInstansi' class="flex flex-col gap-2 m-4">
          <div class="flex flex-col">
            <label>Nama Instansi</label>
            <input wire:model='namaInstansi' type="text" class="text-black rounded-md" required>
            @error('namaInstansi') {{ $message }} @enderror
          </div>
          <div class="flex flex-col">
            <label>Deskripsi</label>
            <textarea wire:model='deskripsiInstansi' name="" id="" class="text-black rounded-md" required></textarea>
            @error('deskripsiInstansi') {{ $message }} @enderror
          </div>
          <button @click="toogleModal()" class="w-fit self-center bg-orange-500 px-2 py-1 text-stone-800 hover:bg-orange-400 hover:text-stone-900 rounded-sm" type="submit">Add Instansi</button>
        </form>
      </div>
    </div>
  </div>

</div>