    <div role="contentinfo" class="c-content-info">
        <footer>
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
