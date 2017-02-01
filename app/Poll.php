<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    protected $question = '';
    protected $answer = '';
    protected $answers = [];

    public function getAnswers(){
        $answer = $this->answer;
        $answers = $this->answers;
        $answers[] = $answer;
        $this->answers = $answers;
        return $this->answers;
}
}
