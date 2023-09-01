<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Instansi;

class StoreInstansi extends Component
{
    public $showModal = false;
    public $namaInstansi;
    public $deskripsiInstansi;

    public function render()
    {
        return view('livewire.store-instansi');
    }

    public function storeInstansi() {
        $validated = $this->validate([
            'namaInstansi' => 'string|required|min:5',
            'deskripsiInstansi' => 'string|required|min:10',
        ]);
        
        Instansi::create([
            'nama' => $this->namaInstansi, 
            'deskripsi' => $this->deskripsiInstansi, 
        ]);

        $this->dispatch('reRenderParent');
    }
}
