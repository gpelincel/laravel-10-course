<h1>Novo support</h1>

<x-alert></x-alert>

<form action="{{route('supports.store')}}" method="post">
    @include('admin.supports.partials.form')
</form>