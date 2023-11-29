<?php

namespace App\Livewire\Client;

use App\Models\Field;
use App\Models\Tiding;
use Livewire\Component;
use Livewire\WithPagination;

class LWNews extends Component
{
    use WithPagination;
    public $muc = 'Tin tức';
    public $search = '';
    public $field = '';
    public $year = '';
    private function getData($search, $field, $year)
    {
        $data = Tiding::latest()
            ->where('belong_to', 'tintuc')
            ->when($search, function ($query) use ($search) {
                $query->where('tidings.title', 'like', "%$search%");
            })
            ->when($field, function ($query) use ($field) {
                $query->where('tidings.field_id', $field);
            })
            ->when($year, function ($query) use ($year) {
                $query->whereYear('tidings.date', $year);
            })
            ->paginate(4);
        if ($data instanceof \Illuminate\Pagination\LengthAwarePaginator) {
            $transformedData = $data->getCollection()->map(function ($post) {
                // Process each post
                $post->tag = json_decode($post->tag);

                $content = $post->content;
                libxml_use_internal_errors(true);
                $dom = new \DOMDocument('1.0', 'UTF-8');
                $dom->loadHTML('<?xml encoding="UTF-8">' . $content);
                libxml_use_internal_errors(false);

                $firstParagraph = $dom->getElementsByTagName('p')->item(0);
                if ($firstParagraph) {
                    $firstParagraphContent = $dom->saveHTML($firstParagraph);
                    $plainText = strip_tags($firstParagraphContent);
                    $post->content = $plainText;
                }
                return $post;
            });

            $data->setCollection($transformedData); // Set the transformed collection back to paginator

            return $data; // Return the paginated and transformed data
        }

        return $data;

    }

    public function render()
    {
        return view('livewire.client.l-w-news', [
            'data1' => $this->getData($this->search, $this->field, $this->year),
            'data2' => Tiding::selectRaw('YEAR(date) as year')
                ->distinct()
                ->pluck('year'),
            'data3' => Field::all(),
        ]);
    }
}
