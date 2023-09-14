@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Formadiksi')
<img src="{{ asset('storage/img/logo-formadiksi.png') }}" class="logo" alt="Formadiksi Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
