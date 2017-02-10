@foreach($polls as $poll)
    <div class="form-group">
    {{ $poll->question }}<br>
        {{Form::radio('answer1')}} {{ $poll->answer1 }}<br>
        {{Form::radio('answer2')}} {{ $poll->answer2 }}<br>
        {{Form::radio('answer3')}} {{ $poll->answer3 }}<br>
        {{Form::radio('answer4')}} {{ $poll->answer4 }}<br>
        {{Form::radio('answer5')}} {{ $poll->answer5 }}<br>
        {{Form::submit('Save'), array('class' => 'btn btn-primary') }}
</div><br>
@endforeach
