<html>
	<head>
		<meta charset="utf-8">
		<title>Invoice</title>
		<link rel="shortcut icon" href="logo1.png">
		<link rel="stylesheet" href="index.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="license" href="https://www.opensource.org/licenses/mit-license/">
		<script src="index.js"></script>
		<script src="https://kit.fontawesome.com/ab99e84824.js" crossorigin="anonymous"></script>
	</head>
	<body>
		<header>
			<h1>Invoice</h1>
			<img style="float: right;" alt="logo" width="200px" height="110px" src="image1.png" />
			<p>For any enquiry, reach out via  call on<em style="color: blue;">+91 9140040809</em> or <em style="color: blue;">9410003304</em>.</p>
		</header>
		<article>
			<address >
				<h2>Recipient:</h2><br>
				<p contenteditable>Enter Recipient Details</p>
			</address>
			<table class="meta">
				<tr>
					<th><span >Date</span></th>
					<td><span contenteditable><?php echo date("d"); ?>, <?php echo date("M"); ?> <?php echo date("Y"); ?></span></td>
				</tr>
				<tr>
					<th><span >Amount Due</span></th>
					<td><span id="prefix" contenteditable><i class="fas fa-rupee-sign"></i></span><span>00.00</span></td>
				</tr>
			</table>
			<table class="inventory">
				<thead>
					<tr>
						<th><span >Item</span></th>
						<th><span >Description</span></th>
						<th><span >Rate</span></th>
						<th><span >Quantity</span></th>
						<th><span >Price</span></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><a class="cut">-</a><span contenteditable></span></td>
						<td><span contenteditable></span></td>
						<td><span data-prefix><i class="fas fa-rupee-sign"></i></span><span contenteditable>0.00</span></td>
						<td><span contenteditable>0</span></td>
						<td><span data-prefix><i class="fas fa-rupee-sign"></i></span><span>0.00</span></td>
					</tr>
				</tbody>
			</table>
			<a class="add">+</a>
			<table class="balance">
				<tr>
					<th><span >Total</span></th>
					<td><span data-prefix><i class="fas fa-rupee-sign"></i></span><span>0.00</span></td>
				</tr>
				<tr>
					<th><span >Amount Paid</span></th>
					<td><span data-prefix><i class="fas fa-rupee-sign"></i></span><span contenteditable>0.00</span></td>
				</tr>
				<tr>
					<th><span >Balance Due</span></th>
					<td><span data-prefix><i class="fas fa-rupee-sign"></i></span><span>0.00</span></td>
				</tr>
			</table>
		</article>
		<aside>
			<h1><span >Terms and Conditions</span></h1>
			<div contenteditable>
				<p>Enter Terms And Condition......</p>
			</div>
		</aside>
		<br>
		<br>
		<aside>
			<h1><span >Additional Notes</span></h1>
			<div contenteditable>
				<p>Enter Additional Notes......</p>
			</div>
		</aside>

		<center>
			<a onclick="window.print()" title="Print the Invoice" class="print"><i class="fas fa-print"></i></a>
		</center>
		<style type="text/css">
			div.absolute {
  position: absolute;
  width: 100%;
  bottom: 10px;
}
		</style>
		<div class="absolute">
			<strong>This is an electronically generated document, no signature is required.</strong>
			
		</div>
	</body>
</html>
