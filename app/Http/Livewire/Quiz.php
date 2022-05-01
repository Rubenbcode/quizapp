<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Quiz extends Component{

    public $quiz ;
    public $questions ;
    public $i = 0;
    public $answers = [];
    public $actual_question;
    public $my_answer = 1;

    public $finish = False;

    public $percent =0;

    public $percent_correct = 0;
    public $progress;

    public function mount(){
        $this->questions = $this->quiz->questions;
        $this->actual_question = $this->questions[$this->i];
        $this->progress = ((count($this->answers)+1) / count($this->questions))*100;
        $this->percent = ((count($this->answers)+1) / count($this->questions))*100;

    }

    public function render()
    {
        return view('livewire.quiz');
    }

    public function saveAnswer(){
        array_push($this->answers,$this->my_answer);
        $this->nextQuestion();
    }

    private function nextQuestion(){
        $this->i++;
        $this->my_answer = 1;
        $this->actual_question = $this->questions[$this->i];
        $this->percent = ((count($this->answers)+1) / count($this->questions))*100;

        $this->progress = ((count($this->answers)+1) / count($this->questions))*100;
    }

    public function finishQuiz(){
        $this->finish = True;
        array_push($this->answers,$this->my_answer);
        $this->getScore();
    }


    protected function getScore(){
        $corrects = 0;
        for($i=0;$i<count($this->questions);$i++){
            if($this->questions[$i]->correct_answer == $this->answers[$i]){
                $corrects++;
            }
        }
        $this->percent_correct =  $corrects;
    }
}
