<?php

namespace App\Livewire\Client;

use App\Models\Letter;
use Livewire\Component;

class SendInfo extends Component
{
    public $name;
    public $email;
    public $address = 'vanhoatruyenthong@thaco.com.vn';
    public $phone;
    public $content;
    public function save()
    {
        $this->validate([
            "name" => 'required',
            "email" => 'required|email',
            "address" => 'required',
            "phone" => 'required',
            "content" => 'required',
        ]);
        Letter::create([
            "name" => $this->name,
            "email" => $this->email,
            "address" => $this->address,
            "phone" => $this->phone,
            "content" => $this->content,
        ]);
        $this->reset(['name', 'email', 'address', 'phone', 'content']);
        session()->flash('message', 'Thành công');
    }
    public function render()
    {
        return view('livewire.client.send-info');
    }
}
