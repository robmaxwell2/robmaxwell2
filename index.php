<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="mystyle.css">
    <!-- Bootstrap CSS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Robert Maxwell</title>
    
  </head>
  
  <body>
      <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Robert Maxwell</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
              <a class="nav-link" href="#">Features</a>
              <a class="nav-link" href="https://www.linkedin.com/in/robmaxwell2">Linkedin</a>
              <a class="nav-link" href="https://www.robertmaxwell.slccwebdev.com/contactme.php">Contact Me</a>
            </div>
          </div>
        </div>
      </nav>

      <header class="mainHeader">
        <div class="container-fluid h-100">
          <div class="row h-100 align-items-center justify-content-center text-center text-white" style="background-color: rgba(76, 12, 12, 0.2);">
            
            <div class="col-lg-8">
    
              <h1 class="display-1 font-weight-bold">Helping you <span>sell</span> you</h1>
              <hr class="bg-white my-5" />
    
              <h1>Want to articulate a powerful message that gives you results you seek?</h1>
    
              <a href="https://www.linkedin.com/in/robmaxwell2" class="btn btn-primary btn-lg mt-3">Learn more. Connect with me!</a>
            </div>
          </div>
        </div>  
      </header>
    
      <section id="about">
        <div class="container-fluid h-100">
            <div class="row align-items-center justify-content-center text-center text-white h-100" style="background-color: rgba(0, 0, 0, 0.2);">
                <div class="col-lg-8">
                    <h1 class="display-1 font-weight-bold">Site </h1>

                    <hr class="my-4 bg-white" />

                    <p class="font-weight-light mx-5">
                        Learn to Articulate Your Brand
                    </p>
                    <a class="btn btn-primary btn-lg mt-3" role="button" href="#about">Find Out More</a>
                </div>
            </div>
        </div>
        <div class="container">
          <form action="action_page.php">
        
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your name..">
        
            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        
            <label for="country">Country</label>
            <select id="country" name="country">
              <option value="russia">Russia</option>
              <option value="canada">Canada</option>
              <option value="usa">USA</option>
            </select>
        
            <label for="subject">Subject</label>
            <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
        
            <input type="submit" value="Submit">
        
          </form>
        </div>
     </section>
     
   <script>
         const name = prompt("What's your name?")
                   alert(`Hi ${name}! Thank you for visiting my site.`)

var d = new Date();
var time = d.getHours();

if (time < 12) {
   alert("Good morning!");
  }
if (time > 12) {
   alert("Good afternoon!");
}
if (time > 16) {
   alert("Good Evening");
} 
           
    </script>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
       
  </body>
</html>
