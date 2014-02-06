
<html>
	<head>
		<style>
                        
                        .tab_col_50
			{
				width:50%;
				min-width:50%;
			}
			.tab_col_25
			{
				width:25%;
				min-width:25%;
			}
			.tab_col_15
			{
				width:15%;
				min-width:15%;
			}
			.tab_col_10
			{
				width:10%;
				min-width:10%;
			}
			.tab_col_7
			{
				width:7%;
				min-width:7%;
			}
			.tab_col_5{
				width:5%;
				min-width:5%;
			}
			.tab_col_4{
				width:4%;
				min-width:4%;
			}
		</style>
	</head>
        <body>
		
		
		<link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
                <script type="text/javascript" src="../bootstrap/js/jquery.js"></script>
                <script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
                <script type="text/javascript" src="../bootstrap/js/bootstrap-modal.js"></script>
                <script type="text/javascript" src="../js/config.js"></script>
                
		<?php
/*include 'breadcrumb.php';
makemodal_confirm("modalacceptchange","Accept","");
echo $callbackvalue;*/
?>
		<div class="container">
		<div class="row show-grid">
  		<div class="col-lg-10">
		<!--div class="well" style="height: 100%;"-->
		<h4 align="center">Transfer of Materials</h4>
                <br>
		
		
		<div style=" width: 100%; height: 30%;">
			
			<div style="width: 100%;float:left; height:20%;">
                            
				<table style="width:100%;">
					<thead>
                                            <tr style="font-size: 0.875em;background-color: #E9F2F5;">
                                                <td colspan="8" align="center"><b>Source (Consumption)</b></td>
                                            </tr>
                                            <tr style="font-size: 0.875em;border: 0px;background-color: #C8DBE2;">
                                                    <td class="tab_col_5"></td>
                                                    <td class="tab_col_25"><b>Name of Item</b></td>
                                                    <td class="tab_col_25"><b>Godown</b></td>
                                                    <td class="tab_col_7"><b>Qty</b></td>
                                                    <td class="tab_col_10"><b>Units</b></td>
                                                    <td class="tab_col_7"><b>Rate</b></td>
                                                    <td class="tab_col_10"><b>Amount</b></td>
                                                    <td class="tab_col_10"></td>
                                            </tr>
					</thead>
				</table>
			</div>
			
			<div style="overflow: none;float:left; width:100%; margin-top: 10px;">
				<table id="mysource" class="table" style="border: 0px">
					
				</table>
			</div>
			
			<div style="height:20%;float:left; margin-bottom: 5px; width:100%;">
                            <table style="width:100%;">
                                <thead>
                                    <tr style="font-size: 0.875em;border: 0px">
                                        <td class="tab_col_5"></td>
                                        <td align="center" class="tab_col_50">
                                            <table style="width:70%">
                                                <tr>
                                                    <td><a href="#" onclick="addRow('mysource')" class="btn btn-primary btn-sm"> + Add Row</a></td>
                                                    <td><a href="#" onclick="deleteSelectedRows('mysource')" class="btn btn-primary btn-sm"> X Delete Rows</a></td>
                                                    <td><a href="#" onclick="endListAndDisplayTotal('mysource')" class="btn btn-primary btn-sm"> End List</a></td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td align="center" class="tab_col_7">
                                            <span id="mysourcefinal_qty" class="badge badge-info">0</span>
                                        </td>
                                        <td class="tab_col_10"></td>
                                        <td class="tab_col_7"></td>
                                        <td align="center" class="tab_col_10">
                                            <span id="mysourcefinal_amt" class="badge badge-info">0.00</span>
                                        </td>
                                        <td class="tab_col_10"></td>
                                    </tr>
                                </thead>
                            </table>
                            
                            
                        </div>  
		</div>
		
		<div style=" width: 100%; height: 30%;">
			
			<div style="width: 100%;float:left; height:20%;">
                            
				<table style="width:100%;">
					<thead>
                                            <tr style="font-size: 0.875em;background-color: #E9F2F5;">
                                                <td colspan="8" align="center"><b>Destination (Production)</b></td>
                                            </tr>
                                            <tr style="font-size: 0.875em;border: 0px;background-color: #C8DBE2;">
                                                    <td class="tab_col_5"></td>
                                                    <td class="tab_col_25"><b>Name of Item</b></td>
                                                    <td class="tab_col_25"><b>Godown</b></td>
                                                    <td class="tab_col_7"><b>Qty</b></td>
                                                    <td class="tab_col_10"><b>Units</b></td>
                                                    <td class="tab_col_7"><b>Rate</b></td>
                                                    <td class="tab_col_10"><b>Amount</b></td>
                                                    <td class="tab_col_10"></td>
                                            </tr>
					</thead>
				</table>
			</div>
			
			<div style="overflow: none;float:left; width:100%; margin-top: 10px;">
				<table id="mydest" class="table" style="border: 0px">
					
				</table>
			</div>
			
			<div style="height:20%;float:left; margin-bottom: 5px; width:100%;">
                            <table style="width:100%;">
                                <thead>
                                    <tr style="font-size: 0.875em;border: 0px">
                                        <td class="tab_col_5"></td>
                                        <td align="center" class="tab_col_50">
                                            <table style="width:70%">
                                                <tr>
                                                    <td><a href="#" onclick="addRow('mydest')" class="btn btn-primary btn-sm"> + Add Row</a></td>
                                                    <td><a href="#" onclick="deleteSelectedRows('mydest')" class="btn btn-primary btn-sm"> X Delete Rows</a></td>
                                                    <td><a href="#" onclick="endListAndDisplayTotal('mydest')" class="btn btn-primary btn-sm"> End List</a></td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td align="center" class="tab_col_7">
                                            <span id="mydestfinal_qty" class="badge badge-info">0</span>
                                        </td>
                                        <td class="tab_col_10"></td>
                                        <td class="tab_col_7"></td>
                                        <td align="center" class="tab_col_10">
                                            <span id="mydestfinal_amt" class="badge badge-info">0.00</span>
                                        </td>
                                        <td class="tab_col_10"></td>
                                    </tr>
                                </thead>
                            </table>
                            
                            
                        </div>  
                    
		</div>
                
                <div style="margin-top: 15px;">
                    <div style="float:left;width:40%">
                        <div style="background-color:#5C95A9; color: #FFFFFF; width:100%; height:25px; padding-left: 1%;">
                            <!--Narration-->
                            <b>Narration :</b> 
                        </div>
                        <input type="text" class="form-control" name="narration" style=" margin-bottom: 10px; border: 1px solid #5C95A9;">
                    </div>

                    <div style="float:right;">
                        <a href="#" onclick="" class="btn btn-success btn-small">Accept</a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="#" onclick="" class="btn btn-info btn-small">Cancel</a>
                    </div>
                </div>
		
		<!--/div-->
		</div>
		<div class="col-lg-2">

			<!--div class="span3 sb-fixed"-->
                        <div class="well" style="margin-top:10px;border: 1px solid #5C95A9; background-color: #E9F2F5">
		   			<div id="divlist" style="height: 80%;overflow: auto"> 
		   				
		   			
					<!--ul class="nav nav-pills nav-stacked">
			 		 	<li><a href="#">Stock Journal</a></li>
			 		 	<li><a href="#">Rej In</a></li>
			 		 	<li><a href="#">Rej Out</a></li>
			 		 	<li><a href="#">Indent</a></li>
			 		 	<li><a href="#">Receipt Note</a></li>
			 		 	<li><a href="#">Physical Stock</a></li>
			 		 	<li><a href="#">Material Out</a></li>
			 		 	<li><a href="#">Material In</a></li>
					</ul-->
					<!--/div-->   
				</div>
			</div>
	  	</div>
		</div>
	</div>
	<!--script type="text/javascript" src="test.js"></script-->
		<script>
		
			var temp_txt_name;
                        var temp_txt_godown;
			var temp_txt_qty;
			var temp_txt_units;
			var temp_txt_rate;
			var temp_txt_amt;
                        
                        var current_rowID;
			var edit_flag = false;
                        //alert("hi");
                        
			addRow("mysource");
                        addRow("mydest");
			
			function addRow(tableID) {
                            
                                //console.log(tableID);
				var table = document.getElementById(tableID);
				var rowCount = table.rows.length;
				
				
				//alert(rowCount);	
				if (rowCount>0)
				{
					if(document.getElementsByName(tableID +"name")[rowCount-1].value!==undefined)
					{
						if((document.getElementsByName(tableID +"name")[rowCount-1].value!=="") && (document.getElementsByName(tableID +"amt")[rowCount-1].value!==""))
						{ 
							tbToLbl(tableID,rowCount,"new");
						}
						else
						{
							alert("Please Fill the current row");
							return;
						}
					}
				}
				
				var row = table.insertRow(rowCount);
	
				var cell1 = row.insertCell(0);
				cell1.className="tab_col_4";
				var element1 = document.createElement("input");
				element1.type = "checkbox";
				element1.name=tableID +"chkbox[]";
				element1.className="form-control";
				cell1.appendChild(element1);
                                
				var cell2 = row.insertCell(1);
				var element2 = createSelectBox(tableID,"name","");
				cell2.appendChild(element2);
                                
                                var cell3 = row.insertCell(2);
				var element3 = createSelectBox(tableID,"godown","");
				cell3.appendChild(element3);
                                
				var cell4 = row.insertCell(3);
				cell4.className="tab_col_7";
				var element4 = document.createElement("input");
				element4.type = "text";
				element4.name = tableID +"qty";
                                //element4.setAttribute('onkeypress','return validate(event,this,"int")');
				element4.setAttribute('onkeydown','return calcAndValidate(event,this,"'+tableID+'","'+ rowCount+1 +'","qty")');
                                element4.className="form-control";
				cell4.appendChild(element4);
				
				var cell5 = row.insertCell(4);
				cell5.className="tab_col_10";
				var element5 = document.createElement("input");
				element5.type = "text";
				element5.name = tableID +"units";
				element5.className="form-control";
				cell5.appendChild(element5);
	
				var cell6 = row.insertCell(5);
				cell6.className="tab_col_7";
				var element6 = document.createElement("input");
				element6.type = "text";
				element6.name = tableID +"rate";
                                //element6.setAttribute('onkeypress','return validate(event,this,"dec")');
                                element6.setAttribute('onkeydown','return calcAndValidate(event,this,"'+tableID+'","'+ rowCount+1 +'","rate")');
				element6.className="form-control";
				cell6.appendChild(element6);	
			
				var cell7 = row.insertCell(6);
				cell7.className="tab_col_10";
				var element7 = document.createElement("input");
				element7.type = "text";
				element7.name = tableID +"amt";
                                //element7.setAttribute('onkeypress','return validate(event,this,"dec")');
                                element7.setAttribute('onkeydown','return calcAndValidate(event,this,"'+tableID+'","'+ rowCount+1 +'","amt")');
				element7.className="form-control";
				cell7.appendChild(element7);
				
				var cell8 = row.insertCell(7);
				cell8.className="tab_col_10";
                                
                                edit_flag = true;
                           	window.current_rowID = rowCount + 1;
                          
                          

			}
                        
                        function calcAndValidate(evt,thisobj,tableID,rowID,column)
                        {
                            var charCode = (evt.which) ? evt.which : event.keyCode;
                            
                            var keyPressed = String.fromCharCode(charCode);
                            if ((column === "rate") || (column === "amt"))
                                var returnVal = validate(event,thisobj,"dec");
                            else if (column === "qty")
                                var returnVal = validate(event,thisobj,"int");
                            
                            console.log(returnVal);
                            if(returnVal === true)
                            {
                                if(column === "rate")
                                {
                                    //backspace pressed
                                    if(charCode === 8)
                                    {
                                        //slice the last character
                                        var rate = thisobj.value.slice(0,-1);
                                        
                                    }
                                    else
                                    {
                                        var rate = thisobj.value.concat(keyPressed);
                                    }
                                    
                                    var qty = document.getElementsByName(tableID+"qty")[rowID-1].value;
                                    var amt = document.getElementsByName(tableID+"amt")[rowID-1].value;
                                    
                                    //alert(qty+","+parseFloat(rate)+","+amt);
                                    
                                    if (qty!=="")
                                    {
                                        if (rate==="")
                                            document.getElementsByName(tableID+"amt")[rowID-1].value="";
                                        else
                                            document.getElementsByName(tableID+"amt")[rowID-1].value = parseFloat(qty) * parseFloat(rate);
                                    }
                                    else
                                    {
                                        document.getElementsByName(tableID+"amt")[rowID-1].value = parseFloat(rate);
                                    }
                                }
                                else if(column === "amt")
                                {
                                    //backspace pressed
                                    if(charCode === 8)
                                    {
                                        //slice the last character
                                        var amt = thisobj.value.slice(0,-1);
                                    }
                                    else
                                        var amt = thisobj.value.concat(keyPressed);
                                    var qty = document.getElementsByName(tableID+"qty")[rowID-1].value;
                                    if (qty!=="")
                                    {
                                        if (amt==="")
                                            document.getElementsByName(tableID+"rate")[rowID-1].value = "";
                                        else
                                            document.getElementsByName(tableID+"rate")[rowID-1].value = parseFloat(amt) / parseFloat(qty);
                                    }
                                    
                                }
                                else if((column === "qty"))
                                {
                                    //backspace pressed
                                    if(charCode === 8)
                                    {
                                        //slice the last character
                                        var qty = thisobj.value.slice(0,-1);
                                    }
                                    else
                                        var qty = thisobj.value.concat(keyPressed);
                                    var rate = document.getElementsByName(tableID+"rate")[rowID-1].value;
                                    var amt = document.getElementsByName(tableID+"amt")[rowID-1].value;
                                    //working 112 123 function keys
                                    if ((rate === "") && (amt !== ""))
                                    {
                                        document.getElementsByName(tableID+"rate")[rowID-1].value = parseFloat(amt) / parseFloat(qty);
                                    }
                                    else if ((rate !== "") && (amt === ""))
                                    {
                                        document.getElementsByName(tableID+"amt")[rowID-1].value = parseFloat(rate) * parseFloat(qty);
                                    }
                                    
                                    
                                }
                            }
                            return returnVal;
                        }
                        
                        function createSelectBox(tableID,elementName,selectedValue)
                        {
                                var element = document.createElement("select");
                                element.name=tableID + elementName;
                            
                                var option;
                                if (elementName === "name")
                                var options=["Paper","Color Pencil","Note Book"];
                                else if (elementName === "godown")
                                var options=["Warehouse","Shop"];
                                else
                                var options=["Option1","Option2"];
                                /* we are going to add two options */
                                /* create options elements */
                                
                                for(var i=0; i<options.length; i++)
                                {
                                    option = document.createElement("option");
                                    option.setAttribute("value", options[i]);
                                    option.innerHTML = options[i];
                                    if(options[i] === selectedValue)
                                    {
                                        option.selected = true;
                                    }
                                    element.appendChild(option);
                                }
                                
				element.className="form-control";
                                
                                return element;
                        }
                        
                        function calcTotal(tableID)
                        {
                            var final_qty=0;
                            var final_amt=0;
                            
                            var qty = document.getElementsByName(tableID +"qty");
                            var amt = document.getElementsByName(tableID +"amt");
                            
                            //alert(qty.length);
                            //alert(amt.length);
                            
                            for(var i=0 ; i<qty.length ; i++)
                            {
                                if(qty[i].innerText!=="")
                                final_qty = final_qty + parseInt(qty[i].innerText);
                            }
                            
                            for(var i=0 ; i<amt.length ; i++)
                            {
                                if(amt[i].innerText!=="")
                                final_amt = final_amt + parseFloat(amt[i].innerText);
                            }
                            
                            document.getElementById(tableID +"final_qty").innerText = final_qty.toLocaleString("en-IN") +" Nos.";
                            document.getElementById(tableID +"final_amt").innerText = "Rs. "+ final_amt.toLocaleString("en-IN");
                            
                        }
			
			function endList(tableID,rowID)
			{
                            //alert("inside endlist");
				//var table = document.getElementById(tableID);
				//var rowCount = table.rows.length;
				if(document.getElementsByName(tableID+"name")[rowID-1].value !== undefined)
                                {
                                    //alert("inside if 1");
                                    if ((document.getElementsByName(tableID +"name")[rowID-1].value!=="") && (document.getElementsByName(tableID +"amt")[rowID-1].value!==""))
                                    {
                                        //  alert("inside if 2");
                                            tbToLbl(tableID,rowID,"new");
                                    }
                                    else
                                    {
                              //            alert("inside else");
                                            deleteRow(tableID,rowID);
                                    }
                                    window.current_rowID = "";
                                    window.edit_flag = false;
                                }
                        }
                        
                        function endListAndDisplayTotal(tableID)
                        {
                            //alert("edit flag ---- "+window.edit_flag);
                            //alert("edit rowID ---- "+window.current_rowID);
                            if (edit_flag ===true)
                                endList(tableID,window.current_rowID);
                            calcTotal(tableID);
                        }
			
			function tbToLbl(tableID,rowID,action)
			{
                            //alert("inside tbtolbl fn");
				var table = document.getElementById(tableID);
				
				var txt_name = document.getElementsByName(tableID +'name')[rowID-1].value;
                                var txt_godown = document.getElementsByName(tableID +'godown')[rowID-1].value;
				var txt_qty = document.getElementsByName(tableID +'qty')[rowID-1].value;
				var txt_units = document.getElementsByName(tableID +'units')[rowID-1].value;
				var txt_rate = document.getElementsByName(tableID +'rate')[rowID-1].value;
				var txt_amt = document.getElementsByName(tableID +'amt')[rowID-1].value;
				//alert(txt_name);
                        
                                //if ((isNaN(txt_qty) === false) && (isNaN(txt_rate) === false) && (isNaN(txt_amt) === false))
				//{
                                    if ((action === "new") || (action === "edit"))
                                    {
                                            table.rows[rowID-1].cells[1].innerHTML="<label name='"+tableID+"name'><font size=2>"+txt_name+"</font></label>";
                                            table.rows[rowID-1].cells[2].innerHTML="<label name='"+tableID+"godown'><font size=2>"+txt_godown+"</font></label>";
                                            table.rows[rowID-1].cells[3].innerHTML="<label name='"+tableID+"qty'><font size=2>"+txt_qty+"</font></label>";
                                            table.rows[rowID-1].cells[4].innerHTML="<label name='"+tableID+"units'><font size=2>"+txt_units+"</font></label>";
                                            table.rows[rowID-1].cells[5].innerHTML="<label name='"+tableID+"rate'><font size=2>"+txt_rate+"</font></label>";
                                            table.rows[rowID-1].cells[6].innerHTML="<label name='"+tableID+"amt'><font size=2>"+txt_amt+"</font></label>";
                                            table.rows[rowID-1].cells[7].innerHTML="<input type='image' src='../img/edit.png' height='20px' width='20px' onclick='editRow(\""+tableID+"\",\""+rowID+"\")' alt='Edit' title='Edit Row'>";
                                            window.edit_flag = false;
                                            window.current_rowID = "";
                                            calcTotal(tableID);
                                    }
                                    else if(action === "cancel")
                                    {
                                            table.rows[rowID-1].cells[1].innerHTML="<label name='"+tableID+"name'><font size=2>"+window.temp_txt_name+"</font></label>";
                                            table.rows[rowID-1].cells[2].innerHTML="<label name='"+tableID+"godown'><font size=2>"+window.temp_txt_godown+"</font></label>";
                                            table.rows[rowID-1].cells[3].innerHTML="<label name='"+tableID+"qty'><font size=2>"+window.temp_txt_qty+"</font></label>";
                                            table.rows[rowID-1].cells[4].innerHTML="<label name='"+tableID+"units'><font size=2>"+window.temp_txt_units+"</font></label>";
                                            table.rows[rowID-1].cells[5].innerHTML="<label name='"+tableID+"rate'><font size=2>"+window.temp_txt_rate+"</font></label>";
                                            table.rows[rowID-1].cells[6].innerHTML="<label name='"+tableID+"amt'><font size=2>"+window.temp_txt_amt+"</font></label>";
                                            table.rows[rowID-1].cells[7].innerHTML="<input type='image' src='../img/edit.png' height='20px' width='20px' onclick='editRow(\""+tableID+"\",\""+rowID+"\")' alt='Edit' title='Edit Row'>";
                                            window.edit_flag = false;
                                            window.current_rowID = "";
                                    }
                                    else
                                    {
                                            alert("invalid option");
                                    }   
                                //}
                                /*
                                else
                                {
                                    alert("Please enter a numeric value");
                                }*/
			}
			
			function lblToTb(tableID,rowID)
			{
				//alert(tableID);
				var table = document.getElementById(tableID);
				
				var txt_name = document.getElementsByName(tableID+'name')[rowID-1].innerText;
                                var txt_godown = document.getElementsByName(tableID+'godown')[rowID-1].innerText;
				var txt_qty = document.getElementsByName(tableID+'qty')[rowID-1].innerText;
				var txt_units = document.getElementsByName(tableID+'units')[rowID-1].innerText;
				var txt_rate = document.getElementsByName(tableID+'rate')[rowID-1].innerText;
				var txt_amt = document.getElementsByName(tableID+'amt')[rowID-1].innerText;
				//alert(txt_name);
                                table.rows[rowID-1].cells[0].innerHTML= "";
				table.rows[rowID-1].cells[1].appendChild(createSelectBox(tableID,"name",txt_name));
                                table.rows[rowID-1].cells[2].appendChild(createSelectBox(tableID,"godown",txt_godown));
				table.rows[rowID-1].cells[3].innerHTML="<input type='text' name='"+tableID+"qty' onkeypress='return validate(event,this,\"int\");' class='form-control' value='"+txt_qty+"'/>";
				table.rows[rowID-1].cells[4].innerHTML="<input type='text' name='"+tableID+"units' class='form-control' value='"+txt_units+"'/>";
				table.rows[rowID-1].cells[5].innerHTML="<input type='text' name='"+tableID+"rate' onkeypress='return validate(event,this,\"dec\");' class='form-control' value='"+txt_rate+"'/>";
				table.rows[rowID-1].cells[6].innerHTML="<input type='text' name='"+tableID+"amt' onkeypress='return validate(event,this,\"dec\");' class='form-control' value='"+txt_amt+"'/>";
				table.rows[rowID-1].cells[7].innerHTML="<input type='image' src='../img/tick.png' height='20px' width='20px' onclick='doneEdit(\""+tableID+"\",\""+rowID+"\")' alt='Done Editing' title='Done Editing'>&nbsp<input type='image' src='../img/cross.png' height='20px' width='20px' onclick='cancelEdit(\""+tableID+"\",\""+rowID+"\")' alt='Cancel Editing' title='Cancel Editing'>";
                                window.edit_flag = true;
                                window.current_rowID = rowID;
                        }
                        
                        function getNames(tableID)
                        {
                            var name = document.getElementsByName(tableID +"name");
                            var fname="";
                            for(var i=0 ; i<name.length ; i++)
                            {
                                fname = fname + " , " +name[i].innerText;
                            }
                            alert(fname);
                        }
                        
                        function doneEdit(tableID,rowID)
                        {
                            window.edit_flag = false;
                            tbToLbl(tableID,rowID,"edit");
                        }
                        
                        function cancelEdit(tableID,rowID)
                        {
                            window.edit_flag = false;
                            tbToLbl(tableID,rowID,"cancel");
                        }
			
			function editRow(tableID,rowID)
			{
                                //alert("edit rowid : "+window.current_rowID);
                                //alert("edit flag : "+window.edit_flag);
        
                                var table = document.getElementById(tableID);
                                var rowCount = table.rows.length;
                                
                                //alert("row count : "+rowCount);
                                //alert("row id : "+rowID);
                                if((window.current_rowID === rowCount))
                                {
                                    //alert("inside if");
                                    endList(tableID,rowCount);
                                    window.edit_flag = true;
                                }
                                else if(window.current_rowID === "")
                                {
                                    //Do nothing
                                }
                                else if(window.current_rowID === rowID)
                                {
                                    //Do nothing
                                }
                                else
                                {
                                    //alert('inside else - flag val'+window.edit_flag);
                                    if (window.edit_flag === true)
                                    {
                                        //alert("inside else - if");
                                        //alert(window.current_rowID);
                                        tbToLbl(tableID,window.current_rowID,"edit");
                                    }
                                    window.edit_flag = true;
                                }
                            
                                window.current_rowID = rowID;
				var table = document.getElementById(tableID);
				var rowCount = table.rows.length;
				
				//endList(tableID);
				
				window.temp_txt_name = document.getElementsByName(tableID+'name')[rowID-1].innerText;
                                window.temp_txt_godown = document.getElementsByName(tableID+'godown')[rowID-1].innerText;
				window.temp_txt_qty = document.getElementsByName(tableID+'qty')[rowID-1].innerText;
				window.temp_txt_units = document.getElementsByName(tableID+'units')[rowID-1].innerText;
				window.temp_txt_rate = document.getElementsByName(tableID+'rate')[rowID-1].innerText;
				window.temp_txt_amt = document.getElementsByName(tableID+'amt')[rowID-1].innerText;
			
				lblToTb(tableID,rowID);	
			}
			
			function deleteRow(tableID,rowID)
			{
				var table = document.getElementById(tableID);
				table.deleteRow(rowID-1);
			}
	
			function deleteSelectedRows(tableID) {
				try {
				var table = document.getElementById(tableID);
				var rowCount = table.rows.length;
	
				for(var i=0; i<rowCount; i++) {
					var row = table.rows[i];
					var chkbox = row.cells[0].childNodes[0];
					if(null !== chkbox && true === chkbox.checked) {
						table.deleteRow(i);
						rowCount--;
						i--;
					}
	
	
				}
				}catch(e) {
					alert(e);
				}
			}
                        
                        function validate(evt,thisobj,validation)
                        {
                           var charCode = (evt.which) ? evt.which : event.keyCode;
                           
                           /*
                            * dec - Numbers and .
                            * int - Only numbers
                            */
                           console.log(charCode);
                               if (validation === "dec")
                               {
                                    if (charCode > 31 && (charCode < 48 || charCode > 57) && charCode !== 190)
                                         return false;
                                    else
                                    {
                                        
                                         //console.log(thisobj.value.concat(evt.which).indexOf('.'));
                                         //Prevent from entering more than one '.'
                                         if (thisobj.value.concat(evt.which).indexOf('.') !== -1)
                                         {
                                             if (charCode === 190)
                                                return false;
                                         }
                                         return true;
                                    }
                                }
                                else if(validation === "int")
                                {
                                    if (charCode > 31 && (charCode < 48 || charCode > 57))
                                         return false;
                                    else
                                        return true;
                                }
                        }
			
		/*
			function loadledger()
			{
				var res;
				$.ajax({
						type: 'GET',
						contentType: 'application/json',
						async: false,
						url: apiurl+'stockjournal.php/stockitemlist',
						dataType: "json",
						success: function(data){
							res = data;
						},
						error: function(jqXHR, textStatus, errorThrown){
						}
				});
				return res;
			}
			
			var data=loadledger();
			makeconfobject("Name of Item",50,"list",data,"divlist","","",false);//Company Name
			makeconfobject("Qty",4,"number","","","Amount=Qty*Rate","Qty=Amount/Rate",true);//Quantity
			makeconfobject("Units",4,"list",data,"divlist","","",true);//Units
			makeconfobject("Rate",4,"list",data,"divlist","Amount=Qty*Rate","Rate=Amount/Qty",true);//Rate
			makeconfobject("Amount",4,"list",data,"divlist","Rate=Amount/Qty","Qty=Amount/Rate",false);//Amount
			//starthere(confarray);
			var list=loadledger();
			starthere(list);
		*/
		</script>
		
	</body>
</html>
