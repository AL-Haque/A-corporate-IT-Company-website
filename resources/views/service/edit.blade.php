@extends('layouts.adminLayout')
@section('content')
    <!-- partial -->
    @include('errors')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Service Information</h4>
                        <form class="forms-sample" method="POST" action=" {{ route('service.update', $serve->id) }}"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group row">
                                <div class="col-sm-3" style="max-width:40%; padding-top:.6rem">
                                    <p> Name</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" name="title" value="{{ $serve->title }}"class="form-control" style="padding: .500rem"
                                        id="exampleInputUsername1" placeholder="Enter Service Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3" style="max-width:40%; padding-top:.6rem">
                                    <p>Short Description</p>
                                </div>
                                <div class="col-sm-9">
                                    <textarea name="details" class="form-control" id="editor"  style="padding:.500rem"rows="4" cols="50"
                                        placeholder="Enter Short Description">{{ $serve->details }}</textarea>
                                    <br>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3" style="max-width:40%; padding-top:.6rem">
                                    <p>Description</p>
                                </div>
                                <div class="col-sm-9">
                                    <textarea name="description" class="form-control" id="editor"  style="padding: .500rem" rows="4" cols="50"
                                        placeholder="Enter Short Description">{{ $serve->description }}</textarea>
                                    <br>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3" style="max-width:40%; padding-top:.6rem">
                                    <p>Image</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="file" name="image" accept="image/*" onchange="readURL(this)" />
                                </div>
                            </div>
                            <img id="img-preview" style="margin-left: 17rem" src="{{ asset('images/'.$serve->image) }}" width="220rem" height="150rem" />
                            <div class="form-group row"  style=" padding-top:3rem">
                                <div class="col-sm-3" style="max-width:40%; padding-top:.6rem">
                                    <p>Service Banner</p>
                                </div>

                                <div class="col-sm-9">
                                    <input accept="image/*" name="banner" type='file' id="imgInp" />
                                </div>
                            </div>
                            <img id="blah"  style="margin-left: 17rem" src="{{ asset('images/banner/'.$serve->banner) }}" width="220px"
                                height="150px" alt="your image"/>

                    </div>
                </div>
            </div>

            <div class="col-md-12 mb-12" style="padding-bottom: 5rem">
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
            </div>
            <form>
        </div>
        <div class="col-lg-14 grid-margin stretch-card">
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
                                        <td>{{ $item->description }}</td>
                                        <td><img src="{{ asset('images/' . $item->image) }}" alt=""></td>
                                        <td><img src="{{ asset('images/banner/' . $item->banner) }}" alt=""></td>
                                        <td> <a href="{{ route('service.edit', $item->id) }}"><i
                                            class="fa-solid fa-pen"></i> </a></td>
                                <td><a href="{{ route('service.delete', $item->id) }}"><i
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
        <!-- content-wrapper ends -->

        <!-- main-panel ends -->

        <!-- page-body-wrapper ends -->

        <!-- container-scroller -->
        <!-- base:js -->
        <script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/classic/ckeditor.js"></script>
        <script>
            ClassicEditor
                .create(document.querySelector('#editor'))
                .catch(error => {
                    console.error(error);
                });
        </script>


        @push('admin-js')
            <script>
                let noimage =
                    "https://ami-sni.com/wp-content/themes/consultix/images/no-image-found-360x250.png";

                function readURL(input) {
                    console.log(input.files);
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            $("#img-preview").attr("src", e.target.result);
                        };

                        reader.readAsDataURL(input.files[0]);
                    } else {
                        $("#img-preview").attr("src", noimage);
                    }
                }
            </script>
            <script>
                imgInp.onchange = evt => {
                    const [file] = imgInp.files
                    if (file) {
                        blah.src = URL.createObjectURL(file)
                    }
                }
            </script>
        @endpush
    @endsection
