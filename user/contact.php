<?php 
$identifier = 5;
include("page_header.php"); 

error_reporting(0);
session_start();

$email= $_POST['email'];
$name = $_POST['fullname'];
$message = $_POST['message'];

if (isset($_POST["submit"])) {
      $reg = "insert into mail (email, fullname, message) values ('$email', '$name', '$message')";
      mysqli_query($con, $reg);
      echo "<script>alert('Message has been sent')</script>";
      echo "<script>location.href='contact.php'</script>";

  }?>
        </div>
        </section>

        <section class="s5">
            <div class="main-container">
                <div class="content-wrapper-contact">
                    <div class="hero-title-contact">
                        <div class="hero-v2">
                            <h1>Get in touch with</h1>
                            <h1 style="font-size: 50px">Kementrian Kesehatan</h1>
                        </div>
                    </div>
                    <div class="hero-form">
                        <form method="post" id="messageform">
                            <label for="email">Email</label>
                            <input type="text" id="email" name="email" placeholder="example@gmail.com">
                                    
                            <label for="name">Full Name</label>
                            <input type="text" id="name" name="fullname" placeholder="John Doe">
                                    
                            <label for="message">Message</label>
                            <textarea id="message" name="message" placeholder="Leave message here!" style="height:125px"></textarea>

                            <button name="submit" type="submit" id="btnsubmit" class="btn bg-violet text-light">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

<?php include("page_footer.php"); ?>