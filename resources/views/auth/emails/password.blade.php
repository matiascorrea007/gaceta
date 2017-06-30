{{-- resources/views/emails/password.blade.php --}}
 
Click en el enlace para restablecer el password en Sharlinformatica: <a href="{{ url('password/reset/'.$token) }}">{{ url('password/reset/'.$token) }}</a>