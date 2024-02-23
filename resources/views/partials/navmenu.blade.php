<style>
    .menu-button {
        display: none; /* Hide the menu button */
    }

    .menu-container {
        position: sticky;
        top: 10px;
        left: 10px; /* Position the menu container in the top right corner */
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
<div x-data="{ open: true }">
    <div x-show="open" class="menu-container">
        <a href="/home" class="menu-link">HOME</a>
        <a href="/admin/posts" class="menu-link">ALL POSTS</a>
        <!-- <a href="/journals" class="menu-link">J0URN4LS</a> -->
        <a href="/login" class="menu-link">LOGIN</a>
        <!-- <a href="/register" class="menu-link">R3G!ST3R</a> -->
        <a href="/profile" class="menu-link">PROFILE</a>
        <a href="{{ route('about') }}" class="menu-link">ABOUT</a>
    </div>
</div>
<!-- NAV MENU -->
