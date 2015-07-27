
    <div class="form-group">

        {!! Form::label('title','Title:') !!}
        {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>
    <!---  Field --->
    <div class="form-group">
        {!! Form::label('Content', 'Content:') !!}
        {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
    </div>

