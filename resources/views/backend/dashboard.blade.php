@extends('backend.main')
@section('title', 'Dashboard')

@section('content')
    @include('backend.partials._dashboard')
@endsection

@section('scripts')
    <!-- Charting library -->
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.3.2/chart.min.js" integrity="sha512-VCHVc5miKoln972iJPvkQrUYYq7XpxXzvqNfiul1H4aZDwGBGC0lq373KNleaB2LpnC2a/iNfE5zoRYmB4TRDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>--}}
    {{--@if($performanceChart)--}}
        {{--{!! $performanceChart->script() !!}--}}
    {{--@endif--}}
@endsection