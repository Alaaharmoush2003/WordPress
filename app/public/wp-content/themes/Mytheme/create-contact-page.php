<?php
// Include WordPress bootstrap file
require_once('../../../wp-load.php');

// Define page title and content
$page_title = 'Contact Us';
$page_content = file_get_contents('contact-page-content.php');

// Create new page post
$new_page = array(
    'post_title'    => $page_title,
    'post_content'  => $page_content,
    'post_status'   => 'publish',
    'post_type'     => 'page',
);

// Insert the post into the database
$page_id = wp_insert_post($new_page);

// Assign custom template to the new page
update_post_meta($page_id, '_wp_page_template', 'page-contact.php');

echo 'Contact page created successfully!';
?>