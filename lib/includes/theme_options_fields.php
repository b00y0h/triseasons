<?php
foreach ($options as $value) {
switch ( $value['type'] ) {

case "section":
?>
<div id="<?php echo $value['name']; ?>">
    <?php break;
 
case "close":
echo "</div>";
break;
?>
    <?php
case "submenu":

echo "<h3>".$value['name']."</h3>";

break;
?>
    <?php
 case "title":
		?>
    <?php break;
	    	
        	case 'select':
                   ?>
    <div class="admintable">
        <label><?php echo $value['name']; ?></label>
        <select style="width:240px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
            <?php foreach ($value['options'] as $option) { ?>
            <option <?php if ( get_settings( $value['id'] ) == $option) { echo ' selected="selected"'; } elseif ($option == $value['std']) { echo ' selected="selected"'; } ?>> <?php echo $option; ?> </option>
            <?php } ?>
        </select>
        <div class="desc"><?php echo $value['desc']; ?></div>
    </div>
    <div class="hr"></div>
    <?php break; 
		case 'multiful':
?>
    <div class="admintable">
        <label><?php echo $value['name']; ?></label>
        <select style="width:350px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
            <?php foreach ($value['options'] as $keys =>$values) { ?>
            <option value="<?php echo $keys; ?>"
		  <?php if ( get_settings( $value['id'] ) == $keys) { echo ' selected="selected"'; } elseif ($keys == $value['std']) { echo ' selected="selected"'; } ?>> <?php echo $values; ?> </option>
            <?php } ?>
        </select>
        <div class="desc"><?php echo $value['desc']; ?></div>
    </div>
    <div class="hr"></div>
    <?php break; 
 case 'color':
		 
		?>
    <div class="admintable">
        <label><?php echo $value['name']; ?></label>
        <input data-hex="true" class="color"  style="width:100px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo get_settings( $value['id'] ); } else { echo $value['std']; } ?>" />
        <div class="desc"><?php echo $value['desc']; ?></div>
    </div>
    <div class="hr"></div>
    <?php 
		break;        
         case 'text':
		 
		?>
    <div class="admintable">
        <label><?php echo $value['name']; ?></label>
        <input style="width:400px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo get_settings( $value['id'] ); } else { echo $value['std']; } ?>" />
        <div class="desc"><?php echo $value['desc']; ?></div>
    </div>
    <div class="hr"></div>
    <?php 
		break;
		
		
		     case 'imgupload':
		 
		?>
    <div class="admintable">
        <label><?php echo $value['name']; ?></label>
        <input style="width:400px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo get_settings( $value['id'] ); } else { echo $value['std']; } ?>" />
        <a class="button thickbox" href="media-upload.php?&post_id=-98765&target=' . $value['id'] . '&option_image_upload=1&type=image&TB_iframe=1&width=640&height=644">Upload file</a>
        <div class="desc"><?php echo $value['desc']; ?></div>
    </div>
    <div class="hr"></div>
    <?php 
		break;
		

	case 'textarea':
		?>
    <div class="admintable">
        <label><?php echo $value['name']; ?></label>
        <textarea name="<?php echo $value['id']; ?>" style="width:400px; height:70px;" type="<?php echo $value['type']; ?>" cols="" rows=""><?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id'] )); } else { echo $value['std']; } ?>
</textarea>
        <div class="desc"><?php echo $value['desc']; ?></div>
    </div>
    <div class="hr"></div>
    <?php 
		break;
	case "checkbox":
		?>
    <div class="admintable">
        <label><?php echo $value['name']; ?></label>
        <?php if(get_settings($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = ""; } ?>
        <input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />
        <?php echo $value['desc']; ?> </div>
    <div class="hr"></div>
    <?php 		break;
        	case "checkboxes":
		?>
    <div class="admintable">
        <label><?php echo $value['name']; ?></label>
        <?php foreach ($value['options'] as $keys =>$values) { ?>
        <?php if (get_option( $value['id'])) {  if(in_array($keys, get_option( $value['id'] ))){ $checked = "checked=\"checked\""; }else{ $checked = ""; } } ?>
        <input type="checkbox" name="<?php echo $value['id']; ?>[]" id="<?php echo $keys; ?>" value="<?php echo $keys; ?>" <?php echo $checked; ?>/>
        <?php echo $values; ?>
        <?php } ?>
        <div class="desc"><?php echo $value['desc']; ?></div>
    </div>
    <div class="hr"></div>
    <?php 		break;
        	case "radio":
		 ?>
    <div class="admintable">
        <label><?php echo $value['name']; ?></label>
        <?php
						foreach ($value['options'] as $key=>$option) { 
							if(get_settings($value['id'])){
								if ($key == get_settings($value['id']) ) {
									$checked = " checked=\"checked\"";
								} else {
									$checked = "";
								}
							} else {
								if($key == $value['std']) {
									$checked = " checked=\"checked\"";
								} else {
									$checked = "";
								}
							} ?>
        <input type="radio" name="<?php echo $value['id']; ?>" value="<?php echo $key; ?>"<?php echo $checked; ?> />
        <?php echo '&nbsp;'.$option; ?>
        <?php 
						}?>
        <div class="desc"><?php echo $value['desc']; ?></div>
    </div>
    <div class="hr"></div>
    <?php
			
                    break;
          
case "submit":
?>
    <input class="button-primary" type="submit" name="save" value="Save changes"/>
    <input type="hidden" name="action" value="save" />
    <?php

break;
?>
    <?php } } ?>
</div>