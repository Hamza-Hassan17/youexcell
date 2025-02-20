@extends('adminpanel.app')

@section('content')
<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add Course</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add Course</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!---------------- form start  -------------------->

            <form method="POST" action="{{ route('course.store') }}" enctype="multipart/form-data">
                <!-- {{csrf_field()}}    -->
                @csrf
{{--                <div class="row">--}}
{{--                    <div class="col-lg-5">--}}
{{--                        <div class="mb-3">--}}
{{--                            <label for="exampleInputEmail1" class="form-label">image</label>--}}
{{--                            <input type="file" class="form-control" id="image" name="image">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-5">--}}
{{--                        <div class="mb-3">--}}
{{--                            <label for="exampleInputEmail1" class="form-label">Duration</label>--}}
{{--                            <input type="text" class="form-control" id="duration" name="duration">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="row">
                    <div class="col-lg-5">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Course Name</label>
                            <input type="text" class="form-control" id="coursename" name="coursename">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Course id CRM</label>
                            <input type="text" class="form-control" id="duration" name="duration">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Position</label>
                            <input type="text" class="form-control" id="position" name="position">
                        </div>
                    </div>
                </div>
{{--                <div class="row">--}}
{{--                    <div class="col-lg-8">--}}
{{--                        <div class="mb-3">--}}
{{--                            <label for="exampleFormControlTextarea1" class="form-label">Descriptions</label>--}}
{{--                            <textarea class="form-control" id="description" name="description" rows="3"></textarea>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="row">
                    <div class="col-lg-3">
                        <button type="submit" class="btn btn-primary">Submit &nbsp; <i
                                class="fas fa-long-arrow-alt-right"></i></button>
                    </div>
                </div>

            </form>
            <!-- form End  -->

            <!---------------- table start  -------------------->

            <div class="container mt-5">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="text-center">View Table</h1>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">S.NO</th>
{{--                                    <th scope="col">Image</th>--}}
                                    <th scope="col">Position</th>
                                    <th scope="col">Course Name</th>
                                   <th scope="col">Course id CRM</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $Course)
                                <tr>
                                  <td>{{$Course['id']}}</td>
{{--                                  <td>{{$Course['image']}}</td>--}}
                                  <td>{{$Course['position']}}</td>
                                  <td>{{$Course['coursename']}}</td>
                                 <td>{{$Course['duration']}}</td>
                                  <td>
                                      <a class="btn btn-danger" href="delete-course/{{$Course['id']}}"><i class="fas fa-trash-alt"></i></a>
                                      <a href="{{url('edit').'/'.$Course['id']}}" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--------------- table end  --------------->

            <!---------- Edit Form start  ---------------->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->



@endsection
