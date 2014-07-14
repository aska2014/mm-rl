<!-- Site Socials and Address -->
<section id="site-socials" class="no-padding white-bg">

    <div class="site-socials inner no-padding">

        <!-- Socials -->

        <div class="socials">

            <!-- Facebook -->

            <a href="https://www.facebook.com/roknlodi" target="_blank" class="social">

                <i class="fa fa-facebook"></i>

            </a>

            <!-- Twitter -->

            <a href="https://twitter.com/roknlodi" target="_blank" class="social">

                <i class="fa fa-twitter"></i>

            </a>

            <!-- Google Plus -->

            <a href="#" target="_blank" class="social">

                <i class="fa fa-google-plus"></i>

            </a>

            <!-- Linkedin -->

            <a href="https://www.youtube.com/channel/UCqCBA14p4BLRaky4-Hd8XKw" target="_blank" class="social">

                <i class="fa fa-youtube"></i>

            </a>

            <!-- Instagram -->

            <a href="#" class="social">

                <i class="fa fa-instagram"></i>

            </a>

            <!-- Vimeo -->

            <a href="http://vimeo.com/roknlodi" target="_blank" class="social">

                <i class="fa fa-vimeo-square"></i>

            </a>

        </div>

        @if($contact)

        <!-- Adress, Mail -->

        <div class="address">

            <!-- Phone Number, Mail -->

            <p><a href="mailto:{{ $contact->email }}" class="bold dark">{{ $contact->email }}</a> : للتواصل عبر بريد الشركة</p>

            <p><span class="bold colored">{{ $contact->mobile }}</span>  الهاتف  <span class="bold colored">{{ $contact->telephone }}</span>  جوال  </p>

            <!-- Adress -->

            <p>  المركز الرئيسيى<span class="bold colored"> {{ $contact->city }}</span>{{ $contact->address }}</p>

            <!-- Top Button -->

            <a href="#home" class="scroll top-button">

                <i class="fa fa-angle-double-up"></i>

            </a>

        </div><!-- End Adress, Mail -->

        @endif

    </div><!-- End Inner -->

</section><!-- End Site Socials and Address -->