<?php	                                       			
/**
 * JBZoo is universal CCK based Joomla! CMS and YooTheme Zoo component
 * @category   JBZoo
 * @author     smet.denis <admin@joomla-book.ru>
 * @copyright  Copyright (c) 2009-2012, Joomla-book.ru
 * @license    http://joomla-book.ru/info/disclaimer
 * @link       http://joomla-book.ru/projects/jbzoo JBZoo project page
 */
defined('_JEXEC') or die('Restricted access');

$align = $this->app->jbitem->getMediaAlign($item, $layout);

echo $this->renderPosition('title',     array('style' => 'jbtitle'));
echo $this->renderPosition('subtitle',  array('style' => 'jbsubtitle'));
echo $this->renderPosition('likes',     array(
        'style' => 'jbblock',
        'class' => 'align-left'
    )
);
echo $this->renderPosition('rating', array(
        'style' => 'jbblock',
        'class' => 'align-right',
    )
);

?>
<div class="clear clr"></div>

<div class=" item-body">

    <?php	                                       			 if ($this->checkPosition('image')) : ?>
        <div class="item-image align-<?php	                                       			 echo $align;?>">
            <?php	                                       			 echo $this->renderPosition('image'); ?>
        </div>
    <?php	                                       			 endif; ?>

    <?php	                                       			 if ($this->checkPosition('anons')) : ?>
        <div class="item-anons">
            <?php	                                       			 echo $this->renderPosition('anons'); ?>
        </div>
    <?php	                                       			 endif; ?>

    <?php	                                       			 if ($this->checkPosition('properties')) : ?>
        <!--<hr/>
        <div class="item-meta">
            <?php	                                       			 echo $this->renderPosition('properties', array(
                'style'    => 'jbblock',
                'labelTag' => 'strong',
                'tag'      => 'p'
            )); ?>
        </div>
    <?php	                                       			 endif; ?>-->
    
    <?php	                                       			 if ($this->checkPosition('properties')) : ?>
    <ul>
        <?php	                                       			 echo $this->renderPosition('properties', array('style' => 'list')); ?>
    </ul>
    <?php	                                       			 endif; ?>
    <div class="clear clr"></div>

    <?php	                                       			 if ($this->checkPosition('meta')) : ?>
        <!--<hr/>-->
        <div class="item-meta">
            <?php	                                       			 echo $this->renderPosition('meta', array(
                'style'    => 'jbblock',
                'labelTag' => 'strong',
                'tag'      => 'p'
            )); ?>
        </div>
    <?php	                                       			 endif; ?>
</div>


<a href="http://pdfmyurl.com?url=<?php	                                       			 echo 'kod-design.ru' . $this->app->route->item($this->_item); ?>"><img alt="PDF" title="PDF" src="/components/com_phocapdf/assets/images/pdf_button.png" style="border:0; margin-right:2px;"></a>

<a onclick="window.open(this.href,'win2','width=400,height=350,menubar=yes,resizable=yes'); return false;" title="E-mail" href="/component/mailto/?tmpl=component&template=beez_20&link=<?php	                                       			 echo 'www.kod-design.ru' . $this->app->route->item($this->_item); ?>">
<img alt="E-mail" src="/media/system/images/emailButton.png" style="border:0; margin-right:2px;">
</a>

<a rel="nofollow" onclick="window.open(this.href,'win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=640,height=480,directories=no,location=no'); return false;" title="Печать" href="<?php	                                       			 echo $this->app->route->item($this->_item); ?>">
<img alt="Печать" src="/media/system/images/printButton.png" style="border:0; margin-right:2px;">
</a>

<!--<?php	                                       			 echo 'www.kod-design.ru' . $this->app->route->item($this->_item); ?>-->

<hr/>
<div style="width:250px;"><?php	                                       			  $modules = JModuleHelper::getModules('content-modul');
if ($modules && is_array($modules)) {
	foreach ($modules as $module) {
		//заголовок 
		//echo $module->title;
		//контент
		echo JModuleHelper::renderModule($module);
	};
} ?></div>
<!--<div style="width:250px; float:left"><?php	                                       			 echo $this->renderPosition('social', array('style' => 'jbblock')); ?></div>
<div class="clear"></div>-->

    
<!-- Этот блок кода нужно вставить в ту часть страницы, где вы хотите разместить карту (начало)
<div id="ymaps-map-id_135214464442880073153" style="width: 100%; height: 250px; border:1px solid;"></div>
<script type="text/javascript">function fid_135214464442880073153(ymaps) {var map = new ymaps.Map("ymaps-map-id_135214464442880073153", {center: [37.60597343914792, 55.76523267951982], zoom: 16, type: "yandex#map"});map.controls.add("zoomControl").add("mapTools").add(new ymaps.control.TypeSelector(["yandex#map", "yandex#satellite", "yandex#hybrid", "yandex#publicMap"]));map.geoObjects.add(new ymaps.Placemark([37.606703, 55.764531], {balloonContent: "dgfjdgfjdfgj"}, {preset: "twirl#buildingsIcon"}));};</script>
<script type="text/javascript" src="http://api-maps.yandex.ru/2.0-stable/?lang=ru-RU&coordorder=longlat&load=package.full&wizard=constructor&onload=fid_135214464442880073153"></script>
<!-- Этот блок кода нужно вставить в ту часть страницы, где вы хотите разместить карту (конец) -->

    
<?php	                                       			 if ( $this->checkPosition('tab-text')
        || $this->checkPosition('tab-gallery')
        || $this->checkPosition('tab-properties')
        || $this->checkPosition('tab-reviews')
        || $this->checkPosition('tab-comments')
    ) :

    $positionParams = array(
        'style'    => 'jbblock',
        'tag'      => 'div',
        'labelTag' => 'h3',
        'clear'    => true
    );

    ?>
    <div id="jbzoo-tabs" class="rborder">
        <ul>

            <?php	                                       			 if ($this->checkPosition('tab-properties')) : ?>
                <li><a href="#tab-properties">Все характеристики</a></li>
            <?php	                                       			 endif; ?>
            
            <?php	                                       			 if ($this->checkPosition('tab-text')) : ?>
                <li><a href="#tab-text">Описание</a></li>
            <?php	                                       			 endif; ?>

            <?php	                                       			 if ($this->checkPosition('tab-gallery')) : ?>
                <li><a href="#tab-gallery">Галерея жилого комплекса</a></li>
            <?php	                                       			 endif; ?>

            <?php	                                       			 if ($this->checkPosition('tab-reviews')) : ?>
                <li><a href="#tab-reviews">Обзоры</a></li>
            <?php	                                       			 endif; ?>

            <?php	                                       			 if ($this->checkPosition('tab-comments')) : ?>
                <li><a href="#tab-comments">Комментарии (<?php	                                       			 echo $item->getCommentsCount();?>)</a></li>
            <?php	                                       			 endif; ?>
        </ul>

        <?php	                                       			 if ($this->checkPosition('tab-text')) : ?>
            <div id="tab-text"><?php	                                       			 echo $this->renderPosition('tab-text', $positionParams); ?></div>
        <?php	                                       			 endif; ?>

        <?php	                                       			 if ($this->checkPosition('tab-gallery')) : ?>
            <div id="tab-gallery"><?php	                                       			 echo $this->renderPosition('tab-gallery', $positionParams); ?></div>
        <?php	                                       			 endif; ?>

        <?php	                                       			 if ($this->checkPosition('tab-properties')) : ?>
            <div id="tab-properties">
                <ul class="item-properties"><?php	                                       			 echo $this->renderPosition('tab-properties', array('style' => 'list'));?></ul>
            </div>
        <?php	                                       			 endif; ?>

        <?php	                                       			 if ($this->checkPosition('tab-reviews')) : ?>
            <div id="tab-reviews"><?php	                                       			 echo $this->renderPosition('tab-reviews', $positionParams); ?></div>
        <?php	                                       			 endif; ?>

        <?php	                                       			 if ($this->checkPosition('tab-comments')) : ?>
            <div id="tab-comments"><?php	                                       			 echo $this->renderPosition('tab-comments', $positionParams); ?></div>
        <?php	                                       			 endif; ?>

    </div>
    

    
    
    <?php	                                       			 if ($this->checkPosition('map')) : ?>
	<br/>
    <span style="font-weight:bold; color:#565656;">Расположение на карте:</span>
    <?php	                                       			 echo $this->renderPosition('map'); ?>
    <?php	                                       			 endif; ?>

     <?php	                                       			 if ($this->checkPosition('Complex_Id')) { ?>
     <?php	                                       			 
     /*Прямой доступ к БД */
       
        echo "<hr>";
        $complex_id = $this->renderPosition('Complex_Id');
        if ($complex_id==null)$complex_id=11;
        $dbo =& JFactory::getDBO();
        $query = "SELECT * FROM cg5u4_corpse where complex_id = $complex_id";
        $dbo->setQuery( $query );
        $row =& $dbo->loadObjectList();
        echo "<div  id='tabs' > <ul>  ";
            foreach ($row as $r){
              $i++;        
              echo "<li><a href='#tab$i'>$r->korpse_name</a></li>";
            }
            echo "</ul>";
            foreach ($row as $r){
                $z++;
                echo "<div id='tab$z'>$r->korpse_desc</div>";
            }
        echo "</div>";
    ?>
   <?php	                                       			 } ?>
    
    
    <?php	                                       			 $this->app->jbassets->jQueryUi(); ?>
    <script type="text/javascript">
        jQuery(function ($) {
            $('#jbzoo-tabs').tabs();
        });
        
        jQuery(function ($) {
            $('#tabs').tabs();
        });
    </script>
<?php	                                       			 endif; ?>

<?php	                                       			 echo $this->renderPosition('related', array('style' => 'jbblock', 'labelTag' => 'h2', 'clear' => true)); ?>
