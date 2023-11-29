<?php

namespace App\Livewire\Client;

use App\Models\File;
use Livewire\Component;
use Livewire\WithPagination;

class LWShareholderInfo extends Component
{
    use WithPagination;
    public $muc = 'Thông tin cổ đông';
    public $search = '';
    public $year = '';
    private function getData($search, $year)
    {
        $data = File::join('share_holders', 'share_holders.id', 'files.share_hoder_id')
            ->where('share_holders.name', 'Thông tin cổ đông')
            ->where('type', 0)
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
                'share_holders.name as shareholder_name'
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
        return view('livewire.client.l-w-shareholder-info', [
            'data1' => $this->getData($this->search, $this->year),
            'data2' => File::selectRaw('YEAR(date) as year')
                ->distinct()
                ->pluck('year'),
        ]);
    }
}
