@extends('layouts.adminLayout')
@section('content')
    @include('admin.Alert')
    @include('errors')
    @include('massage')
    <div class="content-wrapper">

        <h2 class="card-title">Upload Company Information</h2>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" method="POST" action="{{ route('company.update') }} "
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <div class="col-sm-2" style="max-width: 25%; padding-top:.6rem">
                                    <p> Name</p>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" name="name" value="{{ $companies->name }}" class="form-control"
                                        style="padding: .500rem" placeholder="Username">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2" style="max-width: 25%; padding-top:.6rem">
                                    <p> Email</p>
                                </div>
                                <div class="col-sm-10">
                                    <input type="email" name="email"value="{{ $companies->email }}" class="form-control"
                                        style="padding: .500rem" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2" style="max-width: 25%; padding-top:10px">
                                    Address one
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" name="address1" value="{{ $companies->address1 }}"
                                        class="form-control" style="padding: .500rem" placeholder="Enter Address">
                                </div>
                            </div>
                            {{-- <div class="form-group row">
                                <div class="col-sm-2" style="max-width: 25%; padding-top:10px">
                                    Address Two
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" name="address2" value="{{ $companies->address2 }}"
                                        class="form-control" style="padding: .500rem" placeholder="Enter Address">
                                </div>
                            </div> --}}

                            {{-- <div class="form-group row">
                                <div class="col-sm-2" style="max-width: 25%; padding-top:10px">
                                    Address Three
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" name="address3" value="{{ $companies->address3 }}"
                                        class="form-control" style="padding: .500rem" placeholder="Enter Address">
                                </div>
                            </div> --}}
                            {{-- <div class="form-group row">
                                <div class="col-sm-2" style="max-width: 25%; padding-top:10px">
                                    Address Four
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" name="address4" value="{{ $companies->address4 }}"
                                        class="form-control" style="padding: .500rem" placeholder="Enter Address">
                                </div>
                            </div> --}}

                            <div class="form-group row">
                                <div class="col-sm-2" style="max-width: 25%; padding-top:.6rem">
                                    <p>Phone No</p>
                                </div>
                                <div class="col-sm-10">
                                    <input type="tel" name="phone" value="{{ $companies->phone }}"
                                        class="form-control" style="padding: .500rem" placeholder="Enter Phone No">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2" style="max-width: 25%; padding-top:.6rem">
                                    <p>Facebook</p>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" name="facebook" value="{{ $companies->facebook }}"
                                        class="form-control" style="padding: .500rem" placeholder="Facebook">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2" style="max-width: 25%; padding-top:.6rem">
                                    <p>Instragram</p>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" name="instragram" value="{{ $companies->instragram }}"
                                        class="form-control" style="padding: .500rem" placeholder="Instragram">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2" style="max-width: 25%; padding-top:.6rem">
                                    <p>Note</p>
                                </div>
                                <div class="col-sm-10">
                                    <div class="form-group" style="max-width: 100%">
                                        <label for="description" class="mt-12"></label>
                                        <textarea class="form-control form-control-sm" name="note" style="padding: .500rem" id="editor"
                                            rows="4" cols="4">{!! $companies->note !!} </textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2" style="max-width: 25%; padding-top:.6rem">
                                    <p> LinkdIn</p>
                                </div>
                                <div class="col-sm-10" style="max-width:750%;">
                                    <input type="text" name="linkdln" class="form-control"
                                        value="{{ $companies->linkdln }}" style="padding: .500rem"
                                        placeholder="LinkdIn">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2" style="max-width: 25%; padding-top:.6rem">
                                    <p> Twitter</p>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" name="twitter" class="form-control"
                                        value="{{ $companies->twitter }}" style="padding: .500rem"
                                        placeholder="Twitter">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-2" style="max-width: 25%; padding-top:.6rem">
                                    <p>Slogun</p>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" name="slogun" class="form-control"
                                        value="{{ $companies->slogun }}" style="padding: .500rem"
                                        placeholder="Enter Slogun">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2" style="max-width: 25%; padding-top:.6rem">
                                    <p>Description</p>
                                </div>
                                <div class="col-sm-10">
                                    <div class="form-group" style="max-width: 100%">
                                        <label for="description" class="mt-12"></label>
                                        <textarea class="form-control form-control-sm" name="about" style="padding: .500rem" name="description"
                                            id="editor" cols="10" rows="10">{!!$companies->about!!}</textarea>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-sm-2" style="max-width: 25%; padding-top:2rem">
                                    <p>Company Image</p>
                                </div>
                                <div class="col-sm-10" style=" padding-top:2rem">
                                    <input type="file" name="logo" accept="image/*" onchange="loadFile(event)">
                                </div>
                            </div>
                            <img id="output" src="{{ asset('logo/' . $companies->logo) }}" width="200rem"
                                height="150rem"  style="margin-left: 11rem"/>


                                <div class="form-group row" style="margin-top: 1rem">
                                    <div class="col-sm-2" style="max-width: 25%;">
                                        <p>About Us Image</p>
                                    </div>

                                    <div class="col-sm-10">
                                        <input accept="image/*" name="image" type='file' id="imgInp" />
                                    </div>
                                </div>
                                <img id="blah" src="{{ asset('images/' . $companies->image) }}" width="200rem"
                                    height="150rem" alt="your image"  style="margin-left:11rem"/>

                            <div class="form-group row">
                                <div class="col-sm-2" style="max-width: 25%;padding-top:2rem">
                                    <p>Company Logo</p>
                                </div>
                                <div class="col-sm-10" style="padding-top:2rem">
                                    <input accept="image/.$companies->icon" name="icon" type='file' id="imgIn" />
                                </div>
                            </div>
                            <img id="bla" src="{{ asset('images/icon/'.$companies->icon) }}" width="200rem"
                                height="150rem" style="margin-left: 11rem" />
                    </div>
                </div>
                <div class="button" style="padding-top: 40px">
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>

            <!-- content-wrapper ends -->

            <!-- main-panel ends -->
        </div>

        <!-- base:js -->
    @endsection


    @push('admin-js')
        <script>
            imgInp.onchange = evt => {
                const [file] = imgInp.files
                if (file) {
                    blah.src = URL.createObjectURL(file)
                }
            }
        </script>


        <script>
            imgIn.onchange = evt => {
                const [file] = imgIn.files
                if (file) {
                    bla.src = URL.createObjectURL(file)
                }
            }
        </script>

        <script>
            var loadFile = function(event) {
                var output = document.getElementById('output');
                output.src = URL.createObjectURL(event.target.files[0]);
                output.onload = function() {
                    URL.revokeObjectURL(output.src) // free memory
                }
            };
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
