@extends('template.admin')

@section('admin-content')

<div class="row">
    <div class="col">
        <h2>Add a Product</h2>
    </div>
</div>
<hr>

<div class="row">
	<div class="col-12">

        <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data" class="row">
            {{-- {!! csrf_field() !!} --}}  <input type="hidden" name="_token" value="{{ csrf_token() }}">


            <div class="form-group col-lg-6">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Enter Title" value="{{ old('title') }}">
                <span style="color: #FC1838">{{$errors->first('title')}}</span>
            </div>

            <div class="form-group col-lg-6">
                <label for="tag">Product Tags</label>
                <input type="text" class="form-control" name="tag" placeholder="Enter Hashtags" value="{{ old('tag') }}">
                <span style="color: #FC1838">{{$errors->first('tag')}}</span>
            </div>

            
            <div class="form-group col-lg-3">
                <label for="details">Add Image</label>
                <input type="file" class="form-control" name="image" value="{{ old('image') }}">
                <span style="color: #FC1838">{{$errors->first('image')}}</span>
            </div>

            <div class="form-group col-lg-3">
                <label for="title">Date</label>
                <input type="date" class="form-control" name="date"  value="{{ old('date') }}">
                <span style="color: #FC1838">{{$errors->first('title')}}</span>
            </div>

            <div class="form-group col-lg-3">
                <label class="form-label font-weight-bold">Category</label>
                <select class="form-control" name="category" id="supplier-list">
                    <option value="Information Technology" {{ old('category') == "Information Technology" ? 'selected' : ''}}>IT</option>
                    <option value="Construction" {{ old('category') == "Construction" ? 'selected' : ''}}>Construction</option>
                    <option value="Home/Appliances"{{ old('category') == "Home/Appliances" ? 'selected' : ''}} >Home/Appliances</option>
                    <option value="Personal" {{ old('category') == "Personal" ? 'selected' : ''}}>Personal Items</option>
                </select>
                <span class="badge badge-danger w-100 validation-message">{{$errors->first('category')}}</span>
            </div>

            <div class="form-group col-lg-3">
                <label for="tag">Shop Link</label>
                <input type="text" class="form-control" name="shop" placeholder="Enter Link" value="{{ old('tag') }}">
                <span style="color: #FC1838">{{$errors->first('shop')}}</span>
            </div>

           
			<div class="form-group col-lg-12">
				<label for="abstract">Abstract</label>
				<textarea name="abstract" class="form-control" id="abstract">{{ old('abstract') }}</textarea>
                <span style="color: #FC1838">{{$errors->first('abstract')}}</span>
			</div>
            <div class="form-group col-lg-12">
				<label for="purpose">Purpose</label>
				<textarea name="purpose" class="form-control" id="purpose">{{ old('purpose') }}</textarea>
                <span style="color: #FC1838">{{$errors->first('purpose')}}</span>
			</div>

            <div class="col-lg-4">
                <input type="submit" class="btn btn-dark form-control" onclick="this.disabled=true;this.value='Submitted, please wait...';this.form.submit();" />
            </div>

        </form>
	</div>
</div>


@endsection