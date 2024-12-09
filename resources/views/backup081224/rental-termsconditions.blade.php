@extends('layouts.master' ,['page_title' => 'Dashboard'])
@section('content')
    {{-- CKEditor CDN --}}
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">

    <div class="toolbar" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <div data-kt-place="true" data-kt-place-mode="prepend" data-kt-place-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center justify-content-between w-100 me-3 flex-wrap mb-5 mb-lg-0 lh-1">
                <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">Edit Vehicle Model
                    <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                </h1>
            </div>
        </div>
    </div>
   


    <section class="card">
       <div class="d-flex align-items-center gap-10 my-10 flex-wrap">
      
            <form method="POST" action="{{url('submit_terms_conditions')}}" enctype="multipart/form-data" class="addForm">
                @csrf
               
                <input  name="termsid" type="hidden" value="{{$termsconditions->id ?? '' }}">
                    <div class="row">
                       
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Terms and Conditions</label><br>
                                {{-- <input type="text" class="form-control" name="terms_conditions" value="{{$termsconditions->content ?? ''}}" required placeholder="Enter Model Name" data-type="add"> --}}
                                <textarea class="form-control" id="terms_conditions" name="terms_conditions"   placeholder="Enter the Description">{{$termsconditions->terms_conditions}}</textarea>
                                @error('terms_conditions')
                                <span class="text-danger">{{$message}}</span>
                                 @enderror
                                
                               
                                 
                            </div>
                        </div>
                    </div>  
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="d-flex align-items-center justify-content-center">
                                <button type="submit" class="btn btn-primary" href="{{route('Payment')}}">Submit</button>
                            </div>  
                        </div>
                    </div> 
                </form>
        </div>
        
    </section>
</div>
<script>
    ClassicEditor
    .create( document.querySelector( '#terms_conditions' ) )
    .catch( error => {
    console.error( error );
    });
</script>
    <script>

        let addButton = document.querySelectorAll('.model-button');
        addButton.forEach(el => {
            el.addEventListener('click', function(){
                // let itemId = this.getAttribute('data-id');
                // document.getElementById('ItemId').value = itemId;
                // showing the Modal
                var modal = new bootstrap.Modal(document.getElementById('AddmodelModal'));
                modal.show();
            })
        })

         //for deletion
         let deleteButton = document.querySelectorAll('.delete-button');
    deleteButton.forEach(el => {
        el.addEventListener('click', function(){
            let modelId = this.getAttribute('data-id');
            document.getElementById('modelId').value = modelId;
            // showing the Modal
            var modal = new bootstrap.Modal(document.getElementById('deleteModal'));
            modal.show();
        })
    })
    </script>
@endsection