@extends('admin.master')


@section('title','Admin Home')



@section('content')

  @include('admin.content')
    <div id="content-wrapper">

      <div class="container-fluid">

        @if($errors->any())
        @foreach($errors->all() as  $error)
          <span class="alert alert-danger">{{$error}}</span>
          @endforeach
          @endif
          <div class="card col-md-6"> 
            <div class="card-header">Add Your Tag</div>
            <div class="card-content">
              <form method="post" action="{{route('tag')}}">
                @csrf
                <div class="form-group">
                  <input type="text" name="tag" class="form-control">
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-block btn-primary">Add Tag</button>
                </div>
              </form>
            </div>
          </div>
       
          <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Tag List</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Serial</th>
                    <th>Name</th>
                    <th>Action</th>
                  </tr>
                </thead>
                @php($i=1)
                <tbody>
                  @foreach($tag_list as $tag)
                  <tr>
                    <td>{{$i++}}</td>
                    <td>{{$tag}}</td>
                    <td>
                      <a href="" class="btn btn-primary">Edit</a>
                      <a href="" class="btn btn-danger">Delete</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
@endsection
