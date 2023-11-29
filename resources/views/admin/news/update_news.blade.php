@extends('layouts.admin.app')
@section('content')
    @livewire('l-w-update-news', ['id' => $id])
@endsection
