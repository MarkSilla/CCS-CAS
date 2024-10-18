<template>
  <div class="welcome-section d-flex flex-column align-items-start">
    <div class="welcome-text" style="padding: 20px; margin-left: -230px; margin-top: -90px;">
      <img src="/public/images/2s.png" alt="Logo" class="logo">
      <h1>Hi, Prof Name 👋</h1>
      <h2>Welcome to Check Ease!</h2>
      <p>Take and Track your Students’ Clearances and Attendance here!</p>
    </div>
    
    <div class="cards-section" style="margin-top: 5px; margin-right: 500px;">
      <div class="row justify-content-center">
        <div class="col-md-6 col-12 mb-4"> <!-- First card -->
          <div class="dashboard-card">
            <div class="card custom-card h-100">
              <div class="card-body d-flex align-items-center">
                <img src="/public/images/1.png" alt="Class Clearance" class="card-img me-3">
                <div>
                  <h5 class="card-title">??/?? of your Classes are Cleared!</h5>
                  <p class="card-text">Manage your student’s Clearance here.</p>
                  <router-link to="/clearance" class="btn custom-btn"><u>Check</u></router-link>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-12 mb-4"> <!-- Second card -->
          <div class="dashboard-card">
            <div class="card custom-card h-100">
              <div class="card-body d-flex align-items-center">
                <img src="/public/images/2.png" alt="Take Attendance" class="card-img me-3">
                <div>
                  <h5 class="card-title">Take Attendance</h5>
                  <p class="card-text">Take your student's Attendance here.</p>
                  <router-link to="/attendance" class="btn custom-btn"><u>Check</u></router-link>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-12 mb-4"> <!-- Third card -->
          <div class="dashboard-card">
            <div class="card custom-card h-100">
              <div class="card-body d-flex align-items-center">
                <img src="/public/images/3.png" alt="Personal Information" class="card-img me-3">
                <div>
                  <h5 class="card-title">Personal Information</h5>
                  <p class="card-text">Edit your Personal Information here.</p>
                  <router-link to="#" class="btn custom-btn"><u>Edit</u></router-link>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-12 mb-4"> <!-- Fourth card -->
          <div class="dashboard-card">
            <div class="card custom-card h-100">
              <div class="card-body d-flex align-items-center">
                <img src="/public/images/4.png" alt="Create Class" class="card-img me-3">
                <div>
                  <h5 class="card-title">No class yet? Make one!</h5>
                  <p class="card-text">
                    No class yet? Create one by clicking the 'Create <br> Class' button.
                    Set up a new class with a unique <br> code,
                    allowing students to join and access their <br> attendance and clearance records.
                  </p>
                  <button @click="showForm = true" class="btn custom-btn"><u>Create Class</u></button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Pop-up form -->
        <div v-if="showForm" class="popup-form">
          <div class="popup-content">
            <button @click="showForm = false" class="close-btn">&times;</button>
            <h3>Create a New Class</h3>
            <form @submit.prevent="submitForm">
              <div class="form-group">
                <label for="className">Class Name:</label>
                <input type="text" id="className" v-model="className" class="form-control">
              </div>
              <div class="form-group">
                <label for="classCapacity">Class Capacity:</label>
                <input type="number" id="classCapacity" v-model="classCapacity" class="form-control">
              </div>
              <button type="submit" class="btn custom-btn">Create</button>
            </form>
          </div>
        </div>

      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'HomeView',
  data() {
    return {
      showForm: false,
      className: '',
      classCapacity: ''
    };
  },
  methods: {
    submitForm() {
      if (this.className && this.classCapacity) {
        // Handle form submission logic
        console.log('Form submitted with Class Name:', this.className, 'and Class Capacity:', this.classCapacity);
        this.showForm = false; // Close the form after submission
      } else {
        alert('Please fill in both fields.');
      }
    }
  }
};

</script>

<style scoped>
.welcome-section {
  padding: 20px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
}

.logo {
  width: 100%; 
  max-width: 200px; 
  height: auto; 
}


@media (max-width: 768px) {
  .logo {
    display: none; 
  }
  .welcome-section {
    margin-left: 60px;
    margin-top: auto;

  }

  .welcome-text {
    margin-left: 0; 
    padding: 20px;
  }

  .cards-section {
    margin-top: 10px; 
  }
}

.cards-section {
  width: 100%;
  height: auto;
}

.dashboard-card {
  height: 240px;
}

.card.custom-card {
  background-color: #96D4DE;
  color: white;
  border-radius: 15px;
  box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
  width: 485px;  
  height: 240px; 
  transition: background-color 0.3s ease;
}

.card.custom-card:hover {
  background-color: #227B94;
  color: black;
}

.card-img {
  width: 80px;
  height: 80px;
  object-fit: cover;
}

.card-body {
  display: flex;
  align-items: center;
  overflow: hidden; 
}

.custom-btn {
  background-color: #78B7D0;
  border-radius: 20px;
  color: white;
  padding: 10px 20px;
  transition: background-color 0.3s ease;
}

.custom-btn:hover {
  background-color: #5B97A9;
}


.mb-4 {
  margin-bottom: 20px; 
}
.popup-form {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.5);
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 1000;
}

.popup-content {
  width: 353px;
  height: 331px;
  background-color: #DBF4F8;
  padding: 20px;
  border-radius: 30px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  position: relative;
}

.close-btn {
  position: absolute;
  top: 10px;
  right: 10px;
  background: none;
  border: none;
  font-size: 24px;
  cursor: pointer;
}

.form-group {
  margin-bottom: 15px;
}

.form-control {
  width: 100%;
  padding: 10px;
  margin-top: 5px;
  border: 1px solid #78B7D0;
  border-radius: 15px;
}

.btn.custom-btn {
  background-color: #78B7D0;
  border-radius: 20px;
  color: white;
  padding: 10px 20px;
  transition: background-color 0.3s ease;
  margin-right: 10px;
}

.btn.custom-btn:hover {
  background-color: #5B97A9;
}
</style>