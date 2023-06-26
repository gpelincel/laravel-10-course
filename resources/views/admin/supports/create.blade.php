<h1>Novo support</h1>

@if ($errors->any())
    @foreach ($errors->all() as $error)
        {{$error}}
    @endforeach
@endif

<form action="{{route('supports.store')}}" method="post">
    {{-- <input type="hidden" value="{{csrf_token()}}" name="token"> --}}
    @csrf()

    {{-- old('nome do campo') -> Persiste os dados do campo quando há erro --}}
    <input type="text" placeholder="Assunto" name="subject" id="subject" value="{{old('subject')}}">
    <textarea name="body" id="body" cols="30" rows="10" placeholder="Descrição">{{old('body')}}</textarea>
    <button type="submit">Enviar</button>
</form>