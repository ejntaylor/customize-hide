    <div id="quick_panel_outer" style="display:none;">
        <div class="quick_panel_inner">

			<?php
				    global $submenu, $menu;
					$list = array();
					foreach ( $menu as $menuitem ) {
						$list[$menuitem[2]] = $menuitem;
						if ( isset( $submenu[$menuitem[2]] ) ) {
							$_menu[$menuitem[2]]['subitems'] = array();
							foreach ( $submenu[$menuitem[2]] as $subitem ) {
								$subitem['parent'] = $menuitem[2];
								$list[$menuitem[2] . '/' . $subitem[2]] = $subitem;
							}
						}
					}
			
			//print_r($list);
			
			?>
<select class="quick-panel-chosen-select" name="per1" id="per1">
			  <option selected="selected">Choose one</option>
			  	<?php foreach($list as $link => $menu_item) { ?>
<option class="<?php echo (!$menu_item[parent] ? 'parent-item' : 'child-item'); ?>" value="<?php echo get_admin_url(); echo $link; ?>" ></option>
		 
		 
				 <?php } ?>
			</select>  

        </div>
    </div>