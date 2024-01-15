<?php require basePath('views/partials/head.php') ?>
<?php require basePath('views/partials/nav.php') ?>
<?php require basePath('views/partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <?php foreach ($notes as $note) : ?>
            <li>
                <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
                    <?= htmlspecialchars($note['title']); ?>
                </a>
            </li>
        <?php endforeach; ?>
    </div>
    <p>
        <a href="/notes/create" class="text-blue-500 hover:underline">Create Note</a>
    </p>
</main>

<?php require basePath('views/partials/footer.php') ?>