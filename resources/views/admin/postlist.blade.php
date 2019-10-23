@extends('admin.master')


@section('title','Admin Home')

@section('content')

  @include('admin.content')
    <div id="content-wrapper">

      <div class="container-fluid">
          <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            User List</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Serial</th>
                    <th>Name</th>
                    <th>Title</th>
                    <th>Description</th>
                  </tr>
                </thead>
                @php($i=1)
                <tbody>
                  @foreach($post_list as $post)
                  <tr>
                    <td>{{$i++}}</td>
                    <td>{{$post->user->email}}</td>
                    <td>{{$post->heading}}</td>
                    <td>{{$post->description}}</td>
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
