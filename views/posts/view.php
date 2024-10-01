<?php view('partials/header'); ?>

<main class="container">
    <table class="table table-stiped table-hover">
        <tbody>
            <tr>
                <th scope="row">Id</th>
                <td><?= $post->id ?></td>
            </tr>
            <tr>
                <th scope="row">Title</th>
                <td><?= $post->title ?></td>
            </tr>
            <tr>
                <th scope="row">Body</th>
                <td><?= $post->body ?></td>
            </tr>
        </tbody>
    </table>

    <a class="btn btn-primary" href="/admin/posts">Back to posts</a>
</main>

<?php view('partials/footer'); ?>