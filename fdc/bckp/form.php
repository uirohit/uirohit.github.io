
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];
    $message = $_POST['message'];

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'fortunedatacentrescompany@gmail.com'; // Replace with your Gmail address
        $mail->Password   = 'iuqqpyteygezlbuh'; // Replace with your Gmail password or App password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Recipients
        $mail->setFrom('fortunedatacentrescompany@gmail.com', 'Your Name'); // Replace with your name
        $mail->addAddress('fortunedatacentrescompany@gmail.com'); // Replace with recipient's email address

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Consultation Request';
        $mail->Body    = "
            <h3>New Consultation Request</h3>
            <p><strong>Name:</strong> {$name}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Phone:</strong> {$phone}</p>
            <p><strong>Country:</strong> {$country}</p>
            <p><strong>Message:</strong><br>{$message}</p>
        ";
        $mail->AltBody = "New Consultation Request\n\nName: {$name}\nEmail: {$email}\nPhone: {$phone}\nCountry: {$country}\nMessage:\n{$message}";

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>










  <section class="rts-contact-form pt-120 image-bg" id="contact">
        <div class="container">
            <div class="col-12 d-flex justify-content-center">
                <div class="rts-section w-460 text-center">
                    <h3 class="rts-section__title sal-animate font-36" data-sal="slide-down" data-sal-delay="300" data-sal-duration="800">Request a consultation.</h3>
                    <p class="rts-section__description sal-animate" data-sal="slide-down" data-sal-delay="400" data-sal-duration="800">Discuss your needs with our experts and get personalized solutions. Schedule your free consultation today!</p>
                </div>
            </div>
            <div class="row gy-30 justify-content-center">
                <div class="col-xl-5 col-lg-6 col-md-10">
                    <div class="form">
                        <form class="form__content" method="post" action="">
                            <h5 class="text-center">Send a message</h5>
                            <div class="form__control">
                                <input type="text" class="input-form" name="name" placeholder="What is your name?" required>
                                <input type="email" class="input-form" name="email" placeholder="Email Address" required>
                            </div>
                            <div class="form__control">
                                <input type="text" class="input-form" name="phone" placeholder="Phone Number" required>
                                <select name="country" id="country" class="input-form" required>
                                    <option value="">Select Country</option>
                                    <option value="India">India</option>
                                    <!-- Add more countries as needed -->
                                </select>
                            </div>
                            <textarea name="message" cols="30" rows="10" placeholder="A brief description about your consultation" required></textarea>
                            <input type="checkbox" name="checkbox" id="checkbox" required>
                            <label for="checkbox">
                                By submitting your information you provide written consent to Fortune DC.
                            </label>
                            <button type="submit" class="submit__btn">Submit Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    








<!--

<section class="rts-contact-form pt-120 image-bg" id="contact">
        <div class="container">
            <div class="col-12 d-flex justify-content-center">
                <div class="rts-section w-460 text-center">
                    <h3 class="rts-section__title sal-animate font-36" data-sal="slide-down" data-sal-delay="300" data-sal-duration="800">Request a consultation.</h3>
                    <p class="rts-section__description sal-animate" data-sal="slide-down" data-sal-delay="400" data-sal-duration="800">Discuss your needs with our experts and get personalized solutions. Schedule your free consultation today!</p>
                </div>
            </div>
            <div class="row gy-30 justify-content-center">
                <div class="col-xl-5 col-lg-6 col-md-10">
                    <div class="form">
                        <form class="form__content" method="post" action="">
                            <h5 class="text-center">Send a message</h5>
                            <div class="form__control">
                                <input type="text" class="input-form" name="name" placeholder="What is your name?" required>
                                <input type="email" class="input-form" name="email" placeholder="Email Address" required>
                            </div>
                            <div class="form__control">
                                <input type="text" class="input-form" name="phone" placeholder="Phone Number" required>
                                <select name="country" id="country" class="input-form" required>
                                    <option value="">Select Country</option>
                                    <option value="India">India</option>
                                
                                </select>
                            </div>
                            <textarea name="message" cols="30" rows="10" placeholder="A brief description about your consultation" required></textarea>
                            <input type="checkbox" name="checkbox" id="checkbox" required>
                            <label for="checkbox">
                                By submitting your information you provide written consent to Fortune DC.
                            </label>
                            <button type="submit" class="submit__btn">Submit Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    -->