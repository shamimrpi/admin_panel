@extends('layouts.admin')
@section('title', 'Edit Category')
@section('admin-content')
<main>
   <div class="container ">
    <div class="heading-title p-2 my-2">
        <span class="my-3 heading "><i class="fas fa-home"></i> <a class="" href="{{route('admin.index')}}">Home</a> > Category Update</span>
    </div>
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-cogs"></i>
            Update Cateogry
        </div>
        <div class="card-body table-card-body p-3 mytable-body">
            <form action="{{ route('ad.update', $ad->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-3">
                                <label>Title</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" name="title" value="{{ $ad->title }}" class="form-control  @error('title') is-invalid @enderror">
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <label>Ad Position & Ad Size *</label>
                            </div>
                            <div class="col-md-9">
                                <select name="position" id="" class="form-control form-control-sm @error('position') is-invalid @enderror">
                                    <option value=" ">Select Ad & Position & Size </option>
                                    <option value="Left-(245*320)" {{ $ad->position == 'Left-(245*320)' ? 'selected' : '' }}>Left-(245*320)</option>
                                    <option value="Center-(425*145)" {{ $ad->position == 'Center-(425*145)' ? 'selected' : '' }}>Center-(425*145)</option>
                                    <option value="Right-(335*320)" {{ $ad->position == 'Right-(335*320)' ? 'selected' : '' }}>Right-(335*320)</option>
                                    <option value="Full-(785*180)" {{ $ad->position == 'Full-(785*180)' ? 'selected' : '' }}>Full-(785*180)</option>
                                    <option value="Center-(450*150)" {{ $ad->position == 'Center-(450*150)' ? 'selected' : '' }}>Center(450*150)</option>
                                    <option value="Left-(310*150)" {{ $ad->position == 'Left-(310*150)' ? 'selected' : '' }}>Left-(310*150)</option>
                                </select>
                                @error('position')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-3">
                                    <label>Image </label>
                                </div>
                                <div class="col-md-8">
                                    <input type="file" class="form-control" id="image" name="image" onchange="readURL(this);">
                                </div>
                                <div class="col-md-12 text-center mt-2">
                                    <img class="form-controlo img-thumbnail" src="#" id="previewImage" style="height:120px;width:140px; background: #3f4a49;">
                                </div>
                            </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary btn-sm mt-2" value="Submit">Update</button>
                    </div>
                </div>
            </form>
        </div>
   </div>
      
    </div>
</main>        
@endsection
@push('admin-js')
<script> 
function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload=function(e) {
                $('#previewImage')
                    .attr('src', e.target.result)     
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    document.getElementById("previewImage").src="{{ asset($ad->image) }}";
    
    
</script> 

@endpush