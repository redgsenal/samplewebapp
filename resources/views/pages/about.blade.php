@extends('layouts.base') 
@section('title') 
	About
@stop
@section('body')
<h1>About</h1>
<div class="content">
	<div class="title">About</div>
	<p>This is the about page</p>
	<p>{{$companyName}}</p>
	<p><?php echo $companyName;?><?php if (!$isRegistered){ ?>
	<p>Please register.</p>
                <?php } else { ?>
                <p>Welcome to the site!</p>
                <?php } ?>
                @if($isRegistered)
                    <p>Welcome to the site!</p>
	@else
	<p>Please register.</p>
	@endif
</div>
@stop
