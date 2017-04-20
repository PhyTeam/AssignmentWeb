<p>Post list here</p>
<table>
<?php foreach($posts as $post) { ?>
    <tr>
        <td><?php echo $post->id ?></td>
        <td><?php echo $post->author; ?></td>
        <td>
        <a href='?controller=posts&action=show&id=<?php echo $post->id; ?>'>See content</a>
        </td>
    </tr>
<?php } ?>
</table>
