<?php

namespace App\Livewire;

use App\Models\Field;
use App\Models\Tiding;
use Livewire\Component;
use Livewire\WithFileUploads;
use Storage;

class LWUpdateNews extends Component
{
    use WithFileUploads;
    public $title;
    public $id;
    public $content;
    public $date;
    public $field_id;
    public $tag;
    public $image;
    public $image_update;
    public $belong_to = 'tintuc';
    public $dataField;
    public $dataCommunication = [];
    public function mount($id)
    {
        $this->id = $id;
        $data = Tiding::find($id);
        $this->title = $data->title;
        $this->content = $data->content;
        $this->date = $data->date;
        $this->field_id = $data->field_id;
        $this->tag = implode(';', json_decode($data->tag));
        $this->belong_to = $data->belong_to;
        $this->image = $data->image;
        $this->dataField = Field::all();
        $this->dataCommunication = [
            'tintuc' => 'Tin tức',
            'sukien' => 'Sự kiện',
            'hoatdongnoibo' => 'Hoạt động nội bộ',
            'thongdiepchutich' => 'Thông điệp chủ tịch',
            'thuchuctetcuachutich' => 'Thư chúc tết chủ tịch HDQT',
        ];
        $this->dataCommunication = collect($this->dataCommunication);

    }
    public function save()
    {
        if ($this->field_id == null) {
            $this->field_id = Field::first()->id;
        }
        $this->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'field_id' => 'required|integer',
        ]);
        $news = Tiding::find($this->id);
        if (!$news) {
            return;
        }
        if ($this->image_update == null) {
            $news->update([
                'title' => $this->title,
                'date' => $this->date,
                'content' => $this->content,
                'field_id' => $this->field_id,
                'tag' => json_encode(explode(';', $this->tag)),
                'belong_to' => $this->belong_to,

            ]);
        } else {
            Storage::delete($news->image);
            $path = $this->image_update->store('public/news/');
            $news->update([
                'title' => $this->title,
                'date' => $this->date,
                'content' => $this->content,
                'field_id' => $this->field_id,
                'tag' => json_encode(explode(';', $this->tag)),
                'image' => $path,
                'belong_to' => $this->belong_to,

            ]);
        }
        $news->save();
        $this->dispatch('toastr', ['message' => 'Success']);
    }
    public function render()
    {
        return view('livewire.l-w-update-news');
    }
}
