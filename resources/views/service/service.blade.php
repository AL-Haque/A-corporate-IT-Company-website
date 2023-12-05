@extends('layouts.adminLayout')
@section('content')
    @include('admin.Alert')
    <!-- partial -->
    @include('errors')
    @include('massage')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Service Information</h4>
                        <form class="forms-sample" method="POST" action=" {{ route('service.store', '$served->id') }}"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <div class="col-sm-3" style="max-width:40%; padding-top:.6rem">
                                    <p> Name</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" name="title" class="form-control" style="padding: .500rem"
                                        id="exampleInputUsername1" placeholder="Enter Service Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3" style="max-width:40%; padding-top:.6rem">
                                    <p>Short Description</p>
                                </div>
                                <div class="col-sm-9">
                                    <textarea name="details" class="form-control" id="editor" style="padding:.500rem"rows="4" cols="50"
                                        placeholder="Enter Short Description"></textarea>
                                    <br>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3" style="max-width:40%; padding-top:.6rem">
                                    <p>Description</p>
                                </div>
                                <div class="col-sm-9">
                                    <textarea name="description" class="form-control" id="editor" style="padding: .500rem" rows="4" cols="50"
                                        placeholder="Enter Short Description"></textarea>
                                    <br>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3" style="max-width: 40%;">
                                    <p>Image</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="file" name="image" accept="image/*" onchange="loadFile(event)">
                                </div>
                            </div>
                            <img id="output" style="margin-left: 17rem" src="/images/noimage.jpg" width="220px"
                                height="150px" />


                                <div class="form-group row"  style=" padding-top:3rem">
                                    <div class="col-sm-3" style="max-width:40%; padding-top:.6rem">
                                        <p>Service Banner</p>
                                    </div>

                                    <div class="col-sm-9">
                                        <input accept="image/*" name="banner" src="{{ asset('images/banner/'. $served->banner) }}" type='file' id="imgInp" />
                                    </div>
                                </div>
                                <img id="blah"  style="margin-left: 17rem" src="{{ asset('images/banner/'. $served->banner) }}" width="220px"
                                    height="150px" />



                    </div>
                </div>
            </div>

            <div class="col-md-12 mb-6" style="padding-bottom: 5rem">
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
            </div>
            <form>
        </div>

        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Service List</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Short Description</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Banner</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($service as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->title }}</td>
                                            <td>{!!$item->details!!}</td>
                                            <td>{{ $item->description }}</td>
                                            <td><img src="{{ asset('images/' . $item->image) }}" alt=""></td>
                                            <td><img src="{{ asset('images/banner/' . $item->banner) }}" alt=""></td>
                                            <td> <a href="{{ route('service.edit', $item->id) }}"><i
                                                        class="fa-solid fa-pen"></i> </a></td>
                                            <td><a href="{{ route('service.delete', $item->id) }}" onclick=" return confirm('Are You Sure!') "><i
                                                        class="fa-solid fa-trash"></i></a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {!! $service->withQueryString()->links('pagination::bootstrap-5') !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <i class="fa-brands fa-slack"></i> --}}
        <!-- content-wrapper ends -->

        <!-- main-panel ends -->

        <!-- page-body-wrapper ends -->

        <!-- container-scroller -->
        <!-- base:js -->



        @push('admin-js')
            <script>
                var loadFile = function(event) {
                    var output = document.getElementById('output');
                    output.src = URL.createObjectURL(event.target.files[0]);
                    output.onload = function() {
                        URL.revokeObjectURL(output.src) // free memory
                    }
                };
            </script>


<script>
    imgInp.onchange = evt => {
        const [file] = imgInp.files
        if (file) {
            blah.src = URL.createObjectURL(file)
        }
    }
</script>


<script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>

        @endpush
    @endsection
