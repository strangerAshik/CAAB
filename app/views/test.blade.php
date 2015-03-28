<h2>TEst </h2>
@if($user->hasRole($lavel1))
	<p>OK Man It works Your Role: {{$lavel1}}</p>
@elseif($user->hasRole($lavel2))
	<p>OK Man It works Your Role: {{$lavel2}}</p>
@endif