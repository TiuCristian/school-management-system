@extends('admin.admin_master') 
@section('admin')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="container-full">
  
        <div class="col-md-6 mt-3">
            <div class="box box-widget widget-user">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-black">
                <h3 class="widget-user-username">{{ $user->name }}</h3>
                
                <a class="btn btn-rounded btn-success mb-5 float-right" href="{{ route('profile.edit') }}">Edit Profile</a>
                
                <h6 class="widget-user-desc">{{ $user->usertype }}</h6>
                <h6 class="widget-user-desc">{{ $user->email }}</h6>

                </div>
                <div class="widget-user-image">
                    <img class="rounded-circle" 
                    src="{{ (!empty($user->image)) ? url('upload/profile_images/'. $user->image):url('upload/no_image.jpg') }}" alt="User Avatar">
                </div>
                <div class="box-footer">
                <div class="row">
                    <div class="col-sm-4">
                    <div class="description-block">
                        <h5 class="description-header">Phone Number</h5>
                        <span class="description-text">{{ $user->mobile }}</span>
                    </div>
                    <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4 br-1 bl-1">
                    <div class="description-block">
                        <h5 class="description-header">Address</h5>
                        <span class="description-text">{{ $user->address }}</span>
                    </div>
                    <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4">
                    <div class="description-block">
                        <h5 class="description-header">Gender</h5>
                        <span class="description-text">{{ $user->gender }}</span>
                    </div>
                    <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                </div>
            </div>
        
            </div>
        </div>  

</div>
<!-- /.content-wrapper --> 
@endsection