@extends('layouts.app')

@section('content')
<div class="flex flex-wrap justify-center max-w-screen-xl m-auto">
  <div class="w-full">
      <h1 class="text-4xl mb-4 font-bold">Gestión de comunicados</h1>      
  </div>

  <div class="w-full rounded-md bg-white p-6">
    <ul class="flex">
      <li>
        <a class="inline-block rounded-t py-2 text-blue-700 font-semibold" href="{{ route('comunicados.list') }}">
          Listar comunicados
        </a>

        <a class="inline-block rounded-t py-2 text-blue-700 font-semibold" href="{{ route('comunicados.create') }}">
          Crear un comunicado
        </a>

      </li>
    </ul>
  </div>
</div>
@endsection
