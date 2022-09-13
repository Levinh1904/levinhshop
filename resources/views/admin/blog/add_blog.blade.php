@extends('admin_layout')
@section('admin_content')

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 row">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Thêm Blog</h6>
                            <div class="col-6"><?php
                                               $message = Session::get('message');
                                               if($message){
                                                   echo '<span class="text-alert">'.$message.'</span>';
                                                   Session::put('message',null);
                                               }
                                               ?>   </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <section class="panel">
                            <div class="panel-body">

                            <div class="position-center">
                                <form role="form" action="{{URL::to('/save-blog')}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                <div class="form-group">
                                    <label style="font-size: 16px;
                                                          color: black;
                                                          ont-family: serif;
                                                          font-weight: bold;
                                                          padding-left: 20px;" for="exampleInputEmail1">Tên Blog</label>
                                    <input style="border: 2px solid #e7217e;
                                                          padding-left: 10px;
                                                          margin-left: 10px;
                                                          font-family: cursive;
                                                          width: 97%;
                                                          margin-bottom: 10px" type="text" name="blog_name" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                                </div>
                                    <div class="form-group">
                                        <label style="font-size: 16px;
                                                          color: black;
                                                          ont-family: serif;
                                                          font-weight: bold;
                                                          padding-left: 20px;" for="exampleInputPassword1">Tiêu đề</label>
                                        <textarea style="border: 2px solid #e7217e;
                                                          padding-left: 10px;
                                                          margin-left: 10px;
                                                          font-family: cursive;
                                                          height: 100px;
                                                          width: 97%;
                                                          margin-bottom: 10px" style="resize: none" rows="8" class="form-control" name="blog_title" id="exampleInputPassword1" placeholder="Mô tả Blog"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label style="font-size: 16px;
                                                          color: black;
                                                          ont-family: serif;
                                                          font-weight: bold;
                                                          padding-left: 20px;" for="exampleInputPassword1">Nội dung</label>
                                        <textarea style="border: 2px solid #e7217e;
                                                          padding-left: 10px;
                                                          margin-left: 10px;
                                                          height: 70px;
                                                          font-family: cursive;
                                                          width: 97%;
                                                          margin-bottom: 10px" style="resize: none"  rows="8" class="form-control" name="blog_desc" id="ckeditor2" placeholder="Nội dung Blog"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <div style="background: none;width: auto" class="file-upload">
                                            <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Hình Ảnh</button>

                                            <div class="image-upload-wrap">
                                                <input name="blog_image" class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
                                                <div class="drag-text">
                                                    <h3>Kéo và thả tệp hoặc chọn thêm hình ảnh</h3>
                                                </div>
                                            </div>
                                            <div class="file-upload-content">
                                                <img style="width: 350px;height: 400px" class="file-upload-image" src="#" alt="your image" />
                                                <div class="image-title-wrap">
                                                    <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Hình ảnh đã tải lên</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <button style="margin-left: 30px" type="submit" name="add-blog" class="btn btn-info">Thêm Blog</button>
                                </form>
                            </div>

                        </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
