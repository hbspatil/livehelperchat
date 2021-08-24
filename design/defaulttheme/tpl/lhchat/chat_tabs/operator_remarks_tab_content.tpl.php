<div role="tabpanel" class="tab-pane<?php if ($chatTabsOrderDefault == 'operator_remarks_tab') print ' active';?>" id="main-user-info-remarks-<?php echo $chat->id?>">
   <?php include(erLhcoreClassDesign::designtpl('lhchat/chat_tabs/operator_remarks.tpl.php'));?>



 <form onsubmit="lhinst.submitL1andL2ANDCLOSE(<?php echo $chat->id?>,$('#tabs'),true,'parent_selection1', 'sub_category_div')" >
	<p>
	</p>


 	<div class="parent_selection" id="parent_selection1">Please select L1:
            <select required name="parent_selection1" onchange="list(Accounts)" class="parent_selection" id="parent_selection1">
                <option value="">Select L1</option>
                <option value="Accounts">Accounts</option>
                <option value="Adhoc">Adhoc</option>
                <option value="Customer Initiated">Customer Initiated</option>
                <option value="Digidesk">Digidesk</option>
                <option value="E Consultation">E Consultation</option>
                <option value="FC Pharmacist">FC Pharmacist</option>
                <option value="IPP Related">IPP Related</option>
                <option value="Logistics_Delivery">Logistics_Delivery</option>
                <option value="Marketing Related">Marketing Related</option>
                <option value="New Order">New Order</option>
                <option value="Service Related">Service Related</option>
                <option value="Franchise_customer">Franchise_customer</option>
                <option value="Others">Others</option>
           </select>
     </div>


	<p>

	</p>
	
	 <div class="sub_category_div" id="sub_category_div1">Please select L2:
            
        <select required name="sub_category_div1" id="sub_category_div">
            <option value="">Please select L2</option>
                       <option value="">Please select L2</option>
            <option value="Payment link shared">Account Payment link shared</option>
            <option value="Refund/Payment">Accounts Refund/Payment</option>
            <option value="Adhoc Adhoc">Adhoc Adhoc</option>
            <option value="pricing discount product">pricing discount product</option>
            <option value="Account details modification">Account details modification</option>
            <option value="Cx wants to modify order">Cx wants to modify order</option>
            <option value="Duplicate Invoice request with">Duplicate Invoice request with</option>
            <option value="Order Inquiry within TAT">Order Inquiry within</option>
            <option value="Requesting for Rescheduling">Requesting for Rescheduling</option>
            <option value="Return request change of Rx">Return request change of Rx</option>
            <option value="Delay in digitization">Delay in digitization</option>
            <option value="Request for Refund/Replaceement">Request for Refund/Replacement</option>
            <option value="Doctor consultation pending">Doctor consultation pending</option>
            <option value="Doctor Cancelled Order">Doctor Cancelled Order</option>
            <option value="FC modifying the quantity SKU">FC modifying the quantity SKU</option>
            <option value="Missing SKU Wrong SKU">FC modifying the quantity SKU</option>
            <option value="Order not packed packed by Pharmacist">Order not packed by Pharmacist</option>
            <option value="Order status PFS Post FC Assigned">Order status PFS Post FC Assigned</option>
            <option value="Request for Refund Replacement">Request for Refund Replacement</option>
            <option value="RX Not Returned">RX Not Returned</option>
            <option value="Pricing Mismatch">Pricing Mismatch</option>
            <option value="Delay in procurement">Delay in procurement</option>
            <option value="NAP uploaded">NAP uploaded</option>
            <option value="Order modified due to PFS">Order modified due to PFS</option>
            <option value="Damaged package delivered">Damaged package delivered</option>
            <option value="Delay in delivery 3PL">Delay in delivery 3PL</option>
            <option value="Delivery delayed by Medlife">Delivery delayed by Medlife</option>
            <option value="Delivery yet to be assigned">Delivery yet to be assigned</option>
            <option value="Return pick up not done">Return pick up not done</option>
            <option value="RX Not picked up">RX Not picked up</option>
            <option value="TSA Query">TSA Query</option>
            <option value="TSAresc cancel wout Cx consent">TSAresc cancel wout Cx consent</option>
            <option value="wrong package">wrong package</option>
            <option value="Coupon code Discount related">Coupon code Discount related</option>
            <option value="Ecash related concern">Ecash related concern</option>
            <option value="External Wallet related inquiry">External Wallet related inquiry</option>
            <option value="Medlife wallet related">Medlife wallet related</option>
            <option value="Share and Earn">Share and Earn</option>
            <option value="sub unsub">sub unsub</option>
            <option value="creation">creation</option>
            <option value="Reopen">Reopen</option>
            <option value="Call Transferred Digi desk">Call Transferred Digi desk</option>
            <option value="Call Transferred Escalation desk">Call Transferred Escalation desk</option>
            <option value="Call Transferred to RED">Call Transferred to RED</option>
            <option value="Incomplete call Callback required">Incomplete call Callback required</option>
            <option value="Lab test related">Lab test related</option>
            <option value="Stop Medlife promotions">Stop Medlife promotions</option>
            <option value="creation">creation</option>
            <option value="Reopen">Reopen</option>
            <option value="Order Status">Order Status</option>
            <option value="Product discount price">Product discount price</option>
            <option value="Other Others">Other Others</option>
            <option value="Chat Ended">Chat Ended</option>
        </select>
            

            
 
        
            
    </div>
 

<input type="submit"  name="close ticket">

</form>


</div>