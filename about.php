<!-- <?php 
  // session_start();
  // if(isset($_SESSION['unique_id'])){
  //   header("location: users.php");
  // }
?> -->

<?php include_once "header.php"; ?>
<style>
   body {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        min-height: 100vh;
        background: #f7f7f7;
        padding: 0 10px;
      }
      .wrapper {
        background: #fff;
        padding: 50px;
        max-width: 850px;
        width: 100%;
        border-radius: 16px;
        box-shadow: 0 0 128px 0 rgba(0, 0, 0, 0.1),
          0 32px 64px -48px rgba(0, 0, 0, 0.5);
        margin: 10px 0px;
      }
      .wrapper h1 {
        text-align: center;
        font-size: 2.5em;
      }
      .wrapper p{
        max-width: 650px;
        text-align:center;
      }
      .wrapper section h2 {
        font-size: 2em;
        align-self: start;
        margin-left:20px;
      }
      .wrapper h2::after{
        content: " Team";
        color: #0166b8;
      }
      .wrapper img.logo{
        border-radius: 0px;
      } 
      .wrapper input {
        height: 45px;
        width: calc(100% - 58px);
        font-size: 16px;
        padding: 0 13px;
        margin-top: 10px;
        border: 1px solid #e6e6e6;
        outline: none;
        border-radius: 5px 0 0 5px;
      }
      section {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 50px;
      }
      .wrapper section .boxCard .card{
        background: #fff;
        padding: 20px;
        max-width: 220px;
        width: 100%;
        border-radius: 16px;
        box-shadow: 0 0 128px 0 rgba(0, 0, 0, 0.1),
          0 32px 64px -48px rgba(0, 0, 0, 0.5);
        margin: 10px 0px;
        display: flex;
        flex-direction: column;
        align-items: center;
        transition: all 0.5s;
      }
      .wrapper section .boxCard .card:hover{
        background: #0166b8;
        color: #fff;

      }

      .wrapper section .boxCard{
        display: flex;
        flex-wrap: wrap;
        gap: 30px;
        justify-content: center;
      }

      section img.logo{
        animation: bounce 2s infinite;
      }
      .wrapper section .card a{
        text-decoration: none;
        color: #111;
        font-size: 30px;
        margin-top: 10px;
      }
      .wrapper section a:first-child {
        margin-bottom: -50px;
        font-size: 30px;
        color: #333;
        align-self: flex-start;
      }

      @keyframes bounce {
      0%, 20%, 50%, 80%, 100% {
        transform: translateY(0);
      }
      40% {
        transform: translateY(-20px);
      }
      60% {
        transform: translateY(-10px);
      }
    }
</style>
<body>
<div class="wrapper">
      <section>
      <a href="users.php"><i class="fas fa-solid fa-arrow-left fa-2xl"></i></a>
        <h1>Wanf Chat</h1>
        <img class="logo" src="php/images/internal/logo 1f.png" alt="">
        <p>
        Wanf Chat berguna untuk memperlancar komunikasi internal dan meningkatkan produktivitas dengan aplikasi obrolan berbasis web kami yang dirancang untuk lingkungan perusahaan. Tingkatkan kerja sama tim, bagikan informasi terbaru, dan fasilitasi kolaborasi yang lancar dalam organisasi Anda.
        </p>
        <h2>Our</h2>
        <div class="boxCard">
        <div class="card">
          <h3>Rocky Allesandro</h3>
          <p>UI/UX DESIGNER</p>
          <a href="https://github.com/rockhubzz">
          <i class="fab fa-github"></i>
          </a>
        </div>
        <div class="card">
          <h3>Hikmah Aldrin A</h3>
          <p>FULLSTACK DEVELOPER</p>
          <a href="https://github.com/hikmahabdillah">
          <i class="fab fa-github"></i>
          </a>
        </div>
        <div class="card">
          <h3>Erik Ridho F</h3>
          <p>TESTING WEB</p>
          <a href="https://github.com/ErikRidhoFirm">
          <i class="fab fa-github"></i>
          </a>
        </div>
        <div class="card">
          <h3>Tora Digda K</h3>
          <p>BACK END DEVELOPER</p>
          <a href="https://github.com/tora180405">
          <i class="fab fa-github"></i>
          </a>
        </div>
        <div class="card">
          <h3>Rafiqo Adib</h3>
          <p>UI/UX DESIGNER</p>
          <a href="https://github.com/adibbz2004">
          <i class="fab fa-github"></i>
          </a>
        </div>
        </div>
      </section>
    </div>
  </body>
  </html>