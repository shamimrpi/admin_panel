@extends('layouts.admin')
@section('title', 'Company Profile Edit')
@section('admin-content')
<main>
   <div class="container ">
    <div class="heading-title p-2 my-2">
        <span class="my-3 heading "><i class="fas fa-home"></i> <a class="" href="{{route('admin.index')}}">Home</a> >Company Profile Edit</span>
    </div>
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-user-plus"></i>
            Company Profile
        </div>
        <div class="card-body table-card-body p-3 mytable-body">
            <form action="{{ route('profile.update', $company) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row">
                     <div class="col-md-6">
                         <div class="row">
                            <div class="col-md-3">
                                <strong><label>Name</label> <span class="float-right">:</span></strong>
                             </div>
                            <div class="col-md-9">
                                 <input type="text" name="company_name" value="{{$company->company_name}}" class="form-control my-form-control @error('company_name') is-invalid @enderror">
                                 @error('company_name')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span> 
                                 @enderror 
                             </div> 
                             <div class="col-md-3">
                                <strong><label>Email</label> <span class="float-right">:</span></strong>
                            </div>
                             <div class="col-md-9">
                                <input type="email" name="email" value="{{$company->email}}" class="form-control @error('email') is-invalid @enderror my-form-control" >
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span> 
                                @enderror
                             </div> 
                             <div class="col-md-3">
                                <strong><label>Phone 1</label> <span class="float-right">:</span></strong>
                            </div>
                             <div class="col-md-9">
                                <input type="text" name="phone_1" value="{{$company->phone_1}}" class="form-control @error('phone_1') is-invalid @enderror my-form-control" >
                               @error('phone_1')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{$message}}</strong>
                                   </span>
                               @enderror
                             </div> 
                             <div class="col-md-3">
                                <strong><label>Phone 2</label> <span class="float-right">:</span></strong>
                            </div>
                             <div class="col-md-9">
                                <input type="text" name="phone_2" value="{{$company->phone_2}}" class="form-control my-form-control" >
                              
                             </div> 
                                <div class="col-md-3">
                                    <strong><label>Address</label> <span class="float-right">:</span></strong>
                                </div>
                                <div class="col-md-9">
                                    <textarea rows="4"  class="form-control @error('address') is-invalid @enderror " name="address" >{!! $company->address !!}
                                    </textarea>
                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                    @enderror
                                </div> 
                         </div>
                     </div>
                     <div class="col-md-6">
                        <div class="row right-row">
                            <div class="col-md-4">
                                <strong><label>Facebook Link</label> <span class="float-right">:</span></strong>
                            </div>
                            <div class="col-md-8">
                                <input type="text" value="{{$company->facebook}}" name="facebook" class="form-control my-form-control" >
                            </div>
                            <div class="col-md-4">
                                <strong><label>Youtube Link</label> <span class="float-right">:</span></strong>
                            </div>
                            <div class="col-md-8">
                                <input type="text" value="{{$company->youtube}}" name="youtube" class="form-control my-form-control" >
                                @if($errors->has('address'))
                                    <span class="text-danger">{{$errors->first('address')}}</span>
                                @endif
                            </div>
                            <div class="col-md-4">
                                <strong><label>Linkedin Link</label> <span class="float-right">:</span></strong>
                            </div>
                            <div class="col-md-8">
                                <input type="text" value="{{$company->linkedin}}"  name="linkedin" class="form-control my-form-control" >
                            </div>
                            <div class="col-md-4">
                                <strong><label>Instagram Link</label> <span class="float-right">:</span></strong>
                            </div>
                            <div class="col-md-8">
                                <input type="text" value="{{$company->instagram}}" name="instagram" class="form-control my-form-control" >
                            </div>
                           
                            <div class="col-md-4">
                                <strong><label>Logo</label> <span class="float-right">:</span></strong>
                            </div>
                             <div class="col-md-6">
                                <input type="file" class="form-control my-form-control @error('logo') is-invalid @enderror " id="image" name="logo" onchange="readURL(this);">
                                @error('logo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-2 ps-0">
                                <img class="form-controlo img-thumbnail w-100" src="#" id="previewImage" style="height:80px; background: #3f4a49;">
                            </div>
                            
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary btn-sm mt-2 float-right" value="Submit">Update</button>
                            </div>
                        </div>
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
    // summernote 
    $(document).ready(function(){
      $('#address').summernote({
              tabsize: 2,
              height: 50
          });
    });
</script>
<script> 
function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload=function(e) {
                $('#previewImage')
                    .attr('src', e.target.result)
                    .width(100);
                   
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    document.getElementById("previewImage").src="{{asset($company->logo)}}";
    
</script> 

@endpush