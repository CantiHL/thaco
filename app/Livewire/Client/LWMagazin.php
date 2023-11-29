<?php

namespace App\Livewire\Client;

use App\Models\File;
use Livewire\Component;
use Livewire\WithPagination;

class LWMagazin extends Component
{
    use WithPagination;
    public $muc = 'Tạp chí';
    public $search = '';
    public $year = '';
    private function getData($search, $year)
    {
        $data = File::where('type', 1)
            ->when($search, function ($query) use ($search) {
                $query->where('files.name', 'like', "%$search%");
            })
            ->when($year, function ($query) use ($year) {
                $query->whereYear('files.date', $year);
            })
            ->select(
                'files.id',
                'files.name',
                'files.date',
                'files.link',
            )
            ->paginate(6);
        return $data;
    }
    public function render()
    {
        return view('livewire.client.l-w-magazin', [
            'data1' => $this->getData($this->search, $this->year),
            'data2' => File::selectRaw('YEAR(date) as year')
                ->distinct()
                ->pluck('year'),
        ]);
    }
}
