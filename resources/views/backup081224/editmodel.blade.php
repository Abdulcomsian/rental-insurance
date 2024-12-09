@extends('layouts.master' ,['page_title' => 'Dashboard'])
@section('content')
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
      
            <form method="POST" action="{{url('submit_edit_model')}}" enctype="multipart/form-data" class="addForm">
                @csrf
                <input  name="modeleid" type="hidden" value="{{$models->id}}">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Select Make:</label><br>
                                <select name="make" id="make" style="width: 160px;">
                                    @foreach ($makes as $make )
                                    <option value="{{$make->id}}" @php if($make->id==$models->make_id) { echo "selected";} @endphp>{{$make->make_name}}</option>
                                    @endforeach
                                 
                                </select>
                                @error('makname')
                                <span class="text-danger">{{$message}}</span>
                                 @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Add Model:</label><br>
                                <input type="text" class="form-control" name="modelname" value="{{$models->model_name}}" required placeholder="Enter Model Name" data-type="add">
                                @error('modelname')
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