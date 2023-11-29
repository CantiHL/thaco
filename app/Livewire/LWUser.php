<?php

namespace App\Livewire;

use App\Models\User;
use Hash;
use Livewire\Component;

class LWUser extends Component
{
    public $name;
    public $email;
    public $password;
    public $name_update = [];
    public $email_update = [];
    public $password_update = [];
    public $data;

    public function mount()
    {
        $this->data = User::where('level', 0)->get();
        if ($this->data) {
            foreach ($this->data as $item) {
                $this->name_update[$item->id] = $item->name;
                $this->email_update[$item->id] = $item->email;
                $this->password_update[$item->id] = null;
            }
        }
    }
    public function save()
    {
        $this->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);
        $this->data = User::where('level', 0)->get();
        if ($this->data) {
            foreach ($this->data as $item) {
                $this->name_update[$item->id] = $item->name;
                $this->email_update[$item->id] = $item->email;
            }
        }
        $this->dispatch('toastr', ['message' => 'Success']);
    }
    public function update($id)
    {
        // dd($this->name_update[$id], $this->email_update[$id]);   
        $this->validate([
            "name_update.$id" => 'required|max:255',
            "email_update.$id" => 'required|email|unique:users,email,' . $id,
        ]);
        $user = User::find($id);
        if (!$user) {
            return;
        }
        if ($this->password_update[$id] == null) {
            $user->update([
                'name' => $this->name_update[$id],
                'email' => $this->email_update[$id],
            ]);
        } else {
            $user->update([
                'name' => $this->name_update[$id],
                'email' => $this->email_update[$id],
                'password' => Hash::make($this->password_update[$id]),
            ]);
        }
        $user->save();
        $this->data = User::where('level', 0)->get();
        if ($this->data) {
            foreach ($this->data as $item) {
                $this->name_update[$item->id] = $item->name;
                $this->email_update[$item->id] = $item->email;
            }
        }
        $this->dispatch('toastr', ['message' => 'Success']);

    }
    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        $this->data = User::where('level', 0)->get();
        $this->dispatch('toastr', ['message' => 'Success']);


    }
    public function render()
    {
        return view('livewire.l-w-user');
    }
}
