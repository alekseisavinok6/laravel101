<x-base-of-page>
    <x-slot name="title">Productos</x-slot>
@foreach($productos as $producto)
    <h1>Productos</h1>
    <p>Nombre: {{$producto -> nombre}}</p>
    <p>Descripcion: {{$producto -> descripcion}}</p>
    <p>Precio: {{$producto -> precio}}</p>
    <p>Creado en: {{$producto -> created_at}}</p>
    <p>Actualizado en: {{$producto -> updated_at}}</p>

@endforeach
</x-base-of-page>
