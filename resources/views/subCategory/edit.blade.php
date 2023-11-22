@extends('layouts.adminLayout')
@section('content')
      <!-- partial -->
@include('errors')
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Sub-Category Information</h4>

                  <form class="forms-sample" method="POST" action="{{route('subCategory.update',$sub->id)}}">

                    {{csrf_field()}}
                    <div class="form-group">
                        <select  class="form-control" name="category_id"  id="exampleInputUsername1" >
                            <span>{{$sub->category_id }}</span>
                            <option   selected>Select Category</option>
                            @foreach($category as $item)
                            <option  value="{{$item->id}}" {{ $sub->category_id == $item->id ?'selected':''}}>{{$item->title}}</option>
                            @endforeach
                          </select>
                    </div>
                    <div class="form-group">
                      <input type="text" name="sub_category" value="{{ $sub->sub_category }}" class="form-control"  style="padding: .500rem" id="exampleInputUsername1" placeholder="Enter Category Name">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
                </div>
              </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Sub-Category List</h4>
                  <div class="table-responsive">

                    <table class="table">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Sub-Category </th>
                          <th>Category</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>

                        @foreach ($subCategory as  $item)


                        <tr>
                            <td>{{$loop->iteration }}</td>
                            <td>{{ $item->sub_category}}</td>
                            <td>{{ $item->category_id}}</td>
                            <td> <a href="{{ route('subCategory.edit', $item->id) }}"><svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                <path
                                    d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                            </svg> </a>
                    <td><a href="{{ route('subCategory.delete', $item->id) }}"><svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path
                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                <path
                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                            </svg></label></td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    {!! $subCategory->withQueryString()->links('pagination::bootstrap-5') !!}
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
  <!-- base:js -->`
@endsection

