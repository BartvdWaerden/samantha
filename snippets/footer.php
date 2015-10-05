    <div role="contentinfo" class="c-content-info o-section o-section--secondary" id="contact">
        <footer>
            <h1>Contact</h1>
            <p>Heeft u vragen? U kunt mij altijd mailen! Daarnaast ben ik ook te vinden op LinkedIn</p>
            <ul>
                <li>
                    <a href="mailto:contact@samanthavolk.nl">E-mail mij</a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/samanthavolk" target="_blank">Vind mij op LinkedIn</a>
                </li>
            </ul>
            <span>&copy; 2015 Samantha Volk</span>
        </footer>
    </div>

    <script src=" <?php echo rodesk_asset_path('scripts/jquery.js'); ?>"></script>

    <?php if( rodesk_is_mobile() ): ?>
        <script src=" <?php echo rodesk_asset_path('scripts/mobile.js'); ?>"></script>
    <?php else: ?>
        <script src=" <?php echo rodesk_asset_path('scripts/main.js'); ?>"></script>
    <?php endif; ?>

    <?php //include('snippets/analytics.php'); ?>

</body>

</html>
