<template>
  <div class="welcome-section">
    <div class="position-fixed top-0 start-0" style="margin-left: 60px; padding: 20px;">
      <img src="/public/images/2s.png" alt="Logo" class="logo"> 
      <h1>Hi, Prof Name 👋</h1>
      <h2>Welcome to Check Ease!</h2>
      <p>Take and Track your Students’ Clearances and Attendance here!</p>
    </div>
    
    <div class="cards-section position-fixed top-50 start-50 translate-middle" style="margin-top: 80px; padding: 100px;"> 
      <div class="row justify-content-center">
        <div class="col-md-6 col-12 mb-4"> <!-- First card -->
          <div class="dashboard-card">
            <div class="card custom-card h-100">
              <div class="card-body d-flex align-items-center">
                <img src="/public/images/1.png" alt="Class Clearance" class="card-img me-3">
                <div>
                  <h5 class="card-title">??/?? of your Classes are Cleared!</h5>
                  <p class="card-text">Manage your student’s Clearance here.</p>
                  <router-link to="/clearance" class="btn custom-btn"><u>Check</u>></router-link> 
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
                  <router-link to="/attendance" class="btn custom-btn"><u>Check</u>></router-link> 
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
                  <router-link to="#" class="btn custom-btn"><u>Edit</u> ></router-link> 
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
                  <router-link to="#" class="btn custom-btn"><u>Create Class</u> ></router-link>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'HomeView',
};
</script>

<style scoped>
.welcome-section {
  padding: 20px;
}

.logo {
  width: 200px;
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
  width: 100%; 
  height: 100%; 
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
</style>
