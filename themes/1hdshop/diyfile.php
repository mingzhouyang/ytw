<?php

/**
 * ECSHOP 自定义数据调用函数包
*/

if (!defined('IN_ECS'))
{
    die('Hacking attempt');
}

function get_flash_xml()
	{
		$flashdb = array();
		if (file_exists(ROOT_PATH . DATA_DIR . '/flash_data.xml'))
		{
	
			// 兼容v2.7.0及以前版本
			if (!preg_match_all('/item_url="([^"]+)"\slink="([^"]+)"\stext="([^"]*)"\ssort="([^"]*)"/', file_get_contents(ROOT_PATH . DATA_DIR . '/flash_data.xml'), $t, PREG_SET_ORDER))
			{
				preg_match_all('/item_url="([^"]+)"\slink="([^"]+)"\stext="([^"]*)"/', file_get_contents(ROOT_PATH . DATA_DIR . '/flash_data.xml'), $t, PREG_SET_ORDER);
			}
	
			if (!empty($t))
			{
				foreach ($t as $key => $val)
				{
					$val[4] = isset($val[4]) ? $val[4] : 0;
					$flashdb[] = array('src'=>$val[1],'url'=>$val[2],'text'=>$val[3],'sort'=>$val[4]);
				}
			}
		}
		return $flashdb;
}

function get_hot_cat_tree( $pid = 0, $rec = 3 )
{
		$arr = array( );
		$sql = "select c.*, rc.recommend_type from ".$GLOBALS['ecs']->table( "category" )." as c left join ".$GLOBALS['ecs']->table( "cat_recommend" ).( " as rc on c.cat_id = rc.cat_id where c.parent_id=".$pid." order by c.sort_order asc, c.cat_id asc" );
		$res = $GLOBALS['db']->getAll( $sql );
		foreach ( $res as $row )
		{
				if ( $row['recommend_type'] == $rec )
				{
						$arr[$row['cat_id']]['id'] = $row['cat_id'];
						$arr[$row['cat_id']]['name'] = $row['cat_name'];
						$arr[$row['cat_id']]['url'] = build_uri( "category", array(
								"cid" => $row['cat_id']
						), $row['cat_name'] );
				}
		}
		foreach ( $res as $row )
		{
				$arr2 = get_hot_cat_tree2( $row['cat_id'], $rec );
				if ( $arr2 )
				{
						$arr[$row['cat_id']]['child'] = $arr2;
				}
		}
		return $arr;
}
function get_hot_cat_tree2( $pid = 0, $rec = 3 )
{
		$arr = array( );
		$sql = "select c.*, rc.recommend_type from ".$GLOBALS['ecs']->table( "category" )." as c left join ".$GLOBALS['ecs']->table( "cat_recommend" ).( " as rc on c.cat_id = rc.cat_id where rc.recommend_type=".$rec." and c.parent_id={$pid} order by c.sort_order asc, c.cat_id asc" );
		$res = $GLOBALS['db']->getAll( $sql );
		foreach ( $res as $row )
		{
				$arr[$row['cat_id']]['id'] = $row['cat_id'];
				$arr[$row['cat_id']]['name'] = $row['cat_name'];
				$arr[$row['cat_id']]['url'] = build_uri( "category", array(
						"cid" => $row['cat_id']
				), $row['cat_name'] );
		}
		return $arr;
}
function get_cat_brands($cat, $app = 'brand')
{
    $children = ($cat > 0) ? ' AND ' . get_children($cat) : '';
    $sql = "SELECT b.brand_id, b.brand_name, b.brand_logo, COUNT(g.goods_id) AS goods_num, IF(b.brand_logo > '', '1', '0') AS tag ".
            "FROM " . $GLOBALS['ecs']->table('brand') . "AS b, ".
                $GLOBALS['ecs']->table('goods') . " AS g ".
            "WHERE g.brand_id = b.brand_id $children " .
            "GROUP BY b.brand_id HAVING goods_num > 0 ORDER BY tag DESC, b.sort_order ASC";

    $row = $GLOBALS['db']->getAll($sql);
    foreach ($row AS $key => $val)
    {
        $row[$key]['url'] = build_uri($app, array('cid' => $cat, 'bid' => $val['brand_id']), $val['brand_name']);
		$row[$key]['brand_name']=$val['brand_name'];
		$row[$key]['brand_logo']=$val['brand_logo'];
    }
    return $row;

}

?>