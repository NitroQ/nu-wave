@extends('template.admin')

@section('admin-content')

<div class="row">
    <div class="col">
        <h2>Add an Article</h2>
    </div>
</div>
<hr>

<div class="row">
	<div class="col-12">

        <form method="POST" action="{{ route('article.store') }}" enctype="multipart/form-data" class="row">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group col-lg-3">
                <label for="image">Add Image</label>
                <input type="file" class="form-control" name="image" value="{{ old('image') }}">
            </div>
            
            <div class="form-group col-lg-3">
                <label for="date">Date</label>
                <input type="date" class="form-control" name="date"  value="{{ old('date') }}">
                <span style="color: #FC1838">{{$errors->first('date')}}</span>
            </div>
            <div class="form-group col-lg-6">
                <label for="author">Author Name</label>
                <input type="text" class="form-control" name="author" placeholder="Enter Author" value="{{ old('author') }}">
                <span style="color: #FC1838">{{$errors->first('author')}}</span>
            </div>

            <div class="form-group col-lg-6">
                <label for="tag">Article Tags</label>
                <input type="text" class="form-control" name="tag" placeholder="Enter Custom Tag" value="{{ old('tag') }}">
                <span style="color: #FC1838">{{$errors->first('tag')}}</span>
            </div>

            <div class="form-group col-lg-6">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Enter Title" value="{{ old('title') }}">
                <span style="color: #FC1838">{{$errors->first('title')}}</span>
            </div>

			<div class="form-group col-lg-12">
				<label for="description">Content</label>
				<textarea name="description" class="form-control" id="description">{{ old('description') }}</textarea>
			</div>
            <div class="col-lg-4">
                <input type="submit" class="btn btn-dark form-control" onclick="this.disabled=true;this.value='Submitted, please wait...';this.form.submit();" />
            </div>

        </form>
	</div>
</div>


@endsection