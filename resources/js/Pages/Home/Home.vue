<template>
  <div class="ui grid">
    <div class="three wide column">
      <div class="ui pointing menu">
        <a class="active item" style="width:100%">Home</a>
      </div>
      <div class="ui secondary fluid vertical menu">
        <inertia-link :href="example" class="item">Example</inertia-link>
        <inertia-link :href="home" class="item">Home</inertia-link>
        <a class="active item">Account</a>
        <a class="item">Settings</a>
        <div class="ui dropdown item">
          <i class="dropdown icon"></i>
          Display Options
          <div class="menu">
            <div class="header">Text Size</div>
            <a class="item">Small</a>
            <a class="item">Medium</a>
            <a class="item">Large</a>
          </div>
        </div>
      </div>
    </div>
    <div class="thirteen wide column">
      <div class="ui pointing menu">
        <a class="active item">Home</a>
        <a class="item">Messages</a>
        <a class="item">Friends</a>
        <div class="right menu">
          <div class="item">
            <div class="ui transparent icon input">
              <input type="text" placeholder="Search..." />
              <i class="search link icon"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="ui segment">
        <p></p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    example: String,
    home: String
  },
  mounted() {
    $(".ui.sidebar").sidebar({
      context: "#application"
    });
    $(".ui.sidebar").sidebar("toggle");
  }
};
</script>

<style>
</style>
