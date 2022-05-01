<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Question extends Component
{

    public $question;
    public $my_answer = 1;

  

    public function render()
    {
       
        return view('livewire.question');
    }

    public function saveAnswer(){
        $this->emit('addInAnswers',$this->my_answer);

    }
}
