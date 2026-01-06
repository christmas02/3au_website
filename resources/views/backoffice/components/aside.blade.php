@php
$pays = App\Models\Pays::all();
@endphp
@foreach($pays as $item)
<li class="aside-menu__item"><a class="aside-menu__link" href="/pays/{{ $item->slug }}">{{ $item->name }}</a></li>
@endforeach

