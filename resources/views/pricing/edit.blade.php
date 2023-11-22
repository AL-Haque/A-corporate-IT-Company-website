@extends('layouts.adminLayout')
@section('content')
    @include('errors')
    @include('admin.Alert')
    <div class="content-wrapper">
        <h2 class="card-title">Product Information</h2>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">


                        <form class="forms-sample" method="POST" action=" {{ route('pricing.update', $price->id) }}"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group row">
                                <div class="col-sm-3" style="max-width:40%; padding-top:10px">
                                    <p>Heading</p>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" name="name" class="form-control" value="{{ $price->name }}"
                                        style="padding: .500rem" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3" style="max-width:40%; padding-top:10px">
                                    <p>Content One</p>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" name="content1" class="form-control"
                                        value="{{ $price->content2 }}"style="padding: .500rem" placeholder="Content One">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3" style="max-width:40%; padding-top:10px">
                                    <p>Content Two</p>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" name="content2" value="{{ $price->content3 }}"
                                        class="form-control" style="padding: .500rem" placeholder="Content Two">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3" style="max-width:40%; padding-top:10px">
                                    <p>Content Three</p>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" name="content3" class="form-control"
                                        value="{{ $price->content3 }}" style="padding: .500rem" placeholder="Content Three">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3" style="max-width:40%; padding-top:10px">
                                    <p>Content Four</p>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" name="content4" class="form-control"
                                        value="{{ $price->content4 }}" style="padding: .500rem" placeholder="Content Four">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3" style="max-width:40%; padding-top:10px">
                                    <p>Content Five</p>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" name="content5" class="form-control"
                                        value="{{ $price->content5 }}" style="padding: .500rem" placeholder="Content Five">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-3" style="max-width:40%; padding-top:10px">
                                    <p>Content Six</p>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" name="content6" value="{{ $price->content6 }}"class="form-control"
                                        style="padding: .500rem" placeholder="Content Six">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3" style="max-width: 40%;">
                                    <p>Image</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="file" name="image" accept="images/*" onchange="loadFile(event)">
                                </div>
                                <img id="output" style="margin-left: 17.8rem" src="{{asset('images/'.$price->image)}}" width="220px" height="150px" />
                            </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="btn" style="padding-top: 30px; padding-left:0%">
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
        </div>

        </form>



    </div>
    <!-- content-wrapper ends -->

    <!-- main-panel ends -->
<div class="row">
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Upload Other Project</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Contet one</th>
                                    <th>Contet two</th>
                                    <th>Contet three</th>
                                    <th>Contet four</th>
                                    <th>Contet five</th>
                                    <th>Contet six</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($pricing as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->content1 }}</td>
                                        <td>{{ $item->content2 }}</td>
                                        <td>{{ $item->content3 }}</td>
                                        <td>{{ $item->content4 }}</td>
                                        <td>{{ $item->content5 }}</td>
                                        <td>{{ $item->content6 }}</td>
                                        <td><img src="{{ asset('images/' . $item->image) }}" alt=""></td>
                                        <td> <a href="{{ route('pricing.edit', $item->id) }}"><i
                                            class="fa-solid fa-pen"></i> </a></td>
                                <td><a href="{{ route('pricing.delete', $item->id) }}"><i
                                            class="fa-solid fa-trash"></i></a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {!! $pricing->withQueryString()->links('pagination::bootstrap-5') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


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
    <!-- base:js -->
@endsection
