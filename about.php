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
        gap: 60px;
      }
      section img.logo{
        animation: bounce 3s infinite;
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
        <h1>Wanf Chat</h1>
        <img class="logo" src="php/images/internal/logo 1f.png" alt="">
        <p>
        Wanf Chat berguna untuk memperlancar komunikasi internal dan meningkatkan produktivitas dengan aplikasi obrolan berbasis web kami yang dirancang untuk lingkungan perusahaan. Tingkatkan kerja sama tim, bagikan informasi terbaru, dan fasilitasi kolaborasi yang lancar dalam organisasi Anda.
        </p>
        <h2>Our</h2>
        <div class="card">
          <h3>Rafiqo Adib</h3>
          <p>UI/UX DESIGNER</p>
        </div>
      </section>
    </div>
  </body>
  </html>