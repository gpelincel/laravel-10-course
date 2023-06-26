@csrf()
    {{-- old('nome do campo') -> Persiste os dados do campo quando há erro --}}
    <input type="text" placeholder="Assunto" name="subject" id="subject" value="{{ $support->subject ?? old('subject') }}">
    <textarea name="body" id="body" cols="30" rows="10" placeholder="Descrição">{{ $support->body ?? old('subject') }}</textarea>
    <button type="submit">Enviar</button>