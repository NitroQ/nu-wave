@extends('template.admin')

@section('admin-content')

<div class="row">
    <div class="col">
        <h2>Add a Carousel Image</h2>
    </div>
</div>
<hr>

<div class="row">
	<div class="col-12">

        <form method="POST" action="{{ route('carousel.store') }}" enctype="multipart/form-data" class="row">
            {{-- {!! csrf_field() !!} --}}   <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group col-lg-3">
                <label for="image">Add Image</label>
                <input type="file" class="form-control" name="image" value="{{ old('image') }}">
                <input type="submit" class="btn btn-dark form-control" onclick="this.disabled=true;this.value='Submitted, please wait...';this.form.submit();" />
            </div>

        </form>
	</div>
</div>


@endsection