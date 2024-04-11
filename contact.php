<?php 
$page ="Contact";
$title= "Contact-Us || TROPICS ENERGY SOLUTION LIMITED";
include'includes/header.php'; ?>
    <main>

        <div class="it-breadcrumb-area fix p-relative" data-background="assets/img/breadcrumb/breadcrumb-bg.jpg">
            <div class="it-breadcrumb-shape-1">
                <img src="assets/img/breadcrumb/breadcrumb-shape.png" alt>
            </div>
            <div class="it-breadcrumb-transparent-text">
                <h3 style="font-size: 40px;" class="it-breadcrumb-transparent-title">TROPICS ENERGY</h3>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="it-breadcrumb-content">
                            <div class="it-breadcrumb-title-box mb-25 z-index-3">
                                <h3 class="it-breadcrumb-title text-white">contact</h3>
                            </div>
                            <div class="it-breadcrumb-list-wrap">
                                <div class="it-breadcrumb-list z-index-3">
                                    <span><a href="index.html">Home</a></span>
                                    <span class="dvdr">//</span>
                                    <span><b>Contact</b></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="it-contact-area pt-120 pb-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <div class="it-contact-wrapp grey-bg">
                        <div class="it-contact-title-box pb-10 mb-40">
                            <h3 class="it-section-title">Get in touch</h3>
                        </div>
                        <form action="" method="post">
                            <div class="it-contact-input">
                                <input name="name" type="text" placeholder="Full Name *" required>
                            </div>
                            <div class="it-contact-input">
                                <input name="phone" type="tel" placeholder="Phone *" required>
                            </div>
                            <div class="it-contact-input">
                                <input name="email" type="email" placeholder="Email *" required>
                            </div>
                            <div class="it-contact-input mb-30">
                                <textarea name="message" placeholder="Note"></textarea>
                            </div>
                            <div class="it-contact-button mb-50">
                                <button class="it-btn-green" type="submit">Send A Message</button>
                            </div>
                        </form>

                        <?php
                         if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            // Collect form data
                            $name = $_POST["name"];
                            $phone = $_POST["phone"];
                            $email = $_POST["email"];
                            $message = $_POST["message"];

                            // Set up email parameters
                            $to = "info@tropicsenergy.com";
                            $subject = "New Form Submission";
                            $headers = "From: $name"; // Use the phone or another appropriate field here
                        
                            // Compose email body
                            $body = "Name: $name\n";
                            $body .= "Phone: $phone\n";
                            $body .= "email: $email\n";
                            $body .= "subject: $message\n";

                            // Check if all required fields are set
                            if ($name && $phone && $email && $message) {
                                // Send email
                                $success = mail($to, $subject, $body, $headers);

                                // Check if the email was sent successfully
                                if ($success) {
                                    echo "Thank you for your message. It has been sent.";
                                } else {
                                    echo "Oops! Something went wrong and we couldn't send your message.";
                                }
                            }
                        }
                        ?>
                        <div class="it-contact-link">
                            <div class="it-contact-link-title mb-5">
                                <h3 class="it-section-title-sm">Contact info:</h3>
                            </div>
                            <div class="it-contact-link-item">
                                <a href="tel:7697573439">
                                    <i class="flaticon-phone-call"></i> 7697573439
                                </a>
                                <a href="">
                                    <i class="flaticon-location"></i> H.No. 216/3, New Baraskar Colony, Mahaveer Ward,
                                    Tikari Betul, Betul, Madhya Pradesh, 460001
                                </a>
                                <a href="">
                                    <i class="flaticon-location"></i> 80 - B, Vijay Nagar Lalghati, BHOPAL - 462030
                                    (Madhya Pradesh)
                                </a>
                                <a href="mailto:info@tropicsenergy.com">
                                    <i class="flaticon-mail"></i> <span class=""
                                        data-cfemail="80f3efecf6f2e1c0e7ede1e9ecaee3efed">info@tropicsenergy.com</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="it-contact-map-area">
                        <div class="it-contact-map-wrapp">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3665.1318515651183!2d77.36425427400962!3d23.274658306876436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397c67c2cabeaaab%3A0x246a8f1caf906153!2s80B%2C%20Vijay%20Nagar%2C%20Lalghati%2C%20Bhopal%2C%20Madhya%20Pradesh%20462032!5e0!3m2!1sen!2sin!4v1711183355570!5m2!1sen!2sin"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </main>
    <?php include'includes/footer.php'; ?>