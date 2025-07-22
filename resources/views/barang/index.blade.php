<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h2>Halaman Barang</h2>
        <nav>
            <ul>
                <li><a href="{{url('/')}}"></a></li>
            </ul>
        </nav>
    </header>
    <section>
        <h3>Data Barang</h3>
        <div class="Barang">
            <table>
                <thead>
                    <tr>
            <th>Kode Suplier</th>
            <th>Nama Suplier</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Jumlah</th>
            <th>Harga Dasar</th>
            <th>Harga Jual</th>
                    </tr>
                     @foreach($barangs as $barang)
        <tr>
            <td>{{ $barang->kode_suplier }}</td>
            <td>{{ $barang->nama_suplier }}</td>
            <td>{{ $barang->kode_barang }}</td>
            <td>{{ $barang->nama_barang }}</td>
            <td>{{ $barang->jumlah_barang }}</td>
            <td>{{ $barang->harga_dasar }}</td>
            <td>{{ $barang->harga_jual }}</td>
        </tr>
        @endforeach
                </thead>
            </table>
        </div>
    </section>
</body>
</html>