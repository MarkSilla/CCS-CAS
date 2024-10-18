<template>
  <div id="app" class="d-flex">
    <Sidebar v-if="!isAuthPage" />
    <div class="main-content flex-grow-3">
      <Header v-if="!isAuthPage" />
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
  },
  computed: {
    isAuthPage() {
      return this.$route.meta.layout === 'empty';
    }
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
