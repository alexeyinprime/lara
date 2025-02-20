@php
    $current = \Illuminate\Support\Facades\Route::currentRouteName()
@endphp

<ul>
    <li><a @if($current=='home') class="active" @endif href="{{ route('home') }}">Home</a></li>
    <li><a @if($current=='blog') class="active" @endif href="{{ route('blog') }}">Blog</a></li>
    <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
        <ul>
            <li><a href="#">Drop Down 1</a></li>
            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                    <li><a href="#">Deep Drop Down 1</a></li>
                    <li><a href="#">Deep Drop Down 2</a></li>
                    <li><a href="#">Deep Drop Down 3</a></li>
                    <li><a href="#">Deep Drop Down 4</a></li>
                    <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
            </li>
            <li><a href="#">Drop Down 2</a></li>
            <li><a href="#">Drop Down 3</a></li>
            <li><a href="#">Drop Down 4</a></li>
        </ul>
    </li>
    <li><a @if($current=='contact') class="active" @endif href="{{route('contact')}}">Contact Us</a></li>
</ul>
<i class="bi bi-list mobile-nav-toggle"></i>


