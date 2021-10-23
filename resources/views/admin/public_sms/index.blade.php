@extends('layouts.admin')
@section('title', 'DataTable')
@section('admin-content')
<main>
   <div class="container ">
    <div class="heading-title p-2 my-2">
        <span class="my-3 heading "><i class="fas fa-home"></i> <a class="" href="{{route('admin.index')}}">Home</a> >Customer Create</span>
    </div>
        <div class="row">
            <div class="col-12">
               <div class="card"> 
                <div class="card-header">
                    <div class="table-head"><i class="fas fa-table me-1"></i>Message List</div>
                </div>
                <div class="card-body table-card-body p-3">
                    <table id="datatablesSimple">
                        <thead class="text-center bg-light">
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                           <tr>
                               <td>1</td>
                               <td>Md. Shohel Rana</td>
                               <td>01874231</td>
                               <td>info@gmail.com</td>
                               <td>admission</td>
                               <td> ;p sdfs fsd sdfsdf sf</td>
                               <td class="text-center">
                                <a href="" class="btn btn-edit btn-sm"><i class="fas fa-eye"></i></a>
                                <a href="" class="btn btn-edit btn-sm"><i class="fas fa-reply"></i></a>
                                <a href="" class="btn btn-delete btn-sm"><i class="fas fa-trash"></i></a>
                               </td>
                           </tr>
                           <tr>
                            <td>1</td>
                            <td>Md. Shohel Rana</td>
                            <td>01874231</td>
                            <td>info@gmail.com</td>
                            <td>admission</td>
                            <td> ;p sdfs fsd sdfsdf sf</td>
                            <td class="text-center">
                                <a href="" class="btn btn-edit btn-sm"><i class="fas fa-eye"></i></a>
                                <a href="" class="btn btn-edit btn-sm"><i class="fas fa-reply"></i></a>
                                <a href="" class="btn btn-delete btn-sm"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Md. Shohel Rana</td>
                            <td>01874231</td>
                            <td>info@gmail.com</td>
                            <td>admission</td>
                            <td> ;p sdfs fsd sdfsdf sf</td>
                            <td class="text-center">
                                <a href="" class="btn btn-edit btn-sm"><i class="fas fa-eye"></i></a>
                                <a href="" class="btn btn-edit btn-sm"><i class="fas fa-reply"></i></a>
                                <a href="" class="btn btn-delete btn-sm"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Md. Shohel Rana</td>
                            <td>01874231</td>
                            <td>info@gmail.com</td>
                            <td>admission</td>
                            <td> ;p sdfs fsd sdfsdf sf</td>
                            <td class="text-center">
                                <a href="" class="btn btn-edit btn-sm"><i class="fas fa-eye"></i></a>
                                <a href="" class="btn btn-edit btn-sm"><i class="fas fa-reply"></i></a>
                                <a href="" class="btn btn-delete btn-sm"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
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
<script src="{{ asset('admin/js/ckeditor.js') }}"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
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
    document.getElementById("previewImage").src="/noimage.png";
    
</script> 

@endpush