<?php

$menu_location = $args['menu-location'];

$menu_items = get_nav_menu_items_by_location($menu_location);

$the_nav = array();

foreach ($menu_items as $nav) :

    $image = '';

    $image_id = get_term_meta($nav->object_id, 'thumbnail_id', true);

    $image = wp_get_attachment_image_url($image_id, 'full');


    $the_nav[$nav->ID] = array(
        'ID' => $nav->ID,
        'title' => $nav->title,
        'parent' => $nav->menu_item_parent,
        'url' => $nav->url,
        'guid' => $nav->guid,
        'image' => $image,
        'has_child' => false,
        'child_items' => [],
    );

endforeach;

foreach ($the_nav as $key => $item) :

    foreach ($the_nav as $subkey => $subitem) :

        if ($key == $subitem['parent']) :

            $the_nav[$key]['child_items'][$subkey] = $subitem;

        endif;

    endforeach;

endforeach;

foreach ($the_nav as $key => $item) :

    if (empty($item['child_items']) && 0 != $item['parent']) unset($the_nav[$key]);

endforeach;

foreach ($the_nav as $key => $item) :

    foreach ($the_nav as $subkey => $subitem) :

        if ($key == $subitem['parent']) :

            $the_nav[$key]['child_items'][$subkey] = $subitem;

            unset($the_nav[$subkey]);

        endif;

    endforeach;

endforeach;

$menu_layout = '<ul class="header-v2__nav-list header-v2__nav-list--main">';
foreach ($the_nav as $item) :
    $item = (object)$item;
    if (!empty($item->child_items)) :
        $menu_layout .= '<li class="header-v2__nav-item header-v2__nav-item--main header-v2__nav-item--has-children">';
        $menu_layout .= '<a href="' . $item->url . '" class="header-v2__nav-link">';
        $menu_layout .= '<span>' . $item->title . '</span>';
        $menu_layout .= '<svg class="header-v2__nav-dropdown-icon icon margin-left-xxxs" aria-hidden="true" viewBox="0 0 16 16">
        <polyline fill="none" stroke-width="1" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="3.5,6.5 8,11 12.5,6.5 "></polyline>
      </svg>';
        $menu_layout .= '</a>';
        $menu_layout .= '<div class="header-v2__nav-dropdown header-v2__nav-dropdown--md">';
        $item_counter = 0;
        $menu_layout .= '<ul class="header-v2__nav-list header-v2__nav-list--title-desc">';
        foreach ($item->child_items as $sub_one) :
            $sub_one = (object)$sub_one;
            if (is_array($sub_one->child_items) && !empty($sub_one->child_items)) :
                $menu_layout .= '<li class="header-v2__nav-item">';
                $menu_layout .= '<a href="' . $sub_one->url . '" class="header-v2__nav-link">' . $sub_one->title . '</a></li>';
                $sub_one_counter = 0;
                $menu_layout .= '<ul class="header-v2__nav-list header-v2__nav-list--title-desc">';
                foreach ($sub_one->child_items as $sub_two) :
                    $sub_one_counter++;
                    $sub_two = (object)$sub_two;
                    $menu_layout .= '<li class="header-v2__nav-item margin-left-sm"><a href="' . $sub_two->url . '" class="header-v2__nav-link">' . $sub_two->title . '</a></li>';
                // if($sub_one_counter == count($sub_one->child_items)): 
                //     $menu_layout .= '</ul>';
                //     continue;                        
                // endif;                  
                endforeach;
                $menu_layout .= '</ul>';
            else :
                $menu_layout .= '<li class="header-v2__nav-item">';
                $menu_layout .= '<a href="' . $sub_one->url . '" class="header-v2__nav-link">' . $sub_one->title . '</a></li>';
                $sub_one_counter = 0;
            endif;
            if ($item_counter == count($item->child_items)) :
                $menu_layout .= '</div></li>';
                continue;
            endif;
            $item_counter++;
        endforeach;
        $menu_layout .= '</ul>';
    else :
        $menu_layout .= '<li class="header-v2__nav-item header-v2__nav-item--main">';
        $menu_layout .= '<a href="' . $item->url . '" class="header-v2__nav-link">' . $item->title . '</a>';
        $menu_layout .= '</li>';
    endif;
endforeach;
$menu_layout .= '</ul>';


echo $menu_layout;