<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>
<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          <img src="php/images/<?php echo $row['img']; ?>" alt="" id="profilepic" onclick="openEditProfileModal()">
           <!-- Modul Edit Profile (sembunyikan awalnya) -->
          <div class="details">
            <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
            <p><?php echo $row['status']; ?></p>
          </div>
        </div>
        <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Logout</a>
      </header>
      <div class="search">
        <span class="text">Select an user to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
  
      </div>
    </section>
    <div id="editProfileModal" class="modal">
          <div class="modal-content">
              <span class="close" onclick="closeEditProfileModal()">&times;</span>
              
              <!-- Form Edit Profile -->
              <form id="editProfileForm">
                  <label for="username">Username:</label>
                  <input type="text" id="username" name="username" required>
  
                  <label for="email">Email:</label>
                  <input type="email" id="email" name="email" required>
  
                  <label for="bio">Bio:</label>
                  <textarea id="bio" name="bio" rows="4"></textarea>
  
                  <button type="button" onclick="updateProfile()">Update Profile</button>
              </form>
          </div>
      </div>
  </div>

  <script src="javascript/users.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</body>
</html>
