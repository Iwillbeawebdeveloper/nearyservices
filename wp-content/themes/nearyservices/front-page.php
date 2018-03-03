<!DOCTYPE html>
<?php get_header(); ?>

<head>
    <title>Neary Services</title>
</head>

<body>
    <section id="home-section">
        <div id="home-overlay">
        </div>
        <div id="home-info">
            <div id="home-headings">
                <h1 class="mb10">Neary Services</h1>
                <h2 class="mb20">Chefs At Your Service</h2>
                <ul id="home-text" class="mb30">
                    <li>Piece of text 1</li>
                    <li>Piece of text 2</li>
                    <li>Piece of text 3</li>
                    <li>Piece of text 4</li>
                    <li>Piece of text 5</li>
                </ul>
                <h2><a href="tel:02039502155" class="black">02039502155</a></h2><br>
                <a href="tel:02039502155" class="btn btn-home">Call Us Now</a>
                <a href="mailto:info@nearyservices.co.uk" class="btn btn-home">E-mail</a>
            </div>            
        </div>
    </section>
    <section id="clients-section">
        <div id="clients-overlay">
            <div class="container text-center">
                <div class="border"></div>
                <h2 class="mb60">Looking for a chef?</h2>
                <p>Here at Neary Services we supply dedicated professional, fully vetted temporary chefs to work in your kitchen.</p><br>
                <p>We take all of the hassle out of the traditional hiring process, and can even supply chefs the same day.</p><br>
                <p>We have a wealth of knowledge within the catering industry, and work hard to supply chefs that are right for your business.</p><br>
                <p>All of our Chefs have at least 5 years experience, chef whites, knives, professional tool kit, level 2 hygiene certificate and allergen certificate.</p><br>
                <p>We also promise to beat any existing like-for-like quote for services by 15%.</p><br>
                <p>So why not give us a try today.</p><br>
                <div class="horizontal-border-left"></div>
                <a href="#contact-section" class="btn btn-home scroll-to">Contact Us</a>
            </div>    
        </div>
        
    </section>
    <section id="candidates-section">
        <div id="candidates-overlay">
            <div class="container text-center">
                <div class="border"></div>
                <h2 class="mb30">Looking for work?</h2>
                <p>Event Chefs</p><br>
                <p>Head Chefs</p><br>
                <p>Sous Chefs</p><br>
                <p>Chef De Parties</p><br>
                <p>Happy Chefs</p><br>
                <a href="#contact-section" class="btn btn-home scroll-to">Contact Us</a>
                <div class="horizontal-border-right"></div>
            </div>    
        </div>
    </section>
    <section id="contact-section">
        <div id="contact-overlay">
            <div class="container text-center">
                <h2 class="mb60">Contact Us</h2>
                <form>
                    <select id="contact-form" class="mb15">
                        <option disabled required selected>Please Select...</option>
                        <option id="contact-form-chefs">Looking For Chefs</option>
                        <option id="contact-form-work">Looking For Work</option>
                        <option id="contact-form-other">Other</option>
                    </select>
                    <input id="contact-form-field-name" type="text" name="name" class="mb15" placeholder="Name" required>
                    <input id="contact-form-field-company" type="text" name="firstname" placeholder="Company Name" class="mb15 hidden">
                    <input id="contact-form-field-email" type="email" name="email" placeholder="E-mail" class="mb15" required>
                    <textarea id="contact-form-field-message" placeholder="Please enter message..." class="mb30"></textarea>
                </form>                
                <a href="#contact-section" class="btn btn-home scroll-to">Send</a>
            </div>    
        </div>
    </section>

<?php get_footer(); ?>

</body>