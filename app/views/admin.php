<div class="row">
	<div class="span4 offset1">
		<div class="well">
			<legend>Please Register</legend>
			{{ Form::open(array('url' => 'register' ,'files' => true )) }}
			@if($errors->any())
			<div class="alert alert-error">
				<a href="#" class="close" data-dismiss="alert">&times;</a>
				{{ implode('', $errors->all('<li class="error">:message</li>')) }}
			</div>
			@endif
			
			<input type="username" id="username" name="username" value="" > 
			

  			Address {{ Form::textarea('address','',array('id'=>'address','class'=>'')) }}
  			<?php //print_r(Input::old('qual')); ?>


  			{{ Form::submit('Register', array('class' => 'btn btn-success')) }}
			{{ HTML::link('/', 'Cancel', array('class' => 'btn btn-danger')) }}


			<input type="submit" name="submit" id="submit" value="Submit"> 
			{{ Form::close() }}
		</div>
	</div>	
</div>


@stop