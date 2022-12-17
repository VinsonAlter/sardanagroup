<?php
	class cls_form
	{
		function create_button($type,$class,$id,$name,$value,$caption,$disabled=false,$width='',$event='')
		{
			$output = '<button';
			if ($type != '')
				$output .= ' type="'.$type.'"';
			if ($class != '')
				$output .= ' class="'.$class.'"';
			if ($id != '')
				$output .= ' id="'.$id.'"';
			if ($name != '')
				$output .= ' name="'.$name.'"';
			if ($value != '')
				$output .= ' value="'.$value.'"';
			if ($event != '')
				$output .= ' '.$event;
			if ($width != '')
				$output .= ' style="width:'.$width.'"';
			if ($disabled)
				$output .= ' disabled="disabled"';
			$output .= '>'.$caption;
			$output .= ' </button>';
			
			return $output."\n";
		}

		function create_check_box($class,$id,$name,$value,$checked=false)
		{
			$output = '<input type="checkbox"';
			if ($class != '')
				$output .= ' class="'.$class.'"';
			if ($id != '')
				$output .= ' id="'.$id.'"';
			if ($name != '')
				$output .= ' name="'.$name.'"';
			if ($checked)
				$output .= ' checked="checked"';			
			$output .= ' value="'.$value.'"';
			$output .= ' />';

			return $output."\n";
		}

		function create_combo_box($class,$id,$name,$width,$value,$option=array(),$custom='',$required=false)
		{
			$output = '<select';
			if ($class != '')
				$output .= ' class="'.$class.'"';
			if ($id != '')
				$output .= ' id="'.$id.'"';
			if ($name != '')
				$output .= ' name="'.$name.'"';
			if ($required)
				$output .= ' required="required"';
			if ($width != '')
				$output .= ' style="width:'.$width.'"';
			if ($custom != '')
				$output .= ' '.$custom;
			$output .= '>';
			
			if (count($option) > 0)
			{
				for ($i=0;$i<=count($option)-1;$i++)
				{
					$output .= '<option value="'.$option[$i][0].'"'.($option[$i][0] == $value?' selected="selected"':'').'>'.$option[$i][1].'</option>';
				}
			}
			$output .= '</select>';
			return $output."\n";
		}

		function create_combo_box_multiple($class,$id,$name,$width,$value=array(),$option=array(),$custom='',$required=false)
		{
			$output = '<select multiple="multiple"';
			if ($class != '')
				$output .= ' class="'.$class.'"';
			if ($id != '')
				$output .= ' id="'.$id.'"';
			if ($name != '')
				$output .= ' name="'.$name.'"';
			if ($required)
				$output .= ' required="required"';
			if ($width != '')
				$output .= ' style="width:'.$width.'"';
			if ($custom != '')
				$output .= ' '.$custom;
			$output .= '>';
			
			if (count($option) > 0)
			{				
				for ($i=0;$i<=count($option)-1;$i++)
				{
					$output .= '<option value="'.$option[$i][0].'"'.(in_array($option[$i][0],$value)?' selected="selected"':'').'>'.$option[$i][1].'</option>';
				}
			}
			$output .= '</select>';
			return $output."\n";
		}

		function create_date_picker($class,$id,$name,$width,$value,$required=false)
		{
			$output = '<input type="text"';
			if ($class != '')
				$output .= ' class="'.$class.'"';
			if ($id != '')
				$output .= ' id="'.$id.'"';
			if ($name != '')
				$output .= ' name="'.$name.'"';
			if ($required)
				$output .= ' required="required"';
			if ($width != '')
				$output .= ' style="width:'.$width.'"';
			$output .= ' value="'.$value.'" />';

			return $output."\n";
		}

		function create_date_picker_cmp($class,$id,$name,$value)
		{
			$output = '<div class="input-group date" id="dp-2" data-date="'.$value.'" data-date-format="dd-mm-yyyy">';
			$output .= '<input type="text"';
			if ($class != '')
				$output .= ' class="'.$class.'"'; 
			if ($id != '')
				$output .= ' id="'.$id.'"';
			if ($name != '') 
				$output .= ' name="'.$name.'"';
			$output .= ' value="'.$value.'" readonly="readonly" style="color: #22262e;" />';
			$output .= '<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>';
			$output .= '</div>';

			return $output."\n";
		}
		
		function create_input_addon($class,$id,$name,$value,$placeholder='',$action='')
		{	
			$output = '<div class="input-group"';
			if ($id != '')
				$output .= ' id="'.$id.'_addon"';
			$output .= '>';
			$output .= '<input type="text"';
			if ($class != '')
				$output .= ' class="'.$class.'"'; 
			if ($id != '')
				$output .= ' id="'.$id.'"';
			if ($name != '') 
				$output .= ' name="'.$name.'"';
			if ($placeholder != '')
				$output .= ' placeholder="'.$placeholder.'"';
			$output .= ' value="'.$value.'" readonly style="color:#22262e;" />';
			$output .= '<span class="input-group-btn">';
			$output .= '<button class="btn btn-default" type="button" '.$action.'>...</button>';
			$output .= '</span>';
			$output .= '</div>';

			return $output."\n";
		}

		function create_input_button($type,$class,$id,$name,$value,$disabled=false,$width='')
		{
			$output = '<input type="'.$type.'"';
			if ($class != '')
				$output .= ' class="'.$class.'"';
			if ($id != '')
				$output .= ' id="'.$id.'"';
			if ($name != '')
				$output .= ' name="'.$name.'"';
			if ($disabled)
				$output .= ' disabled="disabled"';
			if ($width != '')
				$output .= ' style="width:'.$width.'"';
			$output .= ' value="'.$value.'"';
			$output .= ' />';
			
			return $output."\n";
		}

		function create_input_email($class,$id,$name,$maxlength,$width,$value,$placeholder='',$required=false)
		{
			$output = '<input type="email"';
			if ($class != '')
				$output .= ' class="'.$class.'"';
			if ($id != '')
				$output .= ' id="'.$id.'"';
			if ($name != '')
				$output .= ' name="'.$name.'"';
			if ((int) $maxlength > 0)
				$output .= ' maxlength="'.$maxlength.'"';
			if ($placeholder != '')
				$output .= ' placeholder="'.$placeholder.'"';
			if ($required)
				$output .= ' required="required"';
			if ($width != '')
				$output .= ' style="width:'.$width.'"';
			$output .= ' value="'.$value.'"';
			$output .= ' />';
			
			return $output."\n";
		}
			
		function create_input_file($class,$id,$name,$width,$title='',$event='')
		{
			$output = '<input type="file"';
			if ($class != '')
				$output .= ' class="'.$class.'"';
			if ($id != '')
				$output .= ' id="'.$id.'"';
			if ($name != '')
				$output .= ' name="'.$name.'"';
			if ($width != '')
				$output .= ' style="width:'.$width.'"';
			if ($title != '')
				$output .= ' title="'.$title.'"';
			if ($event != '')
				$output .= ' '.$event;
			$output .= ' />';
			
			return $output."\n";
		}

		function create_input_hidden($id,$name,$value)
		{
			$output = '<input type="hidden"';			
			if ($id != '')
				$output .= ' id="'.$id.'"';
			if ($name != '')
				$output .= ' name="'.$name.'"';
			$output .= ' value="'.$value.'"';
			$output .= ' />';
			
			return $output."\n";
		}

		function create_input_numeric($class,$id,$name,$maxlength,$width,$value=0,$placeholder='',$required=false)
		{
			$output = '<input type="text"';
			if ($class != '')
				$output .= ' class="'.$class.'"';
			if ($id != '')
				$output .= ' id="'.$id.'"';
			if ($name != '')
				$output .= ' name="'.$name.'"';
			if ((int) $maxlength > 0)
				$output .= ' maxlength="'.$maxlength.'"';
			if ($placeholder != '')
				$output .= ' placeholder="'.$placeholder.'"';
			if ($required)
				$output .= ' required="required"';
			if ($width != '')
				$output .= ' style="width:'.$width.'"';
			$output .= ' value="'.$value.'" onkeypress="validate_input(event);" onkeyup="numeric_format(this.id);"';
			$output .= ' />';

			return $output."\n";
		}

		function create_input_numeric_text($class,$id,$name,$maxlength,$width,$value=0,$placeholder='',$required=false)
		{
			$output = '<input type="text"';
			if ($class != '')
				$output .= ' class="'.$class.'"';
			if ($id != '')
				$output .= ' id="'.$id.'"';
			if ($name != '')
				$output .= ' name="'.$name.'"';
			if ((int) $maxlength > 0)
				$output .= ' maxlength="'.$maxlength.'"';
			if ($placeholder != '')
				$output .= ' placeholder="'.$placeholder.'"';
			if ($required)
				$output .= ' required="required"';
			if ($width != '')
				$output .= ' style="width:'.$width.'"';
			$output .= ' value="'.$value.'" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,\'\')"';
			$output .= ' />';

			return $output."\n";
		}

		function create_input_masked($class,$id,$name,$mask,$width,$value=0,$placeholder='',$required=false)
		{
			$output = '<input type="text"';
			if ($class != '')
				$output .= ' class="'.$class.'"';
			if ($id != '')
				$output .= ' id="'.$id.'"';
			if ($name != '')
				$output .= ' name="'.$name.'"';
			if ($placeholder != '')
				$output .= ' placeholder="'.$placeholder.'"';
			if ($required)
				$output .= ' required="required"';
			if ($width != '')
				$output .= ' style="width:'.$width.'"';
			$output .= ' value="'.$value.'"';
			$output .= ' />';

			$output .= '
				<script type="text/javascript">
					jQuery(document).ready(function($) {
						$("#'.$id.'").mask("'.$mask.'");
					});
				</script>
			';
			return $output."\n";
		}
		
		function create_input_password($class,$id,$name,$maxlength,$width,$value,$placeholder='',$required=false)
		{
			$output = '<input type="password"';
			if ($class != '')
				$output .= ' class="'.$class.'"';
			if ($id != '')
				$output .= ' id="'.$id.'"';
			if ($name != '')
				$output .= ' name="'.$name.'"';
			if ((int) $maxlength > 0)
				$output .= ' maxlength="'.$maxlength.'"';
			if ($placeholder != '')
				$output .= ' placeholder="'.$placeholder.'"';
			if ($required)
				$output .= ' required="required"';
			if ($width != '')
				$output .= ' style="width:'.$width.'"';
			$output .= ' value="'.$value.'"';
			$output .= ' />';
			
			return $output."\n";
		}

		function create_input_text($class,$id,$name,$maxlength,$width,$value,$placeholder='',$style='',$readonly=false,$disabled=false,$required=false)
		{
			$output = '<input type="text"';
			if ($class != '')
				$output .= ' class="'.$class.'"';
			if ($id != '')
				$output .= ' id="'.$id.'"';
			if ($name != '')
				$output .= ' name="'.$name.'"';
			if ((int) $maxlength > 0)
				$output .= ' maxlength="'.$maxlength.'"';
			if ($placeholder != '')
				$output .= ' placeholder="'.$placeholder.'"';
			if ($readonly)
				$output .= ' readonly';
			if ($disabled)
				$output .= ' disabled="disabled"';
			if ($required)
				$output .= ' required="required"';
			if ($width != '')
				$output .= ' style="width:'.$width.';'.$style.'"';
			$output .= ' value="'.$value.'"';
			$output .= ' />';
			
			return $output."\n";
		}

		function create_radio_button($class,$id,$name,$value,$checked=false)
		{
			$output = '<input type="radio"';
			if ($class != '')
				$output .= ' class="'.$class.'"';
			if ($id != '')
				$output .= ' id="'.$id.'"';
			if ($name != '')
				$output .= ' name="'.$name.'"';
			if ($checked)
				$output .= ' checked="checked"';			
			$output .= ' value="'.$value.'"';
			$output .= ' />';

			return $output."\n";
		}

		function create_spinner($class,$id,$name,$width,$value,$range=array())
		{
			$output = '<input type="text"';
			if ($class != '')
				$output .= ' class="'.$class.'"';
			if ($id != '')
				$output .= ' id="'.$id.'"';
			if ($name != '')
				$output .= ' name="'.$name.'"';
			if ($width != '')
				$output .= ' style="width:'.$width.'"';
			$output .= ' value="'.$value.'"';
			$output .= ' />';

			if (empty($range))
			{
				$output .= '
					<script type="text/javascript">
						jQuery(document).ready(function($) {
							$("#'.$id.'").spinner();
						});
					</script>
				';
			}
			else
			{
				$output .= '
					<script type="text/javascript">
						jQuery(document).ready(function($) {
							$("#'.$id.'").spinner({
								min: '.(int) $range[0].',
								max: '.(int) $range[1].'
							});
						});
					</script>
				';
			}			

			return $output."\n";
		}

		function create_slider($class,$id,$name,$min,$max,$step,$value=0)
		{
			$output = '
				<input class="'.$class.'" type="text" id="'.$id.'" name="'.$name.'" readonly style="color:#000000;width:20%">
				<div id="slider-'.$id.'" style="margin-top:5px;width:75%"></div>
			';
			$output .= '
				 <script type="text/javascript">
					jQuery(document).ready(function($) {
						$( "#slider-'.$id.'" ).slider({
							range: "min",
							value: '.$value.',
							min: '.$min.',
							max: '.$max.',
							step: '.$step.',
							slide: function( event, ui ) {
								$( "#'.$id.'" ).val( ui.value );
							}
						});
						$( "#'.$id.'" ).val( $( "#slider-'.$id.'" ).slider( "value" ) );
					});
				</script>
			';

			return $output."\n";
		}

		function create_switch_button($class,$id,$name,$value,$checked=false)
		{
			$output = '<label class="'.$class.'">';
			$output .= '<input type="checkbox"';
			if ($id != '')
				$output .= ' id="'.$id.'"';
			if ($name != '')
				$output .= ' name="'.$name.'"';			
			if ($checked)
				$output .= ' checked';
			$output .= ' value="'.$value.'" />';
			$output .= '<span></span>';
			$output .= '</label>';

			return $output."\n";
		}

		function create_textarea($class,$id,$name,$rows=3,$cols,$width,$value,$placeholder='',$style='',$readonly=false,$disabled=false,$required=false)
		{
			$output = '<textarea';
			if ($class != '')
				$output .= ' class="'.$class.'"';
			if ($id != '')
				$output .= ' id="'.$id.'"';
			if ($name != '')
				$output .= ' name="'.$name.'"';
			$output .= ' rows="'.$rows.'"';
			if ((int) $cols > 0)
				$output .= ' cols="'.$cols.'"';
			if ($placeholder != '')
				$output .= ' placeholder="'.$placeholder.'"';
			if ($readonly)
				$output .= ' readonly';
			if ($disabled)
				$output .= ' disabled="disabled"';
			if ($required)
				$output .= ' required="required"';
			if ($width != '')
				$output .= ' style="width:'.$width.';'.$style.'"';
			$output .= '>'.$value;
			$output .= '</textarea>';
			
			return $output."\n";
		}

		function create_time_picker($class,$id,$name,$width,$value) 
		{
			$output = '
				<div class="input-group bootstrap-timepicker">
					<input type="text"
			';
			if ($class != '')
				$output .= ' class="'.$class.'"';
			if ($id != '')
				$output .= ' id="'.$id.'"';
			if ($name != '')
				$output .= ' name="'.$name.'"';
			if ($width != '')
				$output .= ' style="width:'.$width.'"';
			$output .= ' value="'.$value.'" readonly="readonly" style="color: #22262e;" />';
			$output .= '
					<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
				</div>
			';
			
			return $output."\n";
		}
	}
?>