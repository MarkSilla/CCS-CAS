<template>
  <div id="app">
    <!-- Background Squares - Keeping your original code -->
    <div class="background-container">
      <div class="square" v-for="n in 26" :key="n" :class="'square-' + n"></div>
    </div>

    <!-- Modified Main Container -->
    <div class="container d-flex flex-column align-items-center py-5" style="margin-left: 250px">
      <!-- Logo Section -->
      <div class="mb-4">
        <img src="/public/images/checkEaseLogo.png" alt="logo here" style="width: 415px; height: 125px;" />
      </div>

      <!-- Form Section -->
      <div class="box-container" style="width: 400px;">
        <form @submit.prevent="submitForm">
          <h2 class="text-start"><b>Log in to your account.</b></h2>
          <p class="text-secondary text-start mb-4">
            New to Check Ease?
            <a href="index-signup.html" class="text-decoration-none">Sign up!</a>
          </p>

          <!-- Email Input -->
          <div class="mb-3 text-start">
            <label for="email" class="form-label">Email or Username</label>
            <input
              type="text"
              id="email"
              v-model="email"
              class="form-control"
              required
            />
          </div>

          <!-- Password Input -->
          <div class="mb-3 text-start">
            <label for="password" class="form-label">Password</label>
            <input
              type="password"
              id="password"
              v-model="password"
              class="form-control"
              required
            />
          </div>

          <!-- Forgot Password Link -->
          <div class="text-end mb-4">
            <a href="#" class="text-decoration-none">Forgot password?</a>
          </div>

          <!-- Submit Button -->
          <button type="submit" class="btn btn-primary w-100">LOG IN</button>

          <!-- Copyright -->
          <div class="text-center mt-4">
            <small class="text-muted">&copy;2024 Databoys</small>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Login',
  data() {
    return {
      email: '',
      password: ''
    };
  },
  methods: {
    submitForm() {
      // Handle the form submission logic here
      console.log('Form Submitted', this.email, this.password);
    }
  }
};
</script>

<style scoped>
.background-container {
  position: fixed;
  z-index: -1;
}



/* Modified content styles */
.box-container {
  background-color: white;
  border-radius: 8px;
  box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
  padding: 2rem;
}

.btn-primary {
  background-color: #7BB7D9;
  border: none;
}

.btn-primary:hover {
  background-color: #6AA6C8;
}

.form-control:focus {
  box-shadow: none;
  border-color: #7BB7D9;
}
.square {
  position: absolute;
  width: 50px;
  height: 50px;
  background-color: #645394;
  opacity: 0.8;
  border-radius: 10%;
}


.square-1 { top: 10vh; left: 20vw; }
.square-2 { top: 30vh; left: 40vw; }
.square-3 { top: 50vh; left: 60vw; }
.square-4 { top: 70vh; left: 80vw; }
.square-5 { top: 20vh; left: 70vw; }
.square-6 { top: 40vh; left: 90vw; }
.square-7 { top: 60vh; left: 10vw; }
.square-8 { top: 80vh; left: 30vw; }
</style>
