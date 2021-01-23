<template>
  <div>
    <!-- Header -->
    <header id="custome-header">
      <div class="ui menu color__grey__0">
        <div id="title-app">
          <div class="item">Larahouse</div>
        </div>
        <div class="right menu">
          <a class="active red item">Sign Up</a>
          <a class="item">Help</a>
        </div>
      </div>
    </header>

    <div id="wrapper">
      <!-- Sidenav -->
      <aside id="custome-aside" class="ui vertical menu">
        <div class="item">
          <div class="ui input">
            <input type="text" placeholder="Search..." />
          </div>
        </div>
        <div class="item">
          Home
          <div class="menu">
            <a class="active item">Search</a>
            <a class="item">Add</a>
            <a class="item">Remove</a>
          </div>
        </div>
        <a class="item">
          <i class="grid layout icon"></i> Browse
        </a>
        <a class="item">Messages</a>
        <div class="ui dropdown item">
          More
          <i class="dropdown icon"></i>
          <div class="menu">
            <a class="item">
              <i class="edit icon"></i> Edit Profile
            </a>
            <a class="item">
              <i class="globe icon"></i> Choose Language
            </a>
            <a class="item">
              <i class="settings icon"></i> Account Settings
            </a>
          </div>
        </div>
      </aside>

      <!-- Main -->
      <main class="color__grey__03">
        <slot></slot>
      </main>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style>
header#custome-header {
  margin-bottom: 0 !important;
}

.color__grey__03 {
  background: rgba(0, 0, 0, 0.03) !important;
}

#title-app {
  width: 15rem;
}

#wrapper {
  display: flex;
}

aside#custome-aside {
  height: 92vh;
  border-radius: 0;
  border-top: none;
  border-bottom: none;
}

main {
  width: 100%;
}
</style>
