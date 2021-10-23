@extends('layouts.admin')
@section('title', 'Ad')
@section('admin-content')
<main class="mb-5">
   <div class="container ">
    <div class="heading-title p-2 my-2">
        <span class="my-3 heading "><i class="fas fa-home"></i> <a class="" href="">Home</a> > Ad  Entry</span>
    </div>
       <div class="row">
           <div class="col-5">
                <div class="card">
                    <div class="card-header">
                        <div class="table-head"><i class="fas fa-cogs me-1"></i>Ad Form</div>
                    </div>
                        <div class="card-body table-card-body p-3">
                        <form action="{{ Route('ad.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 mb-2">
                                    <label for="name"> Title <span class="text-danger">*</span> </label>
                                    <input type="text" name="title" value="{{ old('title') }}"  class="form-control form-control-sm shadow-none @error('title') is-invalid @enderror" id="name" placeholder="Enter Title">
                                        @error('title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <div class="col-md-12 mb-2">
                                    <label for="position"> Ad Position & Size <span class="text-danger">*</span> </label>
                                    <select name="position" id="" class="form-control form-control-sm @error('position') is-invalid @enderror">
                                        <option value=" ">Select Ad & Position & Size </option>
                                        <option value="left_245_320">Left(245*320)</option>
                                        <option value="center_425_145">Center(425*145)</option>
                                        <option value="right_425_145">Right(335*320)</option>
                                        <option value="full_335_180">Full(785*180)</option>
                                        <option value="center_450_150">Center(450*150)</option>
                                        <option value="left_310_150">Left(310*150)</option>
                                    </select>
                                    @error('position')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="image"> Image</label>
                                            <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" type="file" size="100" name="image" onchange="readURL(this);">
                                            @error('image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    <div class="form-group mt-2 mb-2">
                                        <img class="form-controlo img-thumbnail" src="#" id="previewImage" style="width: 100px;height: 80px; background: #3f4a49;">
                                      
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>  
                    </div> 
                </div>
            </div>
             <div class="col-7">
               <div class="card"> 
                <div class="card-header">
                    <div class="table-head"><i class="fas fa-table me-1"></i>Ad List</div>
                </div>
                <div class="card-body table-card-body p-3">
                    <table id="datatablesSimple">
                        <thead class="text-center bg-light">
                            <tr>
                                <th>SL</th>
                                <th>Title</th>
                                <th>Ad Position</th>
                                <th>image</th> 
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ads as $key=> $item)
                            <tr>
                                <td class="text-center">{{ $key+1 }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{$item->position}}</td>
                                <td class="text-center"><img src="{{ asset($item->image) }}" class="tbl-image" alt=""></td>
                                <td class="text-center">
                                    @if ($item->status == 'd')
                                        <a href="{{route('ad.active',$item->id)}}" class="btn btn-delete ">Deactive</a>
                                    @else
                                    <a href="{{route('ad.active',$item->id)}}" class="btn btn-success btn-edit ">Active</a>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <a href="{{route('ad.edit',$item->id)}}" class="btn btn-edit"><i class="fas fa-pencil-alt"></i></a>
                                    <button type="submit" class="btn btn-delete" onclick="deleteUser({{ $item->id }})"><i class="far fa-trash-alt"></i></button>
                                        <form id="delete-form-{{ $item->id }}" action="{{route('ad.destroy',$item->id)}}"
                                            method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
        </div>
    </div>
</main>        
@endsection
@push('admin-js')
 
<script src="{{ asset('admin/js/sweetalert2.all.js') }}"></script>
<script> 
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload=function(e) {
                $('#previewImage')
                    .attr('src', e.target.result)
                    .width(100)
                    .height(80);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    document.getElementById("previewImage").src="/noimage.png";

    function deleteUser(id) {
            swal({
                title: 'Are you sure?',
                text: "You want to Delete this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('delete-form-' + id).submit();
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                ) {
                    swal(
                        'Cancelled',
                        'Your data is safe :)',
                        'error'
                    )
                }
            })
        }
</script>
@endpush