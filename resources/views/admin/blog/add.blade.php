@extends('admin.layouts.app')
@section('title','Posts')
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard </a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{route('news.index')}}">Posts</a>
                                </li>
                                <li class="breadcrumb-item active">Add post
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-form">Add Post</h4>
                                    <a class="heading-elements-toggle"><i
                                            class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <form class="form" action="{{route('news.store')}}" method="POST"
                                              enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="image">Image</label>
                                                <label id="image" class="file center-block">
                                                    <input type="file" id="file" name="photo">
                                                    <span class="file-custom"></span>
                                                </label>
                                                @error('photo')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>

                                            <div class="form-body">
                                                <h4 class="form-section"></h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-md-3 label-control"
                                                                   for="name">Title</label>
                                                            <div class="col-md-9">
                                                                <input type="text" id="name"
                                                                       class="form-control border-primary"
                                                                       placeholder="Enter name"
                                                                       value="{{ old('title')}}"
                                                                       name="title" maxlength="20">
                                                                @error('title')
                                                                <span class="text-danger">{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row ml-3">
                                                            <label class="col-md-3 label-control"
                                                                   for="cat_id">Category </label>
                                                            <div class="col-md-9">
                                                                <select class="select2 form-control" name="cat_id">
                                                                    @if($categories && $categories->count() > 0)
                                                                        @foreach($categories as $category)
                                                                            <option class="text-center"
                                                                                    value="{{$category->id}}">{{$category->name}}</option>
                                                                        @endforeach
                                                                    @endif
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <fieldset class="form-group">
                                                            <label class="col-md-3 label-control"
                                                                   for="cat_id">Description </label>
                                                            <textarea class="form-control" id="basicTextarea" name="description" rows="5"></textarea>
                                                        </fieldset>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group row">
                                                            <label class="col-md-3 label-control"
                                                                   for="zona_area">Active</label>
                                                            <div class="col-md-9">
                                                                <input type="checkbox" class="switchBootstrap"
                                                                       name="active"
                                                                       id="switchBootstrap18" data-on-color="success"
                                                                       data-off-color="danger" checked/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group row">
                                                            <label class="col-md-3 label-control"
                                                                   for="zona_area">Hot News</label>
                                                            <div class="col-md-9">
                                                                <input type="checkbox" class="switchBootstrap"
                                                                       name="is_hot"
                                                                       id="switchBootstrap18" data-on-color="success"
                                                                       data-off-color="danger" checked/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-actions">
                                                    <button type="button" class="btn btn-warning mr-1 block-page"
                                                            onclick="history.back();">
                                                        <i class="ft-x"></i> back
                                                    </button>
                                                    <button type="submit" class="btn btn-primary block-page">
                                                        <i class="la la-check-square-o"></i> save
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
