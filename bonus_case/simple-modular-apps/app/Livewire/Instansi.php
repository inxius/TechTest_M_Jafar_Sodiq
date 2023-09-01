<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Instansi as ModelInstansi;
use Illuminate\Support\Facades\DB;

class Instansi extends Component
{
    protected $listeners = ['reRenderParent'];
    public $listInstansi;
    public $search;

    public function mount() : void {
        $this->listInstansi = ModelInstansi::all();
    }

    public function render()
    {
        return view('livewire.instansi');
    }

    public function reRenderParent()
    {
        $this->mount();
        $this->render();
    }

    public function searchInstansi() {
        $this->listInstansi = ModelInstansi::searchInstansi($this->search);
    }

    public function removeInstansi(int $instansiId) {
        DB::table('instansis')->where('id', '=', $instansiId)->delete();
        $this->listInstansi = ModelInstansi::all();
    }
}
