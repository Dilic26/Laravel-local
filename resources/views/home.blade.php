<h1>Create your Poll</h1>

@include('errors.list')

{!! Form::open() !!}
{!! Form::label('question', 'Enter question here:') !!}<br>
{!! Form::text('question') !!}<br>
{!! Form::label('answer', 'Answer 1:') !!}<br>
{!! Form::text('answer') !!}<br>
{!! Form::label('answer', 'Answer 2:') !!}<br>
{!! Form::text('answer') !!}<br>
{!! Form::label('answer', 'Answer 3:') !!}<br>
{!! Form::text('answer') !!}<br>
{!! Form::label('answer', 'Answer 4:') !!}<br>
{!! Form::text('answer') !!}<br>
{!! Form::label('answer', 'Answer 5:') !!}<br>
{!! Form::text('answer') !!}<br>
<button type="submit">Save</button>
{!! Form::close() !!}