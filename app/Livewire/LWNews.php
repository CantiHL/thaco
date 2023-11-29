<?php

namespace App\Livewire;

use App\Models\Field;
use App\Models\Tiding;
use Livewire\Component;

class LWNews extends Component
{
    public $dataComunication = [];
    public $data = [];
    public $dataField = [];
    public function mount()
    {
        $this->dataCommunication = [
            'tintuc' => 'Tin tức',
            'sukien' => 'Sự kiện',
            'hoatdongnoibo' => 'Hoạt động nội bộ',
            'thongdiepchutich' => 'Thông điệp chủ tịch',
            'thuchuctetcuachutich' => 'Thư chúc tết chủ tịch HDQT',
        ];
        $this->data = Tiding::all();
        $this->dataField = Field::all();
        for ($i = 0; $i < count($this->data); $i++) {
            $this->data[$i]['content'] = $this->adjustImageDimensions($this->data[$i]['content']);
        }
    }
    private function adjustImageDimensions($content)
    {
        $adjustedContent = preg_replace_callback(
            '/<img([^>]+)>/',
            function ($matches) {
                $imgTag = $matches[0];
                // Check if width and height attributes are already set
                $widthSet = preg_match('/\bwidth=["\']([^"\']+)["\']/', $imgTag, $widthMatches);
                $heightSet = preg_match('/\bheight=["\']([^"\']+)["\']/', $imgTag, $heightMatches);
                if (!$widthSet) {
                    $imgTag = str_replace('<img', '<img width="250"', $imgTag);
                }
                if (!$heightSet) {
                    $imgTag = str_replace('<img', '<img height="150"', $imgTag);
                }
                if ($widthSet && $heightSet) {
                    $imgTag = preg_replace('/\bwidth=["\'][^"\']*["\']/', 'width="250"', $imgTag);
                    $imgTag = preg_replace('/\bheight=["\'][^"\']*["\']/', 'height="150"', $imgTag);
                }

                return $imgTag;
            },
            $content
        );
        return $adjustedContent;
    }
    public function delete($id)
    {
        $tiding = Tiding::find($id);
        $tiding->delete();
        $this->data = Tiding::all();
        $this->dispatch('toastr', ['message' => 'Success']);
    }
    public function render()
    {
        return view('livewire.l-w-news');
    }
}
