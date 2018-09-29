<!-- Menu-main -->
<div id='cssmenu' class="align-right">
    <ul>
        <li class="nav_item">
            <a href="/" @if(Request::is('/')) class="active" @endif>
            <span class="item_outer">
                <span class="item_inner">
                    <span class="item_text">
                        Home
                    </span>
                </span>
            </span>
            </a>
        </li>
        <li class="nav_item">
            <a href="{{ route('character') }}" @if(Request::is('character')) class="active" @endif>
            <span class="item_outer">
                <span class="item_inner">
                    <span class="item_text">
                        Character's
                    </span>
                </span>
            </span>
            </a>
            <ul>
                <li><a href="{{ route('character.add') }}">New Character</a></li>
                <li><a href="{{ route('character.update') }}">Update Character</a></li>
            </ul>
        </li>
        <li class="nav_item">
            <a href="#">
            <span class="item_outer">
                <span class="item_inner">
                    <span class="item_text">
                        Jackpoint's
                    </span>
                </span>
            </span>
            </a>
        </li>
        <li class="nav_item">
            <a href="#">
            <span class="item_outer">
                <span class="item_inner">
                    <span class="item_text">
                        Contact
                    </span>
                </span>
            </span>
            </a>
        </li>
    </ul>
</div>
