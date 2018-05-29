<?php
function category_filter($atts)
{

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

    fw_print($terms);


    $cat = array();//массив для категорий
    $subcat = array();//массив для подкатегорий
    $subparrent = array();//массив для айдишников нужных категорий

    foreach( $terms as $term ){//проходим циклом по категорияим
        if ( $term->parent == 0) { //у которых нет родителя
            $cat[] = $term->name;//записываем в массив $cat полученные имена
        }
        if ( $term->parent != 0) {//проходим циклом по категорияим, у которых есть родитель
            $subcat[] = $term->name;//записываем в массив $subcat полученные имена
            $subparrent[] = $term->parent;//записываем в массив $subparrent полученные айдишники категорий
            $id = $term->term_id;
        }
    }


    $optins = array();//объявляем масссив $optins
    $suboptins = array();//объявляем масссив $suboptins
    $i = 0;//объявляем счетчик и обнулем его

    foreach ( $cat as $c ) {//идем циклом по массиву $cat и записываем в
        $optins[$i] = "<option value='$c'>$c</option>";//массив $optins имя категории
        $i++;//и идем к слудующему элементу
    }
    $i = 0;//обнуляем счетчик
    foreach ( $subcat as $c ) {//идем циклом по массиву $subcat и записываем в
        $suboptins[$i] = "<option value='$c'>$c</option>";//массив $suboptins имя подкатегории
        $i++;//и идем к слудующему элементу
    }

    $html = "
    <div class='catalog__selects'>
        <p class='catalog__subtitle'>Filtr</p>
        <div class='catalog__select'>
          <select>";
            foreach ( $optins as $o ) {
                $html .= "$o";
            }
            $html .=
          "</select>
        </div>
        <div class='catalog__select'>
          <select>";
            for ($i = 0; $i < count( $suboptins ); $i++ ) {
                if ( $subparrent[$i] == 20 )
                    $html .= "$suboptins[$i]";
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