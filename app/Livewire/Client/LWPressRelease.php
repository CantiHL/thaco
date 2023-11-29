<?php

namespace App\Livewire\Client;

use App\Models\File;
use Livewire\Component;
use Livewire\WithPagination;

class LWPressRelease extends Component
{
    use WithPagination;
    public $muc = 'Thông cáo báo trí';
    public $search = '';
    public $year = '';
    private function getData($search, $year)
    {
        $data = File::where('type', 2)
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
            ->paginate(5);
        $data->getCollection()->transform(function ($item) {
            $item->day = \Carbon\Carbon::parse($item->date)->format('d');
            $item->month = \Carbon\Carbon::parse($item->date)->format('m');
            $item->year = \Carbon\Carbon::parse($item->date)->format('Y');
            return $item;
        });
        return $data;
    }
    public function render()
    {
        return view('livewire.client.l-w-press-release', [
            'data1' => $this->getData($this->search, $this->year),
            'data2' => File::selectRaw('YEAR(date) as year')
                ->distinct()
                ->pluck('year'),
        ]);
    }
}
