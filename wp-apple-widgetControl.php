<script type="text/javascript">

function enableDisable(box_checked)
{
	var disable = !box_checked.checked;
	var argument_length = arguments.length;
	var obj, startIndex = 1;
	var frm = box_checked.form;

	for (var i=startIndex;i<argument_length;i++)
	{
		obj = frm.elements[arguments[i]];

		if (typeof obj=="object")
			{
			if (document.layers) 
				{
				if (disable)
					{

					obj.onfocus=new Function("this.blur()");

					if (obj.type=="text") obj.onchange=new Function("this.value=this.defaultValue");
					}
				else 
					{
					obj.onfocus=new Function("return");
					if (obj.type=="text") obj.onchange=new Function("return");
					}
				}
			else obj.disabled=disable;	
			}
	}
}
</script>

<p>

<label for="apple_title">Title for Real time Apple,Inc. Stock Market Sidebar Widget:
<input  name="apple_title" type="text" value="<?php echo $apple_title;?>" /></label>
<input type="hidden" id="apple_submit" name="apple_submit" value="1" />

</p>

<p class="apple_box1">
Your Real time Apple,Inc. Stock Market Widget will load without default names in the boxes. However, if you would like to customize which stock markets are displayed when your widget loads, please check this box and enter your customizations. This will also display a link to share the widget with others as well as trend graphs for Apple, Microsoft and IMB.

<input type="checkbox" id="apple_enable_checkbox" name="apple_enable_checkbox" value="<?php echo $apple_enable_checkbox; ?>" onclick="enableDisable(this,'apple_first_name','apple_second_name','apple_third_name','apple_fourth_name');" />
<input type="hidden" id="apple_submit" name=" apple_submit" value="4" />

<br />
</p>

<p>

<label for="apple_first_name">Enter stock name you want to compare:

<input  id="apple_first_name" name="apple_first_name" disabled="disabled" type="text" value="<?php 

if(empty($options['apple_first_name'])){

   echo $apple_first_name = "AAPL";

}else echo $apple_first_name;?>" /></label>			

<input type="hidden" id="apple_submit" name="apple_submit" value="2" />

</p>

<p>

<label for="apple_second_name">Enter stock name you want to compare:

<input id="apple_second_name" name="apple_second_name" disabled="disabled" type="text" value="<?php 

  if(empty($options['apple_second_name'])){

   echo $apple_first_name = "MSFT";

}else echo $apple_second_name;?>" /></label>	




		
<input type="hidden" id="apple_submit" name="apple_submit" value="3" />

</p>

<p>

			

<input type="hidden" id="apple_submit" name="apple_submit" value="2" />

</p>
<script language="javascript">
 function killer(){
   var chosen = "";
   var len = document.apple_chooser.apple_widesidebar;

   
  for( i=0; i < len; i++){

      if (document.apple_chooser.apple_widesidebar[i].checked){
         
         chosen = document.apple_chooser.apple_widesidebar[i].value;
           
       }
    }    
}	  
	
</script>		
<input type="hidden" id="apple_submit" name="apple_submit" value="3" />

</p>

<!--<div>
   <form id="apple_chooser" name="apple_chooser">
       <label>Wide Sidebar <input type="radio" id="apple_widesidebar" name="apple_widesidebar" value="hello" onclick="killer();" /></label>
  <br/>


      <label>Small Sidebar <input type="radio" id="apple_widesidebar" name="apple_widesidebar" value="bla" onclick="killer();" /></label>
  </form>

</div>-->