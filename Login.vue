<template>
  <div id="app">
    <!-- Background Squares -->
    <div class="background-container">
      <div class="square" v-for="n in 26" :key="n" :class="'square-' + n"></div>
    </div>

    <!-- Logo Section -->
    <div class="logo-container scale-150">
      <img src="checkEaselogo.png" alt="logo here" style="width: 415px; height: 125px;" />
    </div>

    <!-- Form Section -->
    <div class="box-container col-md-16 mb-5 h-75 w-90 d-block">
      <form @submit.prevent="submitForm" class="align-items-center w-90">
        <h2 class="text-start"><b>Sign in to your Account</b></h2>
        <p class="text-secondary text-start">
          New to Check Ease?
          <a href="index-signup.html" class="text-decoration-none">Sign up!</a>
        </p>

        <!-- Email Input -->
        <div class="mb-3 text-start">
          <label for="email" class="form-label">Email or Student Number</label>
          <input
            type="text"
            id="email"
            v-model="email"
            class="form-control"
            placeholder="Enter your Email or Student number"
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
            placeholder="Enter your Password"
            required
          />
        </div>

        <!-- Forgot Password Link -->
        <div class="text-end mb-3">
          <a href="#" class="text-decoration-none text-danger">Forgot password?</a>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary w-100">Log in</button>
      </form>
    </div>
  </div>
</template>

<script>
export default {
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
body {
  font-family: 'Outfit', sans-serif;
  overflow: hidden;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
}

.box-container {
  background-color: white;
  border-radius: 8px;
  box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
  padding: 20px;
  text-align: center;
}

.background-container {
  position: fixed;
  z-index: -1;
}

/* Define positions for the squares */
.square {
  position: absolute;
  width: 50px;
  height: 50px;
  background-color: #645394;
  opacity: 0.8;
  border-radius: 10%;
}

/* Set static positions for each square */
.square-1 { top: 10vh; left: 20vw; }
.square-2 { top: 30vh; left: 40vw; }
.square-3 { top: 50vh; left: 60vw; }
.square-4 { top: 70vh; left: 80vw; }
.square-5 { top: 20vh; left: 70vw; }
.square-6 { top: 40vh; left: 90vw; }
.square-7 { top: 60vh; left: 10vw; }
.square-8 { top: 80vh; left: 30vw; }
/* Add more squares as needed */
</style>
