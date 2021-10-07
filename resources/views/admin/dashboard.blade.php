@extends('admin.layouts.app')
@section('title','Dashboard')
@section('style')
    <link rel="stylesheet" type="text/css" href="{{asset('admin/vendors/css/charts/morris.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/fonts/simple-line-icons/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/pages/dashboard-ecommerce.css')}}">
@endsection
@section('content')


@endsection
@section('scripts')
    <script src="{{asset('admin/vendors/js/charts/raphael-min.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/vendors/js/charts/morris.min.js')}}" type="text/javascript"></script>
    {{--    <script type="text/javascript" src="{{asset('admin/js/scripts/ui/breadcrumbs-with-stats.js')}}"></script>--}}
    <script src="{{asset('admin/js/scripts/pages/dashboard-ecommerce.js')}}" type="text/javascript"></script>
@endsection
