<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Comment;

class Sentiment extends Component
{

    public function edit($sentiment, $id)
    {
        Comment::find($id)->update([
            'sentiment' => $sentiment
        ]);

        session()->flash('message', 'Sentiment successfully updated!');
    }

    public function render()
    {

        return view('livewire.sentiment', [
            'comment' => Comment::whereNull('sentiment')
                ->inRandomOrder()
                ->first()
        ]);
    }
}
