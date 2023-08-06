<form action="index.php?module=Administration&action=savenumprefix" method="post">
    <select id="module_name" name="module_name" required>
        <option value="">Select Module</option>
        <option value="Accounts">Accounts</option>
        <option value="Vendors">Vendors</option>
        <option value="Project">Project</option>
        <option value="Purchase_Orders">Purchase Orders</option>
        <option value="Invoices">Invoices</option>
        <option value="Estimates">Estimates</option>
        <option value="Contracts">Contracts</option>
        <option value="Opportunities">Opportunities</option>
    </select>
    <input type="number" id="initial_number" name="initial_number" min="1" placeholder="Set Initial Number" required>
    <input type="text" id="prefix" name="prefix" placeholder="Set Prefix" required>
    <input class="button" type="submit" id="save" name="save" value="Save">
</form>
