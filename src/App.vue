<template>
  <div id="app" class="d-flex">
    <Sidebar />
    <div class="main-content flex-grow-3">
      <Header />
      <div class="container-fluid">
        <RouterView />
      </div>
    </div>
  </div>
</template>

<script>
import Sidebar from './components/Sidebar.vue';
import Header from './components/Header.vue';

export default {
  components: {
    Sidebar,
    Header,
  }
};
</script>

<style scoped>
#app {
  display: flex;
}

.main-content {
  margin-left: 60px;
  margin-top: 60px;
  flex-grow: 1;
  padding: 20px;
}
@media (max-width: 768px) {
  .main-content {
    margin-left: 60px; 
    padding: 100px; 
  }

  #app {
    flex-direction: column; 
  }
}
</style>
