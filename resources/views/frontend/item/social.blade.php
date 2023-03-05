@if ($text->fb)
    <li><a href="http://www.facebook.com/{{ $text->fb }}" target="_blank"><i class="fa fa-facebook"></i></a></li>
@endif
@if ($text->wa)
    <li><a href="https://wa.me/{{ $text->wa }}?text=Halo Saya Mau Tanya" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
@endif
@if ($text->ig)
    <li><a href="http://instagram.com/_u/{{ $text->ig }}" target="_blank"><i class="fa fa-instagram"></i></a></li>
@endif