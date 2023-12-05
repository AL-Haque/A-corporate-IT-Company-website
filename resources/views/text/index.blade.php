@extends('layouts.adminLayout')
@section('content')
    @include('errors')
    @include('admin.Alert')
    @include('massage')
    <div class="content-wrapper">
        <h2 class="card-title">Add Text</h2>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" method="POST" action=" {{ route('text.store') }}"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <div class="col-sm-2" style="max-width:40%; padding-top:10px">
                                    <p>Title</p>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" name="name" class="form-control" style="padding: .500rem"
                                        placeholder="Name">
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
                    <h4 class="card-title">Text Information</h4>
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
                                            <td> <a href="{{ route('text.edit', $item->id) }}"><i
                                                class="fa-solid fa-pen"></i> </a></td>
                                    <td><a href="{{ route('text.delete', $item->id) }}" onclick=" return confirm('Are you Sure!') "><i
                                                class="fa-solid fa-trash"></i></a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {!! $text->withQueryString()->links('pagination::bootstrap-5') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- base:js -->
@endsection



