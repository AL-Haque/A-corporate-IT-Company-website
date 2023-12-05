@extends('layouts.adminLayout')

@section('content')
    @include('admin.Alert')
    @include('massage')
    <!-- partial -->
    @include('errors')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Client Information</h4>

                        <form class="forms-sample" method="POST" action=" {{ route('client.store', '$client->id') }}"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="file">Client Image</label><br>
                                <div class="form-check mb-2">

                                    <input type="file" name="image"  accept="image/noinage.jpg" onchange="loadFile(event)">
                                </div>
                                <img id="output" src="/images/noimage.jpg" width="220px"
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
                <div class="col-sm-12">
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
                                        <td> <a href="{{ route('client.edit', $item->id) }}"><i class="fa-solid fa-pen"></i> </a></td>
                                        <td><a href="{{ route('client.delete', $item->id) }}" onclick=" return confirm('Are You Sure!') "><i class="fa-solid fa-trash"></i></a></td>
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
</div>
@endsection



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
