@extends('layouts.plantilla')

@section('title', 'Editar curso')

@section('content')
    <h1>En esta página podrás editar un curso</h1>
    <form action="{{route('cursos.update', $curso)}}" method="POST">
        
        @method('put')

        @csrf
        
        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{old('name', $curso->name)}}">
        </label>

        @error('name')
            <br>
            <small>{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Descripción:
            <br>
            <textarea name="description" rows="5">{{old('description', $curso->description)}}</textarea>
        </label>

        @error('description')
            <br>
            <small>{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Categoría:
            <br>
            <input type="text" name="category" value="{{old('category', $curso->category)}}">
        </label>

        @error('category')
            <br>
            <small>{{$message}}</small>
            <br>
        @enderror

        <br>
        <button type="submit">Actualizar</button>
    </form>
@endsection