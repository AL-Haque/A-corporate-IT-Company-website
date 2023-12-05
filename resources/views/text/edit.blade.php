@extends('layouts.adminLayout')
@section('content')
    @include('errors')
    @include('admin.Alert')
    @include('massage')
    <div class="content-wrapper">
        <h2 class="card-title">TEXT INFORMATION</h2>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" method="POST" action=" {{ route('text.update', $texts->id) }}"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <div class="col-sm-2" style="max-width:40%; padding-top:.6rem">
                                    <p>Title</p>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" value="{{ $texts->name }}" name="name" class="form-control"
                                        style="padding: .500rem" placeholder="Title">
                                </div>
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



    <div class="content-wrapper">
        <div class="col-lg-14 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">TEXT INFORMATION</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($text as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        {{-- <td><img src="{{ asset('images/' . $item->image) }}" alt=""></td> --}}
                                        <td> <a href="{{ route('text.edit', $item->id) }}"><i
                                            class="fa-solid fa-pen"></i> </a></td>
                                <td><a href="{{ route('text.delete', $item->id) }}" onclick=" return confirm('Are you Sure!') " ><i
                                            class="fa-solid fa-trash"></i></a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {!!$text->withQueryString()->links('pagination::bootstrap-5') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- base:js -->
@endsection

