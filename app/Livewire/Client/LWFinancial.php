<?php

namespace App\Livewire\Client;

use App\Models\File;
use Livewire\Component;
use Livewire\WithPagination;

class LWFinancial extends Component
{
    use WithPagination;
    public $muc = 'Báo cáo tài chính';
    public $search = '';
    public $year = '';
    private function getData($search, $year)
    {
        $data = File::join('share_holders', 'share_holders.id', 'files.share_hoder_id')
            ->where('share_holders.name', 'Báo cáo tài chính')
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
            ->paginate(6);
        return $data;
    }
    public function render()
    {
        return view('livewire.client.l-w-financial', [
            'data1' => $this->getData($this->search, $this->year),
            'data2' => File::selectRaw('YEAR(date) as year')
                ->distinct()
                ->pluck('year'),
        ]);
    }
}
