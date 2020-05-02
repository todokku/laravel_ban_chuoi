@extends('admin::layouts.master')
@section('title')
    Cài đặt
@stop
@section('content')
<div class="content-wrapper">
        {{-- @include('admin::components.breadcrumb', ['title' => 'Cài đặt']) --}}
      <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Cài đặt</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{ route('admin.settings.create')}}" method="post">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label for="copyright_text">Copyright</label>
                            <input type="text" value="{{old('copyright_text')}}" class="form-control" id="copyright_text" name="copyright_text" placeholder="Copyright Text" autocomplete="off" >
                            </div>
                            <div class="form-group">
                                <label for="short_description">Mô tả ngắn</label>
                                <textarea value="{{old('short_description')}}" class="form-control" id="short_description" name="short_description" placeholder="Mô tả ngắn" ></textarea>
                            </div>
                            <div class="form-group">
                                <label for="social_list">Mạng xã hội</label>
                                <div class="form-group">
                                    <label for="social_list__facebook">Facebook</label>
                                    <input type="text" value="{{old('facebook_url')}}" class="form-control" id="social_list__facebook" name="facebook_url" placeholder="Facebook Link" >
                                    <label for="social_list__tweeter">Twitter</label>
                                    <input type="text" value="{{old('twitter_url')}}" class="form-control" id="social_list__twitter" name="twitter_url" placeholder="Twitter Link"  >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="address">Địa chỉ</label>
                                <input type="text" class="form-control" value="{{old('address')}}" id="address" name="address" placeholder="Mô tả ngắn" >
                            </div>
                            <div class="form-group">
                                <label for="logo">Logo</label>
                                <input type="file" name="logo_url" class="form-control" id="logo"/>
                            </div>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </section>

</div>


@stop
