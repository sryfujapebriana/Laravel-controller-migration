@extends('templates.index')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>Simple CRUD</title>
	<style>
        h2 {
        background-color:#FFB6C1;
        color:white;
		text-align:center;
		padding: 1em;
        }
		footer, h3 {
        background-color:#FFB6C1;
        color:white;
		text-align:center;
        }
		body{
background: url('sakura2.jpg') no-repeat scroll;
background-size: 100% 100%;
min-height: 700px;
}
    </style>
</head>
<body>
	<h2>HALAMAN UTAMA</h2>
	<nav>
				<ul>
					<li><b>MENU</b></li>
					<li><a href="">Beranda</a></li>
					<li><a href="tambah">Tambah Data</a></li>
					<li><a href="/">Logout</a></li>
				</ul>
			</nav>

	
	<table cellpadding="5" cellspacing="0" border="1" align="center">
      <tr bgcolor="#FFB6C1">
        <th>No.</th>
        <th>NIP</th>
        <th>Nama Lengkap</th>
        <th>Gudang</th>
        <th>Bagian</th>
        <th>Opsi</th>
      </tr>
    </table>
</body>
</html>
@stop