<?php require basePath('views/partials/head.php') ?>
<?php require basePath('views/partials/nav.php') ?>
<?php require basePath('views/partials/banner.php') ?>
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p>
            <a href="/notes" class="text-blue-500 hover:underline"> go back...</a>
        </p>
        <p>
            <?= htmlspecialchars($note['body']); ?>
        </p>
    </div>
</main>

<?php require basePath('views/partials/footer.php') ?>