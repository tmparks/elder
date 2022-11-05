<?php get_header(); ?>

<h1>Web Apps</h1>
<?php echo get_the_category_list(); ?>

<hr/>

<p>
<a href="https://github.com/tmparks/elder/blob/main/README.md">Documentation</a>
&bull;
<a href="/wp-admin/">Dashboard</a>
&bull;
<a href="/wp-admin/edit.php">Posts</a>
&bull;
<a href="/wp-admin/upload.php">Photos</a>
&bull;
<a href="/wp-admin/edit-tags.php?taxonomy=category">Categories</a>
&bull;
<a href="/wp-admin/customize.php">Appearance</a>
&bull;
<a href="/wp-admin/users.php">Users</a>
</p>

<?php get_footer(); ?>
