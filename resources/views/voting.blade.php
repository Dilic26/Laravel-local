<h1>Vote on a Poll!</h1>

@include('errors.list')

{!! Form::open() !!}
<label>{!! Form::radio('answer1') !!} </label><br>
<label>{!! Form::radio('answer2') !!} </label><br>
<label>{!! Form::radio('answer3') !!} </label><br>
<label>{!! Form::radio('answer4') !!} </label><br>
<label>{!! Form::radio('answer5') !!} </label><br>
<button type="submit">Submit</button>
{!! Form::close() !!}