<div class="span8">
    <?foreach($posts as $post):?>
    <h1><? echo $post['post_subject']?></h1>
    <p><? echo $post['post_text']?></p>
    <div>
        <span class="badge badge-success">Posted <?php echo $post['post_created']; ?></span><div class="pull-right"><span class="label">alice</span> <span class="label">story</span> <span class="label">blog</span> <span class="label">personal</span></div>
    </div>
    <hr>
    <?endforeach?>
</div>

