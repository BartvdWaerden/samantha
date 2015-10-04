<?php include('snippets/html-head.php'); ?>
<?php include('snippets/header.php'); ?>

<main role="main" class="u-contain-padding">
    <div class="test u-pull-viewport">
        <p>Dit is een test</p>
        <img src="http://placehold.it/1200x150" alt="placeholder">
    </div>

    <section class="copy">

        <h1 class="u-space-leader-m">Rokit</h1>
        <h2 class="u-space-leader-m">Base</h2>
        <p>This page show basic (typographic) HTML elements and how the scoped <em>.copy</em> class renders them.</p>

        <ul>
            <li><a href="#blockquote">Blockquote</a></li>
            <li><a href="#buttons">Buttons</a></li>
            <li><a href="#form">Form</a></li>
            <li><a href="#grid">Grid</a></li>
            <li><a href="#headings">Headings</a></li>
            <li><a href="#images">Images</a></li>
            <li><a href="#lists">Lists</a></li>
            <li><a href="#paragraph">Paragraph</a></li>
            <li><a href="#table">Table</a></li>
            <li><a href="#tags">Tags</a></li>
        </ul>

        <hr>
        <?php include('snippets/base/blockquote.php'); ?>
        <hr>
        <?php include('snippets/base/buttons.php'); ?>
        <hr>
        <?php include('snippets/base/form.php'); ?>
        <hr>
        <?php include('snippets/base/grid.php'); ?>
        <hr>
        <?php include('snippets/base/headings.php'); ?>
        <hr>
        <?php include('snippets/base/images.php'); ?>
        <hr>
        <?php include('snippets/base/lists.php'); ?>
        <hr>
        <?php include('snippets/base/paragraph.php'); ?>
        <hr>
        <?php include('snippets/base/table.php'); ?>
        <hr>
        <?php include('snippets/base/tags.php'); ?>

    </section>
</main>

<?php include('snippets/footer.php'); ?>
