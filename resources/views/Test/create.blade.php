@extends('layouts.index')
@section('content')
    <h1>Страница создания/редактирования записи</h1>

    <add-form-component :view-data="{{json_encode($viewData)}}"></add-form-component>
@stop
