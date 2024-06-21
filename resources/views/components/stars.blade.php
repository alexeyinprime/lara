<!--
    Мы получаем общее количество звезд (например 5 или 10)
    Мы получаем величину оценки от 1-10
    На входе два числа
-->

<p class="stars">
@for($i=1;$i<=$count;$i++)
        <span class="bi bi-star-fill @if($rate < $i) muted @endif"></span>
@endfor


</p>
