<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class HitungMundur extends Component
{

    public $subdomain;
    public $detik = 5;
    public function mount()
    {
        $host = request()->getHost();
        $host = explode('.', $host);
        $this->subdomain = $host[0];
    }
    #[On('mundur')]
    public function mundur()
    {
        $this->detik--;
        if ($this->detik < 0) {
            $this->redirect("https://{$this->subdomain}.hanstd.com");
        }
    }
    public function render()
    {
        return view('livewire.hitung-mundur');
    }
}
