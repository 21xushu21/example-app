@extends('layout.index')
{{-- @include('index') --}}
@section('title','homepage')
@section('contents')
    {{-- content --}}
    @include('layout.header')
    @include('components.about')
    @include('layout.footer')
