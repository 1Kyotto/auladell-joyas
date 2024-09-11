@extends('template.dashboard')

@section('contenido')
<div class="MAIN col-span-4 row-span-10">
	<div class="m-6 grid grid-cols-6">
		{{--BANNER--}}
		<div class="bg-black col-span-6 text-white mb-6">BANNER</div>
		{{--BANNER--}}
		
		{{--ROWS--}}
		<div class="col-span-6 bg-white grid grid-cols-6 mb-6">
			<div class="col-span-6">1</div>
			<div class="col-span-6">2</div>
		</div>
		{{--ROWS--}}

		{{--CONTENT--}}
		<div class="col-span-6 grid grid-cols-6">
			<div class="col-span-6 mb-3 bg-white">1</div>
			<div class="col-span-6 mb-3 bg-white">2</div>
			<div class="col-span-6 bg-white">
				<div class="">TABLE</div>
				<div class="">PAGES</div>
			</div>
		</div>
		{{--CONTENT--}}
	</div>
</div>
@endsection