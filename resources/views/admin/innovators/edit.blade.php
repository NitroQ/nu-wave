@extends('template.admin')

@section('admin-content')

<div class="row">
    <div class="col">
        <h2>Edit Innovator</h2>
    </div>
</div>
<hr>

<div class="row">
	<div class="col-lg-12">

        <form method="POST" action="{{ route('innovator.update', [$innovator->id]) }}" enctype="multipart/form-data" class="row">
            {{-- {!! csrf_field() !!} --}}   <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group col-lg-3">
                <label for="details">Add Image</label>
                <input type="file" class="form-control" name="image" value="">
            </div>

            <div class="form-group col-lg-3">
                <label for="date">Date</label>
                <input type="date" class="form-control" name="date"  value="{{ $innovator->date }}">
                <span style="color: #FC1838">{{$errors->first('date')}}</span>
            </div>

            <div class="form-group col-lg-6">
                <label for="iname">Name</label>
                <input type="text" class="form-control" name="iname" placeholder="Enter Name" value="{{ $innovator->iname }}">
                <span style="color: #FC1838">{{$errors->first('iname')}}</span>
            </div>
            <div class="form-group col-lg-6">
                <label for="position">Position</label>
                <input type="text" class="form-control" name="position" placeholder="Enter Position" value="{{ $innovator->position  }}">
                <span style="color: #FC1838">{{$errors->first('position')}}</span>
            </div>
            <div class="form-group col-lg-6">
                <label for="tag">Innovator Tags</label>
                <input type="text" class="form-control" name="tag" placeholder="Enter Custom Tag" value="{{ $innovator->tag }}">
                <span style="color: #FC1838">{{$errors->first('tag')}}</span>
            </div>
            <div class="form-group col-lg-3">
                <label for="linkedin">Linkedin</label>
                <input type="text" class="form-control" name="linkedin" value="{{ $innovator->linkedin  }}">
                <span style="color: #FC1838">{{$errors->first('linkedin')}}</span>
            </div>
            <div class="form-group col-lg-3">
                <label for="facebook">Facebook</label>
                <input type="text" class="form-control" name="facebook"  value="{{ $innovator->facebook }}">
                <span style="color: #FC1838">{{$errors->first('facebook')}}</span>
            </div>
            <div class="form-group col-lg-3">
                <label for="youtube">Youtube</label>
                <input type="text" class="form-control" name="youtube" value="{{ $innovator->youtube  }}">
                <span style="color: #FC1838">{{$errors->first('youtube')}}</span>
            </div>
            <div class="form-group col-lg-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email"  value="{{ $innovator->email  }}">
                <span style="color: #FC1838">{{$errors->first('email')}}</span>
            </div>
            <div class="form-group col-lg-3">
                <label for="website">Website</label>
                <input type="text" class="form-control" name="website"  value="{{ $innovator->website }}">
                <span style="color: #FC1838">{{$errors->first('website')}}</span>
            </div>

            <div class="form-group col-lg-12">
				<label for="about">About</label>
				<textarea name="about" class="form-control" id="about">{!! $innovator->about !!}</textarea>
			</div>

			<div class="form-group col-lg-12">
				<label for="accomplishments">Accomplishments</label>
				<textarea name="accomplishments" class="form-control" id="accomplishments">{!! $innovator->accomplishments !!}</textarea>
			</div>
            <div class="col-lg-4">
                <input type="submit" class="btn btn-dark form-control" onclick="this.disabled=true;this.value='Submitted, please wait...';this.form.submit();" />
            </div>

        </form>
	</div>
</div>


@endsection