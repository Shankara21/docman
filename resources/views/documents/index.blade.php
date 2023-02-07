@extends('layouts.main')
@section('content')
<div class="pagetitle">
    <h1>Documents</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="documents">document</a></li>
            <li class="breadcrumb-item active">index</li>
        </ol>
    </nav>
</div>
<a href="/documents/create" class="btn btn-primary">Create</a>
@endsection