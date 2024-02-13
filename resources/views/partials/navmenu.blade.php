<style>
    .menu-button {
        position: fixed;
        top: 10px;
        left: 10px;
        padding: 10px;
        background-color: transparent;
        color: #F8C8DC;
        text-decoration: none;
        border-radius: 5px;
        z-index: 1000;
        font-size: 20px;
    }


    .menu-container {
        position: fixed;
        top: 0;
        left: 0;
        background-color: transparent;
        border: 1px solid transparent;
        border-radius: 4px;
        z-index: 1000;
        padding: 10px;
    }

    .menu-link {
        display: inline-block;
        padding: 10px;
        color: #F8C8DC;
        text-decoration: none;
        font-family: 'Karla', sans-serif;
        margin-right: 10px;
        font-size: 20px;
    }

    .menu-link:hover {
        background-color: transparent;
    }
</style>

<!-- NAV MENU -->
<div x-data="{ open: false }" @click.away="open = false">
    <template x-if="!open">
        <button @click="open = true" class="menu-button">M3NU</button>
    </template>
    <div x-show="open" class="menu-container">
        <a href="/home" class="menu-link" @click="open = false">H0M3</a>
        <a href="/admin/posts" class="menu-link" @click="open = false">4LL P0STS</a>
        <!-- <a href="/journals" class="menu-link" @click="open = false">J0URN4LS</a> -->
        <a href="/login" class="menu-link" @click="open = false">L0G!N</a>
        <a href="/register" class="menu-link" @click="open = false">R3G!ST3R</a>
        <a href="/force-logout" class="menu-link" @click="open = false">L0G0UT</a>
        <a href="/profile" class ="menu-link" @click="open = false"> PR0F!L3 </a>
        <a href="{{ route('about') }}" class="menu-link" @click="open = false">4B0UT</a>

    </div>
</div>
<!-- NAV MENU -->