<div>
    <form action="{{ route('scegli.lingua', $lang) }}" method="POST">
        @csrf

        <button type="submit" class="nav-link">
            <span class="fi fi-{{ $nation }}"></span>
        </button>

    </form>
</div>
