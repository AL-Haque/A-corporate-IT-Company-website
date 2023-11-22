@extends('layouts.adminLayout')
@section('content')
    <!-- partial -->
    @include('errors')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Slider Information</h4>

                        <form class="forms-sample" method="POST" action=" {{ route('client.update', $client->id) }}"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <div class="form-check mb-2">
                                    <label for="file">Slider Image</label><br>
                                    <input type="file" name="image" value="$client->image" accept="image/*"
                                        onchange="readURL(this)" />
                                </div>
                                <img id="img-preview" src="{{ asset('images/' . $client->image) }}" width="220px"
                                    height="150px" />
                            </div>

                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Client List</h4>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Profile</th>
                                        <th>Image</th>
                                        <th>Created</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clients as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td><img src="{{ asset('images/' . $item->image) }}" alt="Image"></td>

                                            <td>{{ $item->created_at }}</td>
                                            <td> <a href="{{ route('client.edit', $item->id) }}">
                                            <td> <a href="{{ route('client.edit', $item->id) }}"><i
                                                        class="fa-solid fa-pen"></i> </a></td>
                                            <td><a href="{{ route('client.delete', $item->id) }}"><i
                                                        class="fa-solid fa-trash"></i></a></td>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {!! $clients->withQueryString()->links('pagination::bootstrap-5') !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

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
@endpush
