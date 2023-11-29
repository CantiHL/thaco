<?php

namespace App\Livewire\Client;

use App\Models\File;
use Livewire\Component;
use Livewire\WithPagination;

class LWRegulation extends Component
{
    use WithPagination;
    public $muc = 'Công bố thông tin';
    public $search = '';
    private function getData($search)
    {
        $data = File::join('share_holders', 'share_holders.id', 'files.share_hoder_id')
            ->where('share_holders.name', 'Công bố thông tin')
            ->where('type', 0)
            ->when($search, function ($query) use ($search) {
                $query->where('files.name', 'like', "%$search%")
                    ->orWhereRaw('YEAR(files.date) = ?', [$search]);
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
        return view('livewire.client.l-w-regulation', [
            'data1' => $this->getData($this->search),
            'data2' => File::selectRaw('YEAR(date) as year')
                ->distinct()
                ->pluck('year'),
        ]);
    }
}
