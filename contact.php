<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["your-name"];
    $surname = $_POST["your-surname"];
    $email = $_POST["your-email"];
    $subject = $_POST["your-subject"];
    $message = $_POST["your-message"];

    $to = "khalifa.villaflor1@gmail.com";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);
}
?>



<html>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">    
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>

    <body>

        <div class="container">
            <ul class="nav justify-content-end">
              <li class="nav-item">
                <a class="nav-link active" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="journey.html">Journey</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Portfolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact</a>
              </li>
              
            </ul>
          </div>
          <br><br><br>

        <div class="container my-5">

          
            <div class="row justify-content-center">
              <div class="col-lg-9">
                <h1 class="mb-3">Contact Me</h1>
                <form>
                  <div class="row g-3">
                    <div class="col-md-6">
                      <label for="your-name" class="form-label">Your Name</label>
                      <input type="text" class="form-control" id="your-name" name="your-name" required>
                    </div>
                    <div class="col-md-6">
                      <label for="your-surname" class="form-label">Your Surname</label>
                      <input type="text" class="form-control" id="your-surname" name="your-surname" required>
                    </div>
                    <div class="col-md-6">
                      <label for="your-email" class="form-label">Your Email</label>
                      <input type="email" class="form-control" id="your-email" name="your-email" required>
                    </div>
                    <div class="col-md-6">
                      <label for="your-subject" class="form-label">Your Subject</label>
                      <input type="text" class="form-control" id="your-subject" name="your-subject">
                    </div>
                    <div class="col-12 ">
                      <label for="your-message" class="form-label">Your Message</label>
                      <textarea class="form-control" id="your-message" name="your-message" rows="5" required></textarea>
                    </div>
                    <div class="col-12">
                      <div class="row">

                      <button data-res="<?php echo $sum; ?>" type="submit" class="btn btn-dark w-100" >Send</button>
                   
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <br><br><br>

<footer class="text-light p-5 bg-dark">
  <div class="container text-center">
      <div class="row p-4">

        <div class="col-md-4">
          <h5>Contact Me</h5>
          <p>Email: khalifa.villaflor1@gmail.com</p>
          <p>Student email: c.a.v.tagud@edu.salford.ac.uk</p>
        </div>
        <div class="col-md-4 text-light">
          <h5>Quick Links</h5>
          <ul class="list-unstyled">
            <div class="light">
            <li><a href="index.html">Home</a></li>
            <li><a href="journey.html">Journey</a></li>
            <li><a href="portfolio.html">Portfolio</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </div>

        <div class="col-md-4">
          <h5>Follow</h5>
          <ul class="list-unstyled">
            <li>
              <a  href="https://www.linkedin.com/in/khalifa-tagud/" target = "_blank" class="text-light">Linkedin <i class="fa-brands fa-linkedin"></i></a></li>
           
          </ul>
        </div>
      </div>
    
  </div>
    </footer>
  
          
        
    </body>

    <script>
      function sendEmail() {
          window.location.href = "mailto:khalifa.villaflor1@gmail.com";
      }
  </script>
</html>