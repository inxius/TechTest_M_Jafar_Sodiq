<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Instansi;

class UpdateInstansi extends Component
{
    public $showModal = false;
    public $id;
    public $namaInstansi;
    public $deskripsiInstansi;

    public function render()
    {
        return view('livewire.update-instansi');
    }

    public function updateInstansi() {
        $this->validate([
            'namaInstansi' => 'string|required|min:5',
            'deskripsiInstansi' => 'string|required|min:10',
        ]);

        $instansi = Instansi::find($this->id);
        
        $instansi->nama = $this->namaInstansi;
        $instansi->deskripsi = $this->deskripsiInstansi;
        $instansi->save();
        $this->dispatch('reRenderParent');
    }
}
