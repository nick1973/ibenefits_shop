<!-- FOOTER -->
<footer class="footer-fixed" id="footer_colour">
    <div class="w-auto p-5 mb-1 text-dark font-weight-light">
        <div class="row offset-xl-1 offset-md-1 pl-3 pr-3 text-light">

            <div class="col-md-2 text-light">
                <h6><u>Contact us</u></h6></br>
                <a class="text-light" href="{{ route('frontend.contact') }}">Contact Form</a></br>
                <a class="text-light" href="{{ route('frontend.headquarters') }}">Headquarters</a></br>
                <a class="text-light" href="{{ route('frontend.phone-numbers') }}">Available phone numbers</a>
            </div>

            <div class="col-md-2">
                <h6><u>Help Center / FAQ</u></h6></br>
                <a class="text-light" href="{{ route('frontend.FAQs') }}">List with FAQs</a>
            </div>

            <div class="col-md-2">
                <h6><u>Policies & Rules</u></h6></br>
                <a class="text-light" href="{{ route('frontend.rules-policy') }}">Policies & Rules Article</a></br>
                <a class="text-light" href="{{ route('frontend.shipping-policy') }}">Shipping Policy Article</a></br>
                <a class="text-light" href="{{ route('frontend.sitemap') }}">Sitemap</a>
            </div>

            <div class="col-md-2">
                <h6><u>Report an issue</u></h6></br>
                <a class="text-light" href="{{ route('frontend.report-an-issue') }}">Report An Issue Form</a>
            </div>

            <div class="col-md-2">
                <h6><u>Get paid for your feedback</u></h6></br>
                <a class="text-light" href="{{ route('frontend.survey') }}">Submit survey</a>
            </div>

            <div class="row col-12 pt-5">
                <div class="col-8">&copy; Copyright 2018 Growth Partners PLC &middot; <a href="{{ route('frontend.privacy') }}">Privacy</a> &middot; <a href="{{ route('frontend.terms-condition') }}">Terms & Condition</a> &middot; <a href="#">Back to top</a></div>
                <div class="col-4 pl-lg-3 float-right"><i class="fab fa-facebook-f fa-lg"></i> <i class="fab fa-twitter fa-lg w-5"></i> <i class="fab fa-instagram fa-lg w-5"></i></div>
            </div>
        </div>
    </div>
</footer>