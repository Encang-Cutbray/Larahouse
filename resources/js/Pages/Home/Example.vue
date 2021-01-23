<template>
  <div id="application">
    <div class="ui visible vertical menu sidebar">
      <a class="item">Item 1</a>
      <a class="item">Item 2</a>
      <a class="item">Item 3</a>
    </div>
    <div class="pusher">
      <!-- Site content !-->
      Home
    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    $(".ui.sidebar").sidebar({
      context: "#application"
    });
    // $(".ui.sidebar").sidebar("toggle");
  }
};
</script>

<style>
</style>
