@extends('layouts.master')

@section('content')
    <p>master 의 자식뷰 'content' 섹션</p>
@include('partials.footer')
@endsection

@section('script')
<script>
    alert('자식 뷰 의 script 섹션');
</script>
@endsection
