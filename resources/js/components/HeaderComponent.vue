<template>
  <div class="container-fluid bg-dark mb-3">
    <div class="container">
      <nav class="navbar navbar-dark">
        <Router-link :to="{ name: '/' }">
          <span class="navbar-brand mb-0 h1">Vue Laravel SPA</span>
        </Router-link>
        <div>
          <Router-link v-bind:to="{ name: 'task.list' }">
            <button class="btn btn-success">List</button>
          </Router-link>
          <Router-link v-bind:to="{ name: 'task.create' }">
            <button class="btn btn-success">ADD</button>
          </Router-link>
        </div>
      </nav>
    </div>
  </div>
</template>

<script>
  export default {}
</script>
