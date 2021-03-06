@extends('master')

@section('content')

	<div class="section page">

		<div class="wrapper">

			<div class="breadcrumb"><a href="{{ url('shirts') }}">Shirts</a> &gt; {{ $shirt->name }}</div>

			<div class="shirt-picture">
				<span>
					<img src="{{ asset($shirt->img) }}" alt="{{ $shirt->name }}">
				</span>
			</div>

			<div class="shirt-details">

				<h1><span class="price">${{ $shirt->price }}</span> {{ $shirt->name }}</h1>

				<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="{{ $shirt->paypal }}">
					<input type="hidden" name="item_name" value="{{ $shirt->name }}">
					<table>
					<tr>
						<th>
							<input type="hidden" name="on0" value="Size">
							<label for="os0">Size</label>
						</th>
						<td>
							<select name="os0" id="os0">

								@foreach($shirt->sizes()->lists('size') as $size)
								
									<option value="{{ $size }}">{{ $size }}</option>
								
								@endforeach
					
							</select>
						</td>
					</tr>
					</table>
					<input type="submit" value="Add to Cart" name="submit">
				</form>

				<p class="note-designer">* All shirts are designed by Mike the Frog.</p>

			</div>

		</div>

	</div>

@endsection
