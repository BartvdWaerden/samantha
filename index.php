<?php include('snippets/html-head.php'); ?>
<?php include('snippets/header.php'); ?>

<main role="main">

    <section class="o-panorama u-text-center">
        <figure class="o-panorama__image js-image-liquid">
            <img src="assets/images/panorama-samantha-volk.jpg" alt="Samantha Volk - Visual &amp; Interaction Designer">
        </figure>
        <div class="o-panorama__content u-contain-padding u-contain">
            <h1>Ik ben een enthousiaste UX/UI Designer</h1>
            <a class="c-btn" hrefabout="#" id="js-scroll">Kom meer over mij te weten</a>
        </div>
    </section>

    <section class="copy">
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
                                <span>Interaction en visual design</span>
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
                                <span>Interaction en visual design</span>
                            </div>
                        </div>
                    </div>

                    <div class="o-grid-cell u-size1of2--compact u-size1of3--large">
                        <div class="c-card js-block">
                            <div class="c-card__image">
                                <a href="rodesk-projectinventarisatie">
                                    <img src="assets/images/card-rodesk-projectinventarisatie.jpg" alt="Rodesk Projectinventarisatie">
                                </a>
                            </div>
                            <div class="c-card__content">
                                <h3>Rodesk Projectinventarisatie</h3>
                                <span>Interaction en visual design</span>
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
                                <span>Visual design en video editing</span>
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
                                <span>Research en visual design</span>
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
                <p>Hi! Ik ben Samantha en op dit moment ben ik vierdejaars student Communication &amp; Multimedia Design aan de Hogeschool Rotterdam. Als ik mijzelf zou moeten omschrijven in drie woorden ben ik enthousiast, leergierig en kritisch. Deze eigenschappen zet ik graag in tijdens het ontwerpen.</p>
                <p>Wanneer je meer over mij wilt weten kun je altijd contact met mij opnemen of mijn CV downloaden.</p>
                <div class="o-section__buttons">
                <div class="o-grid o-grid--with-gutter u-text-center">
                    <div class="o-grid-cell u-size1of2--medium">
                        <a class="c-btn c-btn--cta" href="mailto:<?php echo convert_email_adr('contact@samanthavolk.nl'); ?>">Neem contact op</a>
                    </div>
                    <div class="o-grid-cell u-size1of2--medium">
                        <a class="c-btn c-btn--cta" href="CV_Samantha_Volk.pdf" target="_blank">Download mijn CV</a>
                    </div>
                </div>
                </div>
            </div>
        </div>

    </section>
</main>

<?php include('snippets/footer.php'); ?>
