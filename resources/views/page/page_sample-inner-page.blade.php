@extends('layout.index')
{{-- @include('index') --}}
@section('title','homepage')
@section('contents')
    {{-- content --}}
    @include('layout.header')
    @include('components.simple-inner-page')
    @include('layout.footer')
