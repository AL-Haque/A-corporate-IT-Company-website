@extends('layouts.adminLayout')
@section('content')
    @include('admin.Alert')
    @include('errors')
    @include('massage')
    <!-- partial -->

    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Project Information</h4>

                        <form class="forms-sample" method="POST" action="{{ route('project.store') }}"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <div class="col-sm-3" style="max-width: 20%; padding-top:.6rem">
                                    <p> Name</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" name="name" class="form-control" style="padding: .500rem"
                                        id="exampleInputUsername1" placeholder="Enter Course Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3" style="max-width: 20%; padding-top:20px">
                                    <p>Description</p>
                                </div>
                                <div class="col-sm-9">
                                    <div class="form-group">
                                        <label for="description" class="mt-2"></label>
                                        <textarea class="form-control form-control-sm" name="description" style="padding: .500rem" name="description"
                                            id="editor" cols="20" rows="4"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-3" style="max-width:20%; padding-top:10px">
                                    <p>Project Short Details</p>
                                </div>
                                <div class="col-sm-9">
                                    <div class="form-group">
                                        <textarea class="summernote" name="short_details"> </textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-3" style="max-width:20%; padding-top:10px">
                                    <p>Project Details</p>
                                </div>
                                <div class="col-sm-9">
                                    <div class="form-group">
                                        <textarea class="summernote" name="details"> </textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-3" style="max-width: 20%; padding-top:15px">
                                    <p>Icon class</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" name="icon" class="form-control" style="padding: .500rem"
                                        id="exampleInputUsername1" placeholder="Enter Icon Class">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3" style="max-width: 20%;">
                                    <p>Project Banner</p>
                                </div>

                                <div class="col-sm-9">
                                    <input type="file" name="image" accept="image/noinage.jpg"
                                        onchange="loadFile(event)">
                                </div>
                            </div>
                            <img id="output" style="margin-left: 13.5rem" src="/images/noimage.jpg" width="220px"
                                height="150px" />

                    </div>
                </div>
            </div>


            <div class="form-group row">
                <div class="col-sm-12" style="padding-top:.5rem;padding-left:2rem">
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </div>
            </div>



            </form>

        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Project List</h4>
                        <div class="table-responsive">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Details</th>
                                        <th>icon class</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($project as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{!! $item->description !!}</td>
                                            <td>{!! $item->details !!}</td>
                                            <td>{{ $item->icon }}</td>
                                            <td><img src="{{ asset('images/' . $item->image) }}" alt=""></td>
                                            <td> <a href="{{ route('project.edit', $item->id) }}"><i
                                                        class="fa-solid fa-pen"></i> </a></td>
                                            <td><a href="{{ route('project.delete', $item->id) }}" onclick=" return confirm('Are You Sure!') "><i
                                                        class="fa-solid fa-trash"></i></a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {!! $project->withQueryString()->links('pagination::bootstrap-5') !!}
                        </div>
                    </div>
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
            var loadFile = function(event) {
                var output = document.getElementById('output');
                output.src = URL.createObjectURL(event.target.files[0]);
                output.onload = function() {
                    URL.revokeObjectURL(output.src) // free memory
                }
            };
        </script>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.summernote').summernote();
            });
        </script>
    @endpush
@endsection
