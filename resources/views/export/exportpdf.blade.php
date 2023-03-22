<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Country</title>
	<style type="text/css" media="all">
		#emp{
			font-family: Arial, Helvetics, sans-serif;
			border-collapse: collapse;
			width: 100%;
		}

		#emp thead:before, thead:after { display: none; }
		#emp tbody:before, tbody:after { display: none; }
		#emp td,#emp th{
			border: 1px solid #ddd;
			padding: 8px;

		}

		#emp tr:nth-child(even){
			background-color: #91add9;
		}

		#emp th{
			background-color: #1e72fa;
			padding-top: 12px;
			padding-bottom: 12px;
			text-align: left;
			color: #fff ;

		}
		.center{
			text-align: center
		}
	</style>
</head>
<body>
	<div class="row text-center">
		<h2 class="center">DFTQC</h2>
		<u><i><h4 class="center">Country Name</h4></i></u>
	</div>
	<table id="emp" style="table-layout: fixed"> <!-- only added this -->
	    <tr class="font-12">
	        <th style="width: 15%">S.N.</th>
            <th style="width: 20%">Country Name</th>

	    </tr>
	    <tr>
	        <td style="width: 15%">{{ $sn}}</td>
            <td style="width: 15%">{{ $data}}</td>
	    </tr>

	</table>

</body>
</html>
