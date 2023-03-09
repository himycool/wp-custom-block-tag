<?php
$post_tag_list = get_the_tags(get_the_ID());

// tag alphabetical order sort 
$sort_tag_array = [];
foreach ($post_tag_list as $key => $value) {
    $sort_tag_array[$value->name] = $value;
}
ksort($sort_tag_array);
?>
<div class="post-tag-wrapper">
    <?php
    echo "<$descriptionTag>";
    if (is_array($sort_tag_array) && count($sort_tag_array) > 0) {
        foreach($sort_tag_array as $tag_list){
            echo "<a href='".get_term_link($tag_list, 'post_tag')."'><span class='tag-content'>".$tag_list->name."</span></a>";
        }
    }
    echo "</$descriptionTag>";
    ?>
</div>
