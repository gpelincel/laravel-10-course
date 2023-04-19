<h1>Novo support</h1>

<form action="{{route('supports.store')}}" method="post">
    {{-- <input type="hidden" value="{{csrf_token()}}" name="token"> --}}
    @csrf()
    <input type="text" placeholder="Assunto" name="subjects" id="subject">
    <textarea name="body" id="body" cols="30" rows="10" placeholder="Descrição"></textarea>
    <button type="submit">Enviar</button>
</form>