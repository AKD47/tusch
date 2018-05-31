<?php
function category_filter($atts)
{
    global $wp_query;
    $term_obj = $wp_query->queried_object ? $wp_query->queried_object : null;

    $params = shortcode_atts(array(), $atts);

    $terms = get_terms(array(//полученаем ЭЛЕМЕНТЫ ИЗ ТАКСОНОМИИ КАТЕГОРИИ ТОВАРОВ
        'taxonomy' => array('product_cat'), // название таксономии категории продуктов
        'orderby' => 'id',
        'order' => 'ASC',
        'hide_empty' => true,
        'object_ids' => null, //
        'include' => array(),
        'exclude' => array(),
        'exclude_tree' => array(),
        'number' => '',
        'fields' => 'all',
        'count' => false,
        'slug' => '',
        'parent' => '',
        'hierarchical' => true,
        'child_of' => 0,
        'get' => '', // ставим all чтобы получить все термины
        'name__like' => '',
        'pad_counts' => false,
        'offset' => '',
        'search' => '',
        'cache_domain' => 'core',
        'name' => '', // str/arr поле name для получения термина по нему. C 4.2.
        'childless' => false, // true не получит (пропустит) термины у которых есть дочерние термины. C 4.2.
        'update_term_meta_cache' => true, // подгружать метаданные в кэш
        'meta_query' => '',
    ));

//    fw_print($term_obj);


    $cat = array();//массив для категорий
    $subcat = array();//массив для подкатегорий
    $subparrent = array();//массив для айдишников нужных категорий

    foreach( $terms as $term ){//проходим циклом по категорияим
        if ( $term->parent == 0) { //у которых нет родителя
            $cat[] = $term;//записываем в массив $cat полученные имена
        }
        if ( $term->parent != 0) {//проходим циклом по подкатегорияим, у которых есть родитель
            if ($term->parent == $term_obj->term_id) {//если родитель подкатегории равен id родителя
                $subcat[] = $term;//записываем в массив $subcat полученные имена
                $subparrent[] = $term->parent;//записываем в массив $subparrent полученные айдишники категорий
            } else if ($term_obj->parent == $term->parent) { //если родитель совпадает
                $subcat[] = $term;//записываем в массив $subcat полученные имен
                $current_category_top_level = $term_obj->parent;//
            }
        }
    }


    $optins = array();//объявляем масссив $optins
    $suboptins = array();//объявляем масссив $suboptins
    $i = 0;//объявляем счетчик и обнулем его

    foreach ( $cat as $c ) {//идем циклом по массиву $cat и записываем в
        $selected = "";
        if (isset($term_obj))
            if ($c->term_id == $term_obj->term_id || $c->term_id == $current_category_top_level)
                $selected = "selected";
            else
                $selected = "";
        $optins[$i] = "<option $selected value='$c->term_id'>$c->name</option>";//массив $optins имя категории
        $i++;//и идем к слудующему элементу
    }
    $i = 0;//обнуляем счетчик
    foreach ( $subcat as $c ) {//идем циклом по массиву $subcat и записываем в
        $selected = "";
        if (isset($term_obj))
            if ($c->term_id == $term_obj->term_id)
                $selected = "selected";
            else
                $selected = "";
        $suboptins[$i] = "<option $selected value='$c->term_id'>$c->name</option>";//массив $suboptins имя подкатегории
        $i++;//и идем к слудующему элементу
    }

    $html = "
    <div class='catalog__selects'>
    <div id='ttt'></div>
        <p class='catalog__subtitle'>Filtr</p>
        <div class='catalog__select'>
          <select id='catSelect'>
            <option value='0'>...</option>";
            foreach ( $optins as $o ) {
                $html .= "$o";
            }
            $html .=
          "</select>
        </div>
        <div class='catalog__select'>
          <select id='subcatSelect'>
            <option value='0'>...</option>";
            foreach ( $suboptins as $o ) {
                $html .= "$o";
            }
            $html .=
          "</select>
        </div>
      </div>";

//        fw_print( $cat );
//        fw_print( $subcat );

    return $html;

}


add_shortcode('catfiltr', 'category_filter');
?>