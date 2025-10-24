<!DOCTYPE html>
<html>
<head>
    <title>Stock Transfer Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            margin: 0;
            padding: 20px;
        }
        .container {
            width: 700px;
            background: white;
            margin: 0 auto;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 8px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
        }
        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }
        input[type="text"], input[type="date"], textarea, select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 6px;
            text-align: center;
        }
        button {
            margin-top: 15px;
            background: #007bff;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background: #0056b3;
        }
        .add-btn {
            background: #28a745;
        }
        .add-btn:hover {
            background: #1e7e34;
        }
        .remove-btn {
            background: #dc3545;
        }
        .remove-btn:hover {
            background: #b02a37;
        }
        .additional-fields {
            margin-top: 20px;
            padding: 15px;
            background: #f9f9f9;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
        .additional-fields h4 {
            margin-top: 0;
            color: #333;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Stock Transfer Input Form</h2>
    <form action="stocktransfer.php" method="POST" target="_blank">
        <label>From Location:</label> 
        <select name="from_location" required> 
            <option value="">Select a location</option> 
            <option value="North-east">North-east</option> 
            <option value="South-West">South-West</option> 
        </select>

        <label>Stock No:</label>
        <input type="text" name="stock_no" required>

        <label>Date:</label>
        <input type="date" name="date" required>

        <label>Account Name:</label>
        <input type="text" name="account_name" required>

        

        <label>Address:</label>
        <input type="text" name="to_location" required>

        <h3>Item Details</h3>
        <table id="itemsTable">
            <thead>
                <tr>
                    <th>Quantity</th>
                    <th>Unit</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="number" name="quantity[]" required></td>
                    <td><input type="text" name="unit[]" required></td>
                    <td><input type="text" name="description[]" required></td>
                    <td><button type="button" class="remove-btn" onclick="removeRow(this)">×</button></td>
                </tr>
            </tbody>
        </table>

        <button type="button" class="add-btn" onclick="addRow()">+ Add Another</button>

        <!-- Additional Fields Section -->
        <div class="additional-fields">
            <h4>Additional Information</h4>
            
            <label>MR:</label>
            <input type="text" name="mr" placeholder="Enter MR number" required>
            
            <label>Model:</label>
            <input type="text" name="model" placeholder="Enter model number" required>
            
            <label>Serial No.:</label>
            <input type="text" name="serial_no" placeholder="Enter serial number" required>
            
            <label>Tech:</label>
            <input type="text" name="tech" placeholder="Enter tech name"required>

            <label>PR No.:</label>
            <input type="text" name="prno" placeholder="Enter PR No.">
            
        </div>

        <!-- <label>Delivered By:</label>
        <input type="text" name="delivered_by" required> -->

        <button type="submit">Submit to Stock Transfer</button>
    </form>
</div>

<script>
function addRow() {
    const tbody = document.querySelector('#itemsTable tbody');
    const tr = document.createElement('tr');
    tr.innerHTML = `
        <td><input type="text" name="quantity[]" required></td>
        <td><input type="text" name="unit[]" required></td>
        <td><input type="text" name="description[]" required></td>
        <td><button type="button" class="remove-btn" onclick="removeRow(this)">×</button></td>
    `;
    tbody.appendChild(tr);
}

function removeRow(btn) {
    btn.closest('tr').remove();
}
</script>

</body>
</html>