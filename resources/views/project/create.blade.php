@extends('layouts.admin')
@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Create Project</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('project.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">



                                <div class="form-group">
                                    <label for="exampleInputTitle">Project Title</label>
                                    <input type="text" value="{{old('title')}}" name="title" class="form-control" id="exampleInputTitle" placeholder="Enter Title">
                                    @error('title')
                                    <span class="note-help-block text-danger">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror

                                </div>


                                <div class="form-group">
                                    <label for="exampleInputFile">Image input</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="file" value="{{old('file')}}" class="form-control" id="">
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>

                                    @error('file')
                                    <span class="note-help-block text-danger">
                                                <strong>{{$message}}</strong>
                                            </span>
                                    @enderror
                                </div>



                                <div class="form-group">
                                    <label for="exampleInputDescription"> Location (District & City Corporation/Pourasava)</label>
                                    <textarea class="form-control" name="Location" id="" cols="30" rows="10"></textarea>


                                </div>


                                <div class="form-group">
                                    <label for="exampleInputTitle"> Type of Beneficiaries</label>
                                    <input type="text" value="{{old('typeBenef')}}" name="typeBenef" class="form-control" id="exampleInputTitle" placeholder="Enter Title">
                                    @error('typeBenef')
                                    <span class="note-help-block text-danger">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror

                                </div>





                                <div class="form-group">
                                    <label for="exampleInputStatus">Project Type</label>
                                    <select class="form-control form-select" name="projectType" id="exampleInputStatus">
                                        <option value="">Chose</option>
                                        <option value="1">Ongoing</option>
                                        <option value="2">Complate</option>
                                    </select>

                                    @error('projectType')
                                    <span class="note-help-block text-danger">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputTitle">Priority</label>
                                    <input type="number" value="{{old('Priority')}}" name="Priority" class="form-control" id="exampleInputTitle" placeholder="Enter priority" min="0">
                                    @error('Priority')
                                    <span class="note-help-block text-danger">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror

                                </div>


                                <div class="form-group">
                                    <label for="exampleInputStatus">Status</label>
                                    <select class="form-control form-select" name="status" id="exampleInputStatus">
                                        <option value="">Chose</option>
                                        <option value="1">Active</option>
                                        <option value="2">De-Active</option>
                                    </select>

                                    @error('status')
                                    <span class="note-help-block text-danger">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->



                </div>

            </div><!-- /.container-fluid -->

            <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
            <script>
                ClassicEditor
                    .create( document.querySelector( '#editor' ) )
                    .then( editor => {
                        console.log( editor );
                    } )
                    .catch( error => {
                        console.error( error );
                    } );
            </script>

        {{--            CKEDITOR.stylesSet.add( 'estilos', [
                 // Block-level styles
                 { name: 'Blue Title', element: 'h2', styles: { 'color': 'Blue' } },
                 { name: 'Red Title' , element: 'h3', styles: { 'color': 'Red' } },

                 // Inline styles
                 { name: 'CSS Style', element: 'span', attributes: { 'class': 'my_style' } },
                 { name: 'Marker: Yellow', element: 'span', styles: { 'background-

                 color': 'Yellow' } }
              ] ); --}}

    </section>


@endsection
