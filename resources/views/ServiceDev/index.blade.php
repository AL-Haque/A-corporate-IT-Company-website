@extends('layouts.adminLayout')
@section('content')
    @include('admin.Alert')
    <!-- partial -->
    @include('errors')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Service Information</h4>
                        <form class="forms-sample" method="POST" action=" {{ route('ServiceDev.update') }}"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <div class="col-sm-3" style="max-width:40%; padding-top:.6rem">
                                    <p> Title</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" name="title" value="{{$serviceDev->title}}"  class="form-control" style="padding: .500rem"
                                        id="exampleInputUsername1" placeholder="Enter Service Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3" style="max-width:40%; padding-top:.6rem">
                                    <p>Short Details</p>
                                </div>
                                <div class="col-sm-9">
                                    <textarea name="details" class="form-control" id="editor" style="padding:.500rem"rows="4" cols="50"
                                        placeholder="Enter Short Description">{!!$serviceDev->details!!}</textarea>
                                    <br>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3" style="max-width:40%; padding-top:.6rem">
                                    <p>Description</p>
                                </div>
                                <div class="col-sm-9">
                                    <textarea name="description" class="form-control" id="editor" style="padding: .500rem" rows="4" cols="50"
                                        placeholder="Enter Short Description">{!!$serviceDev->title!!}" </textarea>
                                    <br>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-3" style="max-width: 40%;">
                                    <p>Image</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="file" name="image" accept="images/dervicedev/" onchange="loadFile(event)">
                                </div>
                                <img id="output" style="margin-left: 17.8rem" src="{{ asset('images/dervicedev/' . $serviceDev->image) }}" width="220px" height="150px" />
                            </div>

                    </div>
                </div>
            </div>
            {{-- <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-sm-4" style="max-width:40%; padding-top:.6rem">
                                <p>Description</p>
                            </div>
                            <div class="col-sm-8">
                                <textarea name="description" class="form-control" id="editor" style="padding: .500rem" rows="4" cols="50"
                                    placeholder="Enter Short Description"></textarea>
                                <br>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4" style="max-width: 40%;">
                                <p>Image</p>
                            </div>
                            <div class="col-sm-8">
                                <input type="file" name="image" accept="image/*" onchange="loadFile(event)">
                            </div>
                        </div>
                        <img id="output" src="/images/noimage.jpg" width="220px" height="150px" />
                    </div>
                </div>
            </div> --}}
            <div class="col-md-12 mb-6" style="padding-bottom: 5rem">
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
            </div>
            <form>
        </div>


        {{-- <div class="row">
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
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($service as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->title }}</td>
                                            <td>{{ $item->details }}</td>
                                            <td>{{ $item->description }}</td>
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
        </div> --}}

        {{-- <i class="fa-brands fa-slack"></i> --}}
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
                var loadFile = function(event) {
                    var output = document.getElementById('output');
                    output.src = URL.createObjectURL(event.target.files[0]);
                    output.onload = function() {
                        URL.revokeObjectURL(output.src) // free memory
                    }
                };
            </script>
        @endpush
    @endsection
