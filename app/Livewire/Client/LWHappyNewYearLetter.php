<?php

namespace App\Livewire\Client;

use App\Models\Tiding;
use Livewire\Component;
use Livewire\WithPagination;

class LWHappyNewYearLetter extends Component
{
    use WithPagination;
    public $muc = 'Tin tức';
    private function getData()
    {
        $data = Tiding::latest()
            ->where('belong_to', 'thuchuctetcuachutich')
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
        return view('livewire.client.l-w-happy-new-year-letter', ['data1' => $this->getData()]);
    }
}
