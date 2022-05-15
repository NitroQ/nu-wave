@extends('template.admin')

@section('admin-content')

<div class="row">
    <div class="col">
        <h2>MAKE AN ALERT</h2>
    </div>
</div>
<hr>

<div class="row">
	<div class="col-lg-6">

        <form method="POST" action="{{ route('article.store') }}" enctype="multipart/form-data">
            {!! csrf_field() !!}

            <div class="form-group">
                <label for="details">Add Image</label>
                <input type="file" class="form-control" name="image" value="{{ old('image')  }}">
            </div>

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Enter Title" value="{{ old('title') }}">
                <span style="color: #FC1838">{{$errors->first('title')}}</span>
            </div>

            <div class="form-group">
                <label for="tag">Article Tag</label>
                <input type="text" class="form-control" name="tag" placeholder="Enter Custom Tag" {{ old('tag') }}>
                <span style="color: #FC1838">{{$errors->first('tag')}}</span>
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Category</label>
                <select name="category" class="form-control">
                    <option @if(old('category') == 'Article') selected @endif>Article</option>
                    <option @if(old('category')  == 'Products') selected @endif>Products</option>
                    <option @if(old('category')  == 'Innovators') selected @endif>Innovators</option>
                    <option @if(old('category')  == 'Exhibits') selected @endif>Exhibits</option>
                    <option @if(old('category') == 'Labs') selected @endif>Labs</option>
                </select>
              </div>

			<div class="form-group">
				<label for="description">Content</label>
				<textarea name="description" class="form-control" id="description">{{ old('description') }}</textarea>
			</div>

            <div class="row my-3">
                <div class="col-lg-4">
                    <input type="submit" class="btn btn-dark form-control" onclick="this.disabled=true;this.value='Submitted, please wait...';this.form.submit();" />
                </div>
            </div>

        </form>
	</div>
</div>


@endsection