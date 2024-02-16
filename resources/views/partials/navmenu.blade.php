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
        <button @click="open = true" class="menu-button">MENU</button>
    </template>
    <div x-show="open" class="menu-container">
        <a href="/home" class="menu-link" @click="open = false">HOME</a>
        <a href="/admin/posts" class="menu-link" @click="open = false">ALL POSTS</a>
        <!-- <a href="/journals" class="menu-link" @click="open = false">J0URN4LS</a> -->
        <a href="/login" class="menu-link" @click="open = false">LOGIN</a>
        <!-- <a href="/register" class="menu-link" @click="open = false">R3G!ST3R</a> -->
        <a href="/profile" class ="menu-link" @click="open = false"> PROFILE </a>
        <a href="{{ route('about') }}" class="menu-link" @click="open = false">ABOUT</a>

    </div>
</div>
<!-- NAV MENU -->