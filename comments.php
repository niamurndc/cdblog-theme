<?php 
// name: comments-template

 if(post_password_required()){
   return;
 }
 if(have_posts()) : ?>
<div class="comment-show">
  <h5><?php comments_number(); ?></h5>
  <?php foreach($comments as $comment) : ?>
  <div class="card-expand card-com ml-2 mb-1">
    <div class="row">
      <div class="col-md-1 ml-2 mt-2">
        <?php echo get_avatar($comment, 75); ?> </div>
      
      <div class="col-md-8  comment-card pt-2 pl-5">
				<h5 class="card-title"><?php comment_author(); ?> </h5>
				<span class="comment-date"><?php comment_date(); ?></span>
        <p class="card-description"><?php comment_text(); ?></p>
      </div>
    </div>
  </div>
  <?php endforeach; 
  
  the_comments_pagination(); ?> 
  
</div>
	<?php endif;
	
	comment_form(array(
   'comment_field' => '<div class="form-group">
                          <label for="comment">Comment</label>
                          <textarea name="comment" cols="30" rows="4" class="form-control" required></textarea>
                        </div>',
    'fields'       => array(
      'author' => '<div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" name="author" id="author" class="form-control">
                   </div>',
      'email' => '<div class="form-group">
                   <label for="email">Email</label>
                   <input type="text" name="email" id="email" class="form-control">
                  </div>',
    ),
    'class_submit'  => 'btn btn-sm com-btn',
    'label_submit'  => 'Post Comment',
    'title_replay'  => 'Post a Comment',
  ));
  ?>