<!DOCTYPE html>
<html>
  <head>
    <title>Discord Bot Development Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <style>
  /* CSS Reset */
  * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }
  
  /* Basic Styling */
  body {
    font-family: 'Roboto', sans-serif;
    background-color: #f7f7f7;
  }
  
  header {
    background-color: #1a1a1a;
    color: white;
    padding: 20px;
    text-align: center;
  }
  
  .container {
    max-width: 1200px;
    margin: auto;
    padding: 20px;
  }
  
  /* Navigation Styling */
  nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    background-color: #262626;
  }
  
  nav a {
    color: white;
    text-decoration: none;
    margin-left: 20px;
    font-weight: bold;
    font-size: 18px;
  }
  
  /* Bot Cards Styling */
  .bot-cards {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }
  
  .bot-card {
    margin: 20px;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    width: 300px;
    max-width: 100%;
    text-align: center;
  }
  
  .bot-card img {
    width: 100%;
    height: auto;
    margin-bottom: 20px;
  }
  
  .bot-card h3 {
    font-size: 24px;
    margin-bottom: 10px;
  }
  
  .bot-card p {
    font-size: 16px;
    line-height: 1.5;
    margin-bottom: 20px;
  }
  
  .bot-card a {
    display: inline-block;
    padding: 10px 20px;
    background-color: #0099ff;
    color: #fff;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s ease;
  }
  
  .bot-card a:hover {
    background-color: #0077cc;
  }
  
  /* Responsive Styling */
  @media screen and (max-width: 768px) {
    .bot-cards {
      justify-content: center;
    }
    
    .bot-card {
      margin-right: 0;
    }
  }
    #contact form {
    display: flex;
    flex-direction: column;
    align-items: center;
    background-color: #f1f1f1;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
    margin-top: 20px;
  }
  
  #contact form label {
    margin-top: 10px;
    font-weight: bold;
  }
  
  #contact form input, #contact form textarea {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border-radius: 5px;
    border: none;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
  }
  
  #contact form button[type="submit"] {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 10px 20px;
    margin-top: 10px;
    border-radius: 5px;
    font-weight: bold;
    cursor: pointer;
    transition: all 0.3s ease-in-out;
  }
  
  #contact form button[type="submit"]:hover {
    background-color: #3e8e41;
  }
</style>
  </head>
  <body>
    <header>
      <h1>Stunt Devs: Discord</h1>
    </header>
    <nav>
      <a href="#home">Home</a>
      <a href="#about">About Us</a>
      <a href="#portfolio">Bots</a>
    </nav>
    <div class="container">
      <section id="home">
        <h2>Welcome to Stunt Devs Discord</h2>
        <p>We are a small group of developers who specialize in creating Discord bots for a variety of purposes. Whether you need a bot for your gaming server, a music bot for your music server, or a moderation bot for your community server, we've got you covered!</p>
        <p>Take a look at some of our previous projects below and feel free to contact us if you have any questions or would like to work with us.</p>
      </section>
      <section id="portfolio">
        <h2>Our Portfolio</h2>
        <div class="bot-cards">
        <div class="bot-card">
          <img src="https://via.placeholder.com/300x200" alt="Bot 1">
          <h3>Bot 1</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id lectus quis lacus dignissim luctus. Proin accumsan eget est sed dictum.</p>
          <a href="#">View Bot</a>
        </div>
        <div class="bot-card">
        <img src="https://via.placeholder.com/300x200" alt="Bot 2">
        <h3>Bot 2</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id lectus quis lacus dignissim luctus. Proin accumsan eget est sed dictum.</p>
        <a href="#">View Bot</a>
      </div>
      <div class="bot-card">
        <img src="https://via.placeholder.com/300x200" alt="Bot 3">
        <h3>Bot 3</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id lectus quis lacus dignissim luctus. Proin accumsan eget est sed dictum.</p>
        <a href="#">View Bot</a>
      </div>
    </div>
  </section>
  <section id="contact">
  <h2>Contact Us</h2>
  <form action="#" method="POST">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    
    <label for="message">Message:</label>
    <textarea id="message" name="message" required></textarea>
    
    <button type="submit">Send</button>
  </form>
</section>
</div>
</body>
</html>
