<h2><?= esc($title) ?></h2>

<?= service('validation')->listErrors() ?>
<form action="/news/create" method="post">
   

        
    <label for="id">ID</label>
    <input type="input" name="id" /><br />

<label for="title">Title</label>
    <input type="input" name="title" /><br />

    <label for="text">Text</label>
    <textarea name="text" cols="45" rows="4"></textarea><br />
    
    <label for="slug">Slug</label>
    <input type="input" name="slug" /><br />


    <input type="submit" name="submit" value="Create news item" />
</form>
