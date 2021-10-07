@extends('admin.layouts.app')
@section('title','Posts')
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-body">
                <section id="file-export">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header" style="padding-bottom: 0px">
                                    <h4 class="card-title">Posts</h4>
                                    <a class="heading-elements-toggle"><i
                                            class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li>
                                                <a href="{{route('news.create')}}" style="border-radius: 10px;padding: 10px"
                                                   class="btn-info block-page">
                                                    Add post
                                                </a>
                                            </li>
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <br>
                                @include('admin.layouts.alerts.success')
                                @include('admin.layouts.alerts.errors')
                                <div class="col-md-6" id="success_msg" style="display: none !important;">
                                    <div class="alert alert-icon-left alert-arrow-left alert-success alert-dismissible mb-2"
                                         role="alert">
                                        <span class="alert-icon"><i class="la la-thumbs-o-up"></i></span>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <strong>Well done!</strong> Delete was successful
                                    </div>
                                </div>
                                <div class="col-md-6" id="active_msg" style="display: none !important;">
                                    <div class="alert alert-icon-left alert-arrow-left alert-success alert-dismissible mb-2"
                                         role="alert">
                                        <span class="alert-icon"><i class="la la-thumbs-o-up"></i></span>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <strong>Well done!</strong> operation completed
                                    </div>
                                </div>
                                <div class="card-content collapse show" style="margin-top: -12px">
                                    <div class="card-body card-dashboard">
                                        @if($posts->count() > 0)
                                            <table class="table table-striped table-bordered file-export">
                                                <thead>
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th class="text-center">title</th>
                                                    <th class="text-center">status</th>
                                                    <th class="text-center">Delete</th>
                                                    <th class="text-center">action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($posts as $post)
                                                    <tr class="catRow{{$post->id}}">
                                                        <td class="text-center">{{$loop->iteration}}</td>
                                                        <td class="text-center">{{$post->title}}</td>
                                                        @if($post->active == 1)
                                                        <td class="text-center text-success" id="cat_status"><i class="la la-check"></i>Active</td>
                                                        @else
                                                            <td class="text-center text-danger" id="cat_status"><i class="la la-close"></i>Inactive</td>
                                                        @endif
                                                        <td class="text-center">
                                                            <form method="post" action="{{route('news.destroy',$post->id)}}">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger" type="submit">
                                                                    <i class="la la-trash text-white"></i>
                                                                </button>
                                                            </form>
                                                        </td>
                                                        <td class="text-center">

                                                            <a href="{{route('news.edit',$post-> id)}}"><i
                                                                    class="la la-pencil"></i>Edit</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        @else
                                            <h4 class="alert alert-danger text-center">you need to add posts first</h4>
                                        @endif

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
@section('scripts')
<script>
    import Button from "@/Jetstream/Button";
    export default {
        components: {Button}
    }
</script>
    <script src="{{asset('admin/js/scripts/tables/datatables/datatable-advanced.js')}}" type="text/javascript"></script>
    <script>
        let success = document.getElementById('success_msg');
        setTimeout(()=>{
            success.style.display='none';
        },10000);
    </script>
    <script>
        let success = document.getElementById('active_msg');
        setTimeout(()=>{
            success.style.display='none';
        },10000);
    </script>
@endsection
