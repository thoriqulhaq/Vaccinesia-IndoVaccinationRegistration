<?php include("page_header.php"); ?>
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
                        <form id="messageform" action="/action_page.php">
                            <label for="email">Email</label>
                            <input type="text" id="email" name="emailaddress" placeholder="example@gmail.com">
                                    
                            <label for="name">Full Name</label>
                            <input type="text" id="name" name="fullname" placeholder="John Doe">
                                    
                            <label for="message">Message</label>
                            <textarea id="message" name="message" placeholder="Leave message here!" style="height:125px"></textarea>

                            <input type="reset" value="Submit" id="btnsubmit" onclick="alert('Your Message Has been Sent'); submitForm('btnsubmit')">
                        </form>
                    </div>
                </div>
            </div>
        </section>

<?php include("page_footer.php"); ?>