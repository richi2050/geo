{{ print_r($datos->id); }}

{{ Form::open(array('url' => 'update/'.$datos->id, 'autocomplete' =>'false' )) }}


{{ Form::text('name',$datos->name,array('placeholder'=>'Inserta tu nombre')) }}
<br/>
{{ Form::text('username',$datos->user,array('placeholder'=>'Inserta tu nombre de usuario')) }}
<br/>
{{ Form::password('password',array('placeholder'=>'password')) }}
<br/>
{{ Form::submit('Guardar',array('class'=>'submit', 'id' =>'submit')) }}

{{ Form::close() }}




<script>
 $(document).ready(function(){

 $('#submit').click(function(){

 /*
 *
 * area de validacion
 * */

 });

 });









</script>