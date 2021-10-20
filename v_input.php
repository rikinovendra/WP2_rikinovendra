<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Penjualan Sepatu</title>
</head>

<style>
	fieldset{
		width: 25%;
		margin: 20px auto;
		border-radius: 5px;
	}

	select{
		width: 100%;
	}

	hr {
		width: 280%;
	}
</style>



<body>
	<?php echo validation_errors(); ?>
	<fieldset>
		<legend>Input Transaksi</legend>

		<center>
		<form method="POST">
			<table>
				<tr>
					<th colspan="3">Nama Pembeli</th>
				<td>:</td>
				<td>
					<input type="text" name="nama" id="nama">
				</td>
				</tr>

				<tr>
					<th colspan="3">Nomor HP</th>
					<td>:</td>
					<td>
						<input type="text" name="nhp" id="nhp">
					</td>
				</tr>

				<tr>
					<th colspan="3">Merk Sepatu</th>
					<td>:</td>
					<td>
						<select name="merk" id="merk">
							<option>-- Pilih --</option>
							<option>Nike</option>
							<option>Adidas</option>
							<option>Kickers</option>
							<option>Eiger</option>
							<option>Buccheri</option>
						</select>
					</td>
				</tr>

				<tr>
					<th colspan="3">Ukuran Sepatu</th>
					<td>:</td>
					<td>
						<select name="merk" id="merk">
							<option>-- Pilih --</option>
							<option>32</option>
							<option>33</option>
							<option>34</option>
							<option>35</option>
							<option>36</option>
							<option>37</option>
							<option>38</option>
							<option>39</option>
							<option>40</option>
							<option>41</option>
							<option>42</option>
							<option>43</option>
							<option>44</option>
						</select>
					</td>
				</tr>

				<tr>
					<td colspan="3" align="center">
						<hr>
						<button type="submit">Simpan</button>
					</td>
				</tr>
			</table>
		</form>
	</fieldset>
	</center>

</body>
</html>