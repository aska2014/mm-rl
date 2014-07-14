<!-- Contact Section -->

<section id="contact" class="container parallax5">

    <!-- Contact Inner -->

    <div class="inner contact">



        <!-- Header -->

        <h1 class="header semibold white"> <span class="extrabold">{{ $section->title }}</span></h1>



        <!-- Description -->

        <h4 class="h-desc white contact-text">{{ $section->description }}</h4>



        <!-- Form Area -->

        <div class="contact-form">

            <!-- Form -->

            <form id="contact-us" method="post" action="/send">

                <!-- Left Inputs -->

                <div class="col-xs-6 animated" data-animation="fadeInLeft" data-animation-delay="300">

                    <!-- Name -->

                    <input type="text" name="name" id="name" required class="form light" placeholder="Name" />

                    <!-- Email -->

                    <input type="email" name="email" id="mail" required class="form light" placeholder="Email" />

                    <!-- Subject -->

                    <input type="text" name="subject" id="subject" required class="form light" placeholder="Subject" />

                </div><!-- End Left Inputs -->

                <!-- Right Inputs -->

                <div class="col-xs-6 animated" data-animation="fadeInRight" data-animation-delay="300">

                    <!-- Message -->

                    <textarea name="body" id="message" class="form textarea light"  placeholder="Message"></textarea>

                </div><!-- End Right Inputs -->

                <!-- Bottom Submit -->

                <div class="relative fullwidth col-xs-12">

                    <!-- Send Button -->

                    <button type="submit" onclick="this.disabled = true" id="submit" name="submit" class="form-btn light">ارســـل</button>

                </div><!-- End Bottom Submit -->

                <!-- Clear -->

                <div class="clear"></div>

            </form>



            <!-- Your Mail Message -->

            <div class="mail-message-area">

                <!-- Message -->

                <div class="alert gray-bg mail-message not-visible-message">

                    <strong>Thank You !</strong> Your email has been delivered.

                </div>

            </div>



        </div><!-- End Contact Form Area -->

    </div><!-- End Inner -->

</section><!-- End Contact Section -->