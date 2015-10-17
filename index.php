<?php include('snippets/html-head.php'); ?>
<?php include('snippets/header.php'); ?>

<main role="main">
    
    <section class="o-panorama u-text-center">
        <figure class="o-panorama__image js-image-liquid">
            <img src="assets/images/panorama-samantha-volk.jpg" alt="Samantha Volk - Visual &amp; Interaction Designer">
        </figure>  
        <div class="o-panorama__content u-contain-padding u-contain">
            <h1>Op zoek naar een enthausiaste UX Designer? Ik zoek een afstudeerstage!</h1>
            <a class="c-btn" hrefabout="#" id="js-scroll">Kom meer over mij te weten</a>
        </div>          
    </section>

    <section class="copy">
        <h1 class="u-is-visually-hidden">Samantha Volk - Visual &amp; Interaction Designer</h1>
        <div class="o-section--cards" id="portfolio">
            <div class="u-contain u-contain-padding">
                <h2>Portfolio</h2>
                <div class="o-grid o-grid--with-gutter">
                    
                    <div class="o-grid-cell u-size1of2--compact u-size1of3--large">
                        <div class="c-card js-block">
                            <div class="c-card__image">
                                <a href="rozephoeve">
                                    <img src="assets/images/card-landgoed-rozephoeve.jpg" alt="Landgoed Rozephoeve">
                                </a>
                            </div>
                            <div class="c-card__content">
                                <h3>Landgoed Rozephoeve</h3>
                                <span>Interactie en visueel ontwerp</span>
                            </div>
                        </div>
                    </div>

                    <div class="o-grid-cell u-size1of2--compact u-size1of3--large">
                        <div class="c-card js-block">
                            <div class="c-card__image">
                                <a href="vakantieboulevard-404">
                                    <img src="assets/images/card-vakantieboulevard.jpg" alt="Vakantieboulevard">
                                </a>
                            </div>
                            <div class="c-card__content">
                                <h3>Vakantieboulevard 404</h3>
                                <span>Interactie en visueel ontwerp</span>
                            </div>
                        </div>
                    </div>

                    <div class="o-grid-cell u-size1of2--compact u-size1of3--large">
                        <div class="c-card js-block">
                            <div class="c-card__image">
                                <a href="rodesk-projectinventarisatie">
                                    <img src="assets/images/card-rodesk-projectinventarisatie.jpg" alt="Rodesk projectinventarisatie">
                                </a>
                            </div>
                            <div class="c-card__content">
                                <h3>Rodesk Projectinventarisatie</h3>
                                <span>Interactie en visueel ontwerp</span>
                            </div>
                        </div>
                    </div>  

                    <div class="o-grid-cell u-size1of2--compact u-size1of3--large">
                        <div class="c-card c-card--4 js-block">
                            <div class="c-card__image">
                                <a href="motion-graphic">
                                    <img src="assets/images/card-motion-graphic.jpg" alt="Motion Graphic">
                                </a>
                            </div>
                            <div class="c-card__content">
                                <h3>Motion Graphic</h3>
                                <span>Visueel ontwerp en video editing</span>
                            </div>
                        </div>
                    </div>                                          

                    <div class="o-grid-cell u-size1of2--compact u-size1of3--large">
                        <div class="c-card c-card--5 js-block">
                            <div class="c-card__image">
                                <a href="design-this-huisstijl">
                                    <img src="assets/images/card-mijn-eigen-huisstijl.jpg" alt="Mijn eigen huisstijl">
                                </a>
                            </div>
                            <div class="c-card__content">
                                <h3>Design This Huisstijl</h3>
                                <span>Onderzoek en visueel design</span>
                            </div>
                        </div>
                    </div>                                      

                    <div class="o-grid-cell u-size1of2--compact u-size1of3--large">
                        <div class="c-card c-card--inactive c-card--6">
                            <div class="c-card__image">
                                <img src="assets/images/card-minor-iuxd.jpg" alt="Minor IUXD">
                            </div>
                            <div class="c-card__content">
                                <h3>Minor IUXD</h3>
                                <span>Binnenkort beschikbaar</span>
                            </div>
                        </div>
                    </div>                                                                              
                
                </div>
            </div>
        </div>

        <div class="o-section o-section--primary" id="about">
            <div class="u-contain u-contain-padding">
                <h2>Over mij</h2>
                <p>Ik ben een enthausiaste UX Desiger, en zit op dit moment in mijn laatste jaar van de opleiding CMD aan de Hogeschool Rotterdam.</p>
                <p>Omdat ik in mijn laatste studiejaar zit, ben ik op zoek naar een afstudeerplek die geintresseerd is in mijn afstudeeronderwerp, namelijk: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                <p>Ben je net zo geintresseerd in dit onderwerp als ik ben? Kan ik bij jouw bedrijf terecht? Ik kom graag praten over een afstudeer plek!</p>
                <div class="o-section__buttons">
                <div class="o-grid o-grid--with-gutter u-text-center">
                    <div class="o-grid-cell u-size1of2--medium">
                        <a class="c-btn c-btn--cta" href="mailto:<?php echo convert_email_adr('contact@samanthavolk.nl'); ?>">Neem contact op</a>
                    </div>
                    <div class="o-grid-cell u-size1of2--medium">
                        <a class="c-btn c-btn--cta" href="#">Download mijn CV</a>
                    </div>
                </div>
                </div>
            </div>
        </div>

    </section>
</main>

<?php include('snippets/footer.php'); ?>
