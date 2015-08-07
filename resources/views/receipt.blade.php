@extends('master')

@section('content')

	<div class="section page">

		<div class="wrapper">

			<h1>Thank You!</h1>

			<p>Thank you for your payment. Your transaction has been completed, and a receipt for your purchase has been emailed to you. You may log into your account at <a href="http://www.paypal.com/us">www.paypal.com/us</a> to view details of this transaction.</p>

			<p>Need another shirt already? Visit the <a href="{{ url('shirts') }}">Shirts Listing</a> page again.</p>

		</div>

	</div>

@endsection